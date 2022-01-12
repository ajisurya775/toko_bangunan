<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Keranjang;
use App\Models\Invoice;
use Auth;

class CheckoutController extends Controller
{
    //
    public function index()
    {
        $invoice = Invoice::create([
            'amount' => 5000,
        ]);
        $keranjang = Keranjang::where('user_id', Auth::id())->get();
        return view('user.checkout', compact('keranjang','invoice'));
    }
}
