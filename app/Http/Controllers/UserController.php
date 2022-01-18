<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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

    public function delete_account(Request $request)
    {
        $this->middleware('auth');

        $user = User::where("id", $request->user_id)->where("status", 0)->first();
        $user->status = 1;
        $user->save();

        Session::flush();
        Auth::logout();

        return redirect("/index")->with("message", "Your account has been deleted");
    }
}
