<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\DetailTransaction;

class ShopController extends Controller
{
    public function show_all()
    {
        $products = collect(Product::where("status", "=", 0)->where("quantity", ">", 0)->get());
        return view('shop', compact("products"));
    }

    public function order(Request $request, $id, $user_id)
    {
        $product = Product::where("id", $id)->first();
        $date = Carbon::now();

        if($request->quantity > $product->quantity)
        {
            return redirect()->back()->with("error", "Item(s) quantity must be below available quantity");
        }

        $check_order = Transaction::where("user_id", $user_id)->where("status", "cart")->first();

        if(empty($check_order))
        {
            $order = new Transaction;
            $order->user_id = $user_id;
            $order->transaction_date = $date;
            $order->status = "cart";
            $order->address = "";
            $order->proof_payment = "";
            $order->total_price = 0;
            $order->save();
        }

        $new_order = Transaction::where("user_id", $user_id)->where("status", "cart")->first();

        $check_transaction_order = DetailTransaction::where("product_id", $product->id)->where("transaction_id",  $new_order->id)->first();
        if (empty($check_transaction_order))
        {
            $order_detail = new DetailTransaction;
            $order_detail->product_id = $product->id;
            $order_detail->transaction_id = $new_order->id;
            $order_detail->quantity = $request->quantity;
            $order_detail->address = "";
            $order_detail->total_price = $product->price * $request->quantity;
            $order_detail->save();
        }
        else
        {
            $order_detail = DetailTransaction::where("product_id", $product->id)->where("transaction_id",  $new_order->id)->first();
            $order_detail->quantity = $order_detail->quantity + $request->quantity;
            $new_order_detail = $product->price * $request->quantity;
            $order_detail->total_price = $order_detail->total_price + $new_order_detail;
            $order_detail->update();
        }

        $order = Transaction::where("user_id", $user_id)->where("status", "cart")->first();
        if($product->discount > 0)
        {
            $order->total_price = $order->total_price + $product->after_price * $request->quantity;
        }
        else
        {
            $order->total_price = $order->total_price + $product->price * $request->quantity;
        }
        $order->update();

        $product->quantity = $product->quantity - $request->quantity;
        $product->save();

        return redirect()->back()->with("message", "Item(s) added to cart");
    }
}
