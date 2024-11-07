<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Travela</title>
</head>

<body>
    
    <div class="navbar bg-base-100  px-6 h-25 top-0 ">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl font">Travela</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1 ">
                <li><a href="{{ route('index') }}">Beranda</a></li>
                <li><a href="{{ route('destinations') }}">Destinasi</a></li>
                <li><a href="{{ route('tours') }}">Paket Tur</a></li>
                <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                <li><a href="{{ route('contact') }}">Kontak</a></li>
                <li class="flex flex-row gap-3 ml-3">
                    <a href="{{ route('login') }}" class="btn btn-primary btn-sm">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-secondary btn-sm">Register</a>
                </li>
            </ul>
        </div>
    </div>

    @yield('content')

    @extends('layouts.partial.footer')
</body>

</html>
