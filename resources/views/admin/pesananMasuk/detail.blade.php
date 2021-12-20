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
                    <li class="active">Detail</li>
                </ol>
            </div>
        </div>
    </div>
</div>   
@endsection

@section('content')
<div class="content mt-3">
    <div class="row">
        <div class="col-md 12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Detail Pesanan</strong>
                    <div class="pull-right">
                        <a href="tambah_barang.html" class="btn btn-success btn-sm">
                            <i class="fa fa-print">Print</i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    
                        <div class="col-md-4">
                            <table>
                            <tr>
                                <th>Nomor Invoice</th>
                                <th width="50px">:</th>
                                <th>LPKK261441</th>
                            </tr>
                            <tr>
                                <th>Nama Pelanggan</th>
                                <th>:</th>
                                <th>Aji surya</th>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <th>:</th>
                                <th>ajisurya331@gmail.com</th>
                            </tr>
                            <tr>
                                <th>Sub Total</th>
                                <th>:</th>
                                <th>Rp 3000.000</th>
                            </tr>
                        </table>
                        </div>
                        <div class="col-md-6 offset-md-2">
                            <table>
                                <tr>
                                    <th>Tanggal</th>
                                    <th width="50px">:</th>
                                    <th>16 des 2021</th>
                                </tr>
                                <tr>
                                    <th>Desa</th>
                                    <th>:</th>
                                    <th>Melati II</th>
                                </tr>
                                <tr>
                                    <th>Alamat Lengkap</th>
                                    <th>:</th>
                                    <th>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque autem, deserunt laborum maiores vero necessitatibus earum atque </th>
                                </tr>
                                <tr>
                                    <th>No Tlp</th>
                                    <th>:</th>
                                    <th>081959129981</th>
                                </tr>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success">Info</span> Pada kolom status terdapat 4 status yaitu <span class="badge bg-warning">Menunggu</span> <span class="badge bg-info">Proses</span> <span class="badge bg-success">Dikirim</span> dan <span class="badge bg-danger">Ditolak</span> untuk pesanan yang tidak bisa di proses pesanannya!</b>.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>

            <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Pesanan</strong>
                    </div>
                    <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Gambar</th>
                    <th>Qty</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Batu Bata</td>
                    <td><img src="" alt=""></td>
                    <td>3000</td>
                    <td>
                        <span class="badge bg-warning">Menunggu</span>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>   
@endsection