<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')

    <title>Travela</title>
</head>

<body>
    @if (session('success'))
        <!-- Modal -->
        <input type="checkbox" id="success-popup" class="modal-toggle" checked />
        <div class="modal">
            <div class="modal-box bg-green-100 text-green-700">
                <!-- Icon and Message -->
                <div class="flex items-center mb-4">
                    <svg class="w-6 h-6 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <h2 class="font-semibold text-lg">Success!</h2>
                </div>

                <p>{{ session('success') }}</p>

                <!-- Close Button -->
                <div class="modal-action">
                    <label for="success-popup" class="btn btn-sm btn-success">Close</label>
                </div>
            </div>
        </div>

        <!-- Auto-close after 5 seconds -->
        <script>
            setTimeout(function() {
                document.getElementById('success-popup').checked = false;
            }, 1500);
        </script>
    @endif

    @if (session('error'))
        <!-- Modal -->
        <input type="checkbox" id="error-popup" class="modal-toggle" checked />
        <div class="modal">
            <div class="modal-box bg-red-100 text-red-700">
                <!-- Icon and Message -->
                <div class="flex items-center mb-4">
                    <svg class="w-6 h-6 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                    <h2 class="font-semibold text-lg">Error!</h2>
                </div>

                <p>{{ session('error') }}</p>

                <!-- Close Button -->
                <div class="modal-action">
                    <label for="error-popup" class="btn btn-sm btn-error">Close</label>
                </div>
            </div>
        </div>

        <!-- Auto-close after 5 seconds -->
        <script>
            setTimeout(function() {
                document.getElementById('error-popup').checked = false;
            }, 1500);
        </script>
    @endif


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
                @if (Auth::check())
                    {{-- Content for authenticated users --}}
                    <li class="flex flex-row gap-3 ml-3">
                        <a href="{{ route('profile', Auth::user()->name) }}"
                            class="text-blue-700 hover:text-primary cursor-pointer">Profile</a>
                        <form method="POST" action="{{ route('logout') }}" id="logout-form">
                            @csrf
                            <a href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="text-error hover:text-primary cursor-pointer">
                                Logout
                            </a>
                        </form>
                    </li>
                @else
                    {{-- Content for guests --}}
                    <li class="flex flex-row gap-3 ml-3">
                        <a href="{{ route('login') }}" class="btn btn-primary btn-sm">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-secondary btn-sm">Register</a>
                    </li>
                @endif
            </ul>

        </div>
    </div>

    @yield('content')

    <x-partial.footer />

</body>

</html>
