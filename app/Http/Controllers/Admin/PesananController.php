<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\CheckoutDetail;
use Mail;
use App\Mail\PesananTerima\Terima;
use App\Mail\Pesanan\Tolak;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checkout = Checkout::orderBy('status', 'asc')->get();
        return view('admin.pesananMasuk.index', compact('checkout'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $invoice)
    {
        //
        $checkoutdetail = CheckoutDetail::where('inv', $invoice)->get();

        $checkout = Checkout::where('invoice', $invoice)->first();
        return view('admin.pesananMasuk.detail', compact('checkout','checkoutdetail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $checkout = Checkout::find($id);
        $checkout->status = 2;
        $checkout->update();
        
        Mail::to($checkout->user->email)->send(new Terima($checkout));
        $request->Session()->flash('success',"Pesanan berhasil diterima.!");

        return redirect()->route('pesanan');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $checkout = Checkout::find($id);
        $checkout->status = 3;
        $checkout->update();
        
        Mail::to($checkout->user->email)->send(new Tolak($checkout));
        $request->Session()->flash('success',"Pesanan berhasil ditolak.!");

        return redirect()->route('pesanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function cetak($invoice)
    {
        $checkoutdetail = CheckoutDetail::where('inv', $invoice)->get();

        $checkout = Checkout::where('invoice', $invoice)->first();

        return view('cetak.cetakInvoice', compact('checkoutdetail','checkout'));

        // instantiate and use the dompdf class
        // $dompdf = new Dompdf();
        // $dompdf->loadHtml($html);

        // // (Optional) Setup the paper size and orientation
        // $dompdf->setPaper('A4', 'landscape');

        // // Render the HTML as PDF
        // $dompdf->render();

        // // Output the generated PDF to Browser
        // $dompdf->stream();

        
    }
}
