@extends('layouts.guest')
@section('content')
    <div class="p-5">
        <div class="container mx-auto px-5">
            <!-- Detail Destinasi -->
            <h1 class="text-4xl font-extrabold text-center text-blue-700 capitalize mb-8">{{ $destination->name }}</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <!-- Gambar Lokasi -->
                <div class="relative group">
                    <img src="{{ Storage::url($destination->image) }}" alt="{{ $destination->name }}"
                        class="rounded-3xl shadow-lg w-full object-cover h-96 transition-all duration-300 transform group-hover:scale-105 group-hover:rotate-3">
                </div>

                <!-- Detail Informasi -->
                <div class="bg-white p-8 rounded-2xl shadow-xl transform hover:scale-105 transition-all duration-300">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-500" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5 14.5 7.62 14.5 9 13.38 11.5 12 11.5z">
                            </path>
                        </svg>
                        Deskripsi
                    </h2>
                    <p class="text-gray-600 leading-relaxed mb-6">{{ $destination->description }}</p>

                    <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-green-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h11M9 21V3m0 18h12"></path>
                        </svg>
                        Lokasi
                    </h2>
                    <p class="text-gray-600 leading-relaxed">{{ $destination->location }}</p>
                </div>
            </div>

            <!-- Pembatas -->
            <div class="relative my-12">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center">
                    <span class="bg-white px-6 text-gray-500 text-2xl font-medium uppercase tracking-widest">
                        Pilih Paket Wisata
                    </span>
                </div>
            </div>

            <!-- List Packages -->
            <div class="mt-12">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($packages as $package)
                        <div class="card bg-white shadow-xl rounded-2xl overflow-hidden transform hover:scale-105 transition-all duration-300">
                            <figure>
                                <img src="{{ Storage::url($package->image) }}" alt="{{ $package->name }}"
                                    class="w-full h-48 object-cover rounded-t-2xl">
                            </figure>
                            <div class="card-body p-6">
                                <h3 class="text-xl font-semibold mb-2">{{ $package->name }}</h3>
                                <p class="text-gray-600 mb-4">{{ \Illuminate\Support\Str::limit($package->description, 120, '..') }}</p>
                                <div class="flex items-center justify-between mb-4">
                                    <span
                                        class="text-lg font-bold text-blue-600">Rp{{ number_format($package->price, 0, ',', '.') }}</span>
                                    <span class="text-sm text-gray-500">{{ $package->duration }}</span>
                                </div>
                                <a href="{{ route('purchase.index',$package->slug ) }}" class="btn btn-primary w-full py-3 text-center text-white font-bold uppercase tracking-wide hover:bg-blue-600 transition-colors duration-300">Pesan</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
