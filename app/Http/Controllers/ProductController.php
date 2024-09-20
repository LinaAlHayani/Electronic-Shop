<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
         
        return view('products'); 
    }
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock_quantity = $request->stock_quantity;
        $product->category_id = $request->category_id;
        $product->save();
        
        return redirect()->route('products.index');
    }

       // دالة تعديل منتج
   public function update(Request $request, $id)
   {
       $product = Product::findOrFail($id);
       $product->name = $request->name;
       $product->description = $request->description;
       $product->price = $request->price;
       $product->stock_quantity = $request->stock_quantity;
       $product->category_id = $request->category_id;
       $product->save();
       
       return redirect()->route('products.index');
   }
   

      // دالة حذف منتج
      public function destroy($id)
      {
          $product = Product::findOrFail($id);
          $product->delete();
          
          return redirect()->route('products.index');
      }
}
