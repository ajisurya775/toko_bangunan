<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Varian;
use App\Models\Keranjang;
use App\Models\CheckoutDetail;
use Auth;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        $bahan =  Barang::where('kategori_id','2')->simplePaginate(12);
        $listrik =  Barang::where('kategori_id','1')->simplePaginate(12);
        $alat =  Barang::where('kategori_id','3')->simplePaginate(12);
        $random =  Barang::inRandomOrder('kategori_id')->get();

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
        $barang = Barang::where('id', $id)->first();

        //validasi untuk stok barang
        if ($request->qty > $barang->stok) {

            $request->Session()->flash('error',"Maaf jumlah stok barang kurang dari {$request->qty}");
            return redirect()->route('detail',$id);
        }

        //validasi untuk barang sama di keranjang
        $cek_keranjang = Keranjang::where('barang_id', $id)->where('user_id', Auth::id())->first();
        if (empty($cek_keranjang)) {

            $harga = $barang['harga'];
            $qty = $request->qty;

            $subtot = $harga * $qty;

            Keranjang::create([
                'barang_id' => $id,
                'user_id' => Auth::id(),
                'qty' => $qty,
                'total' => $subtot,
            ]);
        }
         else
        {
            $keranjang = Keranjang::where('barang_id', $id)->where('user_id', Auth::id())
            ->where('status', 0)->first();
            $barang = Barang::where('id', $id)->first();

            //calculate total harga
            $harga = $request->qty * $barang->harga;
            $total_harga = $harga + $keranjang['total'];

            //calculate qty barang
            $jumlah = $request->qty + $keranjang['qty'];

            //query update keranjang
            $keranjang->qty = $jumlah;
            $keranjang->total = $total_harga;
            $keranjang->save();
        }

        $request->Session()->flash('success',"Barang berhasil di tambahkan.!");

        return redirect()->route('keranjang');
    }
    public function vcreate(Request $request,$id)
    {
        $barang = Varian::find($id);
        
        //validasi untuk stok varian
        if ($request->qty > $barang->stok_varian) {
            $request->Session()->flash('error',"Maaf jumlah stok barang kurang dari {$request->qty}");
            return redirect()->route('varian',$id);
        }

        //validasi untuk keranjang di varian barang
        $cek_keranjang = Keranjang::where('varian_id', $id)->where('user_id', Auth::id())->first();
        if (empty($cek_keranjang)) {

            $harga = $barang['harga_varian'];
            $qty = $request->qty;

            $subtot = $harga * $qty;
        
            Keranjang::create([
                'barang_id' =>$barang['barang_id'],
                'varian_id' =>$id,
                'user_id' =>Auth::id(),
                'qty'=>$qty,
                'total'=>$subtot,
            ]);
        }
         else
        {
            $keranjang = Keranjang::where('varian_id', $id)->where('user_id', Auth::id())->first();
            $varian = Varian::where('id', $id)->first();
            
            //jumlah qty barang
            $jumlah = $request->qty + $keranjang['qty'];

            //jumlah total barang
            $harga = $request->qty * $varian['harga_varian'];
            $total_harga = $harga + $keranjang['total'];

            //query update
            $keranjang->qty = $jumlah;
            $keranjang->total = $total_harga;
            $keranjang->save();
        }
        
        $request->Session()->flash('success','Barang berhasil di tambahkan.!');

        return redirect()->route('keranjang');

    }
}
