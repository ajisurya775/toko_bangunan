@extends('layoutUser.app2')

@section('breadcrumbs')
<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index1.html">Beranda<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Detail Produk</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->   
@endsection

@section('content')
<!-- Start Blog Single -->
<section class="blog-single section">
    <div class="container">
        @include('components.alert')
        <div class="row">
            <div class="col-lg-4 col-12 offset-md-2">
                <div class="blog-single-main">
                    <div class="row">
                        <div class="col-12">
                            <div class="image">
                                <img src="{{ url('data_varian/',$varian->gambar_varian)}}" alt="#" style="height: 400px;width: 300px;">
                            </div>
                            <div class="blog-detail">
                                <h2 class="blog-title">{{ $varian->nama_varian}}</h2>
                                <div class="blog-meta">
                                    <span class="author"><a href="#"><i class="fa fa-user"></i>By Admin</a><a href="#"><i class="fa fa-calendar"></i>{{ $varian->created_at->format('M-d-Y')}}</a></span>
                                </div>
                                <div class="content">
                                    <p>{{ $varian->deskripsi}}</p>
                                </div>	 
                            </div>                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="main-sidebar">
                    <!-- Single Widget -->
                    <div class="single-widget category">
                        <h3 class="title">Detail varian</h3>
                        <form action="{{ route('varian.aksi',$varian->id)}}" method="post" >
                            @csrf
                            <div class="form-grub">
                                <label for=""> Harga : Rp {{number_format($varian->harga_varian) }}</label>
                            </div>
                            <div class="form-grub">
                                <label for=""> Stok : {{ $varian->stok_varian}}</label>
                            </div>
                            <div class="form-grub"><br>
                                <label for=""> Qty</label>
                                <input type="number" min="1" class="form-control" name="qty" value="{{ old('qty')}}">
                            </div><br>
                            <button class="btn btn-secondary" type="submit"><i class="fa fa-cart-plus" aria-hidden="true"></i> Tambah Keranjang</button>
                        </form>
                    </div>
                    <!--/ End Single Widget -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Blog Single --> 
@endsection