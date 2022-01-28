@extends('layouts.app')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Laporan</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="{{ route('dashboard')}}">Dashboard</a></li>
                    <li><a href="{{ route('pesanan')}}">Pesanan Masuk</a></li>
                    <li><a href="{{ route('kategori')}}">Kategori</a></li>
                    <li><a href="{{ route('jangkauan')}}">Jangkauan</a></li>
                    <li class="active">Laporan</li>
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
                            <strong class="card-title">Data Barang</strong>
                            <div class="pull-right">
                            <button class="btn btn-info" type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#staticModal">
                                <i class="fa fa-print"></i> Cetak Pdf
                            </button>
                            </div>
                        </div>
                        <div class="card-body">
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pembeli</th>
                        <th>Sub Total</th>
                        <th>Nama Desa</th>
                        <th>aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                   @forelse ($checkout as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>Rp {{ number_format($item->subtot)}}</td>
                        <td>{{ $item->desa }}</td>
                        <td class="text-center">
                            <a href="{{ route('detail.pesanan',$item->invoice)}}" class="btn btn-warning btn-sm">
                            <i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                   @empty
                       <td></td>
                       <td><h3>Tidak ada data laporan.!</h3></td>
                   @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->


</div><!-- /#right-panel -->

<!-- Right Panel -->

<div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticModalLabel">Pilih Tanggal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-grub">
                            <label for="">Pilih tanggal</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="form-grub">
                            <label for="">Pilih tanggal</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                </div>    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-success"><i class="fa fa-print"></i> Cetak</button>
            </div>
        </div>
    </div>
</div>
@endsection