<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show_product($id)
    {
        $product = Product::find($id);
        // dd($product);
        // return view("product")->with("product", $product);
        return view("product", compact("product"));
    }
}
