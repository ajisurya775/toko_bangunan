@extends('layoutUser.app')

@section('content')
<section class="hero-slider">
    <!-- Single Slider -->
    <div class="single-slider">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-9 offset-lg-3 col-12">
                    <div class="text-inner">
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <div class="hero-text" style="box-shadow: -7px -7px;">
                                    <h3><span>TOKO BANGUNAN </span>UD.RIZKI</h3>
                                    <p>Menyediakan Semua Kebutuhan Anda <br> Dalam Membangun Rumah Pesan Sekarang <br> Tanpa Harus Pergi Keluar Rumah Barang Siap Kami Antar</p>
                                    <div class="button">
                                        <a href="#" class="btn">Belanja Sekarang!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Single Slider -->
</section>
<!--/ End Slider Area -->

<!-- Start Small Banner  -->
<section class="small-banner section">
    <div class="container-fluid">
        <div class="row">
            <!-- Single Banner  -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-banner" id="small_image">
                    <img src="{{ asset('template_user/eshop/images/kelistrikan.jpg')}}" alt="#">
                    <div class="content">
                        <p></p>
                        <h3>Kelistrikan</h3>
                        <a href="#" class="btn btn-danger text-white">Belanja Now</a>
                    </div>
                </div>
            </div>
            <!-- /End Single Banner  -->
            <!-- Single Banner  -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-banner" id="small_image">
                    <img src="{{ asset('template_user/eshop/images/bahan_bangunan.jpg')}}" alt="#">
                    <div class="content">
                        <p></p>
                        <h3>Bahan Bangunan</h3>
                        <a href="#" class="btn btn-danger text-white">Belanja Now</a>
                    </div>
                </div>
            </div>
            <!-- /End Single Banner  -->
            <!-- Single Banner  -->
            <div class="col-lg-4 col-12">
                <div class="single-banner tab-height">
                    <img src="{{ asset('template_user/eshop/images/alat_bangunan3.jpg')}}" alt="#" id="small_image">
                    <div class="content">
                        <p></p>
                        <h3 class="text-bold">Alat Bangunan</h3>
                        <a href="#" class="btn btn-danger text-white">Belanja Now</a>
                    </div>
                </div>
            </div>
            <!-- /End Single Banner  -->
        </div>
    </div>
</section>
<!-- End Small Banner -->

