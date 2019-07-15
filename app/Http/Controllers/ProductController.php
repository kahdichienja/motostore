<?php

namespace App\Http\Controllers;

use App\Cart;
use App\User;
use App\Order;
use App\Category;
use App\Products_model;
use App\ProductAttribute;
use Illuminate\Http\Request;
use App\Comment as UserComment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=Products_model::orderBy('created_at','desc')->get();

        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
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
        //     'pro_name' => 'required',
        //     'pro_code' => 'required',
        //     'pro_price' => 'required',
        //     'category_id' => 'required',
        //     'pro_info' => 'required',
        //     'spl_price' => 'required',
        //     'image' => 'required|mimes:png,jpg,jpeg|max:10000'
        // ]);
        // $image = $request->image;
        // if($image){
        //     // time()
        //     $time = time();
        //     $imageName = $time.$image->getClientOriginalName();
        //     $image->move('products', $imageName);
        //     $formInput['image'] = $imageName;

        // }
        // Products_model::create($formInput);
        // return redirect()->back();
        // upadte
        $this->validate($request, [
            'pro_name' => 'required',
            'pro_code' => 'required',
            'pro_price' => 'required',
            'category_id' => 'required',
            'pro_info' => 'required',
            'spl_price' => 'required',
            'chesis_number' => 'required',
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
            $path = $request->file('image')->storeAs('/public/products', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        // create product$product
        $product = new Products_model();
        $product->pro_name = $request->input('pro_name');
        $product->pro_code = $request->input('pro_code');
        $product->pro_price = $request->input('pro_price');
        $product->category_id = $request->input('category_id');
        $product->pro_info = $request->input('pro_info');
        $product->spl_price = $request->input('spl_price');
        $product->chesis_number = $request->input('chesis_number');
        $product->image = $fileNameToStore;
        $product->save();

        return redirect()->back()->with('success', 'New product Uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::all();
        $product=Products_model::findOrFail($id);

        return view('admin.product.editproduct', compact('product','categories'));
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
        //
        $this->validate($request, [
            'pro_name' => 'required',
            'pro_code' => 'required',
            'pro_price' => 'required',
            'category_id' => 'required',
            'pro_info' => 'required',
            'spl_price' => 'required',
            'chesis_number' => 'required',
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
            $path = $request->file('image')->storeAs('/public/products', $fileNameToStore);
        }
        // update product
        $product = Products_model::find($id);
        $product->pro_name = $request->input('pro_name');
        $product->pro_code = $request->input('pro_code');
        $product->pro_price = $request->input('pro_price');
        $product->category_id = $request->input('category_id');
        $product->pro_info = $request->input('pro_info');
        $product->spl_price = $request->input('spl_price');
        $product->chesis_number = $request->input('chesis_number');
        $product->image = $fileNameToStore;
        if ($request->hasFile('image')) {
            $product->image = $fileNameToStore;
        }
        $product->save();

        return redirect()->back()->with('success', 'product Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        $productDelete = Products_model::findOrFail($id);
        // $productDelete->delete();
        if ($productDelete->image != 'noimage.jpg') {
            // delete img in the storage
            Storage::delete('/public/products/'.$productDelete->image);
        }
        $productDelete->delete();
        return redirect()->back()->with('success', 'Product Deleted Successfull...');
        
    }
    public function getAddToCart(Request $request, $id)
    {
        $product = Products_model::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        // dd($request->session()->get('cart'));
        return redirect()->back();
    }
    public function getRduceByOne(Request $request, $id)
    {
        $product = Products_model::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
       } else {
           Session::forget('cart');
       } 
        return redirect()->back();
    }
    public function getRemoveItem(Request $request, $id)
    {
        $product = Products_model::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
             Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }      
        return redirect()->back();
    }
    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('cart.index', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('cart.index', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function cartCheckout()
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        if (!Session::has('cart')) {
            return redirect()->back()->with('error', 'Please Select a product to purchase');
        }
        return view('cart.checkout', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
    
    public function storeCart(Request $request)
    {
        if (!Session::has('cart')) {
            return redirect()->back()->with('error', 'Please Select a product to purchase');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        try {
            //code...
            $order = new Order();
            $order->cart = serialize($cart);
            $order->name = $request->input('name');
            $order->phone_number = $request->input('phone_number');
            $order->address = $request->input('address');
            $order->payment_method = $request->input('payment_method');
            $order->payment_id = $request->input('payment_id');
            // $order->user_id = auth()->user()->id;
            if(Auth::check()){
                Auth::user()->orders()->save($order);
            }else {
                return redirect()->route('login');
            }
            // $order->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('cart-error', $e->getMessage());
            // throw $e;
        }

        Session::forget('cart');
        return redirect()->route('shophome')->with('success', 'product to purchased successfuly');

    }
    public function adminHome()
    {
        //
        $users = User::all();
        $UserComments = UserComment::orderBy('created_at','desc')->get();
        $orders = Order::orderBy('created_at', 'desc')->get();
        $orders->transform(function ($order, $key)
        {
            $order->cart = unserialize($order->cart);
            return $order;
        });
        
        return view('admin.adminindex', compact('orders', 'users', 'UserComments'));
    }
    public function addAttributtes($id)
    {

        $product = Products_model::findOrFail($id);
        $productAttributes = ProductAttribute::where('product_id', $id)->get();
        return view('admin.product.addAttributtes', compact('product', 'productAttributes'));
    }
    public function storeAttributtes(Request $request)
    {
        $formInput = $request->all();
        $this->validate($request, [
            'product_id' => 'required',
            'vehicle_id_number' => 'required|unique:product_attributes',
            'registration_date' => 'required|date',
            'manufacture_year' => 'required|date',
            'milage' => 'required|int',
            'transmission' => 'required|string',
            'engine_capacity' => 'required|int',
            'fuel_type' => 'required',//
            'Body_style' => 'required',
            'exterior_color' => 'required',//
            'interior_color' => 'required',//
            'drive_type' => 'required',
            'number_of_doors' => 'required|int',
            'number_of_seats' => 'required|int',
            'dimension' => 'required',//
            'condition' => 'required|string',
            'expiry_date' => 'required|date'
        ]);
        $produtattr = new ProductAttribute();
        $produtattr->product_id = $request->input('product_id');
        $produtattr->vehicle_id_number = $request->input('vehicle_id_number');
        $produtattr->registration_date = $request->input('registration_date');
        $produtattr->manufacture_year = $request->input('manufacture_year');
        $produtattr->milage = $request->input('milage');
        $produtattr->transmission = $request->input('transmission');
        $produtattr->engine_capacity = $request->input('engine_capacity');
        $produtattr->fuel_type = $request->input('fuel_type');
        $produtattr->Body_style = $request->input('Body_style');
        $produtattr->drive_type = $request->input('drive_type');
        $produtattr->exterior_color = $request->input('exterior_color');
        $produtattr->interior_color = $request->input('interior_color');
        $produtattr->number_of_doors = $request->input('number_of_doors');
        $produtattr->number_of_seats = $request->input('number_of_seats');
        $produtattr->dimension = $request->input('dimension');
        $produtattr->condition = $request->input('condition');
        $produtattr->expiry_date = $request->input('expiry_date');
        $produtattr->save();

        return redirect()->back()->with('success', 'Specification made successfuly');
    }

}
