<?php

namespace App\Http\Controllers;

use App\Helper;
use App\Models\User;
use App\Models\Deposits;
use Illuminate\Http\Request;
use App\Models\AdminSettings;
use App\Models\MoneyRequest;
use App\Models\PaymentGateways;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class RequestMoneyController extends Controller
{
    use Traits\Functions;
    
    protected $request;
    protected $settings;

    public function __construct(Request $request, AdminSettings $settings)
    {
        $this->request = $request;
        $this->settings = $settings::first();
    }

    /**
     * Display the request money form
     */
    public function request_money()
    {
        if ($this->settings->disable_wallet == 'on') {
            abort(404);
        }

        // Get user's recent money requests
        $requests = MoneyRequest::where('requester_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $settings = $this->settings;

        return view('new_homepage.request_money', compact('requests', 'settings'));
    }

    /**
     * Create a new money request
     */
    public function request_money_post(Request $request)
    {
        if ($this->settings->disable_wallet == 'on') {
            return response()->json([
                'success' => false,
                'message' => 'Wallet functionality is disabled.'
            ]);
        }

        // Currency Position
        if ($this->settings->currency_position == 'right') {
            $currencyPosition = 2;
        } else {
            $currencyPosition = null;
        }

        $messages = [
            'amount.min' => __('general.amount_minimum' . $currencyPosition, [
                'symbol' => $this->settings->currency_symbol, 
                'code' => $this->settings->currency_code
            ]),
            'amount.max' => __('general.amount_maximum' . $currencyPosition, [
                'symbol' => $this->settings->currency_symbol, 
                'code' => $this->settings->currency_code
            ]),
        ];

        $validator = Validator::make($request->all(), [
            'amount' => 'required|numeric|min:' . $this->settings->min_deposits_amount . '|max:' . $this->settings->max_deposits_amount,
            'description' => 'nullable|string|max:255',
            'expires_at' => 'nullable|date|after:now',
        ], $messages);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray(),
            ]);
        }

        // Create money request
        $moneyRequest = MoneyRequest::create([
            'requester_id' => auth()->id(),
            'amount' => $request->amount,
            'description' => $request->description,
            'expires_at' => $request->expires_at ?? now()->addDays(30),
            'token' => Str::random(32),
            'status' => 'pending'
        ]);

        $shareUrl = url('/pay-request/' . $moneyRequest->token);

        return response()->json([
            'success' => true,
            'message' => 'Money request created successfully!',
            'share_url' => $shareUrl,
            'request_id' => $moneyRequest->id
        ]);
    }

    /**
     * Display payment page for money request
     */
    public function showPaymentPage($token)
    {
        // First check if the money request exists
        $moneyRequest = MoneyRequest::where('token', $token)->first();
        
        if (!$moneyRequest) {
            abort(404, 'Money request not found.');
        }
        
        // Check if the request is expired
        if ($moneyRequest->expires_at < now()) {
            abort(404, 'This money request has expired.');
        }
        
        // Check if the request is not pending
        if ($moneyRequest->status !== 'pending') {
            abort(404, 'This money request is no longer available.');
        }

        $requester = User::findOrFail($moneyRequest->requester_id);
        $settings = $this->settings;
        
        // Get available payment gateways
        $paymentGateways = PaymentGateways::where('enabled', '1')->orderBy('type', 'DESC')->get();

        return view('new_homepage.pay_request', compact('moneyRequest', 'requester', 'settings', 'paymentGateways'));
    }

    /**
     * Process payment for money request
     */
    public function processPayment(Request $request, $token)
    {
        // First check if the money request exists
        $moneyRequest = MoneyRequest::where('token', $token)->first();
        
        if (!$moneyRequest) {
            return response()->json([
                'success' => false,
                'message' => 'Money request not found.'
            ]);
        }
        
        // Check if the request is expired
        if ($moneyRequest->expires_at < now()) {
            return response()->json([
                'success' => false,
                'message' => 'This money request has expired.'
            ]);
        }
        
        // Check if the request is not pending
        if ($moneyRequest->status !== 'pending') {
            return response()->json([
                'success' => false,
                'message' => 'This money request is no longer available.'
            ]);
        }

        // Check if payment gateway exists and is enabled
        $selectedGateway = PaymentGateways::whereName($request->payment_gateway)->whereEnabled(1)->first();
        
        if (!$selectedGateway) {
            $availableGateways = PaymentGateways::whereEnabled(1)->pluck('name')->toArray();
            
            return response()->json([
                'success' => false,
                'message' => 'The selected payment gateway "' . $request->payment_gateway . '" is not available or not enabled.',
                'available_gateways' => $availableGateways,
                'errors' => ['payment_gateway' => ['The selected payment gateway is not available or not enabled.']]
            ]);
        }

        // Validate other fields
        $validator = Validator::make($request->all(), [
            'payment_gateway' => 'required',
            'image' => 'required_if:payment_gateway,==,Bank|mimes:jpg,gif,png,jpe,jpeg|max:' . $this->settings->file_size_allowed_verify_account,
        ], [
            'image.required_if' => __('general.please_select_image'),
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray(),
            ]);
        }

        // Store request data for payment processing
        $this->request = $request;
        $this->request->merge(['amount' => $moneyRequest->amount]);

        // Log the selected payment gateway for debugging
        \Log::info('Money Request Payment Gateway Selected: ' . $request->payment_gateway);

        // Handle wallet payment
        if ($request->payment_gateway === 'Wallet') {
            return $this->processWalletPayment($moneyRequest);
        }

        // Handle other payment gateways
        switch ($request->payment_gateway) {
            case 'PayPal':
                return $this->sendPayPalForRequest($moneyRequest);
                break;

            case 'Stripe':
                return $this->sendStripeForRequest($moneyRequest);
                break;

            case 'Bank':
                return $this->sendBankTransferForRequest($moneyRequest);
                break;

            case 'CCBill':
                return $this->ccbillForm(
                    $moneyRequest->amount,
                    auth()->id() ?? 0,
                    'money_request',
                    null,
                    null,
                    $moneyRequest->id
                );
                break;

            case 'Paystack':
                return $this->sendPaystackForRequest($moneyRequest);
                break;

            case 'Coinpayments':
                return $this->sendCoinpaymentsForRequest($moneyRequest);
                break;

            case 'Mercadopago':
                return $this->sendMercadopagoForRequest($moneyRequest);
                break;

            case 'Flutterwave':
                return $this->sendFlutterwaveForRequest($moneyRequest);
                break;

            case 'Mollie':
                return $this->sendMollieForRequest($moneyRequest);
                break;

            case 'Razorpay':
                return $this->sendRazorpayForRequest($moneyRequest);
                break;

            case 'Coinbase':
                return $this->sendCoinbaseForRequest($moneyRequest);
                break;

            case 'NowPayments':
                return $this->sendNowPaymentsForRequest($moneyRequest);
                break;

            case 'Cardinity':
                return $this->sendCardinityForRequest($moneyRequest);
                break;

            case 'Binance':
                return $this->sendBinanceForRequest($moneyRequest);
                break;

            case 'RapidPay':
                return $this->sendRapidPayForRequest($moneyRequest);
                break;
        }

        // Log the unsupported payment gateway
        \Log::warning('Unsupported payment gateway for money request: ' . $request->payment_gateway);

        return response()->json([
            'success' => false,
            'message' => 'Payment method "' . $request->payment_gateway . '" is not supported for money requests. Please try a different payment method.'
        ]);
    }

    /**
     * Process wallet payment for money request
     */
    protected function processWalletPayment($moneyRequest)
    {
        if (!auth()->check()) {
            return response()->json([
                'success' => false,
                'message' => 'You must be logged in to pay with wallet.'
            ]);
        }

        if (auth()->user()->balance < $moneyRequest->amount) {
            return response()->json([
                'success' => false,
                'message' => 'Insufficient wallet balance.'
            ]);
        }

        // Process wallet payment
        $payer = auth()->user();
        $requester = User::findOrFail($moneyRequest->requester_id);

        // Deduct from payer
        $payer->decrement('balance', $moneyRequest->amount);

        // Add to requester
        $requester->increment('balance', $moneyRequest->amount);

        // Update request status
        $moneyRequest->update([
            'status' => 'completed',
            'payer_id' => $payer->id,
            'paid_at' => now()
        ]);

        // Create deposit record for requester
        Deposits::create([
            'user_id' => $requester->id,
            'txn_id' => 'money_request_' . $moneyRequest->id,
            'amount' => $moneyRequest->amount,
            'payment_gateway' => 'Money Request',
            'status' => 'active',
            'date' => now()
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Payment completed successfully!'
        ]);
    }

    /**
     * Send PayPal payment for money request
     */
    protected function sendPayPalForRequest($moneyRequest)
    {
        // Get Payment Gateway
        $payment = PaymentGateways::whereId(1)->whereName('PayPal')->firstOrFail();

        $urlSuccess = route('pay.request.success', ['token' => $moneyRequest->token]);
        $urlCancel = route('pay.request', ['token' => $moneyRequest->token]);

        $feePayPal = $payment->fee;
        $centsPayPal = $payment->fee_cents;

        $amountFixed = number_format($moneyRequest->amount + ($moneyRequest->amount * $feePayPal / 100) + $centsPayPal, 2, '.', '');

        try {
            // Init PayPal
            $provider = new PayPalClient();
            $token = $provider->getAccessToken();
            $provider->setAccessToken($token);

            $order = $provider->createOrder([
                "intent" => "CAPTURE",
                'application_context' => [
                    'return_url' => $urlSuccess,
                    'cancel_url' => $urlCancel,
                    'shipping_preference' => 'NO_SHIPPING'
                ],
                "purchase_units" => [
                    [
                        "amount" => [
                            "currency_code" => $this->settings->currency_code,
                            "value" => $amountFixed
                        ],
                        "description" => "Money Request Payment - " . $moneyRequest->description
                    ]
                ]
            ]);

            return response()->json([
                'success' => true,
                'url' => $order['links'][1]['href'],
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    /**
     * Send Stripe payment for money request
     */
    protected function sendStripeForRequest($moneyRequest)
    {
        // Get Payment Gateway
        $payment = PaymentGateways::whereName('Stripe')->firstOrFail();

        $feeStripe = $payment->fee;
        $centsStripe = $payment->fee_cents;

        if (in_array($this->settings->currency_code, config('currencies.zero-decimal'))) {
            $amountFixed = round($moneyRequest->amount + ($moneyRequest->amount * $feeStripe / 100) + $centsStripe);
        } else {
            $amountFixed = number_format($moneyRequest->amount + ($moneyRequest->amount * $feeStripe / 100) + $centsStripe, 2, '.', '');
        }

        $amount = in_array($this->settings->currency_code, config('currencies.zero-decimal')) ? $amountFixed : ($amountFixed * 100);

        $currency_code = $this->settings->currency_code;
        $description = 'Money Request Payment - ' . ($moneyRequest->description ?: 'Payment Request');

        $stripe = new \Stripe\StripeClient($payment->key_secret);

        try {
            $checkout = $stripe->checkout->sessions->create([
                'line_items' => [[
                    'price_data' => [
                        'currency' => $currency_code,
                        'product_data' => [
                            'name' => $description,
                        ],
                        'unit_amount' => $amount,
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',

                'metadata' => [
                    'user' => auth()->id() ?? 0,
                    'amount' => $moneyRequest->amount,
                    'type' => 'money_request',
                    'money_request_id' => $moneyRequest->id,
                    'requester_id' => $moneyRequest->requester_id
                ],

                'payment_method_types' => $payment->allow_payments_alipay ? ['card', 'alipay'] : ['card'],
                'customer_email' => auth()->check() ? auth()->user()->email : null,

                'success_url' => route('pay.request.success', ['token' => $moneyRequest->token]),
                'cancel_url' => route('pay.request', ['token' => $moneyRequest->token]),
            ]);

            return response()->json([
                'success' => true,
                'url' => $checkout->url,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    /**
     * Handle other payment gateways for money requests
     * These methods are adapted from AddFundsController for money requests
     */
    protected function sendBankTransferForRequest($moneyRequest)
    {
        // Get Payment Gateway
        $payment = PaymentGateways::whereName('Bank')->firstOrFail();

        $fee = $payment->fee;
        $cents = $payment->fee_cents;

        $amountFixed = number_format($moneyRequest->amount + ($moneyRequest->amount * $fee / 100) + $cents, 2, '.', '');

        // Create pending deposit record
        $deposit = Deposits::create([
            'user_id' => $moneyRequest->requester_id,
            'txn_id' => 'bank_money_request_' . $moneyRequest->id,
            'amount' => $moneyRequest->amount,
            'payment_gateway' => 'Bank Transfer',
            'status' => 'pending',
            'date' => now()
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Bank transfer initiated. Please upload your payment proof.',
            'bank_transfer' => true
        ]);
    }

    protected function sendPaystackForRequest($moneyRequest)
    {
        $payment = PaymentGateways::whereName('Paystack')->whereEnabled(1)->firstOrFail();

        $fee = $payment->fee;
        $cents = $payment->fee_cents;

        $amount = number_format($moneyRequest->amount + ($moneyRequest->amount * $fee / 100) + $cents, 2, '.', '');

        return response()->json([
            'success' => true,
            'insertBody' => "<script type='text/javascript'>var handler = PaystackPop.setup({
                key: '" . $payment->key . "',
                email: '" . (auth()->check() ? auth()->user()->email : 'guest@example.com') . "',
                amount: " . ($amount * 100) . ",
                currency: '" . $this->settings->currency_code . "',
                ref: '" . \App\Helper::genTranxRef() . "',
                callback: function(response) {
                    // Handle successful payment
                    window.location.href = '" . route('pay.request.success', ['token' => $moneyRequest->token]) . "?reference=' + response.reference;
                },
                onClose: function() {
                    console.log('Payment window closed');
                }
            });
            handler.openIframe();</script>"
        ]);
    }

    protected function sendCoinpaymentsForRequest($moneyRequest)
    {
        // Get Payment Gateway
        $payment = PaymentGateways::whereName('Coinpayments')->firstOrFail();

        $urlSuccess = route('pay.request.success', ['token' => $moneyRequest->token]);
        $urlCancel = route('pay.request', ['token' => $moneyRequest->token]);

        $fee = $payment->fee;
        $cents = $payment->fee_cents;

        $amountFixed = number_format($moneyRequest->amount + ($moneyRequest->amount * $fee / 100) + $cents, 2, '.', '');

        return response()->json([
            'success' => true,
            'insertBody' => '<form name="_click" action="https://www.coinpayments.net/index.php" method="post" style="display:none">
                        <input type="hidden" name="cmd" value="_pay">
                        <input type="hidden" name="reset" value="1"/>
                        <input type="hidden" name="merchant" value="' . $payment->key . '">
                        <input type="hidden" name="success_url" value="' . $urlSuccess . '">
                        <input type="hidden" name="cancel_url" value="' . $urlCancel . '">
                        <input type="hidden" name="currency" value="' . $this->settings->currency_code . '">
                        <input type="hidden" name="amountf" value="' . $amountFixed . '">
                        <input type="hidden" name="want_shipping" value="0">
                        <input type="hidden" name="item_name" value="Money Request Payment">
                        <input type="hidden" name="custom" value="money_request_' . $moneyRequest->id . '">
                        </form>
                        <script>document._click.submit();</script>'
        ]);
    }

    protected function sendMercadopagoForRequest($moneyRequest)
    {
        try {
            // Get Payment Gateway
            $payment = PaymentGateways::whereName('Mercadopago')->firstOrFail();

            $fee = $payment->fee;
            $cents = $payment->fee_cents;

            $amountFixed = number_format($moneyRequest->amount + ($moneyRequest->amount * $fee / 100) + $cents, 2, '.', '');

            // Mercadopago secret key
            \MercadoPago\SDK::setAccessToken($payment->key_secret);

            // Create a preference object
            $preference = new \MercadoPago\Preference();

            // Preference item
            $item = new \MercadoPago\Item();
            $item->title = 'Money Request Payment';
            $item->quantity = 1;
            $item->unit_price = $amountFixed;
            $item->currency_id = $this->settings->currency_code;

            // Item to preference
            $preference->items = [$item];

            // Auto-return
            $preference->auto_return = 'approved';

            // Return url
            $preference->back_urls = [
                'success' => route('pay.request.success', ['token' => $moneyRequest->token])
            ];

            // External reference
            $preference->external_reference = 'money_request_' . $moneyRequest->id;

            $preference->payment_methods = array(
                "excluded_payment_types" => array(
                    array("id" => "cash")
                ),
                "installments" => 1
            );

            $preference->save();

            // Redirect to payment
            $redirectUrl = $payment->sandbox == 'true' ? $preference->sandbox_init_point : $preference->init_point;

            return response()->json([
                'success' => true,
                'url' => $redirectUrl
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    protected function sendFlutterwaveForRequest($moneyRequest)
    {
        try {
            // Get Payment Gateway
            $payment = PaymentGateways::whereName('Flutterwave')->firstOrFail();

            $fee = $payment->fee;

            $amountFixed = number_format($moneyRequest->amount + ($moneyRequest->amount * $fee / 100), 2, '.', '');

            //This generates a payment reference
            $reference = \App\Library\Flutterwave::generateReference();

            // Enter the details of the payment
            $data = [
                'payment_options' => 'card,banktransfer,mobilemoneyghana,mpesa',
                'amount' => $amountFixed,
                'tx_ref' => $reference,
                'currency' => $this->settings->currency_code,
                'redirect_url' => route('pay.request.success', ['token' => $moneyRequest->token]),
                'customer' => [
                    'email' => auth()->check() ? auth()->user()->email : 'guest@example.com',
                    "name" => auth()->check() ? auth()->user()->name : 'Guest'
                ],

                "meta" => [
                    "money_request_id" => $moneyRequest->id,
                    "amount" => $moneyRequest->amount,
                    "requester_id" => $moneyRequest->requester_id
                ],

                "customizations" => [
                    "title" => 'Money Request Payment'
                ]
            ];

            $paymentResponse = \App\Library\Flutterwave::initializePayment($data);

            if ($paymentResponse['status'] !== 'success') {
                return response()->json([
                    'success' => false,
                    'message' => 'Payment initialization failed.'
                ]);
            }

            return response()->json([
                'success' => true,
                'url' => $paymentResponse['data']['link']
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    protected function sendMollieForRequest($moneyRequest)
    {
        try {
            // Get Payment Gateway
            $paymentGateway = PaymentGateways::whereName('Mollie')->firstOrFail();

            $mollie = new \Mollie\Api\MollieApiClient();
            $mollie->setApiKey($paymentGateway->key);

            $fee = $paymentGateway->fee;
            $cents = $paymentGateway->fee_cents;

            $amount = number_format($moneyRequest->amount + ($moneyRequest->amount * $fee / 100) + $cents, 2, '.', '');

            $payment = $mollie->payments->create([
                'amount' => [
                    'currency' => $this->settings->currency_code,
                    'value' => $amount,
                ],
                'description' => 'Money Request Payment',
                'redirectUrl' => route('pay.request.success', ['token' => $moneyRequest->token]),
                "metadata" => array(
                    'money_request_id' => $moneyRequest->id,
                    'amount' => $moneyRequest->amount,
                    'requester_id' => $moneyRequest->requester_id
                )
            ]);

            return response()->json([
                'success' => true,
                'url' => $payment->getCheckoutUrl(),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    protected function sendRazorpayForRequest($moneyRequest)
    {
        // Get Payment Gateway
        $paymentGateway = PaymentGateways::whereName('Razorpay')->firstOrFail();

        $fee = $paymentGateway->fee;
        $cents = $paymentGateway->fee_cents;

        $amountFixed = number_format($moneyRequest->amount + ($moneyRequest->amount * $fee / 100) + $cents, 2, '.', '');
        $amount = ($amountFixed * 100);

        return response()->json([
            'success' => true,
            'insertBody' => "<script type='text/javascript'>var options = {
                'key': '" . $paymentGateway->key . "',
                'amount': " . $amount . ",
                'name': '" . $this->settings->title . "',
                'description': 'Money Request Payment',
                'handler': function (response){
                    window.location.href = '" . route('pay.request.success', ['token' => $moneyRequest->token]) . "?payment_id=' + response.razorpay_payment_id;
                },
                'prefill': {
                   'name': '" . (auth()->check() ? auth()->user()->username : 'Guest') . "',
                   'email': '" . (auth()->check() ? auth()->user()->email : 'guest@example.com') . "',
                },
                'theme': {
                    'color': '#00A65A'
                }
                };
                var rzp1 = new Razorpay(options);
                rzp1.open();
                </script>"
        ]);
    }

    protected function sendCoinbaseForRequest($moneyRequest)
    {
        try {
            $httpClient = new \GuzzleHttp\Client();

            // Get Payment Gateway
            $payment = PaymentGateways::whereName('Coinbase')->firstOrFail();

            $fee = $payment->fee;
            $cents = $payment->fee_cents;

            $amountFixed = number_format($moneyRequest->amount + ($moneyRequest->amount * $fee / 100) + $cents, 2, '.', '');

            $checkout = $httpClient->request(
                'POST',
                'https://api.commerce.coinbase.com/charges',
                [
                    'headers' => [
                        'Content-Type' => 'application/json',
                        'X-CC-Api-Key' => $payment->key,
                        'X-CC-Version' => '2018-03-22',
                    ],
                    'body' => json_encode([
                        'name' => 'Money Request Payment',
                        'description' => 'Money Request Payment',
                        'local_price' => [
                            'amount' => $amountFixed,
                            'currency' => $this->settings->currency_code,
                        ],
                        'pricing_type' => 'fixed_price',
                        'metadata' => [
                            'money_request_id' => $moneyRequest->id,
                            'amount' => $moneyRequest->amount,
                            'requester_id' => $moneyRequest->requester_id,
                            'type' => 'money_request'
                        ],
                        'redirect_url' => route('pay.request.success', ['token' => $moneyRequest->token]),
                        'cancel_url' => route('pay.request', ['token' => $moneyRequest->token]),
                    ])
                ]
            );

            $coinbase = json_decode($checkout->getBody()->getContents());

            return response()->json([
                'success' => true,
                'url' => $coinbase->data->hosted_url,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    protected function sendNowPaymentsForRequest($moneyRequest)
    {
        try {
            // Get Payment Gateway
            $payment = PaymentGateways::whereName('NowPayments')->firstOrFail();
            $fee = $payment->fee;
            $cents = $payment->fee_cents;
            $amount = number_format($moneyRequest->amount + ($moneyRequest->amount * $fee / 100) + $cents, 2, '.', '');
            $orderId = 'MR-' . \App\Helper::getHashedToken(15);

            $client = new \GuzzleHttp\Client();

            $request = $client->request('POST', 'https://api.nowpayments.io/v1/invoice', [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'x-api-key' => $payment->key,
                ],
                'body' => json_encode([
                    'price_amount' => $amount,
                    'price_currency' => $this->settings->currency_code,
                    'order_description' => 'Money Request Payment',
                    'order_id' => $orderId,
                    'success_url' => route('pay.request.success', ['token' => $moneyRequest->token]),
                    'cancel_url' => route('pay.request', ['token' => $moneyRequest->token])
                ])
            ]);

            $response = json_decode($request->getBody(), true);

            if (isset($response['invoice_url'])) {
                return response()->json([
                    'success' => true,
                    'url' => $response['invoice_url']
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Payment initialization failed.'
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    protected function sendCardinityForRequest($moneyRequest)
    {
        try {
            // Get Payment Gateway
            $payment = PaymentGateways::whereName('Cardinity')->firstOrFail();

            $fee = $payment->fee;
            $cents = $payment->fee_cents;

            $amountFixed = number_format($moneyRequest->amount + ($moneyRequest->amount * $fee / 100) + $cents, 2, '.', '');

            $data = base64_encode(http_build_query([
                'money_request_id' => $moneyRequest->id,
                'amount' => $moneyRequest->amount,
                'requester_id' => $moneyRequest->requester_id,
                'type' => 'money_request'
            ]));

            $cancel_url = route('pay.request', ['token' => $moneyRequest->token]);
            $country = auth()->check() ? auth()->user()->getCountry() : 'US';
            $language = strtoupper(config('app.locale'));
            $currency = $this->settings->currency_code;
            $description = 'Money Request Payment';
            $order_id = 'MR-' . random_int(100, 9999);
            $return_url = route('pay.request.success', ['token' => $moneyRequest->token, 'data' => $data]);

            $project_id = $payment->project_id;
            $project_secret = $payment->project_secret;

            $attributes = [
                "amount" => $amountFixed,
                "currency" => $currency,
                "country" => $country,
                "language" => $language,
                "order_id" => $order_id,
                "description" => $description,
                "project_id" => $project_id,
                "cancel_url" => $cancel_url,
                "return_url" => $return_url,
            ];

            ksort($attributes);

            $message = '';
            foreach ($attributes as $key => $value) {
                $message .= $key . $value;
            }

            $signature = hash_hmac('sha256', $message, $project_secret);

            return response()->json([
                'success' => true,
                'insertBody' => '<form id="cardinity_form" action="https://checkout.cardinity.com/v1/payment" method="POST" style="display:none">
                    <input type="hidden" name="amount" value="' . $amountFixed . '">
                    <input type="hidden" name="currency" value="' . $currency . '">
                    <input type="hidden" name="country" value="' . $country . '">
                    <input type="hidden" name="language" value="' . $language . '">
                    <input type="hidden" name="order_id" value="' . $order_id . '">
                    <input type="hidden" name="description" value="' . $description . '">
                    <input type="hidden" name="project_id" value="' . $project_id . '">
                    <input type="hidden" name="cancel_url" value="' . $cancel_url . '">
                    <input type="hidden" name="return_url" value="' . $return_url . '">
                    <input type="hidden" name="signature" value="' . $signature . '">
                </form>
                <script>document.getElementById("cardinity_form").submit();</script>'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    protected function sendBinanceForRequest($moneyRequest)
    {
        try {
            $payment = PaymentGateways::whereName('Binance')->firstOrFail();

            $fee = $payment->fee;
            $cents = $payment->fee_cents;
            $amountFixed = number_format($moneyRequest->amount + ($moneyRequest->amount * $fee / 100) + $cents, 2, '.', '');

            $data = base64_encode(http_build_query([
                'money_request_id' => $moneyRequest->id,
                'amount' => $moneyRequest->amount,
                'requester_id' => $moneyRequest->requester_id,
                'type' => 'money_request'
            ]));

            // Generate nonce string
            $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $nonce = '';
            for ($i = 1; $i <= 32; $i++) {
                $pos = mt_rand(0, strlen($chars) - 1);
                $char = $chars[$pos];
                $nonce .= $char;
            }

            $timestamp = round(microtime(true) * 1000);

            // Request body
            $request = [
                "env" => [
                    "terminalType" => "APP"
                ],
                "merchantTradeNo" => mt_rand(982538, 9825382937292),
                "orderAmount" => $amountFixed,
                "currency" => $payment->crypto_currency,
                "goods" => [
                    "goodsType" => "02",
                    "goodsCategory" => "Z000",
                    "referenceGoodsId" => str_random(15),
                    "goodsName" => 'Money Request Payment'
                ],
                'returnUrl' => route('pay.request.success', ['token' => $moneyRequest->token]),
                'cancelUrl' => route('pay.request', ['token' => $moneyRequest->token])
            ];

            $json_request = json_encode($request);
            $payload = $timestamp . "\n" . $nonce . "\n" . $json_request . "\n";
            $binance_pay_key = $payment->key;
            $binance_pay_secret = $payment->key_secret;
            $signature = strtoupper(hash_hmac('SHA512', $payload, $binance_pay_secret));

            $headers = [
                "Content-Type: application/json",
                "BinancePay-Timestamp: $timestamp",
                "BinancePay-Nonce: $nonce",
                "BinancePay-Certificate-SN: $binance_pay_key",
                "BinancePay-Signature: $signature"
            ];

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_URL, "https://bpay.binanceapi.com/binancepay/openapi/v2/order");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json_request);
            $result = curl_exec($ch);
            curl_close($ch);

            $response = json_decode($result, true);

            if (isset($response['data']['checkoutUrl'])) {
                return response()->json([
                    'success' => true,
                    'url' => $response['data']['checkoutUrl']
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Payment initialization failed.'
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    protected function sendRapidPayForRequest($moneyRequest)
    {
        try {
            // Get Payment Gateway
            $payment = PaymentGateways::whereName('RapidPay')->firstOrFail();
            
            $fee = $payment->fee;
            $cents = $payment->fee_cents;
            $amountFixed = number_format($moneyRequest->amount + ($moneyRequest->amount * $fee / 100) + $cents, 2, '.', '');

            // Check if RapidPay is properly configured
            if (empty($payment->key) || empty($payment->key_secret)) {
                \Log::error('RapidPay not properly configured - missing API credentials');
                return response()->json([
                    'success' => false,
                    'message' => 'RapidPay payment gateway is not properly configured. Please contact support.'
                ]);
            }

            // For now, since we don't have the actual RapidPay API documentation,
            // let's create a form-based payment similar to other gateways
            $transactionId = 'MR-' . $moneyRequest->id . '-' . time();
            
            // Generate a secure hash for the transaction
            $secureHash = hash_hmac('sha256', 
                $transactionId . $amountFixed . $moneyRequest->id . $payment->key_secret, 
                $payment->key
            );

            // For demo purposes, show a success message since we don't have real RapidPay API
            // In production, you would replace this with actual RapidPay form submission
            if ($payment->sandbox == 'true') {
                // Demo mode - simulate successful payment
                $formHtml = '<div style="text-align: center; padding: 20px; background: #f8f9fa; border-radius: 8px; margin: 20px 0;">
                    <h3 style="color: #28a745; margin-bottom: 15px;">
                        <i class="fas fa-check-circle"></i> RapidPay Demo Mode
                    </h3>
                    <p style="margin-bottom: 15px;">This is a demonstration of RapidPay integration.</p>
                    <p style="margin-bottom: 20px;">
                        <strong>Transaction ID:</strong> ' . $transactionId . '<br>
                        <strong>Amount:</strong> ' . $this->settings->currency_symbol . $amountFixed . '<br>
                        <strong>Merchant ID:</strong> ' . $payment->key_secret . '
                    </p>
                    <button onclick="simulatePayment()" class="btn btn-success" style="background: #28a745; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
                        <i class="fas fa-credit-card"></i> Simulate Payment
                    </button>
                </div>
                <script>
                function simulatePayment() {
                    // Simulate payment processing
                    const btn = event.target;
                    btn.innerHTML = "<i class=\"fas fa-spinner fa-spin\"></i> Processing...";
                    btn.disabled = true;
                    
                    setTimeout(() => {
                        alert("Demo payment completed successfully!\\n\\nIn production, this would redirect to RapidPay payment page.");
                        window.location.href = "' . route('pay.request.success', ['token' => $moneyRequest->token]) . '";
                    }, 2000);
                }
                </script>';
            } else {
                // Production mode - actual form submission
                $formHtml = '<form id="rapidpay_form" action="' . ($payment->sandbox == 'true' ? 'https://sandbox.rapidpay.com/payment' : 'https://rapidpay.com/payment') . '" method="POST" style="display:none">
                    <input type="hidden" name="merchant_id" value="' . htmlspecialchars($payment->key_secret) . '">
                    <input type="hidden" name="transaction_id" value="' . htmlspecialchars($transactionId) . '">
                    <input type="hidden" name="amount" value="' . htmlspecialchars($amountFixed) . '">
                    <input type="hidden" name="currency" value="' . htmlspecialchars($this->settings->currency_code) . '">
                    <input type="hidden" name="description" value="Money Request Payment">
                    <input type="hidden" name="return_url" value="' . route('pay.request.success', ['token' => $moneyRequest->token]) . '">
                    <input type="hidden" name="cancel_url" value="' . route('pay.request', ['token' => $moneyRequest->token]) . '">
                    <input type="hidden" name="callback_url" value="' . url('/webhook/rapidpay') . '">
                    <input type="hidden" name="customer_email" value="' . htmlspecialchars(auth()->check() ? auth()->user()->email : 'guest@example.com') . '">
                    <input type="hidden" name="hash" value="' . $secureHash . '">
                    <input type="hidden" name="money_request_id" value="' . $moneyRequest->id . '">
                </form>
                <script>
                    document.getElementById("rapidpay_form").submit();
                </script>';
            }

            return response()->json([
                'success' => true,
                'insertBody' => $formHtml
            ]);

        } catch (\Exception $e) {
            \Log::error('RapidPay Error: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while processing your payment. Please contact support.'
            ]);
        }
    }

    /**
     * Generate signature for RapidPay API security
     */
    private function generateRapidPaySignature($data, $apiKey)
    {
        // Create signature string by concatenating key fields
        $signatureString = $data['merchant_id'] . 
                          $data['transaction_id'] . 
                          $data['amount'] . 
                          $data['currency'] . 
                          $apiKey;
        
        // Generate HMAC SHA256 signature
        return hash_hmac('sha256', $signatureString, $apiKey);
    }

    /**
     * Handle payment success callback
     */
    public function paymentSuccess(Request $request, $token)
    {
        $moneyRequest = MoneyRequest::where('token', $token)->firstOrFail();

        // Handle PayPal success
        if ($request->has('token') && $request->has('PayerID')) {
            try {
                $provider = new PayPalClient();
                $accessToken = $provider->getAccessToken();
                $provider->setAccessToken($accessToken);

                $order = $provider->capturePaymentOrder($request->token);

                if ($order['status'] === 'COMPLETED') {
                    // Update request status
                    $moneyRequest->update([
                        'status' => 'completed',
                        'payer_id' => auth()->id(),
                        'paid_at' => now()
                    ]);

                    // Add funds to requester
                    $requester = User::findOrFail($moneyRequest->requester_id);
                    $requester->increment('balance', $moneyRequest->amount);

                    // Create deposit record
                    Deposits::create([
                        'user_id' => $requester->id,
                        'txn_id' => $order['id'],
                        'amount' => $moneyRequest->amount,
                        'payment_gateway' => 'PayPal',
                        'status' => 'active',
                        'date' => now()
                    ]);

                    session()->flash('success_message', 'Payment completed successfully!');
                } else {
                    session()->flash('error_message', 'Payment failed. Please try again.');
                }
            } catch (\Exception $e) {
                session()->flash('error_message', 'Payment processing error: ' . $e->getMessage());
            }
        }

        return redirect()->route('pay.request', ['token' => $token]);
    }

    /**
     * Handle RapidPay webhook notifications
     */
    public function webhookRapidPay(Request $request)
    {
        try {
            \Log::info('RapidPay Webhook received: ', $request->all());

            // Get payment gateway settings
            $payment = PaymentGateways::whereName('RapidPay')->firstOrFail();

            // Verify webhook signature for security
            $receivedSignature = $request->header('X-RapidPay-Signature') ?? $request->input('signature');
            $expectedSignature = $this->verifyRapidPayWebhook($request->all(), $payment->key);

            if (!hash_equals($expectedSignature, $receivedSignature)) {
                \Log::warning('RapidPay webhook signature verification failed');
                return response('Unauthorized', 401);
            }

            $transactionId = $request->input('transaction_id');
            $status = $request->input('status');
            $amount = $request->input('amount');
            $metadata = json_decode($request->input('metadata'), true);

            // Extract money request ID from transaction ID or metadata
            $moneyRequestId = $metadata['money_request_id'] ?? null;
            
            if (!$moneyRequestId) {
                // Try to extract from transaction ID format: MR-{id}-{timestamp}
                if (preg_match('/^MR-(\d+)-\d+$/', $transactionId, $matches)) {
                    $moneyRequestId = $matches[1];
                }
            }

            if (!$moneyRequestId) {
                \Log::error('RapidPay webhook: Could not extract money request ID');
                return response('Invalid transaction', 400);
            }

            // Find the money request
            $moneyRequest = MoneyRequest::find($moneyRequestId);
            if (!$moneyRequest) {
                \Log::error('RapidPay webhook: Money request not found: ' . $moneyRequestId);
                return response('Transaction not found', 404);
            }

            // Process based on payment status
            if ($status === 'completed' || $status === 'success') {
                // Check if already processed
                if ($moneyRequest->status === 'completed') {
                    return response('OK', 200);
                }

                // Update money request status
                $moneyRequest->update([
                    'status' => 'completed',
                    'payer_id' => $metadata['payer_id'] ?? null,
                    'paid_at' => now()
                ]);

                // Add funds to requester
                $requester = User::findOrFail($moneyRequest->requester_id);
                $requester->increment('balance', $moneyRequest->amount);

                // Create deposit record
                Deposits::create([
                    'user_id' => $requester->id,
                    'txn_id' => $transactionId,
                    'amount' => $moneyRequest->amount,
                    'payment_gateway' => 'RapidPay',
                    'status' => 'active',
                    'date' => now()
                ]);

                \Log::info('RapidPay payment completed for money request: ' . $moneyRequestId);

            } elseif ($status === 'failed' || $status === 'cancelled') {
                // Update money request status to failed
                $moneyRequest->update([
                    'status' => 'failed'
                ]);

                \Log::info('RapidPay payment failed for money request: ' . $moneyRequestId);
            }

            return response('OK', 200);

        } catch (\Exception $e) {
            \Log::error('RapidPay webhook error: ' . $e->getMessage());
            return response('Internal Server Error', 500);
        }
    }

    /**
     * Verify RapidPay webhook signature
     */
    private function verifyRapidPayWebhook($data, $apiKey)
    {
        // Create signature string (adjust based on RapidPay's webhook signature method)
        $signatureString = $data['transaction_id'] . 
                          $data['status'] . 
                          $data['amount'] . 
                          $apiKey;
        
        return hash_hmac('sha256', $signatureString, $apiKey);
    }
}
