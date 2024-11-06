@extends('layouts.guest')
@section('content')
<section class="bg-center h-96" style="background-image: url('https://images.contentstack.io/v3/assets/blt1306150c2c4003bc/bltab1351a691953b85/63e05e4590fb3569e47fb4c3/00-what-to-see-and-do-in-bali-getty-cropped.jpg');">
    <div class="flex justify-center items-center h-full bg-black bg-opacity-50 text-center text-white">
        <div>
            <h2 class="text-4xl font-bold">Tentang Kami</h2>
            <p class="mt-4 text-lg">Kenali lebih dekat perjalanan kami dalam memberikan pengalaman wisata terbaik.</p>
        </div>
    </div>
</section>

<section class="container mx-auto px-4 py-16">
    <div class="text-center mb-16">
        <h3 class="text-3xl font-semibold text-blue-600 mb-4">Siapa Kami?</h3>
        <p class="text-lg text-gray-700 max-w-3xl mx-auto">
            Kami adalah agen perjalanan yang telah berpengalaman lebih dari 10 tahun dalam menyediakan paket wisata di Indonesia. Kami mengutamakan kualitas dan kenyamanan, menawarkan berbagai pilihan destinasi yang menarik, serta memastikan setiap perjalanan yang Anda lakukan menjadi kenangan tak terlupakan.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <!-- Visi -->
        <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
            <h4 class="text-2xl font-semibold text-blue-600 mb-4">Visi Kami</h4>
            <p class="text-gray-600">Menjadi penyedia layanan wisata terdepan di Indonesia, dengan fokus pada kepuasan pelanggan dan keberlanjutan pariwisata lokal.</p>
        </div>

        <!-- Misi -->
        <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
            <h4 class="text-2xl font-semibold text-blue-600 mb-4">Misi Kami</h4>
            <p class="text-gray-600">Memberikan pengalaman wisata yang luar biasa dengan layanan terbaik, memastikan setiap perjalanan sesuai dengan keinginan dan harapan Anda.</p>
        </div>
    </div>

    <div class="mt-16">
        <h3 class="text-3xl font-semibold text-blue-600 text-center mb-6">Keunggulan Kami</h3>
        <p class="text-lg text-gray-700 text-center mb-8">Mengapa memilih kami? Karena kami mengutamakan kenyamanan, keamanan, dan pengalaman yang tak terlupakan untuk setiap perjalanan Anda.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Keunggulan 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                <h4 class="text-xl font-semibold text-blue-600 mb-4">Pengalaman Profesional</h4>
                <p class="text-gray-600">Dengan lebih dari 10 tahun pengalaman di industri wisata, kami memiliki tim yang ahli dalam merencanakan perjalanan yang tak terlupakan.</p>
            </div>

            <!-- Keunggulan 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                <h4 class="text-xl font-semibold text-blue-600 mb-4">Paket Wisata Personal</h4>
                <p class="text-gray-600">Setiap perjalanan yang kami tawarkan dapat disesuaikan dengan keinginan dan anggaran Anda, memberikan pengalaman yang sesuai dengan kebutuhan pribadi Anda.</p>
            </div>

            <!-- Keunggulan 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                <h4 class="text-xl font-semibold text-blue-600 mb-4">Layanan Pelanggan 24/7</h4>
                <p class="text-gray-600">Tim kami siap melayani Anda kapan saja. Kami memastikan bahwa setiap perjalanan berjalan dengan lancar dan Anda merasa nyaman sepanjang perjalanan.</p>
            </div>
        </div>
    </div>

    <div class="mt-16">
        <h3 class="text-3xl font-semibold text-blue-600 text-center mb-6">Tim Kami</h3>
        <p class="text-lg text-gray-700 text-center mb-8">Kami terdiri dari tim yang berpengalaman dan berdedikasi untuk memberikan pelayanan terbaik. Setiap anggota tim kami memiliki keahlian khusus dalam bidang pariwisata, yang siap membantu Anda merencanakan perjalanan Anda.</p>

        <div class="flex justify-center gap-8">
            <!-- Tim 1 -->
            <div class="w-40 h-40 bg-gray-200 rounded-full overflow-hidden shadow-lg">
                <img src="https://via.placeholder.com/150" alt="Tim Member" class="w-full h-full object-cover">
            </div>
            <!-- Tim 2 -->
            <div class="w-40 h-40 bg-gray-200 rounded-full overflow-hidden shadow-lg">
                <img src="https://via.placeholder.com/150" alt="Tim Member" class="w-full h-full object-cover">
            </div>
            <!-- Tim 3 -->
            <div class="w-40 h-40 bg-gray-200 rounded-full overflow-hidden shadow-lg">
                <img src="https://via.placeholder.com/150" alt="Tim Member" class="w-full h-full object-cover">
            </div>
        </div>
    </div>
</section>

@endsection
