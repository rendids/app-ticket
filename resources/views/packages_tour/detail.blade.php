@extends('layouts.guest')

@section('content')
<div class="container mx-auto p-6">
    <!-- Bagian Detail Paket dan Formulir Pemesanan (Dua Kolom) -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <!-- Bagian Detail Paket (Kiri) -->
        <div class="card shadow-2xl bg-base-200 rounded-2xl overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
            <h2 class="text-4xl font-semibold text-center text-indigo-600 mt-6">{{ $package->name }}</h2>
            <div class="card-body">
                <img src="{{ asset('storage/' . $package->image) }}" alt="{{ $package->name }}" class="w-full h-80 object-cover rounded-xl mb-6 shadow-lg transform transition-all duration-500 hover:scale-105">
                <p class="text-lg font-medium text-gray-700"><strong>Deskripsi:</strong> {{ $package->description }}</p>
                <p class="text-xl font-bold text-gray-900"><strong>Harga:</strong> Rp.{{ number_format($package->price, 2) }}</p>
                <p class="text-lg text-gray-600 mb-4"><strong>Durasi:</strong> {{ $package->duration }}</p>
            </div>
        </div>

        <!-- Bagian Formulir Pemesanan (Kanan) -->
        <div class="mt-8 md:mt-0">
            <h3 class="text-3xl font-semibold text-center text-indigo-600 mb-8">Pesan Paket Wisata Anda</h3>
            <div class="card shadow-xl bg-base-200 p-8 rounded-lg">
                <form action="{{ route('order.store', $package->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="tour_package_id" value="{{ $package->id }}">

<!-- Tanggal Keberangkatan -->
<div class="mb-6">
    <label for="departure_date" class="label text-lg">
        <span class="label-text">Tanggal Keberangkatan (maximal h+7 dari sekarang)</span>
    </label>
    <input type="date" id="departure_date" name="departure_date" value="{{ old('departure_date') }}" class="input input-bordered w-full p-4 rounded-md border-2 border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500" required>
    @error('departure_date')
        <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror
</div>


                    <!-- Nomer Whatsapp -->
<div class="mb-6">
    <label for="whatsapp" class="label text-lg">
        <span class="label-text">Nomor Whatsapp</span>
    </label>
    <input type="number" id="whatsapp" placeholder="contoh:6245678234" name="whatsapp" value="{{ old('whatsapp') }}" class="input input-bordered w-full p-4 rounded-md border-2 border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500" required>
    @error('whatsapp')
        <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror
</div>


                    <!-- Jumlah dan Harga Total -->
                    <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Jumlah -->
                        <div>
                            <label for="quantity" class="label text-lg">
                                <span class="label-text">Jumlah</span>
                            </label>
                            <div class="flex items-center">
                                <button type="button" id="minus-btn" class="btn btn-error text-white px-4">-</button>
                                <input type="number" readonly id="quantity" name="quantity" class="input input-bordered w-full text-center mx-2 border-2 border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500" value="1" min="1" required>
                                <button type="button" id="plus-btn" class="btn btn-success text-white px-4">+</button>
                            </div>
                        </div>

                        <!-- Harga Total -->
                        <div>
                            <label for="total_price" class="label text-lg">
                                <span class="label-text">Harga Total</span>
                            </label>
                            <input type="number" readonly id="total_price" name="total_price" class="input input-bordered w-full p-4 rounded-md border-2 border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500" value="{{ $package->price }}" required>
                        </div>
                    </div>

                    <!-- Tombol Submit -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary px-8 py-3 text-white text-lg font-semibold rounded-md shadow-md hover:bg-indigo-700 transition-all duration-300">Pesan Paket</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const minusBtn = document.getElementById("minus-btn");
        const plusBtn = document.getElementById("plus-btn");
        const quantityInput = document.getElementById("quantity");
        const totalPriceInput = document.getElementById("total_price");
        const basePrice = {{ $package->price }};

        // Memperbarui harga total
        function updateTotalPrice() {
            const quantity = parseInt(quantityInput.value) || 1; // Default ke 1 jika tidak valid
            totalPriceInput.value = basePrice * quantity;
        }

        // Fungsi tombol minus
        minusBtn.addEventListener("click", function () {
            let currentValue = parseInt(quantityInput.value) || 1;
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
                updateTotalPrice();
            }
        });

        // Fungsi tombol plus
        plusBtn.addEventListener("click", function () {
            let currentValue = parseInt(quantityInput.value) || 1;
            quantityInput.value = currentValue + 1;
            updateTotalPrice();
        });

        // Memperbarui harga saat input manual
        quantityInput.addEventListener("input", function () {
            updateTotalPrice();
        });
    });
</script>
@endsection
