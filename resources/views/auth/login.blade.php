<!DOCTYPE html>
<html lang="id" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')


    <title>Masuk | Travela</title>
</head>

<body class="bg-gray-100">
    <!-- Kontainer Form Login -->
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-sm p-8 bg-white shadow-lg rounded-lg">
            <h2 class="text-3xl font-semibold text-center mb-6">Masuk ke Travela</h2>

            <!-- Form Login -->
            <form action="/login" method="POST">
                @csrf
                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                        class="w-full p-3 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        placeholder="contoh@email.com">
                    @error('email')
                        <div class="text-xs text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Kata Sandi -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-600">Kata Sandi</label>
                    <input type="password" id="password" name="password" required
                        class="w-full p-3 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        placeholder="Kata sandi Anda">
                    @error('password')
                        <div class="text-xs text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Tombol Login -->
                <button type="submit"
                    class="w-full py-3 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Masuk
                </button>
            </form>

            <!-- Link Daftar -->
            <div class="mt-4 text-center">
                <p class="text-sm text-gray-500">Belum punya akun? <a href="/register"
                        class="text-blue-500 hover:text-blue-600">Buat akun</a></p>
            </div>
        </div>
    </div>
    <x-partial.footer />
</body>

</html>
