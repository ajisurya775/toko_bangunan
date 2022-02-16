@extends('layouts.app')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Jangkauan</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="{{ route('dashboard')}}">Dashboard</a></li>
                    <li><a href="{{ route('pesanan')}}">Pesanan Masuk</a></li>
                    <li><a href="{{ route('data.barang')}}">Data Barang</a></li>
                    <li><a href="{{ route('kategori')}}">Kategori</a></li>
                    <li class="active">Jangkauan</li>
                    <li><a href="{{ route('laporan')}}">Laporan</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>  
@endsection

@section('content')
<div class="col-lg-6">
    @include('components.alert')
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Desa</strong>
            <div class="pull-right">
                <button class="btn btn-success btn sm" type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
                    <i class="fa fa-plus"></i>Tambah Desa
                </button>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Desa</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($jangkauan as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->nama_Desa}}</td>
                    <td>
                        <form action="{{ route('hapus.jangkauan', $item->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Apakah anda yakin menghapus data ini?')">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                        <a href="{{ route('edit.jangkauan',$item->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>
    <div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Info</strong>
        </div>
        <div class="card-body">
            <div class="jumbotron">
                Jangkauan ini bertujuan untuk membatasi pesanan barang panglong yang hanya bisa di antar kebeberapa tempat oleh UD.Rizki
            </div>
        </div>
    </div>
</div>


    </div>
</div><!-- .animated -->
</div><!-- .content -->


</div><!-- /#right-panel -->

<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="mediumModalLabel">Tambah Desa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="{{ route('jangkauan')}}" method="POST">
            @csrf
            <div class="form-grub">
                <label for="">Desa</label>
                <input type="text" name="nama_desa" class="form-control" required>
            </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    </div>
</div>
</div>
</div>   
@endsection