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
                            <strong class="card-title">Tambah Varian</strong>
                                <div class="pull-right">
                                    <a href="{{ route('data.barang')}}" class="btn btn-secondary btn-sm">
                                        <i class="fa fa-undo">Back</i>
                                    </a>
                                </div>
                        </div>
                        <div class="card-body">
                            <div class="col-md-4 offset-md-4">
                                <form action="{{ route('tambah.varian',$barang->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-grub">
                                        <label for="">Nama Varian {{ $barang->nama_barang}}</label>
                                        <input type="text" name="nama_varian" id="" class="form-control {{ $errors->has('nama_varian')?'is-invalid':''}}">
                                        @if ($errors->has('nama_varian'))
                                            <p class="text-danger">{{ $errors->first('nama_varian')}}</p>
                                        @endif
                                    </div>
                                    <div class="form-grub">
                                        <label for="">Stok</label>
                                        <input type="number" name="stok_varian" id="" class="form-control {{ $errors->has('stok_varian')?'is-invalid':''}}">
                                        @if ($errors->has('stok_varian'))
                                            <p class="text-danger">{{ $errors->first('stok_varian')}}</p>
                                        @endif
                                    </div>
                                    <div class="form-grub">
                                        <label for="">Harga</label>
                                        <input type="number" name="harga_varian" id="" class="form-control {{ $errors->has('harga_varian')?'is-invalid':''}}">
                                        @if ($errors->has('harga_varian'))
                                            <p class="text-danger">{{ $errors->first('harga_varian')}}</p>
                                        @endif
                                    </div>
                                    <div class="form-grub">
                                        <label for="">Gambar</label>
                                        <input type="file" name="gambar_varian" id="" class="form-control {{ $errors->has('gambar_varian')?'is-invalid':''}}">
                                        @if ($errors->has('gambar_varian'))
                                            <p class="text-danger">{{ $errors->first('gambar_varian')}}</p>
                                        @endif
                                     </div>
                                        <br>
                                        <button type="Submit" class="btn btn-success">Simpan</button>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection