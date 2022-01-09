<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function show_all()
    {
        $products = collect(Product::all());
        // dd($products);
        // return view('shop', Product::all()->category(request(["category"]))->get());
        return view('shop', compact("products"));
    }

    public function show_category($category)
    {
        $products = collect(Product::all());
        // dd($products);
        return view('shop', compact("products"));
    }
}
