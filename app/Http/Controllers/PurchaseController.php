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
            'whatsapp' => 'required|integer|min:11'
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

            // Nomor WhatsApp penerima
            $to = $purchase->phone; // Pastikan formatnya sesuai dengan nomor WhatsApp

            // Membuat pesan dinamis berdasarkan data yang ada di $purchase
            $message = "🌟 **Terima Kasih atas Pemesanan Anda!** 🌟\n\n" .
            "Halo, *" . Auth::user()->name . "*! 🙌\n\n" .
            "Terima kasih telah memilih kami untuk perjalanan wisata Anda. Berikut adalah detail pemesanan Anda yang masih dalam status **PENDING**:\n\n" .
            "🔹 **ID Pemesanan**: #" . $purchase->id . "\n" .
            "📅 **Tanggal Pembelian**: " . $purchase->purchase_date->format('d-m-Y') . "\n" .
            "🌍 **Paket Tour**: *" . $purchase->tourPackage->name . "*\n" .
            "🚀 **Tanggal Keberangkatan**: " . $purchase->departure_date->format('d-m-Y') . "\n" .
            "🎟️ **Jumlah Tiket**: " . $purchase->quantity . " tiket\n" .
            "💰 **Total Harga**: Rp " . number_format($purchase->total_price, 0, ',', '.') . "\n" .
            "💳 **Pembayaran yang Diperlukan**: Rp " . number_format($purchase->total_price, 0, ',', '.') . " (Tunggakan)\n\n" .
            "⚠️ **Status Pemesanan**: *PENDING* – Pembayaran tanggungan diperlukan untuk melanjutkan pesanan Anda.\n\n" .
            "Kami sangat senang Anda telah memilih paket tour kami! 😊\n\n" .
            "👉 **Langkah berikutnya**: Segera lakukan pembayaran untuk menyelesaikan pesanan Anda dan mengamankan tempat Anda dalam tour ini.\n" .
            "Jika Anda membutuhkan bantuan lebih lanjut mengenai pembayaran atau informasi lainnya, jangan ragu untuk menghubungi kami.\n\n" .
            "Kami akan segera menghubungi Anda setelah pembayaran terkonfirmasi. ✨\n\n" .
            "*Terima kasih atas kepercayaan Anda dan selamat menikmati perjalanan Anda!* 🌏🚗💼";



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
