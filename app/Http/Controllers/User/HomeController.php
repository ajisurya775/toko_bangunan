<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Varian;
use App\Models\Keranjang;
use Illuminate\Support\Collection;
use Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        $bahan =  Barang::where('kategori_id','2')->simplePaginate(12);
        $listrik =  Barang::where('kategori_id','1')->simplePaginate(12);
        $alat =  Barang::where('kategori_id','3')->simplePaginate(12);
        $random =  Barang::all();

        // $bahan = $bahans->pluck('id')->join(',');
        // $listrik = $listriks->pluck('id')->join(',');
        // $alat = $alats->pluck('id')->join(',');

        // return view('user.dashboard',compact('bahan','listrik','alat','random'));

        return view('user.dashboard', [
            'bahan'=>$bahan,
            'listrik'=>$listrik,
            'alat'=>$alat,
            'random'=>$random,
        ]);
    }
    public function detail($id)
    {
        $barang = Barang::find($id);
        return view('user.detail', compact('barang'));
    }
    public function varian($id)
    {
        $varian = Varian::find($id);

        return view('user.varianDetail',compact('varian'));
    }
    public function create(Request $request,$id)
    {
        $barang = Barang::find($id);

        $harga = $barang['harga'];
        $qty = $request->qty;

        $subtot = $harga * $qty;

        Keranjang::create([
            'barang_id' =>$id,
            'user_id' =>Auth::id(),
            'qty'=>$qty,
            'total'=>$subtot,
        ]);
    }
    public function vcreate(Request $request,$id)
    {
        $barang = Varian::find($id);

        $harga = $barang['harga_varian'];
        $qty = $request->qty;

        $subtot = $harga * $qty;
    
        Keranjang::create([
            'varian_id' =>$id,
            'user_id' =>Auth::id(),
            'qty'=>$qty,
            'total'=>$subtot,
        ]);
    }
}
