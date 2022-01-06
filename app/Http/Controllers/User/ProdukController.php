<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;

class ProdukController extends Controller
{
    //
    public function index()
    {
        $barang = Barang::latest()->get();
        return view('user.produk');
    }
}
