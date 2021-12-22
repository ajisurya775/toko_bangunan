<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jangkauan;
use Illuminate\Http\Request;

class JangkauanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jangkauan = Jangkauan::latest()->paginate(5);
        return view('admin.jangkauan.index', compact('jangkauan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        Jangkauan::create([
            'nama_desa'=>$request->nama_desa
        ]);

        $request->Session()->flash('success',"Data berhasil ditambahkan.!");
        return redirect()->route('jangkauan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jangkauan  $jangkauan
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        //
        $jangkauan = Jangkauan::find($id);
        return view('admin.jangkauan.edit', compact('jangkauan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jangkauan  $jangkauan
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        $jangkauan = Jangkauan::find($id);
        $jangkauan->nama_desa = $request->nama_desa;
        $jangkauan->save();

        $request->Session()->flash('success',"Data berhasil diubah.!");
        return redirect()->route('jangkauan');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jangkauan  $jangkauan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jangkauan $jangkauan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jangkauan  $jangkauan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $jangkauan = Jangkauan::findOrFail($id);
        $jangkauan->forceDelete();

        $request->Session()->flash('success',"Data berhasil di hapus.!");
        return redirect()->route('jangkauan');
    }
}
