@extends('layouts.guest')

@section('content')
<div class="p-5">
    <div class="container mx-auto px-5">
        <h1 class="text-4xl font-extrabold text-center text-blue-700 capitalize mb-8">Order Paket Wisata</h1>

        <!-- Informasi Paket -->
        <div class="bg-white p-6 rounded-lg shadow-xl mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Paket Wisata: {{ $package->name }}</h2>
            <p class="text-gray-600 mb-4">{{ $package->description }}</p>
            <div class="flex items-center justify-between mb-4">
                <span class="text-lg font-bold text-blue-600">Rp{{ number_format($package->price, 0, ',', '.') }}</span>
                <span class="text-sm text-gray-500">{{ $package->duration }}</span>
            </div>
        </div>

        <!-- Form Order -->
        <div class="bg-white p-6 rounded-lg shadow-xl">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Masukkan Detail Order</h3>

            <!-- Form Input -->
            {{-- <form action="{{ route('order.process') }}" method="POST"> --}}
                @csrf

                <!-- Nama Pemesan -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Nama Pemesan</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan Nama Pemesan" required>
                    @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Email Pemesan -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email Pemesan</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan Email Pemesan" required>
                    @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Alamat -->
                <div class="mb-4">
                    <label for="address" class="block text-gray-700 font-semibold mb-2">Alamat</label>
                    <textarea id="address" name="address" rows="4" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan Alamat" required>{{ old('address') }}</textarea>
                    @error('address') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Tanggal Keberangkatan -->
                <div class="mb-4">
                    <label for="departure_date" class="block text-gray-700 font-semibold mb-2">Tanggal Keberangkatan</label>
                    <input type="date" id="departure_date" name="departure_date" value="{{ old('departure_date') }}" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    @error('departure_date') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Jumlah Pesanan -->
                <div class="mb-4">
                    <label for="quantity" class="block text-gray-700 font-semibold mb-2">Jumlah Pesanan</label>
                    <input type="number" id="quantity" name="quantity" value="{{ old('quantity', 1) }}" min="1" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan Jumlah Pesanan" required onchange="updateTotalPrice()">
                    @error('quantity') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Total Harga -->
                <div class="mb-4">
                    <label for="total_price" class="block text-gray-700 font-semibold mb-2">Total Harga</label>
                    <input type="text" id="total_price" name="total_price" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="Rp{{ number_format($package->price * old('quantity', 1), 0, ',', '.') }}" readonly>
                </div>

                <!-- Button Order -->
                <button type="submit" class="w-full py-3 px-6 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-300">Konfirmasi Order</button>
            </form>
        </div>
    </div>
</div>

<script>
    // Update the total price dynamically based on quantity input
    function updateTotalPrice() {
        const quantity = document.getElementById('quantity').value;
        const price = {{ $package->price }};
        const totalPrice = quantity * price;
        document.getElementById('total_price').value = 'Rp' + totalPrice.toLocaleString();
    }
</script>
@endsection
