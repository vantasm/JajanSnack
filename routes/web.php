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
// Ganti alamat routing
Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

// Route::get('/home', function () {
//     return view('index');
// });

Route::get('/shop', function() {
    return view ("shop");
});

Route::get('/product', function () {
    return view('product');
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

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
