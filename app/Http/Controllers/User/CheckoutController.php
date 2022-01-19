<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Checkout\Store;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Barang;
use App\Models\Keranjang;
use App\Models\Checkout;
use App\Models\Jangkauan;
use App\Models\CheckoutDetail;
use Auth;
use File;
use Mail;
use App\Mail\Checkout\AfterCheckout;

class CheckoutController extends Controller
{
    //
    public function index()
    {
        $now = Carbon::now();
        $thnbulan = $now->year . $now->month;
        $cek = Checkout::count();

        if ($cek == 0) {
           $urut = 10000001;
           $nomer = 'INV' . $thnbulan . $urut;
        }else
        {
            $ambil = Checkout::all()->last();
            $urut = (int)substr($ambil->invoice, -8) + 1;
            $nomer = 'INV' . $thnbulan . $urut;
        }
        $jangkau = Jangkauan::all();
        $keranjang = Keranjang::where('user_id', Auth::id())->get();
        return view('user.checkout', compact('keranjang','nomer','jangkau'));
    }
    public function proses(Store $request)
    {
        $jangkau = Jangkauan::where('nama_Desa', $request->desa)->get();
        if (!$jangkau ) {
            $request->Session()->flash('error',"Maaf desa {$request->desa} tidak dapat di jangkau oleh kami.!");
            return redirect()->route('checkout');
        }

        if ($request->subtot < 300000) {
            $request->Session()->flash('error',"maaf untuk melakukan transakasi minimal belanja Rp300.000.!");
            return redirect()->route('checkout');
        }

        $cek = Checkout::where('user_id', Auth::id())->where('status', 1);

        if ($cek->count() > 0) {
            $request->Session()->flash('error',"Maaf anda masih memiliki tagihan.!");
            return redirect()->route('history');
        }

        $image = $request->file('gambar');
        $new_image = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('bukti_pembayaran'), $new_image);
        $status = 1;

        $checkout = Checkout::create([
            'user_id' => Auth::id(),
            'invoice' => $request->inv,
            'desa' =>$request->desa,
            'invoice' => $request->inv,
            'deskripsi_alamat' =>$request->alamat,
            'subtot' => $request->subtot,
            'hp' =>$request->hp,
            'bukti_pebayaran' =>$new_image,
            'jumlah_bayar' =>$request->bayar,
            'status' =>$status,
        ]);
        
        $keranjangs = Keranjang::where('user_id', Auth::id())->get();
        foreach ($keranjangs as $keranjang) {
            $checkoutdetail = CheckoutDetail::create([
               'barang_id' => $keranjang->barang_id,
               'varian_id' => $keranjang->varian_id,
               'user_id' => $keranjang->user_id,
               'qty' => $keranjang->qty,
               'total' => $keranjang->total,
               'inv' =>$request->inv,
           ]);
           $keranjang->forceDelete();
        }
        
        Mail::to(Auth::user()->email)->send(new AfterCheckout($checkout));

        $request->Session()->flash('success', "Terimakasih telah melakukan transaksi di toko kami.!");
        return redirect()->route('history');
        
    }
}
