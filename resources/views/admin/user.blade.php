@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Pengguna</h3>
                <div class="card-tools">
                    {{-- Uncomment jika Anda ingin menambah tombol "Tambah" --}}
                    {{-- <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">Tambah</button> --}}
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Tanggal Dibuat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at->format('d-m-Y H:i') }}</td>
                                    <td>
                                        <!-- Lihat Detail -->
                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#detailModal{{ $user->id }}">
                                            Lihat Detail
                                        </button>

                                        <!-- Edit -->
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $user->id }}">
                                            Edit
                                        </button>

                                        <!-- Hapus -->
                                        <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm"
                                                onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- Modal Edit Pengguna -->
                                <x-organisms.modal-form id="editModal{{ $user->id }}" buttonText="Ubah"
                                    title="Ubah Pengguna {{ $user->name }}"
                                    action="{{ route('admin.user.update', $user->id) }}" method="put">
                                    <x-molecules.form-group label="Nama" id="name" name="name"
                                        placeholder="Masukan Nama" value="{{ $user->name }}" />

                                    <x-molecules.form-group label="Email" id="email" name="email"
                                        placeholder="Masukan Email" value="{{ $user->email }}" />
                                </x-organisms.modal-form>

                                <!-- Modal Detail Pengguna -->
                                <x-organisms.modal title="Detail Pengguna {{ $user->name }}"
                                    id="detailModal{{ $user->id }}">
                                    <h5><strong>Nama:</strong> {{ $user->name }}</h5>
                                    <h5><strong>Email:</strong> {{ $user->email }}</h5>
                                    <h5><strong>Tanggal Dibuat:</strong> {{ $user->created_at->format('d-m-Y H:i') }}</h5>
                                </x-organisms.modal>
                                @empty
                                <tr>
                                    <td colspan="5">
                                        <x-empty message="Belum Ada User Yang Terdaftar" />
                                    </td>
                                </tr>
                                @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
