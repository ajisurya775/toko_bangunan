<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;

class LaporanController extends Controller
{
    public function index()
    {
        $checkout = Checkout::where('status', 2)->get();
        return view('admin.laporan.index', compact('checkout'));
    }
}
