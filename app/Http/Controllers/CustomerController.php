
<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        
        return view('customers');
    }
    // دالة لإضافة زبون جديد
 public function store(Request $request)
 {
     // إنشاء زبون جديد
     $customer = new Customer();
     $customer->name = $request->name;
     $customer->email = $request->email;
     $customer->password = bcrypt($request->password); // تشفير كلمة المرور
     $customer->shipping_address = $request->shipping_address;
     $customer->phone_number = $request->phone_number;
     $customer->registration_date = now();
     $customer->save();
     
     return redirect()->route('customers.create')->with('success', 'تم إضافة الزبون بنجاح');
 }

     // دالة تعديل عميل
     public function update(Request $request, $id)
     {
         $customer = Customer::findOrFail($id);
         $customer->name = $request->name;
         $customer->email = $request->email;
         $customer->shipping_address = $request->shipping_address;
         $customer->phone_number = $request->phone_number;
         $customer->save();
         
         return redirect()->route('customers.index');
     }

     // دالة حذف عميل
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        
        return redirect()->route('customers.index');

    
    }
}
