<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Destination;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{
    // Menampilkan halaman index (list of packages)
    public function index()
    {
        $packages = Package::with('destination')->get(); // Mengambil semua data paket dengan relasi destination
        return view('admin.package.index', compact('packages'));
    }

    // Menampilkan form untuk membuat paket baru
    public function create()
    {
        $destinations = Destination::all(); // Mengambil data destinasi
        return view('admin.package.create', compact('destinations'));
    }

    // Menyimpan data paket baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'duration' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'destination_id' => 'required|exists:destinations,id'
        ]);

        // Menyimpan file gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        // Membuat data paket
        Package::create([
            'slug' => Str::slug($request->name, '-'),
            'destination_id' => $request->destination_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'duration' => $request->duration,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.package.index')->with('success', 'Paket berhasil dibuat.');
    }

    // Menampilkan form untuk mengedit paket
    public function edit(Package $package)
    {
        $destinations = Destination::all(); // Mengambil data destinasi
        return view('admin.package.edit', compact('package', 'destinations'));
    }

    // Mengupdate data paket
    public function update(Request $request, Package $package)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'duration' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'destination_id' => 'required|exists:destinations,id'
        ]);

        // Menyimpan file gambar baru jika ada
        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($package->image) {
                Storage::disk('public')->delete($package->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
            $package->image = $imagePath;
        }

        // Update data paket
        $package->update([
            'slug' => Str::slug($request->name, '-'),
            'destination_id' => $request->destination_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'duration' => $request->duration,
        ]);

        return redirect()->route('admin.package.index')->with('success', 'Paket berhasil diperbarui.');
    }

    // Menghapus data paket
    public function destroy(Package $package)
    {
        // Hapus gambar terkait jika ada
        if ($package->image) {
            Storage::disk('public')->delete($package->image);
        }

        // Hapus paket
        $package->delete();

        return redirect()->route('admin.package.index')->with('success', 'Paket berhasil dihapus.');
    }
}
