@extends('layouts.app')

@section('content')
    <!-- Main content -->
    <section class="content m-3">
        <div class="container-fluid">
            <!-- Flash Message (if any) -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Row to display orders -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Pesanan</h3>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Pesanan</th>
                                        <th>Status</th>
                                        <th>Tanggal Pembelian</th>
                                        <th>Tanggal Keberangkatan</th>
                                        <th>Jumlah Tiket</th>
                                        <th>Harga Total</th>
                                        <th>Nomor Telepon</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Loop for orders -->
                                    @forelse ($purchases as $order)
                                        <tr class="text-center">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $order->user->name }}</td>
                                            <td>{{ $order->tourPackage->name }}</td>
                                            <td>
                                                <!-- Display status (Pending, Accepted, or Rejected) -->
                                                @if ($order->status == 'Pending')
                                                    <span class="badge bg-warning">Menunggu</span>
                                                @else
                                                    <span class="badge bg-danger">Ditolak</span>
                                                @endif
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($order->purchase_date)->format('d-m-Y H:i') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($order->departure_date)->format('d-F-Y') }}</td>
                                            <td>{{ $order->quantity }}</td> <!-- Jumlah Pesanan -->
                                            <td>Rp {{ number_format($order->total_price, 0, ',', '.') }}</td>
                                            <!-- Harga Total -->
                                            <td>{{ $order->phone }}</td> <!-- Nomor Telepon -->
                                            <td>
                                                @if ($order->status !== 'Rejected')
                                                    <form action="{{ route('admin.order.accept', $order->id) }}"
                                                        method="POST" style="display: inline;">
                                                        @method('put')
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-success btn-sm">Terima</button>
                                                    </form>

                                                    @if ($order->status === 'Pending')
                                                        <!-- Tombol "Tolak" hanya ditampilkan jika status 'pending' -->
                                                        <form action="{{ route('admin.order.reject', $order->id) }}"
                                                            method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('put')

                                                            <button type="submit"
                                                                class="btn btn-danger btn-sm">Tolak</button>
                                                        </form>
                                                    @endif
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="10">
                                                <x-empty message="Belum Ada Pesanan Yang Harus Di Konfirmasi" />
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
