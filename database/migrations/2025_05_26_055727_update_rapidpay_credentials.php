<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\PaymentGateways;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Update RapidPay gateway with test credentials
        PaymentGateways::where('name', 'RapidPay')->update([
            'key' => 'test_api_key_123',
            'key_secret' => 'test_merchant_id_456',
            'sandbox' => 'true'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Reset RapidPay credentials
        PaymentGateways::where('name', 'RapidPay')->update([
            'key' => '',
            'key_secret' => '',
            'sandbox' => 'false'
        ]);
    }
};
