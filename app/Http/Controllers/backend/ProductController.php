<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductColour;
use App\Models\ProductSize;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id','category_name')->get();
       return view('backend.pages.product.create',compact('categories'));
    }
    public function loadSubCategoryAjax($category_id)
    {
        $sub_categories = SubCategory::where('category_id',$category_id)->select('id','sub_category_name')->get();
        return response()->json($sub_categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreRequest $request)
    {

       

        $file = $request->file('product_image'); 
        $location = '/backend/uploads/products/';
        $new_name = time().'.'.$file->getClientOriginalExtension();
        $file->storeAs($location,$new_name,'public');
        $product = Product::create([
            "product_title" => $request->product_title,
            "product_slug" => Str::slug($request->product_title),
            "product_description" => $request->product_description,
            "product_image" => $new_name,
            "product_price" => $request->product_price,
            "product_compare_price" => $request->product_compare_price,
            "product_sku" => $request->product_sku,
            "product_barcode" => $request->product_barcode,
            "product_status" => $request->product_status,
            "category_id" => $request->category_id,
            "sub_category_id" => $request->sub_category_id,
            "product_featured_status" => $request->product_featured_status,
        ]);

        foreach($request->clr_name as $clr_name){
            ProductColour::create([
                'product_id' =>$product->id,
                'color_name' =>$clr_name,
            ]);
        }
        foreach($request->product_size as $size){
            ProductSize::create([
                'product_id' =>$product->id,
                'product_size' =>$size,
            ]);
        }

        return redirect()->route('product.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
