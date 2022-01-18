<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    public function show_product(){
        if(Auth::guest() || (!Auth::user()->isadmin)){
            return view('errors.404');
        }else{
            $products = collect(Product::all());
            return view('admin.product_admin', compact("products"));
        }
        
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
        $prods->after_price = $request->product_price * ((100-$request->product_disc)/100);
        $prods->quantity = $request->product_qty;
        $prods->discount = $request->product_disc;
        $prods->category = $request->product_cat;
        $prods->status = $val;
        $prods->save();


        return redirect('/M3ADM1N')->with('success', 'Product Updated');
    }

    public function create(){
        if(Auth::guest() || (!Auth::user()->isadmin)){
            return view('errors.404');
        }else{
            return view('admin.add_product');
        }
    }

    public function store(Request $request){
        $this->validate($request,[
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
        
        //handle file upload
        if($request->hasFile('image')){//make sure user choose upload file
        //get file name
            $extName = $request->file('image')->getClientOriginalName();//get file
            //get just file name
            $fileName = pathinfo($extName, PATHINFO_FILENAME);

            //get just ext
            $ext = $request->file('image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $fileName.'_'.time().'.'.$ext;

            //upload image and create a folder with path Storage->App->public and inaccessible through web
            $path = $request->file('image')->storeAs('images/snacks', $fileNameToStore);
            

        }else{
            $fileNameToStore = 'noimage.jpg';//jika tidak mengisi bagian foto
        }

        $post = new Product();
        $post->name = $request->product_name;
        $post->description = $request->product_desc;
        $post->quantity = $request->product_qty;
        $post->price = $request->product_price;
        $post->rating = 5;
        $post->discount = $request->product_disc;
        $post->after_price = $request->product_price * ((100-$request->product_disc)/100);
        $post->category = $request->product_cat;
        $post->status = 0; 
        $post->product_picture = $fileNameToStore;;
        $post->save();

        return redirect('/M3ADM1N')->with('success','Product Created');
    }
}

