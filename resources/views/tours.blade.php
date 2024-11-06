@extends('layouts.guest')


@section('content')
<section class=" bg-center h-96" style="background-image: url('https://images.contentstack.io/v3/assets/blt1306150c2c4003bc/bltab1351a691953b85/63e05e4590fb3569e47fb4c3/00-what-to-see-and-do-in-bali-getty-cropped.jpg');">
    <div class="flex justify-center items-center h-full bg-black bg-opacity-50 text-center text-white">
        <div>
            <h2 class="text-4xl font-bold">Paket Wisata Terbaik di Indonesia</h2>
            <p class="mt-8 text-lg">Temukan paket tur yang sesuai dengan keinginanmu dan jelajahi keindahan Indonesia!</p>
        </div>
    </div>
</section>


    <section id="paket" class="py-12">
        <div class="container mx-auto text-center mb-8">
            <h2 class="text-3xl font-semibold mb-4">Paket Wisata Eksklusif</h2><br>
            <p class="text-gray-600 mb-12">Temukan paket wisata terbaik yang sesuai dengan kebutuhan liburan Anda.</p>
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
@endsection
