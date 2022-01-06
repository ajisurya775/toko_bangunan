<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;

class CheckoutController extends Controller
{
    //
    public function index()
    {
        return view('user.checkout');
    }
}
