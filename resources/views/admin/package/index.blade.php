@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Daftar Paket</h4>
            <a href="{{ route('admin.package.create') }}" class="btn btn-primary btn-sm mb-3">Tambah Paket</a>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Paket</th>
                            <th>Harga</th>
                            <th>Durasi</th>
                            <th>Destinasi</th>
                            <th>Tanggal Dibuat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tourPackages as $package)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $package->name }}</td>
                                <td>{{ number_format($package->price, 0, ',', '.') }}</td>
                                <td>{{ $package->duration }} bulan</td>
                                <td>{{ $package->destination->name ?? 'Unknown' }}</td>
                                <td>{{ $package->created_at->format('d-m-Y') }}</td>
                                <td>
                                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#detailModal{{ $package->id }}">Lihat Detail</button>
                                    <a href="{{ route('admin.package.edit', $package->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.package.destroy', $package->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this item?')">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                                <!-- Detail Modal -->
                                <x-organisms.modal title="Detail Paket {{ $package->name }}" id="detailModal{{ $package->id }}">
                                    <h5>{{ $package->name }}</h5>
                                    <p><strong>Harga:</strong> {{ number_format($package->price, 0, ',', '.') }}</p>
                                    <p><strong>Durasi:</strong> {{ $package->duration }} bulan</p>
                                    <p><strong>Deskripsi:</strong> {{ $package->description }}</p>
                                    <p><strong>Destinasi:</strong> {{ $package->destination->name }}</p>
                                    @if($package->image)
                                        <p><strong>Image:</strong></p>
                                        <img src="{{ Storage::url($package->image) }}" alt="Package Image" style="max-width: 200px;">
                                    @endif
                                </x-organisms.modal>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
