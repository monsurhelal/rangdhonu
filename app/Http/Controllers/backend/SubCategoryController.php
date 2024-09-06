<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryStoreRequest;
use App\Http\Requests\SubCategoryUpdateRequest;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subCategories = SubCategory::with('category')->select('id','category_id','sub_category_name','sub_category_slug','is_active')->get();
        return view('backend.pages.sub_category.index',compact('subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id','category_name')->get();
        return view('backend.pages.sub_category.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubCategoryStoreRequest $request)
    {
      SubCategory::create([
        'category_id' => $request->category_id,
        'sub_category_name' => $request->sub_category_name,
        'sub_category_slug' => Str::slug($request->sub_category_name),
        'is_active' => ($request->is_active == 'on') ? 1 : 0
      ]);

      Session::flush('message','sub category created');
      return redirect()->route('sub-category.index');
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
        //dd($id);

        $subCategory = SubCategory::find($id);
        $categories = Category::select('id','category_name')->get();

        return view('backend.pages.sub_category.edit',compact(['subCategory','categories']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubCategoryUpdateRequest $request, string $id)
    {
        $subCategory = SubCategory::find($id);
        $subCategory->update([
            'category_id' => $request->category_id,
            'sub_category_name' => $request->sub_category_name,
            'sub_category_slug' => Str::slug($request->sub_category_name),
            'is_active' => ($request->is_active == 'on') ? 1 : 0
        ]);

        Session::flush('message','sub category updated');
        return redirect()->route('sub-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SubCategory::find($id)->delete();
        Session::flush('message','sub category deleted');
        return redirect()->route('sub-category.index');
    }
}
