<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\Kontakkami\Store;
use Mail;
use App\Mail\KontakKami\Kontak;

class KontakController extends Controller
{
    //
    public function index()
    {
        return view('user.kontak');
    }
    public function create(Store $request)
    {
        Mail::to('udrizki212@gmail.com')->send(new Kontak($request));
        
        $request->session()->flash('success','Terimakasih Kritik dan Saran Andah Berhasil Dikirim.!');
        return redirect()->route('kontak');
    }
}
