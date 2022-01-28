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
                @include('components.alert')
                <div class="checkout-form">
                    <h2>Checkout Pesanan Anda</h2>
                    <p>Silahkan isi form ini agar barang bisa langsung diproses!</p>
                    <!-- Form -->
                    <form class="form" method="post" action="{{ route('checkout.aksi')}}" id="aksi" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nomor Invoice<span>*</span></label>
                                    <input type="text" name="inv" value="{{ $nomer }}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nama<span>*</span></label>
                                    <input type="text" name="nama" value="{{ Auth::user()->name}}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nama Desa<span>*</span></label>
                                    <select name="desa" id="">
                                        <option value="">Pilih</option>
                                        @foreach ($jangkau as $item)
                                        <option value="{{ $item->nama_Desa}}">{{ $item->nama_Desa}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('desa'))
                                        <p class="text-danger">{{ $errors->first('desa')}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Deskripsi Alamat<span>*</span></label>
                                    <textarea name="alamat" id="" cols="10" rows="5">{{ old('alamat')}}</textarea>
                                    @if ($errors->has('alamat'))
                                        <p class="text-danger">{{ $errors->first('alamat')}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nomor Handphone<span>*</span></label>
                                    <input type="text" name="hp" value="{{ old('hp')}}">
                                    @if ($errors->has('hp'))
                                        <p class="text-danger">{{ $errors->first('hp')}}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
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
                                <input type="hidden" name="subtot" value="{{$subtotal}}">
                                <li>Bukti Pembayaran <input type="file" name="gambar" value="{{ old('gambar')}}"></li>
                                @if ($errors->has('gambar'))
                                    <li><p class="text-danger">{{ $errors->first('gambar')}}</p></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </form>
                    <!--/ End Order Widget -->
                    <!-- Button Widget -->
                    <div class="single-widget get-button">
                        <div class="content">
                            <div class="button">
                                <a href="#" onclick="event.preventDefault(); document.getElementById('aksi').submit();" class="btn">proceed to checkout</a>
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
<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document"
    style="
    height : 100vh;
    width : 100%;
    display : flex;
    justify-content : center;
    align-item : center;
    ">
        <div class="modal-content" style="height: 400px;width: 500px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="{{ asset('template_user/eshop/images/Rekening.png')}}" alt="#">
            </div>
        </div>
    </div>
</div>
@endsection