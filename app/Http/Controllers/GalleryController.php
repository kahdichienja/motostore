<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Products_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Products_model::orderBy('created_at','desc')->get();
        return view('admin.gallery.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $time = '';
        // $formInput = $request->except('image');
        // $this->validate($request, [
            // 'product_id' => 'required',
            // 'image' => 'required|mimes:png,jpg,jpeg|max:10000'
        // ]);
        // $image = $request->image;
        // if($image){
        //     // time()
        //     $time = time();
        //     $imageName = $time.$image->getClientOriginalName();
        //     $image->move('productsgallery', $imageName);
        //     $formInput['image'] = $imageName;

        // }
        // Gallery::create($formInput);
        // return redirect()->back();
        // u[update]
        $this->validate($request, [
            'product_id' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:10000'
        ]);

        // handlle file upload
        if ($request->hasFile('image')) {
            // get file name with the ext.
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // get the file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // get ext
            $extension = $request->file('image')->getClientOriginalExtension();

            // file to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // upload it to the db
            $path = $request->file('image')->storeAs('/public/productsgallery', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        // create product$product
        $gallery = new Gallery();
        $gallery->product_id = $request->input('product_id');
        $gallery->image = $fileNameToStore;
        $gallery->save();

        return redirect()->back()->with('success', 'New gallery Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Products_model::findOrFail($id);
        $galleries = Gallery::where('products_id',$id)->get();
        return view('admin.gallery.show',compact('product','galleries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'product_id' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:10000'
        ]);

        // handlle file upload
        if ($request->hasFile('image')) {
            // get file name with the ext.
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // get the file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // get ext
            $extension = $request->file('image')->getClientOriginalExtension();

            // file to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // upload it to the db
            $path = $request->file('image')->storeAs('/public/productsgallery', $fileNameToStore);
        }

        // create product$product
        $gallery = Gallery::find($id);
        $gallery->product_id = $request->input('product_id');
        $gallery->image = $fileNameToStore;
        $gallery->save();

        return redirect()->back()->with('success', "$gallery->image Successfull Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        // $gallery->delete();
        if ($gallery->image != 'noimage.jpg') {
            // delete img in the storage
            Storage::delete('/public/productsgallery/'.$gallery->image);
        }
        $gallery->delete();
        return redirect()->back()->with('success', 'Item Deleted Successfull...');
    }

    
    public function productsgallery($id)
    {
        $product=Products_model::findOrFail($id);
        $galleries = Gallery::where('product_id',$id)->get();
        return view('admin.gallery.show', compact('product', 'galleries'));
    }
}
