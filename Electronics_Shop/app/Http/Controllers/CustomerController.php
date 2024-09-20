<?php

namespace App\Http\Controllers;
use App\Models\customers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        
        return view('customers');
    }
}
