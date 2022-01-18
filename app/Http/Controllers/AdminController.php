<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show_product(){
        $products = collect(Product::all());
        return view('admin.product_admin', compact("products"));
    }

    public function editPost(Request $request){
        if($request){
            $product_detail = Product::find($request->product_id);
            return view('admin.edit_product')->with('detail', $product_detail);
        }else{
            return view('admin.product_admin');
        }
    }

    public function update(Request $request){
        $this->validate($request,[
            'product_name' => 'required',
            'product_desc' => 'required',
            // 'product_qty'  => 'required|integer|size:999',
            // 'product_price' => 'required|integer|size:9999999',
            // 'product_disc' => 'required|integer|size:100',
            'product_cat' => 'required'
        ]);

        if($request->has('product_check')){
            $val = 0;
        }else{
            $val = 1;
        }


        $prods = Product::find($request->product_id);
        $prods->name = $request->product_name;
        $prods->description = $request->product_desc;
        $prods->price = $request->product_price;
        $prods->quantity = $request->product_qty;
        $prods->discount = $request->product_disc;
        $prods->category = $request->product_cat;
        $prods->status = $val;
        $prods->save();


        return redirect('/M3ADM1N')->with('success', 'Product Updated');
    }
}
