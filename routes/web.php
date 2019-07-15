<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('shop.index');
});
Route::get('/shop', 'ShopController@shophome')->name('shophome');
Route::get('/categoryshop/{name}', 'ShopController@productscategory')->name('categoryshop');
Route::get('/galleryshop/{id}', 'ShopController@shopgallery')->name('galleryshop');
// cart routes
Route::get('/add-to-cart/{id}', 'ProductController@getAddToCart')->name('product.addToCart');
// remove one item from the cart
Route::get('/reduce/{id}', 'ProductController@getRduceByOne')->name('getRduceByOne');

// remove one item from the cart
Route::get('/removeItem/{id}', 'ProductController@getRemoveItem')->name('getRemoveItem');


Route::get('/shopping-cart', 'ProductController@getCart')->name('product.shopping-cart');
Route::get('/shopping-cart-checkout', 'ProductController@cartCheckout')->name('cartCheckout')->middleware('auth');
Route::post('/shopping-cart-checkout', 'ProductController@storeCart')->name('storeCart');
/*
    admin login
*/


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


// pages
Route::group(['prefix' => 'page'], function ()
{
    Route::get('/contact', 'PageController@contactUs')->name('contact');
    Route::post('/contact', 'PageController@contactInfo')->name('contact');
    Route::get('/about', 'PageController@aboutUs')->name('aboutus');
    Route::post('/about', 'PageController@comment')->name('comment')->middleware('auth');
});


// user profile
Route::group(['prefix' => 'profile', 'middleware' => 'auth'], function(){
    Route::get('/', 'ProfileController@index')->name('profilehome');
});


// administration
Route::group(['prefix'=>'administration', 'middleware'=>['auth','admin']], function(){
    Route::get('/', 'ProductController@adminHome')->name('adminHome');
    // products
    Route::resource('products', 'ProductController');
    // product Attributes
    Route::get('/productattribute/{id}', 'ProductController@addAttributtes')->name('productattribute');
    Route::post('/productattribute', 'ProductController@storeAttributtes')->name('storeAttributtes');
    // category
    Route::get('/category', 'CategoryController@index')->name('categorylist');
    Route::get('/categoryadd', 'CategoryController@addCategory')->name('categoryadd');
    Route::post('/categorycreate', 'CategoryController@createCategory')->name('createCategory');
    Route::delete('/deletecategory/{id}', 'CategoryController@deletecategory')->name('deletecategory');
    Route::get('/category/{id}', 'CategoryController@edit')->name('editcategory');
    Route::post('/updatecategory/{id}', 'CategoryController@update')->name('updatecategory');

    // product-category
    Route::get('/productscategory/{name}', 'CategoryController@productscategory')->name('productscategory');
    // gallery
    Route::resource('gallery', 'GalleryController');
    Route::get('/productsgallery/{id}', 'GalleryController@productsgallery')->name('productsgallery');
    
});