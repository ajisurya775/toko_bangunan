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
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Tanggal Pembelian</th>
                  <th scope="col">Total Beli</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Rabu 23 desember 2021</td>
                  <td>Rp 20000000</td>
                  <td>
                    <span class="badge bg-warning">Menunggu</span>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Rabu 23 desember 2021</td>
                  <td>Rp 20000000</td>
                  <td>
                    <span class="badge bg-warning">Menunggu</span>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Rabu 23 desember 2021</td>
                  <td>Rp 20000000</td>
                  <td>
                    <span class="badge bg-warning">Menunggu</span>
                  </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Rabu 23 desember 2021</td>
                  <td>Rp 20000000</td>
                  <td>
                    <span class="badge bg-warning">Menunggu</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
</section><br><br>
@endsection