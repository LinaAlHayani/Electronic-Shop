<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentMethod;

class PaymentMethodController extends Controller
{
   
    public function index()
    {
    return view('paymentsmehtods');
    }
}
