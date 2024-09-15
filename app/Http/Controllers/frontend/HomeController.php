<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){

   $products = Product::with(['getCategory'])
                        ->select('id',
                           'product_title',
                           'product_slug',
                           'product_image',
                           'product_price',
                           'category_id',)
                        ->get();
    return view('frontend.pages.home',compact('products'));
   }

   public function ShowProductPage($product_slug){

      $singleProduct = Product::where('product_slug',$product_slug)->with(['getCategory','getSubCategory','getColour','getSize'])
                              ->select('id',
                              'product_title',
                              'product_image',
                              'product_description',
                              'product_price',
                              'category_id',
                              'sub_category_id'
                              )->first();
      // return $singleProduct;
      return view('frontend.pages.product',compact('singleProduct'));
   }
}
