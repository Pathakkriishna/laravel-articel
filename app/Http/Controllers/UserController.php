<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function registerUser(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        $data = new User();
        $data->name = $req->name;
        $data->email = $req->email;
        $data->password = Hash::make($req->password);

        $data->save();

        if ($data) {
            return redirect('/login');
        } else {
            return back()->with('fail', 'Unable to Sign Up');
        }
    }

    public function loginuser(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', '=', $req->email)->first();

        if ($user) {
            if (Hash::check($req->password, $user->password)) {
                redirect('/welcome');
            } else {
                return back()->with('fail', 'password not matched');
            }
        } else {
            return back()->with('fail', 'User not found');
        }
    }
}
