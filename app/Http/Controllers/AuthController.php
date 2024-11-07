<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Display the login form
    public function login()
    {
        return view("auth.login");
    }

    // Handle login action
    public function login_action(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        // Attempt to authenticate and log in the user
        if (Auth::attempt($request->only('email', 'password'))) {

            if(Auth::user()->role == 'admin'){
                return redirect()->intended('dashboard');
            }else{
                return redirect()->intended('/')->with('success', 'Successfully logged in');
            }
        }

        // If authentication fails, redirect back with an error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    // Display the registration form
    public function register()
    {
        return view("auth.register");
    }

    // Handle registration action
    public function register_action(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect to the login page with a success message
        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }

    // Handle user logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Successfully logged out');
    }
}
