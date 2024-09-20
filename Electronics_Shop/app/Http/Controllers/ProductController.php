<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produrct;

class ProductController extends Controller
{
    public function index()
    {
         
        return view('products'); 
    }
}
