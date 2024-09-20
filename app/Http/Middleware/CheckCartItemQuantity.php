<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\CartItem;
class CheckCartItemQuantity
{
    //التأكد من أن كمية العناصر في السلة لا تتجاوز الحد الأقصى المسموح به
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // على سبيل المثال، يمكنك الحصول على cart_id و product_id من الطلب
        $cartId = $request->input('cart_id');
        $productId = $request->input('product_id');
        $quantityRequested = $request->input('quantity');

        // تحقق من كمية المنتج في السلة
        $cartItem = CartItem::where('cart_id', $cartId)
                             ->where('product_id', $productId)
                             ->first();

        if ($cartItem) {
            // تحقق من الكمية
            if ($quantityRequested > $cartItem->product->stock_quantity) {
                // إذا كانت الكمية المطلوبة أكبر من الكمية المتاحة، أرجع استجابة خطأ
                return response()->json(['error' => 'Quantity exceeds available stock'], 400);
            }
        }
    }
}