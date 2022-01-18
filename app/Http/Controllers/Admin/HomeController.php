<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\Barang;
use App\Models\Jangkauan;
use App\Models\Kategori;

class HomeController extends Controller
{
    //
    public function index()
    {
        $pesanan_masuk = Checkout::where('status', 1)->count();
        $jumlah_barang = Barang::all()->count();
        $jumlah_kategori = Kategori::all()->count();
        $jumlah_jangkauan = Jangkauan::all()->count();
        
        return view('admin.dashboard', compact(
            'pesanan_masuk',
            'jumlah_barang',
            'jumlah_kategori',
            'jumlah_jangkauan'
        ));
    }
}
