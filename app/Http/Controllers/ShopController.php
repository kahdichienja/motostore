<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Category;
use App\Products_model;
use App\ProductAttribute;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function shophome()
    {
        $newproducts = Products_model::orderBy('created_at','desc')->limit(3)->get();
        $products = Products_model::orderBy('created_at','desc')->get();
        $categories = Category::orderBy('created_at','desc')->get();

        return view('shop.shop', compact('products', 'categories', 'newproducts'));
    }
        // products in a category
    public function productscategory($name)
    {
        $category = Category::where('name', $name)->firstOrFail();
        $categories = Category::orderBy('created_at','desc')->get();
        return view('shop.shopcategory', compact('category', 'categories'));
    }
    public function shopgallery($id)
    {
        $product=Products_model::findOrFail($id);
        $galleries = Gallery::where('product_id',$id)->get();
        $productAttributes = ProductAttribute::where('product_id', $id)->get();
        return view('shop.show', compact('product', 'galleries', 'productAttributes'));
    }
}
