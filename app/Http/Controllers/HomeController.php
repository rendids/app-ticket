<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Package;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $destinations = Destination::take(12)->get();
        // dd($destinations);
        return view('home', compact('destinations'));
    }

    public function destinations()
    {
        return view('destination.index');
    }

    public function detailDestination(Destination $destination)
    {
        $packages = Package::where('destination_id', $destination->id)->get();
        return view ('destination.show', compact('packages','destination'));
    }

    public function tours()
    {
        // Kode untuk menampilkan halaman paket tour
        return view('packages_tour.tours');
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
