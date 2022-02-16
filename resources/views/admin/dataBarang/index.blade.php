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
                    <li><a href="{{ route('dashboard')}}">Dashboard</a></li>
                    <li><a href="{{ route('pesanan')}}">Pesanan Masuk</a></li>
                    <li class="active">Data Barang</li>
                    <li><a href="{{ route('kategori')}}">Kategori</a></li>
                    <li><a href="{{ route('jangkauan')}}">Jangkauan</a></li>
                    <li><a href="{{ route('laporan')}}">Laporan</a></li>
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
                @include('components.alert')
                <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Barang</strong>
                            <div class="pull-right">
                            <a href="{{ route('tambah.barang')}}" class="btn btn-success btn-sm">
                                <i class="fa fa-plus">Tambah Barang</i>
                            </a>
                            </div>
                        </div>
                        <div class="card-body">
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama Barang</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($barang as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ url('data_barang/'.$item->gambar)}}" alt="" style="height: 50px; width: 50px;"></td>
                            <td>{{ $item->nama_barang}}</td>
                            <td>{{ $item->stok}}</td>
                            <td>Rp {{ number_format($item->harga)}}</td>
                            <td class="text-center">
                            <div class="inline-block">
                                <a href="{{ route('tambah.varian',$item->id)}}" class="btn btn-success btn-sm">
                                    <i class="fa fa-plus"></i></a>
                                <a href="{{ route('edit.barang',$item->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i></a>
                                <a href="{{ route('detail.barang',$item->id)}}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i></a>
                                <form action="{{ route('hapus.barang',$item->id)}}" method="POST" class="d-inline" onsubmit="return confirm('apakah anda yakin untuk mengahapus data?')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection