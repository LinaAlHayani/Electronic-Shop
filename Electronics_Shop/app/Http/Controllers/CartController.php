<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoppingCard;

class CartController extends Controller
{
    public function index()
    {
        return view('carts');
    }
}
