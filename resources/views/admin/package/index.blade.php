@extends('layouts.app')

@section('content')
    <div class="contrainer p-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Paket</h3>
                <div class="card-tools">
                    <a href="{{ route('admin.package.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Tambah Paket
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    @forelse ($packages as $package)
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                            <div class="card">
                                <img src="{{ Storage::url($package->image) }}" class="card-img-top"
                                    alt="{{ $package->name }}" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $package->name }}</h5>
                                    <br>
                                    <p class="card-text">
                                        <strong>Harga:</strong>Rp,{{ number_format($package->price, 0, ',', '.') }}<br>
                                        <strong>Durasi:</strong> {{ $package->duration }}<br>
                                        <strong>Destinasi:</strong> {{ $package->destination->name ?? 'Unknown' }}<br>
                                        <strong>Tanggal Dibuat:</strong> {{ $package->created_at->format('d-m-Y') }}
                                    </p>
                                    <div class="btn-group d-flex gap-2">
                                        <a href="{{ route('admin.package.edit', $package->id) }}"
                                            class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>

                                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#detailModal{{ $package->id }}">
                                            <i class="fas fa-info-circle"></i> Lihat Detail
                                        </button>

                                        <form action="{{ route('admin.package.destroy', $package->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this item?')">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Detail Modal -->
                        <div class="modal fade" id="detailModal{{ $package->id }}" tabindex="-1"
                            aria-labelledby="detailModalLabel{{ $package->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="detailModalLabel{{ $package->id }}">Detail Paket
                                            {{ $package->name }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5>{{ $package->name }}</h5>
                                        <p><strong>Harga:</strong> {{ number_format($package->price, 0, ',', '.') }}</p>
                                        <p><strong>Durasi:</strong> {{ $package->duration }} Hari</p>
                                        <p><strong>Deskripsi:</strong> {{ $package->description }}</p>
                                        <p><strong>Destinasi:</strong> {{ $package->destination->name }}</p>
                                        @if ($package->image)
                                            <p><strong>Image:</strong></p>
                                            <img src="{{ Storage::url($package->image) }}" alt="Package Image"
                                                class="img-fluid" style="max-width: 100%;">
                                        @endif
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <tr>
                            <td colspan="5">
                                <x-empty message="Belum Ada Paket Wisata, Tambahkan Terlebih dahulu" />
                            </td>
                        </tr>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
