<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use Redirect,Response;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    public function get_all_address($user_id){
        // $add = Address::find($user_id);
        // $add = Address::all();
        $add = DB::table('address_user')->where('user_id', $user_id)->get();

        return Response::json($add);
    }
    public function post_address(Request $request){
        $addr = new Address();
        $addr->user_id = $request->id;
        $addr->reciever_name = $request->name;
        $addr->reciever_phone = $request->phone;
        $addr->address = $request->address;
        $addr->save();

        $response = "Success";
        return Response::json($response);
    }
}
