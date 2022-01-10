<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Wishlist;

class WishController extends Controller
{
    //
    public function addToWish($user_id, $product_id){
        $wish = new Wishlist();
        $wish->product_id = $product_id;
        $wish->user_id = $user_id;
        $wish->save();

        return redirect('/')->with('success','Added to Wishlist');
    }
}
