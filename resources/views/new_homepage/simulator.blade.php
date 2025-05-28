@extends('layouts.app')

@section('title') {{ __('simulator.title') }} @endsection

@section('content')
<style>
    body {
        background: linear-gradient(135deg, #fff 0%, #fff 100%);
        min-height: 100vh;
        font-family: 'Poppins', sans-serif;
    }

    .simulator-hero {
        background: linear-gradient(135deg, #ffb200 0%, #ff8c00 100%);
        padding: 80px 0 60px;
        position: relative;
        overflow: hidden;
    }

    .simulator-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="50" cy="10" r="0.5" fill="rgba(255,255,255,0.1)"/><circle cx="10" cy="60" r="0.5" fill="rgba(255,255,255,0.1)"/><circle cx="90" cy="40" r="0.5" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
        opacity: 0.3;
    }

    .simulator-hero h1 {
        color: #fff;
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        text-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        position: relative;
        z-index: 2;
    }

    .simulator-hero p {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1.3rem;
        margin-bottom: 0;
        position: relative;
        z-index: 2;
    }

    .calculator-icon {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 100px;
        height: 100px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
        color: rgba(255, 255, 255, 0.7);
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    .main-content {
        padding: 60px 0;
        background: #f8f9fa;
        position: relative;
    }

    .form-container {
        background: #fff;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(255, 178, 0, 0.1);
    }

    .form-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #ffb200, #ff8c00, #ffb200);
        background-size: 200% 100%;
        animation: shimmer 2s linear infinite;
    }

    @keyframes shimmer {
        0% { background-position: -200% 0; }
        100% { background-position: 200% 0; }
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 35px;
        color: #333;
        font-weight: 600;
        font-size: 28px;
        position: relative;
    }

    .form-container h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, #ffb200, #ff8c00);
        border-radius: 2px;
    }

    .form-group {
        margin-bottom: 25px;
        position: relative;
    }

    .form-group label {
        display: block;
        margin-bottom: 10px;
        color: #555;
        font-weight: 500;
        font-size: 16px;
    }

    .input-wrapper {
        position: relative;
    }

    .input-icon {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #ffb200;
        font-size: 18px;
        z-index: 2;
    }

    input[type="number"] {
        width: 100%;
        padding: 15px 15px 15px 50px;
        border: 2px solid #e9ecef;
        border-radius: 12px;
        font-size: 16px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        background: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    input[type="number"]:focus {
        border-color: #ffb200;
        outline: none;
        box-shadow: 0 0 0 4px rgba(255, 178, 0, 0.1), 0 4px 20px rgba(255, 178, 0, 0.2);
        transform: translateY(-2px);
    }

    .calculate-btn {
        width: 100%;
        background: linear-gradient(135deg, #ffb200, #ff8c00);
        border: none;
        padding: 18px;
        color: white;
        font-size: 18px;
        font-weight: 600;
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-top: 20px;
    }

    .calculate-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s;
    }

    .calculate-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(255, 178, 0, 0.4);
    }

    .calculate-btn:hover::before {
        left: 100%;
    }

    .calculate-btn:active {
        transform: translateY(-1px);
    }

    .summary-container {
        background: #fff;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(255, 178, 0, 0.1);
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .summary-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #00d4aa, #01a3a4, #00d4aa);
        background-size: 200% 100%;
        animation: shimmer 2s linear infinite;
    }

    .summary-container h2 {
        text-align: center;
        margin-bottom: 30px;
        color: #333;
        font-weight: 600;
        font-size: 26px;
        position: relative;
    }

    .summary-container h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, #00d4aa, #01a3a4);
        border-radius: 2px;
    }

    .summary-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        table-layout: fixed;
    }

    .summary-table tr {
        transition: all 0.3s ease;
    }

    .summary-table tr:hover {
        background-color: rgba(255, 178, 0, 0.05);
        transform: scale(1.02);
    }

    .summary-table td {
        padding: 18px 20px;
        font-size: 16px;
        border-bottom: 1px solid #f1f3f4;
        position: relative;
    }

    .summary-table td:first-child {
        width: 60%;
        text-align: left;
    }

    .summary-table td:last-child {
        width: 40%;
        text-align: right;
        font-weight: 600;
    }

    .summary-table tr:last-child td {
        border-bottom: none;
    }

    .summary-table td:first-child {
        color: #555;
        font-weight: 500;
        position: relative;
        width: 60%;
        text-align: left;
    }

    .summary-table td:first-child::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 4px;
        height: 20px;
        background: linear-gradient(135deg, #ffb200, #ff8c00);
        border-radius: 2px;
    }

    .summary-table tr:nth-child(even) {
        background-color: rgba(248, 249, 250, 0.8);
    }

    .highlight-row {
        background: linear-gradient(135deg, rgba(255, 178, 0, 0.1), rgba(255, 140, 0, 0.1)) !important;
        position: relative;
    }

    .highlight-row td {
        width: 50% !important;
        padding: 20px !important;
    }

    .highlight-row td:first-child {
        text-align: left !important;
    }

    .highlight-row td:last-child {
        text-align: right !important;
    }

    .highlight-row::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 4px;
        background: linear-gradient(135deg, #00d4aa, #01a3a4);
    }

    .highlight {
        color: #00d4aa;
        font-weight: 700;
        font-size: 20px;
        position: relative;
    }

    .currency-symbol {
        font-size: 14px;
        opacity: 0.7;
        margin-right: 2px;
    }

    .fee-badge {
        display: inline-block;
        background: linear-gradient(135deg, #e74c3c, #c0392b);
        color: white;
        padding: 4px 8px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: 600;
        margin-left: 8px;
    }

    .commission-badge {
        display: inline-block;
        background: linear-gradient(135deg, #9b59b6, #8e44ad);
        color: white;
        padding: 4px 8px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: 600;
        margin-left: 8px;
    }

    .earning-badge {
        display: inline-block;
        background: linear-gradient(135deg, #00d4aa, #01a3a4);
        color: white;
        padding: 6px 12px;
        border-radius: 15px;
        font-size: 14px;
        font-weight: 600;
        margin-left: 8px;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }

    .error-message {
        color: #e74c3c;
        font-size: 14px;
        margin-top: 5px;
        display: flex;
        align-items: center;
        gap: 5px;
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

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .result-animation {
        animation: slideInUp 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 768px) {
        .simulator-hero h1 {
            font-size: 2.5rem;
        }
        
        .form-container, .summary-container {
            padding: 25px;
            margin-bottom: 30px;
            height: auto;
        }
        
        .calculator-icon {
            display: none;
        }
        
        .row.align-items-stretch {
            align-items: normal;
        }
        
        .col-lg-6.d-flex {
            display: block !important;
        }
    }
</style>
  <!-- Hero Section -->
  <section class="simulator-hero" style="margin-top: 70px;">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-8">
          <div class="calculator-icon">
            <i class="fas fa-calculator"></i>
          </div>
          <h1>{{ __('simulator.ye_simulator') }}</h1>
          <p>{{ __('simulator.description') }}</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <section class="main-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-4">
          <div class="form-container">
            <h2>
              <i class="fas fa-chart-line" style="color: #ffb200; margin-right: 10px;"></i>
              {{ __('simulator.calculate_earnings') }}
            </h2>
            <form id="calculateForm">
              <!-- Laravel CSRF Token -->
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="form-group">
                <label for="content_amount">
                  <i class="fas fa-hashtag" style="color: #ffb200; margin-right: 8px;"></i>
                  {{ __('simulator.content_amount') }}
                </label>
                <div class="input-wrapper">
                  <div class="input-icon">
                    <i class="fas fa-hashtag"></i>
                  </div>
                  <input type="number" id="content_amount" name="content_amount" step="0.01" placeholder="{{ __('simulator.enter_content_amount') }}" required>
                </div>
                <div id="amount_error" class="error-message d-none">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{ __('simulator.valid_amount_error') }}
                </div>
              </div>

              <div class="form-group">
                <label for="sale_price">
                  <i class="fas fa-dollar-sign" style="color: #ffb200; margin-right: 8px;"></i>
                  {{ __('simulator.content_sale_price') }}
                </label>
                <div class="input-wrapper">
                  <div class="input-icon">
                    <i class="fas fa-dollar-sign"></i>
                  </div>
                  <input type="number" id="sale_price" name="content_sale_price" step="0.01" placeholder="{{ __('simulator.enter_sale_price') }}" required>
                </div>
                <div id="price_error" class="error-message d-none">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{ __('simulator.valid_price_error') }}
                </div>
              </div>

              <button id="calculate_btn" type="submit" class="calculate-btn">
                <div class="loading-spinner"></div>
                <i class="fas fa-calculator"></i>
                {{ __('simulator.calculate_earnings_btn') }}
              </button>
            </form>
          </div>
        </div>

        <div class="col-lg-6 mb-4 d-flex">
          <div class="summary-container">
            <h2>
              <i class="fas fa-chart-pie" style="color: #00d4aa; margin-right: 10px;"></i>
              {{ __('simulator.earnings_breakdown') }}
            </h2>
            <table class="summary-table">
              <tr>
                <td>
                  <i class="fas fa-hashtag" style="color: #ffb200; margin-right: 8px;"></i>
                  {{ __('simulator.content_amount') }}
                </td>
                <td>
                  <span class="currency-symbol">×</span><span id="amount">0</span>
                </td>
              </tr>
              <tr>
                <td>
                  <i class="fas fa-tag" style="color: #3498db; margin-right: 8px;"></i>
                  {{ __('simulator.content_sale_price') }}
                </td>
                <td>
                  <span class="currency-symbol">$</span><span id="price">0.00</span>
                </td>
              </tr>
              <tr>
                <td>
                  <i class="fas fa-credit-card" style="color: #e74c3c; margin-right: 8px;"></i>
                  {{ __('simulator.rapidpay_fee') }}
                  <span class="fee-badge">{{ __('simulator.fee') }}</span>
                </td>
                <td>
                  <span class="currency-symbol">$</span>10.25
                </td>
              </tr>
              <tr>
                <td>
                  <i class="fas fa-percentage" style="color: #9b59b6; margin-right: 8px;"></i>
                  {{ __('simulator.yelouwh_commission') }}
                  <span class="commission-badge">{{ __('simulator.platform') }}</span>
                </td>
                <td>
                  <span class="currency-symbol">$</span>20.00
                </td>
              </tr>
              <tr style='background: linear-gradient(135deg, rgba(255, 178, 0, 0.1), rgba(255, 140, 0, 0.1)) !important;'>
                <td style="width: 100%;">
                  <i class="fas fa-trophy" style="color: #00d4aa; margin-right: 8px;"></i>
                  {{ __('simulator.total_earnings') }}
                  <span class="earning-badge">{{ __('simulator.profit') }}</span>
                </td>
                <td class="highlight">
                  <span class="currency-symbol">$</span><span id="total_earning">0.00</span>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>


    <script>
  const calculateForm = document.getElementById('calculateForm');
  const calculateBtn = document.getElementById('calculate_btn');
  const loadingSpinner = document.querySelector('.loading-spinner');

  const fees = {
    fee: 10.25,
    commission: 20.00,
  }

  // Add input animations
  const inputs = document.querySelectorAll('input[type="number"]');
  inputs.forEach(input => {
    input.addEventListener('focus', function() {
      this.parentElement.style.transform = 'scale(1.02)';
    });
    
    input.addEventListener('blur', function() {
      this.parentElement.style.transform = 'scale(1)';
    });
  });

  calculateBtn.addEventListener('click', function (e) {
    e.preventDefault();

    const contentAmount = document.getElementById('content_amount').value.trim();
    const salePrice = document.getElementById('sale_price').value.trim();

    // Error handling
    const amountError = document.getElementById('amount_error');
    const priceError = document.getElementById('price_error');

    // Hide all errors initially
    amountError.classList.add('d-none');
    priceError.classList.add('d-none');

    let hasError = false;

    if (contentAmount === '' || parseFloat(contentAmount) <= 0) {
      amountError.classList.remove('d-none');
      hasError = true;
    }

    if (salePrice === '' || parseFloat(salePrice) <= 0) {
      priceError.classList.remove('d-none');
      hasError = true;
    }

    if (hasError) {
      // Shake animation for errors
      calculateBtn.style.animation = 'shake 0.5s ease-in-out';
      setTimeout(() => {
        calculateBtn.style.animation = '';
      }, 500);
      return;
    }

    // Show loading state
    loadingSpinner.style.display = 'inline-block';
    calculateBtn.disabled = true;
    calculateBtn.style.opacity = '0.7';

    // Simulate calculation delay for better UX
    setTimeout(() => {
      // All validations passed — get form data as object
      const formData = new FormData(calculateForm);
      const formObject = {};
      formData.forEach((value, key) => {
        formObject[key] = value;
      });

      // Update values with animation
      const summaryContainer = document.querySelector('.summary-container');
      summaryContainer.classList.add('result-animation');

      document.getElementById('amount').innerHTML = parseFloat(formObject.content_amount).toLocaleString();
      document.getElementById('price').innerHTML = parseFloat(formObject.content_sale_price).toFixed(2);

      const totalNumber = parseFloat(formObject.content_amount) * parseFloat(formObject.content_sale_price);
      const totalEarning = totalNumber - Object.values(fees).reduce((sum, value) => sum + value, 0);

      // Animate the final result
      const totalEarningElement = document.getElementById('total_earning');
      let currentValue = 0;
      const targetValue = totalEarning;
      const increment = targetValue / 50;
      
      const animateValue = () => {
        currentValue += increment;
        if (currentValue < targetValue) {
          totalEarningElement.innerHTML = currentValue.toFixed(2);
          requestAnimationFrame(animateValue);
        } else {
          totalEarningElement.innerHTML = targetValue.toFixed(2);
        }
      };
      
      animateValue();

      // Hide loading state
      loadingSpinner.style.display = 'none';
      calculateBtn.disabled = false;
      calculateBtn.style.opacity = '1';

      // Remove animation class after animation completes
      setTimeout(() => {
        summaryContainer.classList.remove('result-animation');
      }, 600);

    }, 800); // Simulate processing time
  });

  // Add shake animation for errors
  const style = document.createElement('style');
  style.textContent = `
    @keyframes shake {
      0%, 100% { transform: translateX(0); }
      10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
      20%, 40%, 60%, 80% { transform: translateX(5px); }
    }
  `;
  document.head.appendChild(style);

  // Add number formatting on input
  inputs.forEach(input => {
    input.addEventListener('input', function() {
      // Remove any non-numeric characters except decimal point
      this.value = this.value.replace(/[^0-9.]/g, '');
      
      // Ensure only one decimal point
      const parts = this.value.split('.');
      if (parts.length > 2) {
        this.value = parts[0] + '.' + parts.slice(1).join('');
      }
    });
  });
</script>


@endsection
