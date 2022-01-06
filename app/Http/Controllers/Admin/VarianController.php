<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Varian;
use App\Models\Barang;
use App\Http\Requests\Admin\Varian\Store;
use Illuminate\Http\Request;
use File;

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
    public function edit($id)
    {
        //
        $varian = Varian::find($id);

        return view('admin.dataBarang.editVarian', compact('varian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Varian  $varian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       if ($request->gambar_varian <> "") {
        $image = $request->file('gambar_varian');
        $new_image = rand().''.$image->getClientOriginalExtension();
        $image->move(public_path('data_varian'), $new_image);

        $gambar = Varian::find($id);
        File::delete('data_varian/'.$gambar->gambar_varian);

        $varian = Varian::find($id);
        $varian->nama_varian = $request->nama_varian;
        $varian->stok_varian = $request->stok_varian;
        $varian->harga_varian = $request->harga_varian;
        $varian->gambar_varian = $new_image;
        $varian->save();

        $request->Session()->flash('success', 'Data varian berhasil diubah.!');
        return redirect()->route('detail.varian',$varian->barang_id);

       } else {
        $varian = Varian::find($id);
        $varian->nama_varian = $request->nama_varian;
        $varian->stok_varian = $request->stok_varian;
        $varian->harga_varian = $request->harga_varian;
        $varian->save();

        $request->Session()->flash('success', 'Data varian berhasil diubah.!');
        return redirect()->route('detail.varian',$varian->barang_id);
       }
       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Varian  $varian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $varian = Varian::findOrFail($id);
        $varian->forceDelete();

        File::delete('data_varian/'.$varian->gambar_varian);

        $request->Session()->flash('success', "Varian berhasil dihapus.!");
        return redirect()->route('detail.varian',$varian->barang_id);
    }
}
