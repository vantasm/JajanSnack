<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function edit_profile(Request $request)
    {
        // dd($request);
        $user = User::where("id", $request->user_id)->where("status", 0)->first();
        // dd($user);

        if ($request->name)
        {
            $user->name = $request->name;
        }
        if ($request->email)
        {
            $user->email = $request->email;
        }
        if ($request->address)
        {
            $user->address = $request->address;
        }
        if ($request->password)
        {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->back()->with("message", "Profile has been updated");
    }
}
