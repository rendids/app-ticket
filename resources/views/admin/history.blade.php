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
                            <h3 class="card-title">Riwayat Pesanan yang Diterima</h3>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>ID Pesanan</th>
                                        <th>Nama Pemesan</th>
                                        <th>Tanggal Pesanan</th>
                                        <th>Status</th>
                                        <th>Tanggal Keberangkatan</th>
                                        <th>Jumlah Tiket</th>
                                        <th>Harga Total</th>
                                        <th>Nomor Telepon</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($orders as $index => $order)
                                        <tr class="text-center">
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $order->id }}</td>
                                            <td>{{ $order->user->name }}</td>
                                            <td>{{ $order->created_at->format('d-m-Y H:i') }}</td>
                                            <td>
                                                <span class="badge bg-success">Diterima</span>
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($order->departure_date)->format('d-F-Y') }}</td>
                                            <td>{{ $order->quantity }}</td>
                                            <td>Rp {{ number_format($order->total_price, 0, ',', '.') }}</td>
                                            <td>{{ $order->phone }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="10">
                                                <x-empty message="Tidak ada pesanan yang diterima." />
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
