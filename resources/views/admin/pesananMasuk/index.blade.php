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
                    <li><a href="{{ route('dashboard')}}">Dashboard</a></li>
                    <li class="active">Pesanan Masuk</li>
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
                <span class="badge badge-pill badge-success">Info</span> Pada kolom status terdapat 4 status yaitu <span class="badge bg-warning text-white">Menunggu</span> <span class="badge bg-info text-white">Proses</span> <span class="badge bg-success text-white">Dikirim</span> dan <span class="badge bg-danger text-white">Ditolak</span> untuk pesanan yang tidak bisa di proses pesanannya!</b>.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
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
                    <th>aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Aji surya</td>
                    <td>Rp 3000.000</td>
                    <td><span class="badge bg-warning">Menunggu</span></td>
                    <td class="text-center">
                    <a href="#" class="btn btn-warning btn-sm">
                    <i class="fa fa-eye"></i></a>
                    <a href="" class="btn btn-info btn-sm">
                        <i class="fa fa-print"></i></a>
                        <a href="" class="btn btn-danger btn-sm">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                        <a href="" class="btn btn-info btn-sm">
                            <i class="fa fa-spinner" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection