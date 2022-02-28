@extends('layoutUser.app2')

@section('breadcrumbs')
<!-- Breadcrumbs -->
<section>
  <div class="breadcrumbs">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="bread-inner">
                      <ul class="bread-list">
                          <li><a href="index1.html">Beranda<i class="ti-arrow-right"></i></a></li>
                          <li class="active"><a href="blog-single.html">History</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End Breadcrumbs -->   
@endsection

@section('content')
<section>
    <div class="container">
        <div class="row">
          <div class="col-lg-12 col-12 col-sm-4">
            @include('components.alert')
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Tanggal Pembelian</th>
                  <th scope="col">Total Beli</th>
                  <th scope="col">Status</th>
                  <th scope="col"><i class="fa fa-print"></i></th>
                </tr>
              </thead>
              <tbody>
               @forelse ($checkout as $item)
               <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->created_at->format('d-m-Y')}}</td>
                <td>Rp {{ number_format($item->subtot, 0,',','.')}}</td>
                <td>
                  @if ($item->status == 1)
                  <span class="badge bg-warning text-white">Menunggu</span>
                  @elseif ($item->status == 2)
                  <span class="badge bg-success text-white">Dikirim</span> 
                  @else
                  <span class="badge bg-danger text-white">Ditolak</span>
                  @endif
                </td>
                <td><a href="{{ route('cetak.pesanan', $item->invoice)}}" target="_blank">cetak</a></td>
              </tr>
               @empty
                   <tr>
                     <td></td>
                     <td><h3>Tidak ada histori transaksi </h3></td>
                   </tr>
               @endforelse
              </tbody>
            </table>
          </div>
        </div>
    </div>
</section><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection