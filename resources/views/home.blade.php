@extends('layouts.guest')

@section('content')
<section class="hero min-h-screen" style="background-image: url('https://images.contentstack.io/v3/assets/blt1306150c2c4003bc/bltab1351a691953b85/63e05e4590fb3569e47fb4c3/00-what-to-see-and-do-in-bali-getty-cropped.jpg');">
    <div class="hero-overlay bg-opacity-60"></div>
    <div class="hero-content text-center text-neutral-content">
      <div class="max-w-md">
        <h1 class="mb-5 text-5xl font-bold">Selamat Datang di Destinasi Wisata Kami</h1>
        <p class="mb-5">Temukan keindahan alam dan budaya yang menakjubkan di setiap sudut.</p>
        <button class="btn btn-primary">Jelajahi Sekarang</button>
      </div>
    </div>
  </section>

    <section class="py-3 bg-gray-100">
        <div class="container mx-auto p-6">
            <div class="container mx-auto text-center mb-8">
                <h2 class="text-3xl font-semibold mb-4">Destinasi Wisata Populer</h2>
                <p class="text-gray-600 mb-12">Temukan destinasi menarik untuk liburan Anda berikutnya.</p>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                <!-- Destinasi 1: Bali -->
                <a href="https://example.com/bali"
                    class="relative overflow-hidden rounded-lg block transition-transform transform hover:scale-105">
                    <img src="https://www.travelandleisure.com/thmb/KE0vV7K8Ngvc_7j-_FGx_jCUdCM=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/TAL-bali-lead-image-BALITG1223-101f43c88c044081a4558b737afbd094.jpg"
                        alt="Bali" class="w-full h-full object-cover transition-all duration-300 ease-in-out" />
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center p-4">
                        <span class="text-white text-xl font-bold">Bali</span>
                        <p class="text-white text-sm text-center mt-2">Pantai indah dan budaya yang kaya.</p>
                    </div>
                </a>

                <!-- Destinasi 2: Yogyakarta -->
                <a href="https://example.com/yogyakarta"
                    class="relative overflow-hidden rounded-lg block transition-transform transform hover:scale-105">
                    <img src="https://perizinan.jogjakota.go.id/upload/kontent/1dcb097adb548963693a34b5fdcc4a6b_Jogja.jpg"
                        alt="Yogyakarta" class="w-full h-full object-cover transition-all duration-300 ease-in-out" />
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center p-4">
                        <span class="text-white text-xl font-bold">Yogyakarta</span>
                        <p class="text-white text-sm text-center mt-2">Kota budaya dengan sejarah yang mendalam.</p>
                    </div>
                </a>

                <!-- Destinasi 3: Raja Ampat -->
                <a href="https://example.com/raja-ampat"
                    class="relative overflow-hidden rounded-lg block transition-transform transform hover:scale-105">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/12/d6/a1/76/pemandangan-pulau2-kecil.jpg?w=800&h=-1&s=1"
                        alt="Raja Ampat" class="w-full h-full object-cover transition-all duration-300 ease-in-out" />
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center p-4">
                        <span class="text-white text-xl font-bold">Raja Ampat</span>
                        <p class="text-white text-sm text-center mt-2">Surga bawah laut dengan keanekaragaman hayati.</p>
                    </div>
                </a>

                <!-- Destinasi 4: Jakarta -->
                <a href="https://example.com/jakarta"
                    class="relative overflow-hidden rounded-lg block transition-transform transform hover:scale-105">
                    <img src="https://media.istockphoto.com/id/490673902/photo/roundabout-hi-jakarta-landmark-at-night.jpg?s=612x612&w=0&k=20&c=bv93EvZ7xJSCxfPXFbHKW_3VMi3lPmMB4Yym8fh_bfE="
                        alt="Jakarta" class="w-full h-full object-cover transition-all duration-300 ease-in-out" />
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center p-4">
                        <span class="text-white text-xl font-bold">Jakarta</span>
                        <p class="text-white text-sm text-center mt-2">Kota metropolitan dengan kehidupan urban yang
                            dinamis.</p>
                    </div>
                </a>

                <!-- Destinasi 5: Lombok -->
                <a href="https://example.com/lombok"
                    class="relative overflow-hidden rounded-lg block transition-transform transform hover:scale-105">
                    <img src="https://discoveryourindonesia.com/wp-content/uploads/2016/10/Lombok-1140x550.jpg"
                        alt="Lombok" class="w-full h-full object-cover transition-all duration-300 ease-in-out" />
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center p-4">
                        <span class="text-white text-xl font-bold">Lombok</span>
                        <p class="text-white text-sm text-center mt-2">Keindahan alam dengan pantai dan gunung yang
                            menakjubkan.</p>
                    </div>
                </a>

                <!-- Destinasi 6: Bandung -->
                <a href="https://example.com/bandung"
                    class="relative overflow-hidden rounded-lg block transition-transform transform hover:scale-105">
                    <img src="https://cekunganbandung.jabarprov.go.id/wp-content/uploads/2022/02/gesat-2.jpg" alt="Bandung"
                        class="w-full h-full object-cover transition-all duration-300 ease-in-out" />
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center p-4">
                        <span class="text-white text-xl font-bold">Bandung</span>
                        <p class="text-white text-sm text-center mt-2">Kota dengan suhu sejuk dan suasana yang nyaman.</p>
                    </div>
                </a>

                <!-- Destinasi 7: Labuan Bajo -->
                <a href="https://example.com/labuan-bajo"
                    class="relative overflow-hidden rounded-lg block transition-transform transform hover:scale-105">
                    <img src="https://res.klook.com/image/upload/Mobile/City/rv76yqukp2hey0fckh99.jpg" alt="Labuan Bajo"
                        class="w-full h-full object-cover transition-all duration-300 ease-in-out" />
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center p-4">
                        <span class="text-white text-xl font-bold">Labuan Bajo</span>
                        <p class="text-white text-sm text-center mt-2">Gerbang menuju Taman Nasional Komodo dan alam yang
                            eksotis.</p>
                    </div>
                </a>

                <!-- Destinasi 8: Surabaya -->
                <a href="https://example.com/surabaya"
                    class="relative overflow-hidden rounded-lg block transition-transform transform hover:scale-105">
                    <img src="https://lh3.googleusercontent.com/proxy/qil5E-cZy2nRc23Hux3DasP9UPbswbWAQjYFQV7fFlzBETE08_Dp5__5kY9-L1nxEWTo-DPmok9ststZyjpYcfwPa6QD8XIqPup9K0-vU6mJ-kGrlfiLyn9MV7Y1IkqCvZivIFkmZ52XvdOt7pl4lDlr7UBI2UOX4fZv_HkiTcnX569g6PBY"
                        alt="Surabaya" class="w-full h-full object-cover transition-all duration-300 ease-in-out" />
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center p-4">
                        <span class="text-white text-xl font-bold">Surabaya</span>
                        <p class="text-white text-sm text-center mt-2">Kota pahlawan dengan banyak destinasi belanja.</p>
                    </div>
                </a>

                <!-- Destinasi 9: Medan -->
                <a href="https://example.com/medan"
                    class="relative overflow-hidden rounded-lg block transition-transform transform hover:scale-105">
                    <img src="https://media.istockphoto.com/id/183981973/id/foto/masjidil-haram.jpg?s=612x612&w=0&k=20&c=qXvnb6ovRMya6d5uKuNRSRAPqW7OXHUWVIq3fQrbkec="
                        alt="Medan" class="w-full h-full object-cover transition-all duration-300 ease-in-out" />
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center p-4">
                        <span class="text-white text-xl font-bold">Medan</span>
                        <p class="text-white text-sm text-center mt-2">Kota dengan kekayaan kuliner dan budaya Batak.</p>
                    </div>
                </a>
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
    <section id="kontak" class="relative h-96 bg-cover bg-center" style="background-image: url('https://www.pesonaindo.com/wp-content/uploads/2016/04/bromo.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Overlay for better text visibility -->
        <div class="container mx-auto text-center text-white relative z-10 flex justify-center items-center h-full">
            <div>
                <h2 class="text-4xl font-bold mb-4">Hubungi Kami</h2>
                <p class="text-lg mb-6">Jika Anda memiliki pertanyaan atau membutuhkan bantuan lebih lanjut, kami siap membantu Anda.</p>
                <a href="{{ route('contact') }}" class="btn btn-primary text-white px-8 py-3">Kontak Kami</a>
            </div>
        </div>
    </section>
@endsection
