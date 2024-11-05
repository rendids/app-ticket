@extends('layouts.guest')

@section('content')
    <section class="hero py-20 h-screen">
        <div class="container mx-auto flex items-center justify-between px-4 md:px-16">
            <!-- Teks dan Tombol di Kiri -->
            <div class="w-full md:w-1/2 text-left">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight text-gray-800 mb-6">
                    Temukan Destinasi Impianmu, Pesan Tiket Wisata Sekarang!
                </h1>
                <p class="text-lg md:text-xl mb-8 text-gray-600">
                    Jelajahi tempat wisata terbaik di Indonesia, nikmati pengalaman seru, dan pesan tiket dengan mudah
                    langsung dari ponselmu.
                </p>
                <div class="flex gap-6">
                    <a href="#pesan-tiket" class="btn btn-primary text-lg px-6 py-3">Pesan Tiket Sekarang</a>
                    <a href="#destinasi" class="btn btn-secondary text-lg px-6 py-3">Jelajahi Destinasi</a>
                </div>
            </div>
            <div class="hidden md:block w-1/2">
                <img src="{{ asset('hero.svg') }}" alt="Ilustrasi Destinasi" class="w-full h-auto rounded-lg" />
            </div>
        </div>
    </section>

    
@endsection
