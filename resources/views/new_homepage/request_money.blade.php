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
                    <h2>Copy the link below for request money</h2>
                    <p>{{ url('/') }}</p>
                    <button>Copy Link</button>
                </div>
            </div>

           
        </div>
    </div>
  </section>



@endsection
