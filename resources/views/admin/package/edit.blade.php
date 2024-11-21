@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Paket</h4>
            <form action="{{ route('admin.package.update', $package->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- This indicates that the form is used for an update -->

                <!-- Form group for 'Nama Paket' -->
                <x-molecules.form-group label="Nama Paket" id="name" name="name" placeholder="Masukan Nama Paket" value="{{ old('name', $package->name) }}" />

                <!-- Form group for 'Deskripsi' (Textarea) -->
                <x-molecules.form-group label="Deskripsi" id="description" name="description"
                    placeholder="Masukan Deskripsi Paket" type="textarea" value="{{ old('description', $package->description) }}" />

                <!-- Form group for 'Harga' -->
                <x-molecules.form-group label="Harga" id="price" name="price" placeholder="Masukan Harga"
                    type="number" value="{{ old('price', $package->price) }}" />

                <!-- Form group for 'Durasi' -->
                <x-molecules.form-group label="Durasi" id="duration" name="duration"
                    placeholder="Masukan Durasi Ex: 2hari" value="{{ old('duration', $package->duration) }}" />

                <!-- Dropdown for 'destination_id' -->
                <label for="destination_id" class="form-label">Destinasi</label>
                <select class="form-control" name="destination_id" id="destination_id">
                    <option disabled> Pilih destinasi</option>
                    @foreach ($destinations as $destination)
                        <option value="{{ $destination->id }}"
                            @if ($destination->id == old('destination_id', $package->destination_id)) selected @endif>
                            {{ $destination->name }}
                        </option>
                    @endforeach
                </select>

                <!-- Form group for 'Gambar' -->
                <x-molecules.form-group label="Gambar" id="image" name="image" type="file" />

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
