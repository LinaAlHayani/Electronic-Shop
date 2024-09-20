<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {  
        return view('categories');
    }
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        
        return redirect()->route('categories.index');
    }
 // دالة تعديل فئة
 public function update(Request $request, $id)
 {
     $category = Category::findOrFail($id);
     $category->name = $request->name;
     $category->description = $request->description;
     $category->save();
     
     return redirect()->route('categories.index');
 }

    // دالة حذف فئة
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        
        return redirect()->route('categories.index');
    }
}