<!-- Start Product Area -->
<div class="product-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Trending Item</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-info">
                        <div class="nav-main">
                            <!-- Tab Nav -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Bahan Bangunan</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Listrik</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Alat Bangunan</a></li>
                            </ul>
                            <!--/ End Tab Nav -->
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <!-- Start Single Tab -->
                            <div class="tab-pane fade show active" id="man" role="tabpanel">
                                <div class="tab-single">
                                    <div class="row">
                                        @foreach ($bahan as $item)
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-6">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="{{ route('detail',$item->id)}}">
                                                        <img class="rounded" width="300px" src="{{ url('data_barang/',$item->gambar)}}" alt="#">
                                                        <img class="hover-img" src="{{ url('data_barang/',$item->gambar)}}" alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal" 
                                                            data-barang="{{ $item->nama_barang}}"
                                                            data-stok="{{ $item->stok}}"
                                                            data-harga="{{ $item->harga}}"
                                                            data-gambar="{{ $item->gambar}}"
                                                            data-deskripsi="{{ $item->deskripsi}}"
                                                            data-varian-id="{{ $item->varian}}"
                                                            data-varian-name="{{$item->varian }}"

                                                            title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="{{ route('detail',$item->id)}}">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="{{ route('detail',$item->id)}}">{{ $item->nama_barang}}</a></h3>
                                                    <div class="product-price">
                                                        <span>Rp {{ number_format($item->harga, 0,',','.')}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Tab -->
                            <!-- Start Single Tab -->
                            <div class="tab-pane fade" id="women" role="tabpanel">
                                <div class="tab-single">
                                    <div class="row">
                                        @foreach ($listrik as $item)
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-6">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="{{ route('detail',$item->id)}}">
                                                        <img class="rounded" width="300px" src="{{ url('data_barang/',$item->gambar)}}" alt="#">
                                                        <img class="hover-img" src="{{ url('data_barang/',$item->gambar)}}" alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal" 
                                                            data-barang="{{ $item->nama_barang}}"
                                                            data-stok="{{ $item->stok}}"
                                                            data-harga="{{ $item->harga}}"
                                                            data-gambar="{{ $item->gambar}}"
                                                            data-deskripsi="{{ $item->deskripsi}}"
                                                            

                                                            title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a data-toggle="modal" data-target="#exampleModal" 
                                                            data-barang="{{ $item->nama_barang}}"
                                                            data-stok="{{ $item->stok}}"
                                                            data-harga="{{ $item->harga}}"
                                                            data-gambar="{{ $item->gambar}}"
                                                            data-deskripsi="{{ $item->deskripsi}}"

                                                            title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="{{ route('detail',$item->id)}}">{{ $item->nama_barang}}</a></h3>
                                                    <div class="product-price">
                                                        <span>Rp {{ number_format($item->harga, 0,',','.')}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Tab -->
                            <!-- Start Single Tab -->
                            <div class="tab-pane fade" id="kids" role="tabpanel">
                                <div class="tab-single">
                                    <div class="row">
                                        @foreach ($alat as $item)
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-6">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="rounded" width="300px" src="{{ url('data_barang/',$item->gambar)}}" alt="#">
                                                        <img class="hover-img" src="{{ url('data_barang/',$item->gambar)}}" alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal" 
                                                            data-barang="{{ $item->nama_barang}}"
                                                            data-stok="{{ $item->stok}}"
                                                            data-harga="{{ $item->harga}}"
                                                            data-gambar="{{ $item->gambar}}"
                                                            data-deskripsi="{{ $item->deskripsi}}"

                                                            title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" data-toggle="modal" data-target="#exampleModal"
                                                            data-barang="{{ $item->nama_barang}}"
                                                            data-stok="{{ $item->stok}}"
                                                            data-harga="{{ $item->harga}}"
                                                            data-gambar="{{ $item->gambar}}"
                                                            data-deskripsi="{{ $item->deskripsi}}"

                                                            href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="#">{{ $item->nama_barang}}</a></h3>
                                                    <div class="product-price">
                                                        <span>Rp {{ number_format($item->harga, 0,',','.')}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Tab -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- End Product Area -->

<section>
    <div class="row">
        <div class="col-md-6 offset-5">
            <div class="pull-center">
                {{ $bahan->links() }}
                {{ $alat->links() }}
                {{ $listrik->links() }}
            </div>
        </div>
    </div>
</section>

<!-- Start Most Popular -->
<div class="product-area most-popular section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Hot Item</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel popular-slider">
                    @foreach ($random as $item)
                        <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="{{ route('detail',$item->id)}}">
                                <img class="default-img" src="{{ url('data_barang/',$item->gambar)}}" alt="#">
                                <img class="hover-img" src="{{ url('data_barang/',$item->gambar)}}" alt="#">
                            </a>
                            <div class="button-head">
                                <div class="product-action">
                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                </div>
                                <div class="product-action-2">
                                    <a title="Add to cart" href="{{ route('detail',$item->id)}}">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="{{ route('detail',$item->id)}}">{{ $item->nama_barang}}</a></h3>
                            <div class="product-price">
                                <span>Rp {{ $item->harga}}</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Most Popular Area -->



<!-- Modal -->

{{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
            </div>
            <div class="modal-body">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <!-- Product Slider -->
                            <div class="product-gallery">
                                <div class="quickview-slider-active">
                                    <div class="single-slider">
                                        <img id="gambar" src="#" alt="#">
                                    </div>
                                    <div class="single-slider">
                                        <img id="gambar" src="#" alt="#">
                                    </div>
                                    <div class="single-slider">
                                        <img id="gambar" src="#" alt="#">
                                    </div>
                                    <div class="single-slider">
                                        <img id="gambar" src="#" alt="#">
                                    </div>
                                </div>
                            </div>
                        <!-- End Product slider -->
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="quickview-content">
                            <h2 id="nama"></h2
                                <h3></h3>
                            <div class="quickview-peragraph">
                                <p id="deskripsi"></p>
                            </div>
                            <div class="size">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <h5 class="title">Harga</h5>
                                        <p id="harga"></p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <h5 class="title">Stok</h5>
                                        <p id="stok"></p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <h5 class="title">Varian</h5>
                                        <select id="package">
                                            <option selected="selected">Pilih</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <form action="">
                                <div class="quantity">
                                    <!-- Input Order -->
                                    <div class="input-group">
                                        <div class="button minus">
                                            <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                <i class="ti-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
                                        <div class="button plus">
                                            <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                                <i class="ti-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/ End Input Order -->
                                </div>
                                <div class="add-to-cart">
                                    <a href="#" class="btn">Add to cart</a>
                                </div>
                            </form>
                            <div class="default-social">
                                <h4 class="share-now">Share:</h4>
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection