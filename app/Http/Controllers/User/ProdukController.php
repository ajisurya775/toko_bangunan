<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Varian;

class ProdukController extends Controller
{
    //
    public function index(Request $request)
    {
        // $barang =  Barang::inRandomOrder('kategori_id')->simplePaginate(9);
        $barang = Barang::when($request->search, function ($query) use ($request){
            $query
            ->where('nama_barang', 'like', "%{$request->search}%")
            ->orWhere('deskripsi', 'like', "%{$request->search}%");
        })->inRandomOrder('kategori_id')->simplePaginate(8);

        return view('user.produk',compact('barang'));
    }
    public function listrik()
    {
        $barang = Barang::where('kategori_id', 1)->simplePaginate(8);
        
        return view('user.produk', [
            'barang' =>$barang
        ]);
    }
    public function bahan()
    {
        $barang = Barang::where('kategori_id', 2)->simplePaginate(8);
        
        return view('user.produk', [
            'barang' =>$barang
        ]);
    }
    public function alat()
    {
        $barang = Barang::where('kategori_id', 3)->simplePaginate(8);
        
        return view('user.produk', [
            'barang' =>$barang
        ]);
    }
}
