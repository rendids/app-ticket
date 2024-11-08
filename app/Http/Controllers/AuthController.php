<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Menampilkan form login
    public function login()
    {
        return view("auth.login");
    }

    // Menangani aksi login
    public function login_action(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        // Mencoba melakukan autentikasi dan login user
        if (Auth::attempt($request->only('email', 'password'))) {

            if (Auth::user()->role == 'admin') {
                return redirect()->intended('/dashboard');
            } else {
                return redirect()->intended('/')->with('success', 'Berhasil login');
            }
        }

        // Jika autentikasi gagal, kembali dengan pesan error
        return back()->withErrors([
            'email' => 'Kredensial yang diberikan tidak cocok dengan catatan kami.',
        ])->withInput();
    }

    // Menampilkan form registrasi
    public function register()
    {
        return view("auth.register");
    }

    // Menangani aksi registrasi
    public function register_action(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Membuat user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Melakukan login otomatis setelah registrasi
        Auth::login($user);

        // Redirect ke halaman utama dengan pesan sukses
        return redirect('/')->with('success', 'Pendaftaran berhasil!');
    }

    // Menangani aksi logout
    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Berhasil logout');
    }
}
