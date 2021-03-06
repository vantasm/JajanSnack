<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\DetailTransaction;

class CartController extends Controller
{
    public function cart(Request $request)
    {
        $order = Transaction::where("user_id", $request->user_id)->where("status", "cart")->first();
        if(empty($order))
        {
            $detail_order = "";
            $counter = 0;
        }
        else
        {
            $detail_order = DetailTransaction::where("transaction_id", $order->id)->get();
            $counter = $detail_order->count();
        }
        return view("cart", compact("order", "detail_order", "counter"));
    }

    public function delete(Request $request)
    {
        $order_detail = DetailTransaction::where("product_id", $request->product_id)->first();
        
        $order = Transaction::where("id", $order_detail->transaction_id)->where("status", "cart")->first();
        $order->total_price = $order->total_price - $order_detail->total_price;
        $order->update();
        
        $product = Product::where("id", $order_detail->product_id)->first();
        $product->quantity = $product->quantity + $order_detail->quantity;
        $product->update();

        $order_detail->delete();

        return redirect("/index")->with("message", "Item(s) has been deleted");
    }

    public function checkout(Request $request)
    {
        $check_order = Transaction::where("user_id", $request->user_id)->where("status", "cart")->first();
        $detail_order = DetailTransaction::where("transaction_id", $check_order->id)->get();
        $counter = $detail_order->count();
        
        $order = Transaction::where("user_id", $request->user_id)->where("status", "cart")->where("id", $request->order_id)->first();
        $order->status = "checkout";
        $order->update();

        $products = Product::where("status", 0)->orderBy("rating", "desc")->paginate(8);
        
        // return redirect()->back()->with("counter", $counter)->with("message", "Your item(s) has been payed");
        return redirect("/index")->with("message", "Your item(s) has been payed")->with("products", $products);
    }
}
