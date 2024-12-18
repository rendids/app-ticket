@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Destinasi</h3>
                <div class="card-tools">
                    <a href="{{ route('admin.destination.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Tambah Destinasi
                    </a>
                </div>
            </div>

            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success mt-2">{{ session('success') }}</div>
                @endif

                <table class="table table-bordered mt-3">
                    <thead>
                        <tr class="text-center">
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Lokasi</th>
                            <th>Gambar</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($destinations as $destination)
                            <tr class="text-center">
                                <td>
                                    {{ $destination->name }}</td>
                                <td>{{ Str::limit($destination->description, 100) }}</td>
                                <td>{{ $destination->location }}</td>
                                <td>
                                    <img src="{{ Storage::url($destination->image) }}" alt="Package Image" class="img-fluid"
                                        style="max-width: 25%;">
                                </td>
                                <td>
                                    <div class="btn-group d-flex gap-2">
                                        <a href="{{ route('admin.destination.edit', $destination->id) }}"
                                            class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('admin.destination.destroy', $destination->id) }}"
                                            method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this item?')">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="5">
                                <x-empty message="Belum Ada Destinasi, Tambahkan Terlebih Dahulu" />
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
