@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Daftar Pengguna</h4>
            {{-- <div class="d-flex justify-content-end">
                    <button class="btn btn-primary btn-sm">Tambah</button>
                </div> --}}
            <div class="table-responsive">
                <table class="table table-hover">
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
                        @foreach ($users as $user)
                            <tr>
                                <td>1</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#detailModal{{ $user->id }}">Lihat Detail</button>
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#myModal{{ $user->id }}">Edit</button>
                                    <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this item?')">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                                <x-organisms.modal-form id="myModal{{ $user->id }}" buttonText="Ubah"
                                    title="Ubah Pengguna {{ $user->name }}" action="{{ route('admin.user.update', $user->id) }}" method="put">
                                    <x-molecules.form-group label="Nama" id="name" name="name"
                                        placeholder="Masukan Nama" value="{{ $user->name }}" />
                                    <x-molecules.form-group label="Email" id="email" name="email"
                                        placeholder="Masukan Email" value="{{ $user->email }}" />
                                </x-organisms.modal-form>
                                <x-organisms.modal title="Detail Pengguna {{ $user->name }}" id="detailModal{{ $user->id }}">
                                    <h5>{{ $user->name }}</h5>
                                    <h5>{{ $user->email }}</h5>
                                </x-organisms.modal>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
