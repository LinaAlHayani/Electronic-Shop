<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
class LoginController extends Controller
{
     // إظهار صفحة تسجيل الدخول
     public function showLoginForm()
     {
         return view('auth.login');
     }
 
     // تنفيذ عملية تسجيل الدخول
     public function login(Request $request)
     {
         // التحقق من صحة البيانات المدخلة
         $request->validate([
             'email' => 'required|email',
             'password' => 'required|min:6',
         ]);
 
         // محاولة تسجيل الدخول باستخدام بيانات البريد الإلكتروني وكلمة المرور
         if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
             // إذا نجحت عملية تسجيل الدخول، يعاد توجيه المستخدم إلى الصفحة الرئيسية
             $request->session()->regenerate();
             return redirect()->intended('dashboard');
         }
 
         // إذا فشلت عملية تسجيل الدخول، يتم إعادة المستخدم مع رسالة خطأ
         throw ValidationException::withMessages([
             'email' => [__('auth.failed')],
         ]);
     }
 
     // تسجيل الخروج
     public function logout(Request $request)
     {
         Auth::logout();
 
         // إنهاء الجلسة الحالية
         $request->session()->invalidate();
         $request->session()->regenerateToken();
 
         // إعادة توجيه المستخدم إلى صفحة تسجيل الدخول بعد تسجيل الخروج
         return redirect('/login');
     }
}
