<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function destinations()
    {
        // Kode untuk menampilkan halaman destinasi
        return view('destinations');
    }

    public function tours()
    {
        // Kode untuk menampilkan halaman paket tour
        return view('tours');
    }

    public function about()
    {
        // Kode untuk menampilkan halaman tentang kami
        return view('about');
    }

    public function contact()
    {
        // Kode untuk menampilkan halaman kontak
        return view('contact');
    }
}

