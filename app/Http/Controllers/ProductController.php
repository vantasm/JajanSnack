<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show_all()
    {
        $products = collect(Product::all());
        // return view('shop')->with("products", $products);
        // dd($products);
        return view('shop', compact("products"));
    }

    public function show_category($category)
    {
        $products = collect(Product::where("category", "like", $category));
        // dd($products);
        return view('shop', compact("products"));
    }
}
