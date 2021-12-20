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
                            <strong class="card-title">Tambah Barang</strong>
                                <div class="pull-right">
                                    <a href="data_barang.html" class="btn btn-secondary btn-sm">
                                        <i class="fa fa-undo">Back</i>
                                    </a>
                                </div>
                        </div>
                        <div class="card-body">
                            <div class="col-md-4 offset-md-2">
                                <form action="">
                                    <div class="form-grub">
                                        <label for="">Nama Barang</label>
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                    <div class="form-grub">
                                        <label for="">Stok</label>
                                        <input type="number" name="" id="" class="form-control">
                                    </div>
                                    <div class="form-grub">
                                        <label for="">Harga</label>
                                        <input type="number" name="" id="" class="form-control">
                                    </div>
                                    <div class="form-grub">
                                        <label for="">Kategori</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">-Pilih</option>
                                            <option value="">Listrik</option>
                                            <option value="">Bahan Bangunan</option>
                                            <option value="">Alat Bangunan</option>
                                        </select>
                                    </div>
                                </div>
                                    <div class="col-md-4">
                                        <div class="form-grub">
                                            <label for="">Deskripsi Barang</label>
                                            <textarea name="" class="form-control"  id="" cols="50" rows="5"></textarea>
                                        </div>
                                        <div class="form-grub">
                                            <label for="">Gambar</label>
                                            <input type="file" name="" id="" class="form-control">
                                        </div>
                                        <br>
                                        <button type="Submit" class="btn btn-success">Simpan</button>
                                    </div>
                                </form>
                        </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection