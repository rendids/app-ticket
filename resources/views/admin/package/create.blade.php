@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body m-3">
                <h3 class="mb-4">Tambah Paket</h3>
                <form action="{{ route('admin.package.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Form group for 'Nama Paket' -->
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Nama Paket</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" placeholder="Masukan Nama Paket" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Form group for 'Deskripsi' (Textarea) -->
                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                            placeholder="Masukan Deskripsi Paket">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Form group for 'Harga' -->
                    <div class="form-group mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                            name="price" placeholder="Masukan Harga" value="{{ old('price') }}">
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Form group for 'Durasi' -->
                    <div class="form-group mb-3">
                        <label for="duration" class="form-label">Durasi</label>
                        <input type="text" class="form-control @error('duration') is-invalid @enderror" id="duration"
                            name="duration" placeholder="Masukan Durasi Ex: 2 hari" value="{{ old('duration') }}">
                        @error('duration')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Dropdown for 'destination_id' -->
                    <div class="form-group mb-3">
                        <label for="destination_id" class="form-label">Destinasi</label>
                        <select class="form-control select2 @error('destination_id') is-invalid @enderror"
                            name="destination_id" id="destination_id">
                            <option disabled selected>Pilih destinasi</option>
                            @foreach ($destinations as $destination)
                                <option value="{{ $destination->id }}"
                                    {{ old('destination_id') == $destination->id ? 'selected' : '' }}>
                                    {{ $destination->name }}</option>
                            @endforeach
                        </select>
                        @error('destination_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Form group for 'Gambar' -->
                    <div class="form-group mb-3">
                        <label for="image" class="form-label">Gambar</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                            name="image">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                        <a href="{{ route('admin.package.index') }}" class="btn btn-danger">
                            <i class="fas fa-times"></i> Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
