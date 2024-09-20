<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
    return view('payments');
    }
    public function store(Request $request)
       {
           $payment = new Payment();
           $payment->order_id = $request->order_id;
           $payment->payment_method_id = $request->payment_method_id;
           $payment->amount_paid = $request->amount_paid;
           $payment->payment_date = now();
           $payment->save();
           
           return redirect()->route('payments.index');
       }
   
       // دالة تعديل دفع
       public function update(Request $request, $id)
       {
           $payment = Payment::findOrFail($id);
           $payment->amount_paid = $request->amount_paid;
           $payment->save();
           
           return redirect()->route('payments.index');
       }
   
       // دالة حذف دفع
       public function destroy($id)
       {
           $payment = Payment::findOrFail($id);
           $payment->delete();
           
           return redirect()->route('payments.index');
       }
}
