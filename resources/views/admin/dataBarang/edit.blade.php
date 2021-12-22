@extends('layouts.app')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Barang</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"></li>
                </ol>
            </div>
        </div>
    </div>
</div>   
@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Edit Barang</strong>
                                <div class="pull-right">
                                    <a href="{{ route('data.barang')}}" class="btn btn-secondary btn-sm">
                                        <i class="fa fa-undo">Back</i>
                                    </a>
                                </div>
                        </div>
                        <div class="card-body">
                            <div class="col-md-4 offset-md-2">
                                <form action="{{ url('edit-barang/'.$barang->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    
                                    <div class="form-grub">
                                        <label for="">Nama Barang</label>
                                        <input type="text" name="barang" id="" class="form-control" value="{{ $barang->nama_barang}}">
                                    </div>
                                    <div class="form-grub">
                                        <label for="">Stok</label>
                                        <input type="number" name="stok" id="" class="form-control" value="{{ $barang->stok}}">
                                    </div>
                                    <div class="form-grub">
                                        <label for="">Harga</label>
                                        <input type="number" name="harga" id="" class="form-control" value="{{ $barang->harga}}">
                                    </div>
                                    <div class="form-grub">
                                        <label for="">Kategori</label>
                                        <select name="kategori" id="" class="form-control">
                                            <option value="">{{ $barang->kategori->nama_kategori}}</option>
                                            <option value="">-Pilih</option>
                                           
                                            @foreach ($kategori as $item)
                                            <option value="{{ $item->nama_kategori}}">{{ $item->nama_kategori}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                    <div class="col-md-4">
                                        <div class="form-grub">
                                            <label for="">Deskripsi Barang</label>
                                            <textarea name="deskripsi" class="form-control"  id="" cols="50" rows="5">{{ $barang->deskripsi}}</textarea>
                                        </div>
                                        <div class="form-grub">
                                            <label for="">Gambar</label><br>
                                            <img src="{{ url('data_barang/'.$barang->gambar)}}" alt="" style="height: 100px; width: 100px;">
                                            <input type="file" name="gambar" id="" class="form-control">
                                        </div>
                                        <br>
                                        <button type="Submit" class="btn btn-success">Ubah</button>
                                        {{-- <a href="{{ url('edit-varian/'.$barang->id)}}" class="btn btn-primary">Ubah varian</a> --}}
                                    </div>
                                </form>
                        </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection