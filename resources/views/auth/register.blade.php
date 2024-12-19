<!DOCTYPE html>
<html lang="id" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')

    <title>Daftar | Travela</title>
</head>

<body class="bg-gray-100">

    <!-- Kontainer Form Daftar -->
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-sm p-8 bg-white shadow-lg rounded-lg">
            <h2 class="text-3xl font-semibold text-center mb-6">Buat Akun Baru</h2>

            <!-- Form Daftar -->
            <form action="{{ route('register.action') }}" method="POST">
                @csrf
                <!-- Nama Lengkap -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-600">Nama Lengkap</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required class="w-full p-3 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Nama lengkap Anda">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full p-3 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="contoh@email.com">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Kata Sandi -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-600">Kata Sandi</label>
                    <input type="password" id="password" name="password" required class="w-full p-3 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Buat kata sandi">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Konfirmasi Kata Sandi -->
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-600">Konfirmasi Kata Sandi</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required class="w-full p-3 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Konfirmasi kata sandi Anda">
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tombol Daftar -->
                <button type="submit" class="w-full py-3 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Daftar
                </button>
            </form>

            <!-- Link Login -->
            <div class="mt-4 text-center">
                <p class="text-sm text-gray-500">Sudah punya akun? <a href="/login" class="text-blue-500 hover:text-blue-600">Masuk</a></p>
            </div>
        </div>
    </div>
    <x-partial.footer />
</body>

</html>
