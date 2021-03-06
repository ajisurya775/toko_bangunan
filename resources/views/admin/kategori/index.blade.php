@extends('layouts.app')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Kategori</h1>
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
                    <li class="active">Kategori</li>
                    <li><a href="{{ route('jangkauan')}}">Jangkauan</a></li>
                    <li><a href="{{ route('laporan')}}">Laporan</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>  
@endsection

@section('content')
<div class="col-lg-12">
    @include('components.alert')
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Kategori</strong>
            <div class="pull-right">
                <button class="btn btn-success btn sm" type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
                    <i class="fa fa-plus"></i>Tambah Kategori
                </button>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($kategori as $item)
                <tr>
                    <td scope="row">{{ $loop->iteration}}</td>
                    <td>{{ $item->nama_kategori}}</td>
                    <td>
                        <form action="{{ route('hapus.kategori', $item->id)}}" method="post" class="d-inline" onsubmit="return confirm('Apakah anda yakin untuk menghapus data?')">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                        <a href="{{ route('edit.kategori',$item->id)}}" class="btn btn-primary btn-sm d-inline">
                            <i class="fa fa-edit"></i></a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
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
        <h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="{{ route('kategori')}}" method="POST">
            @csrf
            <div class="form-grub">
                <label for="">Kategori</label>
                <input type="text" name="nama_kategori" class="form-control" required>
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