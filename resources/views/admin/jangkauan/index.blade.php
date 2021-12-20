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
                    <li><a href="{{ route('kategori')}}">Kategori</a></li>
                    <li class="active">Jangkauan</li>
                </ol>
            </div>
        </div>
    </div>
</div>  
@endsection

@section('content')
<div class="col-lg-6">
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
                <tr>
                  <th scope="row">1</th>
                  <td>Melati II</td>
                  <td>
                      <a href="" class="btn btn-danger btn sm"><i class="fa fa-trash"></i></a>
                      <a href="{{ route('edit-jangkauan')}}" class="btn btn-primary btn sm"><i class="fa fa-edit"></i></a>
                  </td>
                </tr>
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
        <form action="">
            <div class="form-grub">
                <label for="">Desa</label>
                <input type="text" class="form-control">
            </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
    </form>
    </div>
</div>
</div>
</div>   
@endsection