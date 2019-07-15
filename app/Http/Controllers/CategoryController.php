<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::orderBy('created_at','desc')->get();


        return view('admin.category.index', compact('categories'));
    }

    public function addCategory()
    {
        return view('admin.category.create');
    }

    public function createCategory(Request $request)
    {
        
        $formInput = $request->all();
        $this->validate($request, [
            'name' => 'required'
        ]);
        Category::create($formInput);
        return redirect()->back();
    }
    public function deletecategory($id)
    {
        //
        $categoryDelete = Category::findOrFail($id);
        $categoryDelete->delete();
        return redirect()->back();
    }

    // products in a category
    public function productscategory($name)
    {
        $category = Category::where('name', $name)->firstOrFail();
        return view('admin.category.productscategory', compact('category'));
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->save();
        return redirect()->back()->with('success', "Category $category->name Updated");

    }
}
