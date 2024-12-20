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
            'departure_date' => 'required|date|after_or_equal:' . now()->addDays(7)->toDateString(), // Minimal 7 hari dari hari ini
            'total_price' => 'required|numeric',
            'quantity' => 'required|integer|min:1',
            'whatsapp' => 'required|min:11'
        ]);

        try {
            // Membuat pembelian
            $purchase = Purchase::create([
                'user_id' => Auth::user()->id,
                'tour_package_id' => $id,
                'purchase_date' => now(),
                'departure_date' => Carbon::parse($request->departure_date),
                'total_price' => $request->total_price,
                'quantity' => $request->quantity,
                'phone' => $request->whatsapp,
            ]);

            // dd($purchase);

            // Nomor WhatsApp penerima
            $to = $purchase->phone; // Pastikan formatnya sesuai dengan nomor WhatsApp

            // Membuat pesan dinamis berdasarkan data yang ada di $purchase
            $message = "Halo, terima kasih telah melakukan pemesanan tour! Berikut adalah detail pembelian Anda:\n\n" .
                "ID Pemesanan: #" . $purchase->id . "\n" .
                "Tanggal Pembelian: " . $purchase->purchase_date->format('d-m-Y') . "\n" .
                "Paket Tour: Tour #" . $purchase->tourPackage->name . "\n" .
                "Tanggal Keberangkatan: " . $purchase->departure_date->format('d-m-Y') . "\n" .
                "Jumlah Tiket: " . $purchase->quantity . " tiket\n" .
                "Total Harga: Rp " . number_format($purchase->total_price, 0, ',', '.') . "\n\n" .
                "Terima kasih atas kepercayaan Anda!";

            // Menggunakan service Fonntee untuk mengirim pesan WhatsApp
            $fonnteeService = new FonnteeService();
            $response = $fonnteeService->sendWhatsAppMessage($to, $message);

            // Memeriksa apakah pengiriman pesan WhatsApp berhasil
            if (!$response['status']) {
                // Jika pengiriman gagal, kita bisa menangani error
                return back()->with('error', 'Pesanan berhasil dibuat, tetapi gagal mengirim pesan WhatsApp. Coba lagi.');
            }

            // Jika berhasil, redirect ke halaman profil atau tempat lain
            return redirect()->route('profile')->with('success', 'Pesanan berhasil terkirim, selanjutnya lanjutkan di WhatsApp');

        } catch (\Exception $e) {
            // Tangani error secara umum
            return back()->with('error', 'Terjadi kesalahan, silakan coba lagi nanti. Error: ' . $e->getMessage());
        }
    }

}
