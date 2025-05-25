@extends('layouts.app')

@section('title') Calculator Simulator -@endsection

@section('content')
<style>
     .form-container {
      margin: auto;
      background: #fff;
      border: 1px solid #eee;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }
    .form-container h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #ffb200;
      font-weight: 400 !important;
      font-size: 24px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: 8898aa ;
    }

    input[type="number"] {
      width: 100%;
      padding: 10px 12px;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 15px;
      transition: border-color 0.3s;
    }

    input[type="number"]:focus {
      border-color: #ffb200;
      outline: none;
      box-shadow: 0 0 0 2px rgba(255, 178, 0, 0.2);
    }

    button {
      width: 100%;
      background-color: #ffb200;
      border: none;
      padding: 12px;
      color: white;
      font-size: 18px;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #e6a200;
    }

    .summary-table {
      max-width: 500px;
      margin: auto;
      background: #fff;
      border-radius: 12px;
      border: 1px solid #eee;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      padding: 25px;
      height: 100%;
    }

    .summary-table h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #ffb200;
      font-weight: 400 !important;
      font-size: 24px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    td {
      padding: 12px 10px;
      font-size: 15px;
    }

    td:first-child {
      color: #555;
    }

    td:last-child {
      text-align: right;
    }

     table tr:nth-child(even) {
      background-color: #fdf7e6; 
    }

    .highlight {
      color: #ffb200;
      font-weight: 600;
      font-size: 16px;
    }
</style>
  <section class="section section-sm">
    <div class="container">
      <div class="row justify-content-center text-center mb-sm">
        <div class="col-lg-12 py-5">
          <h2 class="mb-0 text-break">YE Simulator</h2>
          <p class="lead text-muted mt-0">Calculate your earning</p>
        </div>
      </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-container">
                    <h2>Fill out the form and calculate</h2>
                    <form id="calculateForm">
                        <!-- Laravel CSRF Token -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="content_amount">Content Amount</label>
                            <input type="number" id="content_amount" name="content_amount" step="0.01" required>
                            <small id="amount_error" class="text-danger d-none">Please write some amount</small>
                        </div>

                        <div class="form-group">
                            <label for="sale_price">Content Sale Price</label>
                            <input type="number" id="sale_price" name="content_sale_price" step="0.01" required>
                            <small id="price_error" class="text-danger d-none">Please write some price</small>

                        </div>

                        <button id="calculate_btn" type="submit">Submit & Calculate</button>
                    </form>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="summary-table">
                    <h2>Content Sale Summary</h2>
                    <table>
                    <tr>
                        <td>Content Amount</td>
                        <td>
                            <span id="amount">0</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Content Sale Price</td>
                        <td>
                            <span id="price">0</span>
                        </td>
                    </tr>
                    <tr>
                        <td>RapidPay Fee</td>
                        <td>USD 10.25</td>
                    </tr>
                    <tr>
                        <td>Yelouwh Commission</td>
                        <td>USD 20.00</td>
                    </tr>
                    <tr>
                        <td>Yelouwh Creator Earnings</td>
                        <td class="highlight" >USD <span id="total_earning">00</span></td>
                    </tr>
                    </table>
            </div>
        </div>
    </div>
  </section>


    <script>
  const calculateForm = document.getElementById('calculateForm');
  const calculateBtn = document.getElementById('calculate_btn');

  const fees = {
    fee: 10.25,
    commission: 20.00,
  }

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

    if (contentAmount === '') {
      amountError.classList.remove('d-none');
      hasError = true;
    }

    if (salePrice === '') {
      priceError.classList.remove('d-none');
      hasError = true;
    }

    if (hasError) return;

    // All validations passed — get form data as object
    const formData = new FormData(calculateForm);
    const formObject = {};
    formData.forEach((value, key) => {
      formObject[key] = value;
    });

    document.getElementById('amount').innerHTML = formObject.content_amount;
    document.getElementById('price').innerHTML = formObject.content_sale_price;

    const totalNumber = parseFloat(formObject.content_amount) * parseFloat(formObject.content_sale_price);
    const totalEarning = totalNumber - Object.values(fees).reduce((sum, value) => sum + value, 0);

    document.getElementById('total_earning').innerHTML = totalEarning;
    

    // You can proceed with further calculation or AJAX here
  });
</script>


@endsection
