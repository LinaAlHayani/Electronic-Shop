<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderItem;

class OrderItemController extends Controller
{


    public function index()
    {
    return view('orders_items');
    }


        // دالة إضافة عنصر طلب
        public function store(Request $request)
        {
            $orderItem = new OrderItem();
            $orderItem->order_id = $request->order_id;
            $orderItem->product_id = $request->product_id;
            $orderItem->quantity = $request->quantity;
            $orderItem->price = $request->price;
            $orderItem->save();
            
            return redirect()->route('order-items.index');
        }


         // دالة تعديل عنصر طلب
    public function update(Request $request, $id)
    {
        $orderItem = OrderItem::findOrFail($id);
        $orderItem->quantity = $request->quantity;
        $orderItem->price = $request->price;
        $orderItem->save();
        
        return redirect()->route('order-items.index');
    }

    // دالة حذف عنصر طلب
    public function destroy($id)
    {
        $orderItem = OrderItem::findOrFail($id);
        $orderItem->delete();
        
        return redirect()->route('order-items.index');
    }
}