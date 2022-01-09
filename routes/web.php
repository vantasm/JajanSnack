<?php

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

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/upload', function () {
    return view('upload');
});

Route::get('/verification', function () {
    return view('verification');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/login', function () {
    return view('login');
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