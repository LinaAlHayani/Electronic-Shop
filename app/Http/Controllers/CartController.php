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


    // دالة إضافة سلة تسوق
    public function store(Request $request)
    {
        $cart = new ShoppingCard();
        $cart->customer_id = $request->customer_id;
        $cart->creation_date = now();
        $cart->save();
        
        return redirect()->route('carts.index');
    }

    // دالة تعديل سلة تسوق
    public function update(Request $request, $id)
    {
        $cart = ShoppingCard::findOrFail($id);
        $cart->customer_id = $request->customer_id;
        $cart->save();
        
        return redirect()->route('carts.index');
    }

    // دالة حذف سلة تسوق
    public function destroy($id)
    {
        $cart = ShoppingCard::findOrFail($id);
        $cart->delete();
        
        return redirect()->route('carts.index');
    }
}