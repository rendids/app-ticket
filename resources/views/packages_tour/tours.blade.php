@extends('layouts.guest')


@section('content')
    <section class=" bg-center h-96"
        style="background-image: url('https://images.contentstack.io/v3/assets/blt1306150c2c4003bc/bltab1351a691953b85/63e05e4590fb3569e47fb4c3/00-what-to-see-and-do-in-bali-getty-cropped.jpg');">
        <div class="flex justify-center items-center h-full bg-black bg-opacity-50 text-center text-white">
            <div>
                <h2 class="text-4xl font-bold">Paket Wisata Terbaik di Indonesia</h2>
                <p class="mt-8 text-lg">Temukan paket tur yang sesuai dengan keinginanmu dan jelajahi keindahan Indonesia!
                </p>
            </div>
        </div>
    </section>


    <section id="paket" class="py-12">
        <div class="container mx-auto text-center mb-8">
            <h2 class="text-3xl font-semibold">Paket Wisata Eksklusif</h2><br>
            <p class="text-gray-600">Temukan paket wisata terbaik yang sesuai dengan kebutuhan liburan Anda.</p>
        </div>

        <div
            class="grid grid-cols-1  gap-8 px-5 container mx-auto @if ($packages->isEmpty()) sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 place-items-
                 @else
                 sm:grid-cols-2 lg:grid-cols-3 @endif">

            @forelse ($packages as $package)
                <div
                    class="card bg-white shadow-xl rounded-2xl overflow-hidden transform hover:scale-105 transition-all duration-300">
                    <figure>
                        <img src="{{ Storage::url($package->image) }}" alt="{{ $package->name }}"
                            class="w-full h-48 object-cover rounded-t-2xl">
                    </figure>
                    <div class="card-body p-6">
                        <h3 class="text-xl font-semibold mb-2">{{ $package->name }}</h3>
                        <p class="text-gray-600 mb-4">{{ \Illuminate\Support\Str::limit($package->description, 120, '..') }}
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <span
                                class="text-lg font-bold text-blue-600">Rp{{ number_format($package->price, 0, ',', '.') }}</span>
                            <span class="text-sm text-gray-500">{{ $package->duration }}</span>
                        </div>
                        <a href="{{ route('package.detail', $package->slug) }}"
                            class="btn btn-primary w-full py-3 text-center text-white font-bold uppercase tracking-wide hover:bg-blue-600 transition-colors duration-300">Detail</a>
                    </div>
                </div>
            @empty
                <x-empty message="Belum Ada Paket Yang di Terdaftar Saat Ini Silahkan Tunggu Info Lebih Lanjut" />
            @endforelse

        </div>
        </div>
    </section>
@endsection
