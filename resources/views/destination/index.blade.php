@extends('layouts.guest')


@section('content')
    <section class="bg-center h-96"
        style="background-image: url('https://images.contentstack.io/v3/assets/blt1306150c2c4003bc/bltab1351a691953b85/63e05e4590fb3569e47fb4c3/00-what-to-see-and-do-in-bali-getty-cropped.jpg');">
        <div class="flex justify-center items-center h-full bg-black bg-opacity-50 text-center text-white">
            <div>
                <h2 class="text-4xl font-bold">Temukan Seluruh Destinasi Wisata</h2>
                <p class="mt-8 text-lg">Jelajahi berbagai tempat wisata terbaik di Indonesia!</p>
            </div>
        </div>
    </section>

    <section class="py-3 bg-gray-100">
        <div class="container mx-auto p-6">
            <div class="container mx-auto text-center mb-8">
                <h2 class="text-3xl font-semibold mb-4">Destinasi Wisata Menarik</h2>
                <p class="text-gray-600 mb-12">Jelajahi berbagai destinasi menarik untuk liburan tak terlupakan Anda.</p>
            </div>

            <div
                class="grid grid-cols-2 gap-4 @if ($destinations->isEmpty()) sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 place-items-center @else sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 @endif">

                @forelse ($destinations as $destination)
                    <a href="{{ route('destination.detail', $destination->slug) }}"
                        class="relative overflow-hidden rounded-lg block transition-transform transform hover:scale-105">
                        <img src="{{ Storage::url($destination->image) }}" alt="Bali"
                            class="w-full h-full object-cover transition-all duration-300 ease-in-out" />
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center p-4">
                            <span
                                class="text-white text-lg font-medium uppercase text-center">{{ $destination->name }}</span>
                        </div>
                    </a>
                @empty
                    <x-empty message="Belum Ada Destinasi Yang Terdaftar Silahkan Tunggu Info Lebih Lanjut" />
                @endforelse
            </div>
        </div>
    </section>
@endsection
