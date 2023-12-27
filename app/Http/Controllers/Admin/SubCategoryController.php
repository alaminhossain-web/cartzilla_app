<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public $subCategory;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.sub-category.index',[
            'sub_categories' => SubCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sub-category.add',[
            'categories' =>Category::all()
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SubCategory::newSubCategory($request);
        return back()->with('message','Sub Category created successfully');
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
        $this->subCategory = SubCategory::find($id);
        return view('admin.sub-category.edit',[
            'categories' => Category::all(),
            'sub_category' => $this->subCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        SubCategory::updateSubCategory($request,$id);
        return redirect('/sub-category')->with('update','Sub Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SubCategory::deleteSubCategory($id);
        return back()->with('error','Sub Category Deleted successfully');
    }
}
