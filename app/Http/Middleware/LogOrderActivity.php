<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; 
class LogOrderActivity
{
    


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // تنفيذ المنطق بناءً على نوع الطلب
        $response = $next($request);

        // تحقق من نوع الطلب
        if ($request->isMethod('post') && $request->routeIs('orders.create')) {
            // تسجيل إنشاء طلب جديد
            Log::info('Order created', [
                'order_id' => $response->original['order_id'], // مثال على كيفية الحصول على ID الطلب من الاستجابة
                'user_id' => $request->user()->id, // مثال على كيفية الحصول على ID المستخدم
                'request_data' => $request->all()
            ]);
        }

        if ($request->isMethod('put') && $request->routeIs('orders.update')) {
            // تسجيل تحديث طلب
            Log::info('Order updated', [
                'order_id' => $request->input('order_id'),
                'user_id' => $request->user()->id,
                'request_data' => $request->all()
            ]);
        }

        return $response;
    
    }
}
