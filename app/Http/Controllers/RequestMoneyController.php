<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestMoneyController extends Controller
{
    public function request_money()
    {
        // Logic to display the request money page
        return view('request_money.index');
    }
}
