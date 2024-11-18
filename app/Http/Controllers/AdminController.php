<?php

namespace App\Http\Controllers;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function history()
    {
        return view('admin.history');
    }


}
