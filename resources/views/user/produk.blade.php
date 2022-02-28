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
                        <li class="active"><a href="blog-single.html">Produk</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->    
@endsection

@section('content')
<!-- Product Style -->
<section class="product-area shop-sidebar shop section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="shop-sidebar">
                        <!-- Single Widget -->
                        <div class="single-widget category">
                            <h3 class="title">KATEGORI</h3>
                            <ul class="categor-list">
                                <li><a href="#">Litrik</a></li>
                                <li><a href="#">Alat Bangunan</a></li>
                                <li><a href="#">Bahan Bangunan</a></li>
                            </ul>
                        </div>
                        <!--/ End Single Widget -->		
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <div class="row">
                    <div class="col-12">
                        <!-- Shop Top -->
                        <div class="shop-top">
                            <div class="shop-shorter">
                                <div class="single-shorter">
                                    <label>Show :</label>
                                    <select>
                                        <option selected="selected">09</option>
                                        <option>15</option>
                                        <option>25</option>
                                        <option>30</option>
                                    </select>
                                </div>
                                <div class="single-shorter">
                                    <label>Sort By :</label>
                                    <select>
                                        <option selected="selected">Name</option>
                                        <option>Price</option>
                                        <option>Size</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--/ End Shop Top -->
                    </div>
                </div>
                <div class="row">
                    @foreach ($barang as $item)
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="{{ route('detail',$item->id)}}">
                                    <img class="rounded" width="300px" src="{{ url('data_barang/',$item->gambar)}}" alt="#">
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
                                    <span>Rp {{ number_format($item->harga, 0,',','.')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Product Style 1  -->	

<section>
    <div class="row">
        <div class="col-6 offset-3">
            <div class="pull-center">
                {{ $barang->links() }}
            </div>
        </div>
    </div>
</section><br><br>

@endsection