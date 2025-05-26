@extends('layouts.app')

@section('title') Pay Request -@endsection

@section('content')
<style>
    .payment-container {
        background: linear-gradient(135deg, #fff 0%, #fff 100%);
        min-height: 100vh;
        padding: 120px 0 60px 0;
    }

    .payment-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border-radius: 24px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .payment-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.15);
    }

    .payment-header {
        background: linear-gradient(135deg, #ffb200, #ff8c00);
        color: white;
        padding: 30px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .payment-header::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: conic-gradient(from 0deg, transparent, rgba(255, 255, 255, 0.1), transparent);
        animation: rotate 4s linear infinite;
    }

    .payment-header h2 {
        font-size: 2.2rem;
        font-weight: 700;
        margin: 0;
        position: relative;
        z-index: 2;
    }

    .payment-header p {
        font-size: 1rem;
        margin: 10px 0 0;
        opacity: 0.9;
        position: relative;
        z-index: 2;
    }

    .requester-info {
        background: #f8f9fa;
        padding: 25px;
        border-bottom: 1px solid #e9ecef;
    }

    .requester-avatar {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #ffb200;
    }

    .amount-display {
        background: linear-gradient(135deg, #28a745, #20c997);
        color: white;
        padding: 20px;
        border-radius: 15px;
        text-align: center;
        margin: 20px 0;
    }

    .amount-value {
        font-size: 2.5rem;
        font-weight: 700;
        margin: 0;
    }

    .payment-methods {
        padding: 30px;
    }

    .payment-method {
        border: 2px solid #e1e5e9;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 15px;
        cursor: pointer;
        transition: all 0.3s ease;
        background: #f8f9fa;
    }

    .payment-method:hover {
        border-color: #ffb200;
        background: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(255, 178, 0, 0.1);
    }

    .payment-method.selected {
        border-color: #ffb200;
        background: rgba(255, 178, 0, 0.05);
    }

    .payment-method input[type="radio"] {
        margin-right: 15px;
        transform: scale(1.2);
    }

    .payment-method-label {
        display: flex;
        align-items: center;
        cursor: pointer;
        margin: 0;
    }

    .payment-method-info {
        flex: 1;
    }

    .payment-method-name {
        font-weight: 600;
        font-size: 16px;
        margin-bottom: 5px;
    }

    .payment-method-fee {
        font-size: 12px;
        color: #6c757d;
    }

    .wallet-balance {
        background: #e3f2fd;
        border: 1px solid #2196f3;
        border-radius: 8px;
        padding: 15px;
        margin-top: 10px;
        display: none;
    }

    .wallet-balance.show {
        display: block;
    }

    .bank-transfer-info {
        background: #fff3cd;
        border: 1px solid #ffc107;
        border-radius: 8px;
        padding: 15px;
        margin-top: 10px;
        display: none;
    }

    .bank-transfer-info.show {
        display: block;
    }

    .btn-pay {
        background: linear-gradient(135deg, #28a745, #20c997);
        color: white;
        border: none;
        padding: 18px 40px;
        border-radius: 12px;
        font-size: 18px;
        font-weight: 600;
        width: 100%;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .btn-pay::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s;
    }

    .btn-pay:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(40, 167, 69, 0.4);
    }

    .btn-pay:hover::before {
        left: 100%;
    }

    .btn-pay:disabled {
        opacity: 0.6;
        cursor: not-allowed;
        transform: none;
    }

    .security-info {
        background: #d4edda;
        border: 1px solid #c3e6cb;
        border-radius: 8px;
        padding: 15px;
        margin-top: 20px;
        text-align: center;
    }

    .expired-message {
        background: #f8d7da;
        border: 1px solid #f5c6cb;
        border-radius: 12px;
        padding: 30px;
        text-align: center;
        color: #721c24;
    }

    .loading-spinner {
        display: none;
        width: 20px;
        height: 20px;
        border: 2px solid #ffffff;
        border-top: 2px solid transparent;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        margin-right: 10px;
    }

    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .alert {
        border-radius: 12px;
        padding: 15px 20px;
        margin-bottom: 20px;
        border: none;
    }

    .alert-success {
        background: #d4edda;
        color: #155724;
    }

    .alert-danger {
        background: #f8d7da;
        color: #721c24;
    }

    @media (max-width: 768px) {
        .payment-container {
            padding: 30px 0;
        }

        .payment-header h2 {
            font-size: 1.8rem;
        }

        .payment-methods {
            padding: 20px;
        }

        .amount-value {
            font-size: 2rem;
        }
    }
</style>

<div class="payment-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                @if($moneyRequest->isExpired() || $moneyRequest->status !== 'pending')
                <div class="payment-card">
                    <div class="expired-message">
                        <h3><i class="fas fa-exclamation-triangle mr-3"></i>Request Expired</h3>
                        <p>This payment request has expired or is no longer available.</p>
                        <small>Request created: {{ $moneyRequest->created_at->format('M d, Y H:i') }}</small>
                    </div>
                </div>
                @else
                <div class="payment-card">
                    <div class="payment-header">
                        <h2><i class="fas fa-credit-card mr-3"></i>Payment Request</h2>
                        <p>Complete your payment securely</p>
                    </div>

                    <!-- Requester Information -->
                    <div class="requester-info">
                        <div class="d-flex align-items-center">
                            <img src="{{ Helper::getFile(config('path.avatar').$requester->avatar) }}" 
                                 alt="{{ $requester->name }}" 
                                 class="requester-avatar mr-3">
                            <div>
                                <h5 class="mb-1">{{ $requester->name }}</h5>
                                <p class="mb-0 text-muted">@if($requester->verified_id == 'yes')<i class="fas fa-check-circle text-success mr-1"></i>@endif{{ '@'.$requester->username }}</p>
                            </div>
                        </div>
                        
                        @if($moneyRequest->description)
                        <div class="mt-3">
                            <strong>Description:</strong> {{ $moneyRequest->description }}
                        </div>
                        @endif
                    </div>

                    <!-- Amount Display -->
                    <div class="amount-display">
                        <h3 class="amount-value">{{ Helper::priceWithoutFormat($moneyRequest->amount) }}</h3>
                        <p class="mb-0">Amount to Pay</p>
                    </div>

                    <!-- Payment Methods -->
                    <div class="payment-methods">
                        @if (session('success_message'))
                        <div class="alert alert-success">
                            {{ session('success_message') }}
                        </div>
                        @endif

                        @if (session('error_message'))
                        <div class="alert alert-danger">
                            {{ session('error_message') }}
                        </div>
                        @endif

                        <form id="paymentForm" method="POST" action="{{ route('pay.request.process', $moneyRequest->token) }}">
                            @csrf

                            <!-- Wallet Payment (if user is logged in) -->
                            @auth
                            <div class="payment-method" onclick="selectPaymentMethod('Wallet')">
                                <label class="payment-method-label">
                                    <input type="radio" name="payment_gateway" value="Wallet" id="wallet_payment">
                                    <div class="payment-method-info">
                                        <div class="payment-method-name">
                                            <i class="fas fa-wallet mr-2"></i>Wallet Balance
                                        </div>
                                        <div class="payment-method-fee">No additional fees</div>
                                    </div>
                                </label>
                            </div>
                            
                            <div class="wallet-balance" id="walletBalance">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>Your Balance:</span>
                                    <strong>{{ Helper::userWallet() }}</strong>
                                </div>
                                @if(auth()->user()->balance < $moneyRequest->amount)
                                <div class="text-danger mt-2">
                                    <i class="fas fa-exclamation-triangle mr-1"></i>
                                    Insufficient balance. Please add funds to your wallet first.
                                </div>
                                @endif
                            </div>
                            @endauth

                            <!-- Other Payment Gateways -->
                            @foreach($paymentGateways as $payment)
                            @php
                            if ($payment->type == 'card' ) {
                                $paymentName = '<i class="far fa-credit-card mr-2"></i> '. __('general.debit_credit_card') .' ('.$payment->name.')';
                            } elseif ($payment->type == 'bank') {
                                $paymentName = '<i class="fa fa-university mr-2"></i> '.__('general.bank_transfer');
                            } else if ($payment->name == 'PayPal') {
                                $paymentName = '<img src="'.url('public/img/payments', auth()->check() && auth()->user()->dark_mode == 'off' ? $payment->logo : 'paypal-white.png').'" width="70"/>';
                            } else if ($payment->name == 'Coinpayments') {
                                $paymentName = '<img src="'.url('public/img/payments', auth()->check() && auth()->user()->dark_mode == 'off' ? $payment->logo : 'coinpayments-white.png').'" width="150"/>';
                            } else if ($payment->name == 'Coinbase') {
                                $paymentName = '<img src="'.url('public/img/payments', auth()->check() && auth()->user()->dark_mode == 'off' ? $payment->logo : 'coinbase-white.png').'" width="110"/>';
                            } else if ($payment->name == 'NowPayments') {
                                $paymentName = '<img src="'.url('public/img/payments', auth()->check() && auth()->user()->dark_mode == 'off' ? $payment->logo : 'nowpayments-white.png').'" width="130"/>';
                            } else if ($payment->name == 'Mercadopago') {
                                $paymentName = '<img src="'.url('public/img/payments', auth()->check() && auth()->user()->dark_mode == 'off' ? $payment->logo : 'mercadopago-white.png').'" width="100"/>';
                            } else if ($payment->name == 'Flutterwave') {
                                $paymentName = '<img src="'.url('public/img/payments', auth()->check() && auth()->user()->dark_mode == 'off' ? $payment->logo : 'flutterwave-white.png').'" width="150"/>';
                            } else if ($payment->name == 'Mollie') {
                                $paymentName = '<img src="'.url('public/img/payments', auth()->check() && auth()->user()->dark_mode == 'off' ? $payment->logo : 'mollie-white.png').'" width="80"/>';
                            } else if ($payment->name == 'Razorpay') {
                                $paymentName = '<img src="'.url('public/img/payments', auth()->check() && auth()->user()->dark_mode == 'off' ? $payment->logo : 'razorpay-white.png').'" width="110"/>';
                            } else {
                                $paymentName = '<img src="'.url('public/img/payments', $payment->logo).'" width="100"/>';
                            }
                            @endphp

                            <div class="payment-method" onclick="selectPaymentMethod('{{ $payment->name }}')">
                                <label class="payment-method-label">
                                    <input type="radio" name="payment_gateway" value="{{ $payment->name }}" id="payment_{{ $payment->name }}">
                                    <div class="payment-method-info">
                                        <div class="payment-method-name">
                                            {!! $paymentName !!}
                                        </div>
                                        @if($payment->fee != 0.00 || $payment->fee_cents != 0.00)
                                        <div class="payment-method-fee">
                                            Transaction fee: {{ $payment->fee != 0.00 ? $payment->fee.'%' : '' }} {{ $payment->fee_cents != 0.00 ? '+ '. Helper::amountFormatDecimal($payment->fee_cents) : '' }}
                                        </div>
                                        @endif
                                    </div>
                                </label>
                            </div>

                            @if($payment->type == 'bank')
                            <div class="bank-transfer-info" id="bankTransferInfo">
                                <h6><i class="fa fa-university mr-2"></i>Bank Transfer Information</h6>
                                <div class="mt-2">
                                    {!! nl2br($payment->bank_info) !!}
                                </div>
                                <div class="mt-3">
                                    <label for="bankTransferImage" class="form-label">Upload Payment Proof:</label>
                                    <input type="file" name="image" id="bankTransferImage" accept="image/*" class="form-control">
                                    <small class="text-muted">Upload screenshot of your payment (JPG, PNG, GIF) Max: {{ Helper::formatBytes($settings->file_size_allowed_verify_account * 1024) }}</small>
                                </div>
                            </div>
                            @endif
                            @endforeach

                            <div class="alert alert-danger" id="paymentErrors" style="display: none;">
                                <ul class="list-unstyled m-0" id="errorsList"></ul>
                            </div>

                            <button type="submit" class="btn-pay" id="payButton">
                                <span class="loading-spinner"></span>
                                <i class="fas fa-lock mr-2"></i>
                                Pay Securely
                            </button>
                        </form>

                        <div class="security-info">
                            <i class="fas fa-shield-alt mr-2"></i>
                            Your payment is secured with 256-bit SSL encryption
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
function selectPaymentMethod(method) {
    // Remove selected class from all methods
    document.querySelectorAll('.payment-method').forEach(el => {
        el.classList.remove('selected');
    });
    
    // Add selected class to clicked method
    event.currentTarget.classList.add('selected');
    
    // Check the radio button
    document.getElementById('payment_' + method).checked = true;
    
    // Show/hide specific payment info
    document.querySelectorAll('.wallet-balance, .bank-transfer-info').forEach(el => {
        el.classList.remove('show');
    });
    
    if (method === 'Wallet') {
        document.getElementById('walletBalance').classList.add('show');
    } else if (method === 'Bank') {
        document.getElementById('bankTransferInfo').classList.add('show');
    }
}

// Handle wallet payment method for logged in users
@auth
if (document.getElementById('wallet_payment')) {
    document.querySelector('.payment-method').addEventListener('click', function() {
        selectPaymentMethod('Wallet');
    });
}
@endauth

document.getElementById('paymentForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const submitBtn = document.getElementById('payButton');
    const spinner = submitBtn.querySelector('.loading-spinner');
    const formData = new FormData(this);
    
    // Validate payment method selection
    const selectedPayment = document.querySelector('input[name="payment_gateway"]:checked');
    if (!selectedPayment) {
        showErrors(['Please select a payment method']);
        return;
    }
    
    // Check wallet balance if wallet is selected
    @auth
    if (selectedPayment.value === 'Wallet' && {{ auth()->user()->balance }} < {{ $moneyRequest->amount }}) {
        showErrors(['Insufficient wallet balance']);
        return;
    }
    @endauth
    
    // Show loading state
    submitBtn.disabled = true;
    spinner.style.display = 'inline-block';
    
    // Debug: Log the selected payment method
    console.log('Selected payment method:', selectedPayment.value);
    
    fetch(this.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            if (data.url) {
                // Redirect to payment gateway
                window.location.href = data.url;
            } else {
                // Payment completed (wallet payment)
                showSuccess(data.message);
                setTimeout(() => {
                    location.reload();
                }, 2000);
            }
        } else {
            // Show errors
            console.log('Payment error response:', data);
            
            if (data.errors) {
                let errorMessages = [];
                Object.values(data.errors).forEach(errors => {
                    errors.forEach(error => {
                        errorMessages.push(error);
                    });
                });
                showErrors(errorMessages);
            } else {
                showErrors([data.message || 'An error occurred']);
            }
            
            // Show available gateways if provided
            if (data.available_gateways) {
                console.log('Available payment gateways:', data.available_gateways);
            }
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showErrors(['An unexpected error occurred']);
    })
    .finally(() => {
        // Hide loading state
        submitBtn.disabled = false;
        spinner.style.display = 'none';
    });
});

function showErrors(errors) {
    const errorContainer = document.getElementById('paymentErrors');
    const errorsList = document.getElementById('errorsList');
    
    errorsList.innerHTML = '';
    errors.forEach(error => {
        const li = document.createElement('li');
        li.textContent = error;
        errorsList.appendChild(li);
    });
    
    errorContainer.style.display = 'block';
    errorContainer.scrollIntoView({ behavior: 'smooth' });
}

function showSuccess(message) {
    // Remove existing alerts
    document.querySelectorAll('.alert').forEach(alert => alert.remove());
    
    // Create success alert
    const alert = document.createElement('div');
    alert.className = 'alert alert-success';
    alert.textContent = message;
    
    // Insert at the top of payment methods
    const paymentMethods = document.querySelector('.payment-methods');
    paymentMethods.insertBefore(alert, paymentMethods.firstChild);
    
    alert.scrollIntoView({ behavior: 'smooth' });
}
</script>
@endsection 