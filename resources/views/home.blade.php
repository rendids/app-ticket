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

    <section class="py-3 bg-gray-100" id="destinasi">
        <div class="container mx-auto p-6">
            <div class="container mx-auto text-center mb-8">
                <h2 class="text-3xl font-semibold mb-4">Destinasi Wisata Populer</h2>
                <p class="text-gray-600 mb-12">Temukan destinasi menarik untuk liburan Anda berikutnya.</p>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 @if ($destinations->isEmpty()) sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 place-items-center @endif">

                @forelse ($destinations as $destination)
                    <a href="{{ route('destination.detail', $destination->slug) }}"
                        class="relative overflow-hidden rounded-lg block transition-transform transform hover:scale-105">
                        <img src="{{ Storage::url($destination->image) }}" alt="Bali"
                            class="w-full h-full object-cover transition-all duration-300 ease-in-out" />
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center p-4">
                            <span class="text-white text-xl font-bold">{{ ucwords($destination->name) }}</span>
                            <p class="text-white text-sm text-center mt-2">
                                {{ \Illuminate\Support\Str::limit($destination->description, 30, '..') }}</p>
                        </div>
                    </a>
                @empty
                    <!-- Empty state component -->
                    <x-empty message="Belum Ada Destinasi Yang di Tambahkan Silahkan Tunggu Info Lebih Lanjut" />
                @endforelse
            </div>

        </div>
    </section>

    <section id="paket" class="py-12">
        <div class="container mx-auto text-center mb-8">
            <h2 class="text-3xl font-semibold mb-4">Paket Wisata Terpopuler</h2><br>
            <p class="text-gray-600 mb-12">Pilih paket wisata terbaik sesuai dengan pilihan Anda.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-5 container mx-auto">

            <!-- Paket 1 -->
            <div class="card  bg-white shadow-lg rounded-lg overflow-hidden">
                <figure>
                    <img src="https://www.cimbniaga.co.id/content/dam/cimb/inspirasi/melasti.webp" alt="Pantai"
                        class="w-full h-48 object-cover">
                </figure>
                <div class="card-body p-4">
                    <h3 class="text-xl font-semibold mb-2">Paket Wisata Pantai Bali</h3>
                    <p class="text-gray-600 mb-4">Nikmati liburan santai di Pantai Bali, jelajahi pesona alam yang
                        menakjubkan dan budaya yang kaya.</p>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-lg font-bold text-blue-600">Rp 2.500.000</span>
                        <span class="text-sm text-gray-500">3 Hari 2 Malam</span>
                    </div>
                    <a href="#" class="btn btn-primary w-full">Pesan Sekarang</a>
                </div>
            </div>

            <!-- Paket 2 -->
            <div class="card bg-white shadow-lg rounded-lg overflow-hidden">
                <figure>
                    <img src="https://www.pesonaindo.com/wp-content/uploads/2016/04/bromo.jpg" alt="Gunung"
                        class="w-full h-48 object-cover">
                </figure>
                <div class="card-body p-4">
                    <h3 class="text-xl font-semibold mb-2">Paket Wisata Gunung Bromo</h3>
                    <p class="text-gray-600 mb-4">Rasakan sensasi mendaki Gunung Bromo dan menikmati sunrise yang memukau.
                    </p>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-lg font-bold text-blue-600">Rp 1.800.000</span>
                        <span class="text-sm text-gray-500">2 Hari 1 Malam</span>
                    </div>
                    <a href="#" class="btn btn-primary w-full">Pesan Sekarang</a>
                </div>
            </div>

            <!-- Paket 3 -->
            <div class="card bg-white shadow-lg rounded-lg overflow-hidden">
                <figure>
                    <img src="https://indonesia-az.com/wp-content/uploads/2024/04/Walking-Tour-di-Jakarta-Indonesia-A-Z.jpeg"
                        alt="Kota" class="w-full h-48 object-cover">
                </figure>
                <div class="card-body p-4">
                    <h3 class="text-xl font-semibold mb-2">Paket Wisata Jakarta City Tour</h3>
                    <p class="text-gray-600 mb-4">Jelajahi keindahan kota Jakarta, mulai dari Monas hingga Ancol.</p>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-lg font-bold text-blue-600">Rp 1.200.000</span>
                        <span class="text-sm text-gray-500">1 Hari</span>
                    </div>
                    <a href="#" class="btn btn-primary w-full">Pesan Sekarang</a>
                </div>
            </div>

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
