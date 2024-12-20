<?php

namespace App\Http\Controllers;

use App\Models\Purchase;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
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
        $purchase->update(['status' => 'Confirmed']);
        return redirect()->back()->with('success', 'Pesanan Telah Dikonfirmasi');
    }
    public function orderCancle(Purchase $purchase)
    {
        $purchase->update(['status' => 'Rejected']);
        return redirect()->back()->with('success', 'Pesanan Telah Dikonfirmasi');
    }
}
