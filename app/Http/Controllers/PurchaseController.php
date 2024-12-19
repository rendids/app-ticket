<?php

namespace App\Http\Controllers;


use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\FonnteeService;
use Carbon\Carbon;


class PurchaseController extends Controller
{

    protected $fonntee;

    public function __construct(FonnteeService $fonntee)
    {
        $this->fonntee = $fonntee;
    }
    /**
     * Menampilkan daftar semua pembelian
     */
    public function index()
    {
        $purchases = Purchase::all();
        return view('purchases.index', compact('purchases'));
    }

    /**
     * Menyimpan pembelian baru
     */
    public function store(Request $request, $id)
    {
        // Validasi input request
        $request->validate([
            'departure_date' => 'required|date|after_or_equal:today', // Memastikan tanggal keberangkatan setelah hari ini
            'total_price' => 'required|numeric',
            'quantity' => 'required|integer|min:1',
            'whatsapp' => 'required|integer|min:11'
        ]);
    
        // Simpan data pembelian ke database
        $purchase = Purchase::create([
            'user_id' => Auth::user()->id,
            'tour_package_id' => $id,
            'purchase_date' => now(),
            'departure_date' => Carbon::parse($request->departure_date),
            'total_price' => $request->total_price,
            'quantity' => $request->quantity,
        ]);
    
        // Nomor WhatsApp penerima
        $to = $request->whatsapp;  // Pastikan formatnya sesuai dengan nomor WhatsApp
    
        // Membuat pesan dinamis berdasarkan data yang ada di $purchase
        $message = "Halo, terima kasih telah melakukan pemesanan tour! Berikut adalah detail pembelian Anda:\n\n" .
            "ID Pemesanan: #" . $purchase->id . "\n" .
            "Tanggal Pembelian: " . $purchase->purchase_date->format('d-m-Y') . "\n" .
            "Paket Tour: Tour #" . $purchase->tour_package_id . "\n" .
            "Tanggal Keberangkatan: " . $purchase->departure_date->format('d-m-Y') . "\n" .
            "Jumlah Tiket: " . $purchase->quantity . " tiket\n" .
            "Total Harga: Rp " . number_format($purchase->total_price, 0, ',', '.') . "\n\n" .
            "Terima kasih atas kepercayaan Anda!";
    
        // Menggunakan service Fonntee
        $fonnteeService = new FonnteeService();
        $fonnteeService->sendWhatsAppMessage($to, $message);
    
        // Jika berhasil, redirect ke halaman profil atau tempat lain
        return redirect()->route('profile')->with('success', 'Pesanan berhasil terkirim, selanjutnya lanjutkan di WhatsApp');
    }

    /**
     * Memperbarui pembelian
     */
    public function update(Request $request, Purchase $purchase)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'tour_package_id' => 'required|exists:tour_packages,id',
            'purchase_date' => 'required|date',
            'departure_date' => 'required|date|after_or_equal:purchase_date',
            'status' => 'required|string',
            'total_price' => 'required|numeric',
            'quantity' => 'required|integer|min:1',
        ]);

        $purchase->update([
            'user_id' => $request->user_id,
            'tour_package_id' => $request->tour_package_id,
            'purchase_date' => $request->purchase_date,
            'departure_date' => $request->departure_date,
            'status' => $request->status,
            'total_price' => $request->total_price,
            'quantity' => $request->quantity,
        ]);

        return redirect()->route('purchases.index');
    }

    /**
     * Menghapus pembelian
     */
    public function destroy(Purchase $purchase)
    {
        $purchase->delete();
        return redirect()->route('purchases.index');
    }
}
