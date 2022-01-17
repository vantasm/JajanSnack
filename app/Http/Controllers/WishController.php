<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Wishlist;

class WishController extends Controller
{
    //
    public function addToWish(Request $request){
        $wish = new Wishlist();
        $wish->product_id = $request->product_id;
        $wish->user_id = $request->user_id;
        $wish->save();

        return back()->with('success','Added to Wishlist');
    }
}
