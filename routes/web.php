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

Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
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
Route::post('/cart', [App\Http\Controllers\CartController::class, 'cart'])->name('cart');
Route::delete('cart/{id}', [App\Http\Controllers\CartController::class, 'delete'])->name('cart');
Route::post('/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('cart');
Route::get('/M3ADM1N',[App\Http\Controllers\AdminController::class, 'show_product'])->name('admin');
Route::post('/M3ADM1N/edit',[App\Http\Controllers\AdminController::class, 'editPost']);
Route::post('/M3ADM1N/update',[App\Http\Controllers\AdminController::class, 'update']);
Route::get('/M3ADM1N/create',[App\Http\Controllers\AdminController::class, 'create']);
Route::post('/M3ADM1N/store',[App\Http\Controllers\AdminController::class, 'store']);
Route::delete('/delete', [App\Http\Controllers\CartController::class, 'delete'])->name('delete');
Route::post('/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('checkout');
Route::post('/edit', [App\Http\Controllers\UserController::class, 'edit_profile'])->name('edit_profile');
Route::post('delete_account', [App\Http\Controllers\UserController::class, 'delete_account'])->name('delete_account');