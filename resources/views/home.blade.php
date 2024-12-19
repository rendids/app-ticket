@extends('layouts.guest')

@section('content')
    <section class="hero min-h-screen"
        style="background-image: url('https://images.contentstack.io/v3/assets/blt1306150c2c4003bc/bltab1351a691953b85/63e05e4590fb3569e47fb4c3/00-what-to-see-and-do-in-bali-getty-cropped.jpg');">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Selamat Datang di Destinasi Wisata Kami</h1>
                <p class="mb-5">Temukan keindahan alam dan budaya yang menakjubkan di setiap sudut.</p>
                <a href="#destinasi" class="btn btn-primary">Jelajahi Sekarang</a>
            </div>
        </div>
    </section>


    <section id="langkah-pemesanan" class="py-12 bg-gray-50">
        <div class="container mx-auto text-center mb-8">
            <h2 class="text-3xl font-semibold">Langkah Pemesanan</h2>
            <p class="text-gray-600 mb-12">Ikuti langkah-langkah mudah untuk memesan paket wisata favorit Anda.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-5 container mx-auto">

            <!-- Langkah 1 -->
            <div class="card bg-white shadow-xl rounded-2xl overflow-hidden transform hover:scale-105 transition-all duration-300">
                <div class="card-body p-6 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-blue-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <h3 class="text-xl font-semibold mb-2">Pilih Paket Wisata</h3>
                    <p class="text-gray-600">Pilih paket wisata yang sesuai dengan keinginan dan kebutuhan liburan Anda.</p>
                </div>
            </div>

            <!-- Langkah 2 -->
            <div class="card bg-white shadow-xl rounded-2xl overflow-hidden transform hover:scale-105 transition-all duration-300">
                <div class="card-body p-6 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-blue-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l9 9 9-9" />
                    </svg>
                    <h3 class="text-xl font-semibold mb-2">Isi Data Pemesanan</h3>
                    <p class="text-gray-600">Isi data diri Anda dengan lengkap dan akurat untuk proses pemesanan yang lancar.</p>
                </div>
            </div>

            <!-- Langkah 3 -->
            <div class="card bg-white shadow-xl rounded-2xl overflow-hidden transform hover:scale-105 transition-all duration-300">
                <div class="card-body p-6 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-blue-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14M5 12h14" />
                    </svg>
                    <h3 class="text-xl font-semibold mb-2">Pembayaran</h3>
                    <p class="text-gray-600">Lakukan pembayaran untuk mengonfirmasi pemesanan Anda. Kami menyediakan berbagai metode pembayaran.</p>
                </div>
            </div>

        </div>
    </section>



    <section class="py-3 bg-gray-100" id="destinasi">
        <div class="container mx-auto p-6">
            <div class="container mx-auto text-center mb-8">
                <h2 class="text-3xl font-semibold">Destinasi Wisata Populer</h2>
                <p class="text-gray-600 mb-12">Temukan destinasi menarik untuk liburan Anda berikutnya.</p>
            </div>
            <div
                class="grid grid-cols-2 gap-4 @if ($destinations->isEmpty()) sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 place-items-center @else sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 @endif">

                @forelse ($destinations as $destination)
                    <a href="{{ route('destination.detail', $destination->slug) }}"
                        class="relative overflow-hidden rounded-lg block transition-transform transform hover:scale-105">
                        <img src="{{ Storage::url($destination->image) }}" alt="Bali"
                            class="w-full h-full object-cover transition-all duration-300 ease-in-out" />
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center p-4">
                            <span class="text-white text-lg font-medium uppercase text-center">{{ $destination->name }}</span>
                        </div>
                    </a>
                @empty
                    <x-empty message="Belum Ada Destinasi Yang Terdaftar Silahkan Tunggu Info Lebih Lanjut" />
                @endforelse
            </div>

        </div>
    </section>

    <section id="paket" class="py-12">
        <div class="container mx-auto text-center mb-8">
            <h2 class="text-3xl font-semibold">Paket Wisata Terpopuler</h2>
            <p class="text-gray-600 mb-12">Pilih paket wisata terbaik sesuai dengan pilihan Anda.</p>
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
    </section>


    <!-- Kontak Kami Section -->
    <section id="kontak" class="relative h-96 bg-cover bg-center"
        style="background-image: url('https://www.pesonaindo.com/wp-content/uploads/2016/04/bromo.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Overlay for better text visibility -->
        <div class="container mx-auto text-center text-white relative z-10 flex justify-center items-center h-full">
            <div>
                <h2 class="text-4xl font-bold mb-4">Hubungi Kami</h2>
                <p class="text-lg mb-6">Jika Anda memiliki pertanyaan atau membutuhkan bantuan lebih lanjut, kami siap
                    membantu Anda.</p>
                <a href="{{ route('contact') }}" class="btn btn-primary text-white px-8 py-3">Kontak Kami</a>
            </div>
        </div>
    </section>
@endsection
