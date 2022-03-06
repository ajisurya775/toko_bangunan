<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Varian;
use App\Http\Requests\Admin\Barang\Store;
use Illuminate\Http\Request;
use File;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::latest()->get();
        return view('admin.dataBarang.index', [
            'barang'=>$barang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        
        return view('admin.dataBarang.tambahBarang', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(store $request)
    {
        //
       
        $image = $request->file('gambar');
        $new_image = rand().'.'.$image->getClientOriginalExtension();
        $image->storeAs('public/data_barang', $new_image);

        Barang::create([
            'nama_barang'=>$request->nama_barang,
            'stok'=>$request->stok,
            'harga'=>$request->harga,
            'kategori_id'=>$request->kategori_id,
            'deskripsi'=>$request->deskripsi,
            'gambar'=>$new_image,
        ]);

        $request->Session()->flash('success', "Data berhasil ditambahkan.!");
        return redirect()->route('data.barang');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        //
        $barang = Barang::find($id);
        $kategori = Kategori::all();

        return view('admin.dataBarang.edit', [
            'barang'=>$barang,
            'kategori'=>$kategori,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        if ($request->gambar <> "") {
            $image = $request->file('gambar');
            $new_image = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('public/data_barang'), $new_image);

            $gambar = Barang::where('id', $id)->first();
            File::delete('storage/data_barang/'.$gambar->gambar);

            $barang = Barang::find($id);
            $barang->nama_barang = $request->barang;
            $barang->stok = $request->stok;
            $barang->harga = $request->harga;
            $barang->Kategori_id = $request->kategori;
            $barang->deskripsi = $request->deskripsi;
            $barang->gambar = $new_image;
            $barang->save();

            $request->Session()->flash('success', "Data {$barang->nama_barang} Berhasil di ubah.!");
            return redirect()->route('data.barang');
        } else {
            $barang = Barang::find($id);
            $barang->nama_barang = $request->barang;
            $barang->stok = $request->stok;
            $barang->harga = $request->harga;
            $barang->Kategori_id = $request->kategori;
            $barang->deskripsi = $request->deskripsi;
            $barang->save();

            $request->Session()->flash('success', "Data {$barang->nama_barang} Berhasil di ubah.!");
            return redirect()->route('data.barang');
        }
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $barang = Barang::findOrFail($id);
        $barang->forceDelete();

        $varian = Varian::where('barang_id', $id)->get();
        foreach ($varian as $item) {
            File::delete('storage/data_varian/'.$item->gambar_varian);
        }
        
        File::delete('storage/data_barang/'.$barang->gambar);
       

        $request->Session()->flash('success',"Data berhasil di hapus");

        return redirect()->route('data.barang');
    }

    public function detail($id)
    {
        $barang = Barang::find($id);
        return view('admin.dataBarang.detail', compact('barang'));
    }
}
