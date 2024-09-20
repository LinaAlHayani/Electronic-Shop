<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;

class CartItemController extends Controller
{
    public function index()
    { 
        return view('cart_items');

    }
    public function store(Request $request)
     {
         $cartItem = new CartItem();
         $cartItem->cart_id = $request->cart_id;
         $cartItem->product_id = $request->product_id;
         $cartItem->quantity = $request->quantity;
         $cartItem->price = $request->price;
         $cartItem->save();
         
         return redirect()->route('cart-items.index');
     }
 
     // دالة تعديل عنصر في سلة التسوق
     public function update(Request $request, $id)
     {
         $cartItem = CartItem::findOrFail($id);
         $cartItem->quantity = $request->quantity;
         $cartItem->price = $request->price;
         $cartItem->save();
         
         return redirect()->route('cart-items.index');
     }
 
     // دالة حذف عنصر من سلة التسوق
     public function destroy($id)
     {
         $cartItem = CartItem::findOrFail($id);
         $cartItem->delete();
         
         return redirect()->route('cart-items.index');
     }
}
