@extends('layouts.guest')
@section('content')
    <section class="bg-center h-96" style="background-image: url('https://images.contentstack.io/v3/assets/blt1306150c2c4003bc/bltab1351a691953b85/63e05e4590fb3569e47fb4c3/00-what-to-see-and-do-in-bali-getty-cropped.jpg');">
        <div class="flex justify-center items-center h-full bg-black bg-opacity-50 text-center text-white">
            <div>
                <h2 class="text-4xl font-bold">Hubungi Kami</h2>
                <p class="mt-4 text-lg">Kami siap membantu Anda merencanakan perjalanan impian. Jangan ragu untuk menghubungi
                    kami!</p>
            </div>
        </div>
    </section>

    <section id="formKontak" class="py-12 bg-white">
        <div class="container mx-auto text-center mb-8">
            <h2 class="text-3xl font-semibold mb-4">Formulir Kontak</h2>
            <p class="text-gray-600 mb-12">Isi formulir di bawah ini dan tim kami akan segera menghubungi Anda.</p>
        </div>
        <div class="max-w-4xl mx-auto">
            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label for="nama" class="block text-lg font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" class="input input-bordered w-full mt-2"
                        placeholder="Masukkan nama lengkap Anda" required>
                </div>

                <div>
                    <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="input input-bordered w-full mt-2"
                        placeholder="Masukkan email Anda" required>
                </div>

                <div>
                    <label for="pesan" class="block text-lg font-medium text-gray-700">Pesan</label>
                    <textarea id="pesan" name="pesan" class="textarea textarea-bordered w-full mt-2" placeholder="Tulis pesan Anda"
                        rows="4" required></textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary w-full py-3">Kirim Pesan</button>
                </div>
            </form>
        </div>
    </section>
@endsection
