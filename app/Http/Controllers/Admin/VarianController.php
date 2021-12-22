<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Varian;
use App\Models\Barang;
use App\Http\Requests\Admin\Varian\Store;
use Illuminate\Http\Request;

class VarianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)   
    {
        $barang = Barang::find($id);
        return view('admin.dataBarang.tambahVarian', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request, $id)
    {
        //
        $image = $request->file('gambar_varian');
        $new_image = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('data_varian'), $new_image);

        $barang = Barang::findOrFail($id);
        $namaBarang = $barang->nama_barang;

        Varian::create([
            'barang_id'=>$barang->id,
            'nama_varian'=>$request->nama_varian,
            'stok_varian'=>$request->stok_varian,
            'harga_varian'=>$request->harga_varian,
            'gambar_varian'=>$new_image, 
        ]);

        $request->Session()->flash('success',"Varian data {$barang->nama_barang} berhasil di tambahkan.!");
        return redirect()->route('data.barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Varian  $varian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $varian = Varian::where('barang_id', $id)->get();
        return view('admin.dataBarang.detailVarian', compact('varian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Varian  $varian
     * @return \Illuminate\Http\Response
     */
    public function edit(Varian $varian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Varian  $varian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Varian $varian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Varian  $varian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Varian $varian)
    {
        //
    }
}
