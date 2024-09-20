<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
class OrderController extends Controller
{
    public function index()
    {
        return view('orders');
    }
    public function store(Request $request)
     {
         $order = new Order();
         $order->customer_id = $request->customer_id;
         $order->order_date = now();
         $order->order_status = $request->order_status;
         $order->order_total = $request->order_total;
         $order->save();
         
         return redirect()->route('orders.index');
     }


         // دالة تعديل طلب
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->order_status = $request->order_status;
        $order->order_total = $request->order_total;
        $order->save();
        
        return redirect()->route('orders.index');
    }

     // دالة حذف طلب
     public function destroy($id)
     {
         $order = Order::findOrFail($id);
         $order->delete();
         
         return redirect()->route('orders.index');
     }
}
