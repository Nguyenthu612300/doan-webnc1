<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class FrontendController extends Controller
{
   public function index()
   {
      return view('frontend.home');
   }
   public function categorydetail($id)
   {
      $category = Category::find($id);
      return view('frontend.categorydetail', compact('category'));
   }


   public function productdetail($id)
   {
      $product = Product::find($id);
      return view('frontend.productdetail', compact('product'));
   }

   public function search(Request $request)
   {
      $query = $request->input('search');
      $productss = Product::where('name', 'like', '%' . $query . '%')->get();
      return view('search', compact('productss'));
   }
}
