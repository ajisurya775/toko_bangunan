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
                        <li class="active"><a href="blog-single.html">Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->
@endsection

@section('content')        
<!-- Start Checkout -->
<section class="shop checkout section">
    <div class="container">
        <div class="row"> 
            <div class="col-lg-8 col-12">
                <div class="checkout-form">
                    <h2>Checkout Pesanan Anda</h2>
                    <p>Silahkan isi form ini agar barang bisa langsung diproses!</p>
                    <!-- Form -->
                    <form class="form" method="post" action="#">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nomor Invoice<span>*</span></label>
                                    <input type="text" name="name" value="{{ $order->code}}" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nama<span>*</span></label>
                                    <input type="text" name="name" value="{{ Auth::user()->name}}" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nama Desa<span>*</span></label>
                                    <input type="email" name="email"  required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Deskripsi Alamat<span>*</span></label>
                                    <textarea name="" id="" cols="10" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nomor Handphone<span>*</span></label>
                                    <input type="number" name="number"  required="required">
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--/ End Form -->
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="order-details">
                    <!-- Order Widget -->
                    <div class="single-widget">
                        <h2>TOTAL BELANJA</h2>
                        <div class="content">
                            <ul>
                                @php
                                    $subtotal = 0;
                                    foreach ($keranjang as $item) {
                                        $subtotal = $subtotal + $item->total;
                                    }
                                @endphp
                                <li>Sub Total<span>Rp {{ number_format($subtotal) }}</span></li>
                                <input type="hidden" value="">
                                <li>Jumlah Bayar <input type="number" name="bayar"></li>
                                <li>Bukti Pembayaran <input type="file" name="gambar"></li>
                            </ul>
                        </div>
                    </div>
                    <!--/ End Order Widget -->
                    <!-- Button Widget -->
                    <div class="single-widget get-button">
                        <div class="content">
                            <div class="button">
                                <a href="history.html" class="btn">proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                    <!--/ End Button Widget -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Checkout -->

@endsection