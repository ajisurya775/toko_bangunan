@extends('layouts.app')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Pesanan Masuk</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="{{ route('dashboard')}}">Dashboard</a></li>
                    <li class="active">Pesanan Masuk</li>
                    <li><a href="{{ route('data.barang')}}">Data Barang</a></li>
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

    <div class="row">
        <div class="col-md-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success">Info</span> Pada kolom status terdapat 3 status yaitu <span class="badge bg-warning text-white">Menunggu</span> <span class="badge bg-success text-white">Dikirim</span> dan <span class="badge bg-danger text-white">Ditolak</span></b>.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              @include('components.alert')
            <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Pesanan Masuk</strong>
                    </div>
                    <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pembeli</th>
                    <th>Sub Total</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($checkout as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->user->name}}</td>
                    <td>Rp{{ number_format($item->subtot)}}</td>
                    <td>
                        @if ($item->status == 1)
                        <span class="badge bg-warning text-white">Menunggu</span>
                        @elseif ($item->status == 2)
                        <span class="badge bg-success text-white">Dikirim</span>
                        @else
                        <span class="badge bg-danger text-white">Ditolak</span>
                        @endif
                    </td>
                    <td class="text-center">

                    <a href="{{ route('detail.pesanan',$item->invoice)}}" class="btn btn-warning btn-sm">
                    <i class="fa fa-eye"></i></a>

                    <a href="{{ route('cetak.pesanan',$item->invoice)}}" target="_blank" class="btn btn-info btn-sm">
                        <i class="fa fa-print"></i></a>

                    @if ($item->status == 1)
                    <form action="{{ route('tolak.pesanan',$item->id)}}" class="d-inline" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button>
                    </form>

                    <form action="{{ route('terima.pesanan',$item->id)}}" class="d-inline" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check" aria-hidden="true"></i></i></button>
                    </form>
        
                    @endif
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection