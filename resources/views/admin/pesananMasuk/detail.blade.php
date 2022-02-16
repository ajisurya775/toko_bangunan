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
                        <a href="{{ route('cetak.pesanan',$checkout->invoice)}}" target="_blank" class="btn btn-success btn-sm">
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
                                <th>{{ $checkout->invoice}}</th>
                            </tr>
                            <tr>
                                <th>Nama Pelanggan</th>
                                <th>:</th>
                                <th>{{ $checkout->user->name}}</th>
                            </tr>
                            <tr>
                                <th>Bukti Pembayaran</th>
                                <th>:</th>
                                <th><a href="{{ url('bukti_pembayaran',$checkout->bukti_pebayaran)}}" target="_blank">Cek pembayaran</a></th>
                            </tr>
                            <tr>
                                <th>Sub Total</th>
                                <th>:</th>
                                <th>Rp{{ number_format($checkout->subtot)}}</th>
                            </tr>
                        </table>
                        </div>
                        <div class="col-md-6 offset-md-2">
                            <table>
                                <tr>
                                    <th>Tanggal</th>
                                    <th width="50px">:</th>
                                    <th>{{$checkout->created_at->format('d-m-Y')}}</th>
                                </tr>
                                <tr>
                                    <th>Desa</th>
                                    <th>:</th>
                                    <th>{{$checkout->desa}}</th>
                                </tr>
                                <tr>
                                    <th>Alamat Lengkap</th>
                                    <th>:</th>
                                    <th>{{$checkout->deskripsi_alamat}} </th>
                                </tr>
                                <tr>
                                    <th>No Tlp</th>
                                    <th>:</th>
                                    <th>{{$checkout->hp}}</th>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <th>:</th>
                                    <th>
                                        @if ($checkout->status == 1)
                                        <span class="badge bg-warning text-white">Menunggu</span>
                                        @elseif ($checkout->status == 2)
                                        <span class="badge bg-success text-white">Dikirim</span>
                                        @else
                                        <span class="badge bg-danger text-white">Ditolak</span>
                                        @endif
                                    </th>
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
                <span class="badge badge-pill badge-success">Info</span> Pada kolom status terdapat 3 status yaitu <span class="badge bg-warning text-white">Menunggu</span> <span class="badge bg-success text-white">Dikirim</span> dan <span class="badge bg-danger text-white">Ditolak</span></b>.
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
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($checkoutdetail as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ (is_null($item->varian_id)? $item->barang->nama_barang : $item->varian->nama_varian) }}</td>
                    <td><img src="{{ is_null($item->varian_id) ? url('data_barang',$item->barang->gambar) : url('data_varian',$item->varian->gambar_varian) }}" alt="" style="height: 50px;width: 50px;"></td>
                    <td>{{ $item->qty}}</td>
                    <td>Rp {{number_format( $item->total)}}</td>
                </tr>     
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>   
@endsection