<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Purchase;
use App\Services\FonnteeService;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::where('role', 'user')->count();
        $purchase = Purchase::where('status', 'Comfirmed')->count();
        return view('admin.dashboard', compact('users'));
    }

    public function history()
    {
        // Ambil semua pesanan yang sudah diterima (status confirmed)
        $orders = Purchase::where('status', 'Confirmed')->get();

        // Kembalikan data ke tampilan history
        return view('admin.history', compact('orders'));
    }

    public function order()
    {
        $purchases = Purchase::where('status', '!=', 'Confirmed')->get();
        return view('admin.order', compact('purchases'));
    }
    public function orderDone(Purchase $purchase)
    {
        try {
            // Update the status of the purchase
            $purchase->update(['status' => 'Confirmed']);


            $purchaseDate = Carbon::parse($purchase->purchase_date);
            $departureDate = Carbon::parse($purchase->departure_date);

            // Prepare the dynamic message for WhatsApp notification
            $to = $purchase->phone; // Ensure the phone number is in the correct format
            $message = "🌟 **Pesanan Anda Telah Dikonfirmasi!** 🌟\n\n" .
                "Halo, *" . $purchase->user->name . "*! 🙌\n\n" .
                "Pesanan Anda telah dikonfirmasi dan pembayaran telah berhasil dilakukan! Berikut adalah detail pesanan Anda:\n\n" .
                "🔹 **ID Pemesanan**: #" . $purchase->id . "\n" .
                "📅 **Tanggal Pembelian**: " . $purchaseDate . "\n" .
                "🌍 **Paket Tour**: *" . $purchase->tourPackage->name . "*\n" .
                "🚀 **Tanggal Keberangkatan**: " . $departureDate . "\n" .
                "🎟️ **Jumlah Tiket**: " . $purchase->quantity . " tiket\n" .
                "💰 **Total Harga**: Rp " . number_format($purchase->total_price, 0, ',', '.') . "\n\n" .
                "Terima kasih telah melakukan pembayaran dan memilih kami! 😊\n\n" .
                "*Pesanan Anda sudah berhasil dan siap untuk keberangkatan.* 🌏🚗💼";


            // Send the WhatsApp message using Fonntee service
            $fonnteeService = new FonnteeService();
            $response = $fonnteeService->sendWhatsAppMessage($to, $message);

            // Check if the message was successfully sent
            if (!$response['status']) {
                // If sending fails, handle the error
                return back()->with('error', 'Pesanan telah dikonfirmasi, tetapi gagal mengirim pesan WhatsApp. Coba lagi.');
            }

            // If successful, redirect with a success message
            return redirect()->back()->with('success', 'Pesanan telah dikonfirmasi dan pesan WhatsApp telah terkirim!');
        } catch (\Exception $e) {
            // General error handling
            return back()->with('error', 'Terjadi kesalahan, silakan coba lagi nanti. Error: ' . $e->getMessage());
        }
    }

    public function orderCancle(Purchase $purchase)
    {
        try {
            // Update the status of the purchase
            $purchase->update(['status' => 'Rejected']);

            $purchaseDate = Carbon::parse($purchase->purchase_date);
            $departureDate = Carbon::parse($purchase->departure_date);
            // Prepare the dynamic message for WhatsApp notification
            $to = $purchase->phone; // Ensure the phone number is in the correct format
            $message = "❌ **Pesanan Anda Ditolak!** ❌\n\n" .
                "Halo, *" . $purchase->user->name . "*! 🙁\n\n" .
                "Dengan berat hati kami informasikan bahwa pesanan Anda telah ditolak. Berikut adalah detail pesanan Anda:\n\n" .
                "🔹 **ID Pemesanan**: #" . $purchase->id . "\n" .
                "📅 **Tanggal Pembelian**: " . $purchaseDate . "\n" .
                "🌍 **Paket Tour**: *" . $purchase->tourPackage->name . "*\n" .
                "🚀 **Tanggal Keberangkatan**: " . $departureDate . "\n" .
                "🎟️ **Jumlah Tiket**: " . $purchase->quantity . " tiket\n" .
                "💰 **Total Harga**: Rp " . number_format($purchase->total_price, 0, ',', '.') . "\n\n" .
                "Mohon maaf atas ketidaknyamanan ini. Jika Anda membutuhkan bantuan lebih lanjut, jangan ragu untuk menghubungi kami. 🙏";

            // Send the WhatsApp message using Fonntee service
            $fonnteeService = new FonnteeService();
            $response = $fonnteeService->sendWhatsAppMessage($to, $message);

            // Check if the message was successfully sent
            if (!$response['status']) {
                // If sending fails, handle the error
                return back()->with('error', 'Pesanan telah ditolak, tetapi gagal mengirim pesan WhatsApp. Coba lagi.');
            }

            // If successful, redirect with a success message
            return redirect()->back()->with('success', 'Pesanan telah ditolak dan pesan WhatsApp telah terkirim!');
        } catch (\Exception $e) {
            // General error handling
            return back()->with('error', 'Terjadi kesalahan, silakan coba lagi nanti. Error: ' . $e->getMessage());
        }
    }
}
