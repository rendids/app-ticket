@extends('layouts.guest')

@section('content')
    <div class="container mx-auto px-6 py-10">
        <div class="p-8 mx-auto">
            <h1 class="text-4xl font-bold text-gray-800 mb-6 text-center">Profil Pengguna</h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mb-8">

                <!-- Informasi Pengguna -->
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800 mb-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700 mr-3" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        Informasi Pengguna
                    </h2>
                    <form action="{{ route('profile.update') }}" method="POST" class="space-y-4">
                        @csrf
                        @method('PUT')
                        <div class="space-y-4">
                            <div>
                                <label for="name" class="text-lg text-gray-700">Nama</label>
                                <input type="text" name="name" id="name" value="{{ Auth::user()->name }}"
                                    class="mt-2 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="email" class="text-lg text-gray-700">Email</label>
                                <input type="email" name="email" id="email" value="{{ Auth::user()->email }}"
                                    class="mt-2 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>

                        <div class="mt-6 flex justify-end">
                            <button type="submit"
                                class="bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-700 transition">Simpan
                                Perubahan</button>
                        </div>
                    </form>
                </div>

                <!-- Ganti Password -->
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800 mb-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700 mr-3" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        Ganti Password
                    </h2>
                    <form action="{{ route('password.update') }}" method="POST" class="space-y-4">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="current_password" class="text-lg text-gray-700">Password Lama</label>
                            <input type="password" name="current_password" id="current_password"
                                class="mt-2 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="new_password" class="text-lg text-gray-700">Password Baru</label>
                            <input type="password" name="new_password" id="new_password"
                                class="mt-2 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="new_password_confirmation" class="text-lg text-gray-700">Konfirmasi Password Baru</label>
                            <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                                class="mt-2 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <div class="mt-6 flex justify-end">
                            <button type="submit"
                                class="bg-green-600 text-white py-2 px-6 rounded-lg hover:bg-green-700 transition">Ganti
                                Password</button>
                        </div>
                    </form>
                </div>

            </div>

            <!-- Pesanan Selesai -->
            <div>
                <h2 class="text-3xl font-semibold text-gray-800 mb-6 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700 mr-3" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    Pesanan
                </h2>

                <!-- Tabel Daftar Pesanan -->
                <div class="overflow-x-auto bg-white border border-gray-200 rounded-lg p-6 shadow-lg">
                    <table class="min-w-full table-auto">
                        <thead>
                            <tr class="bg-gray-100 text-gray-700">
                                <th class="px-4 py-2 border">No</th>
                                <th class="px-4 py-2 border">ID Pesanan</th>
                                <th class="px-4 py-2 border">Tanggal</th>
                                <th class="px-4 py-2 border">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($purchases as $purchase)
                                <tr class="bg-white text-gray-800 text-center">
                                    <td class="px-4 py-2 border">{{ $loop->iteration }}</td> <!-- Menampilkan nomor urut -->
                                    <td class="px-4 py-2 border">{{ $purchase->id }}</td> <!-- ID pesanan -->
                                    <td class="px-4 py-2 border">{{ $purchase->purchase_date }}</td> <!-- Tanggal pembelian -->
                                    <td class="px-4 py-2 border">{{ $purchase->status }}</td> <!-- Status pembelian -->
                                </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
