<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Product;
class CheckProductAvailability
{
    //التأكد من أن المنتج موجود في المخزون قبل إتمام العملية.
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $productId = $request->input('product_id');
        $product = Product::find($productId);

        if (!$product || $product->stock_quantity <= 0) {
            return response('Product is not available.', 404);
        }

        return $next($request);
    }

}
