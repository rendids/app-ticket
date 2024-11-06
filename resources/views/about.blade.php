@extends('layouts.guest')

@section('content')
<section class="bg-center h-96" style="background-image: url('https://images.contentstack.io/v3/assets/blt1306150c2c4003bc/bltab1351a691953b85/63e05e4590fb3569e47fb4c3/00-what-to-see-and-do-in-bali-getty-cropped.jpg');">
    <div class="flex justify-center items-center h-full bg-black bg-opacity-50 text-center text-white">
        <div>
            <h2 class="text-4xl font-bold">Tentang Travela</h2>
            <p class="mt-4 text-lg">Kenali lebih dekat perjalanan kami dalam memberikan pengalaman wisata terbaik.</p>
        </div>
    </div>
</section>

<div class="container mx-auto p-6">
    <h1 class="text-4xl font-bold text-center mb-6">Selamat Datang di Travela!</h1>
    <p class="text-lg text-center mb-4">Travela adalah aplikasi inovatif yang dirancang untuk memudahkan Anda dalam menjelajahi keindahan dan kekayaan budaya Indonesia. Kami percaya bahwa setiap perjalanan adalah pengalaman yang berharga, dan kami berkomitmen untuk membantu Anda menemukan destinasi wisata terbaik, membeli tiket dengan mudah, serta merencanakan paket liburan yang tak terlupakan.</p>

    <h2 class="text-3xl font-semibold mb-4">Visi Kami</h2>
    <p class="mb-4">Visi kami adalah menjadi platform terdepan dalam industri pariwisata Indonesia, yang menghubungkan wisatawan dengan berbagai destinasi menarik, pengalaman unik, dan layanan terbaik. Kami ingin setiap orang dapat merasakan keindahan alam dan budaya Nusantara dengan cara yang mudah dan menyenangkan.</p>

    <h2 class="text-3xl font-semibold mb-4">Misi Kami</h2>
    <ul class="list-disc list-inside mb-4">
        <li class="mb-2">Memberikan Akses Mudah: Menyediakan platform yang user-friendly untuk memudahkan pengguna dalam mencari dan membeli tiket wisata serta paket liburan.</li>
        <li class="mb-2">Mendukung Destinasi Lokal: Bekerja sama dengan penyedia layanan lokal untuk mempromosikan destinasi wisata yang mungkin belum banyak dikenal, sehingga membantu perekonomian lokal.</li>
        <li class="mb-2">Menciptakan Pengalaman Berkesan: Menawarkan berbagai pilihan paket wisata yang dirancang untuk memenuhi kebutuhan dan preferensi setiap wisatawan, dari petualangan alam hingga pengalaman budaya.</li>
    </ul>

    <h2 class="text-3xl font-semibold mb-4">Tim Kami</h2>
    <p class="mb-4">Tim Travela terdiri dari para profesional yang berpengalaman di bidang pariwisata, teknologi, dan layanan pelanggan. Kami memiliki semangat yang sama untuk menjadikan setiap perjalanan Anda menjadi pengalaman yang luar biasa. Kami selalu siap membantu Anda dengan informasi dan dukungan yang Anda butuhkan.</p>

    <h2 class="text-3xl font-semibold mb-4">Bergabunglah dengan Kami</h2>
    <p class="mb-4">Kami mengundang Anda untuk menjelajahi keindahan Nusantara bersama kami. Temukan destinasi impian Anda, nikmati kemudahan dalam membeli tiket, dan rencanakan liburan yang tak terlupakan. Bergabunglah dengan komunitas Travela dan mulailah petualangan Anda hari ini!</p>

    <h2 class="text-3xl font-semibold mb-4">Hubungi Kami</h2>
    <p class="mb-4">Jika Anda memiliki pertanyaan atau ingin mengetahui lebih lanjut tentang layanan kami, jangan ragu untuk menghubungi kami di <a href="{{ route('contact') }}" class="text-primary">kontak</a> atau melalui media sosial kami. Kami siap membantu Anda!</p>
</div>
@endsection
