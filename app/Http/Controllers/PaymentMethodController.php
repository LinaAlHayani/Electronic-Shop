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
    public function store(Request $request)
    {
        $paymentMethod = new PaymentMethod();
        $paymentMethod->name = $request->name;
        $paymentMethod->details = $request->details;
        $paymentMethod->save();
        
        return redirect()->route('payment-methods.index');
    }

    // دالة تعديل طريقة دفع
    public function update(Request $request, $id)
    {
        $paymentMethod = PaymentMethod::findOrFail($id);
        $paymentMethod->name = $request->name;
        $paymentMethod->details = $request->details;
        $paymentMethod->save();
        
        return redirect()->route('payment-methods.index');
    }

    // دالة حذف طريقة دفع
    public function destroy($id)
    {
        $paymentMethod = PaymentMethod::findOrFail($id);
        $paymentMethod->delete();
        
        return redirect()->route('payment-methods.index');
    }
}
