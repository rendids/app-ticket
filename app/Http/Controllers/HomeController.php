<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Destination;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $destinations = Destination::take(12)->get();
        $packages = Package::take(12)->get();
        return view('home', compact('destinations', 'packages'));
    }

    public function destinations()
    {
        $destinations = Destination::all();
        return view('destination.index', compact('destinations'));
    }

    public function detailDestination(Destination $destination)
    {
        $packages = Package::where('destination_id', $destination->id)->get();
        return view ('destination.show',compact('packages','destination'));
    }
    public function detailPackage(Package $package)
    {
        return view('packages_tour.detail', compact('package'));
    }

    public function tours()
    {
        $packages = Package::all();
        return view('packages_tour.tours', compact('packages'));
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
