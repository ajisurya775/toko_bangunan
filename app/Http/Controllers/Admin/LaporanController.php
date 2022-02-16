<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\CheckoutDetail;

class LaporanController extends Controller
{
    public function index()
    {
        $checkout = Checkout::where('status', 2)->get();
        return view('admin.laporan.index', compact('checkout'));
    }

    public function cetakLaporan($tglawal, $tglakhir)
    {
        // dd("Tanggal awal : ".$tglawal, "Tanggal akhir : ".$tglakhir);
        // $checkout = Checkout::where('status', 2)->whereBetween('created_at',[$tglawal, $tglakhir])->get();

        // return view('cetak.cetakInvoice');
    }
}
