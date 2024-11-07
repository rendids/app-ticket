<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function login_action(Request $request){
        $request->validate([
            "email"=> "",
            "password"=> ""
        ]);
    }

    public function register_action(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|same:password',
        ]);

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
        ]);



        return redirect('/login')->with('success','berhasil register');

    }

    public function register(){
        return view("auth.register");
    }
}
