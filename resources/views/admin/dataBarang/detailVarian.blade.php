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
                                    <a href="{{ route('data.barang')}}" class="btn btn-secondary btn-sm">
                                        <i class="fa fa-undo">Back</i>
                                    </a>
                                </div>
                        </div>
                        <div class="card-body">
                          @forelse ($varian as $item)
                          <div class="col-md-4 offset-md-1">
                            <table>
                                   
                                   <tr>
                                    <th>Nama Varian </th>
                                    <th width="50px">:</th>
                                    <th>{{ $item->nama_varian}}</th>
                                </tr> 
                                <tr>
                                    <th>Stok</th>
                                    <th>:</th>
                                    <th>{{ $item->stok_varian}}</th>
                                </tr>
                                <tr>
                                    <th>Harga</th>
                                    <th>:</th>
                                    <th>{{ $item->harga_varian}}</th>
                                </tr>
                                <tr>
                                    <th>Gambar</th>
                                    <th>:</th>
                                    <th><img src="{{ url('data_varian/'.$item->gambar_varian)}}" alt="" style="height: 120px;width: 150px;"></th>
                                </tr>    
                                   
                            </table>
                        </div>
                          @empty
                              <h3>Tidak ada varian barang</h3>
                          @endforelse
                        </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection