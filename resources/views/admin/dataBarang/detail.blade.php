@extends('layouts.app')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Dashboard</li>
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
                            <strong class="card-title">Detail Barang</strong>
                                <div class="pull-right">
                                    <a href="tables-data.html" class="btn btn-secondary btn-sm">
                                        <i class="fa fa-undo">Back</i>
                                    </a>
                                </div>
                        </div>
                        <div class="card-body">
                            <div class="col-md-6 offset-md-3">
                                <table>
                                        <tr>
                                            <th>Nama Barang </th>
                                            <th width="50px">:</th>
                                            <th>{{ $barang->nama_barang}}</th>
                                        </tr> 
                                        <tr>
                                            <th>Stok</th>
                                            <th>:</th>
                                            <th>{{ $barang->stok}}</th>
                                        </tr>
                                        <tr>
                                            <th>Harga</th>
                                            <th>:</th>
                                            <th>Rp{{ $barang->harga}}</th>
                                        </tr>
                                        <tr>
                                            <th>Kategori</th>
                                            <th>:</th>
                                            <th>{{ $barang->kategori->nama_kategori}}</th>
                                        </tr>
                                        <tr>
                                            <th>Deskripsi</th>
                                            <th>:</th>
                                            <th>{{ $barang->deskripsi}}</th>
                                        </tr>
                                        <tr>
                                            <th>Gambar</th>
                                            <th>:</th>
                                            <th><img src="{{ url('data_barang/'.$barang->gambar)}}" alt="" style="height: 100px;width: 100px;"></th>
                                        </tr>
                                        <tr>
                                            <th><br><a href="{{ route('detail.varian',$barang->id)}}" class="btn btn-success"><i></i>detail varian</a></th>
                                        </tr>        
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div><!-- .animated     
@endsection