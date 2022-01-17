<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\WishController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/test',function(){
    return view('test');
});

Route::get('/testRequest',function(){
    if(Request::ajax()){
        return 'testRequest has loaded Completely!';
    }
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/upload', function () {
    return view('upload');
});

Route::get('/verification', function () {
    return view('verification');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/shipping', function () {
    return view('shipping');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/shop', [App\Http\Controllers\ShopController::class, 'show_all'])->name('shop');
Route::get('/shop/{category}', [App\Http\Controllers\ShopController::class, 'show_category'])->name('shop');
Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'show_product'])->name("product");
Route::post('wishlist', [WishController::class, 'addToWish']);
Route::get('/address/{id}', [AddressController::class, 'get_all_address']);
Route::post('/address/post', [AddressController::class, 'post_address']);
// Route::get('/wishlist/{user_id}/{product_id}', 'WishController@addToWish');
// Route::get('/wishlist/{user_id}/{product_id}', [App\Http\Controllers\WishController::class, 'addToWish'])->name("wish");
Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'show_product'])->name("product");
Route::post('order/{id}/{user_id}', [App\Http\Controllers\ShopController::class, 'order'])->name('order');
Route::get('cart/{user_id}', [App\Http\Controllers\CartController::class, 'cart'])->name('cart');
Route::delete('cart/{id}', [App\Http\Controllers\CartController::class, 'delete'])->name('cart');
Route::post('checkout/{id}/{user_id}', [App\Http\Controllers\CartController::class, 'checkout'])->name('cart');
