@extends('layouts.guest')


@section('content')
<section class="bg-center h-96" style="background-image: url('https://images.contentstack.io/v3/assets/blt1306150c2c4003bc/bltab1351a691953b85/63e05e4590fb3569e47fb4c3/00-what-to-see-and-do-in-bali-getty-cropped.jpg');">
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
@endsection
