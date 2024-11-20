@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Paket</h4>
            <form action="{{ route('admin.package.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-molecules.form-group label="Nama Paket" id="name" name="name" placeholder="Masukan Nama Paket" />
                <x-molecules.form-group label="Deskripsi" id="description" name="description" placeholder="Masukan Deskripsi Paket" />
                <x-molecules.form-group label="Harga" id="price" name="price" placeholder="Masukan Harga" type="number" />
                <x-molecules.form-group label="Durasi" id="duration" name="duration" placeholder="Masukan Durasi (bulan)" />
                <x-molecules.form-group label="Destinasi" id="destination_id" name="destination_id">
                    <select class="form-control" name="destination_id">
                        @foreach($destinations as $destination)
                            <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                        @endforeach
                    </select>
                </x-molecules.form-group>
                <x-molecules.form-group label="Gambar" id="image" name="image" type="file" />
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
