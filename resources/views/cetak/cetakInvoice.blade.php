<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice Pesanan {{ $checkout->user->name}}</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Invoice
                <strong>{{ $checkout->invoice}}</strong>
                <span class="float-right"> <strong>Status:</strong> 
                @if ($checkout->status == 1)
                    Menunggu
                @elseif ($checkout->status == 2)
                    Dikirim
                @else
                    Ditolak
                @endif
                </span>

            </div>
            <div class="card-body">
                <div class="row mb-4 justify-content-between">
                    <div class="col-6">
                        <h6 class="mb-3">Toko:</h6>
                        <div>
                            <strong>Toko Bangunan UD. Rizki</strong>
                        </div>
                        <div>Tanggal : {{ $checkout->created_at->format('d-m-Y')}}</div>
                        <div>Desa Melati II Dusun Sei Tontong</div>
                        <div>Email: ud.rizki123@gmail.com</div>
                        <div>Nomor Hp : 081263487168</div>
                    </div>

                    <div class="col-6">
                        <h6 class="mb-3">Pelanggan:</h6>
                        <div>
                            <strong>{{ $checkout->user->name}}</strong>
                        </div>
                        <div>{{ $checkout->desa}}</div>
                        <div>{{ $checkout->deskripsi_alamat}}</div>
                        <div>Email : {{ $checkout->user->email}}</div>
                        <div>Nomor Hp : {{ $checkout->hp}}</div>
                    </div>
                </div>

                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Item</th>

                                <th class="right">Harga</th>
                                <th class="center">Qty</th>
                                <th class="right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($checkoutdetail as $item)
                            <tr>
                                <td class="center">{{ $loop->iteration}}</td>
                                <td class="left strong">{{ (is_null($item->varian_id)? $item->barang->nama_barang : $item->varian->nama_varian)}}</td>

                                <td class="right">Rp {{ number_format(is_null($item->varian_id)? $item->barang->harga : $item->varian->harga_varian)}}</td>
                                <td class="center">{{ $item->qty}}</td>
                                <td class="right">Rp {{ number_format($item->total, 0,',','.')}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5">

                    </div>

                    <div class="col-6 ml-auto">
                        <table class="table table-clear" style="margin-right: 100px;">
                            <tbody>
                                <tr>
                                    <td>
                                        @php
                                            $subtotal = 0;
                                            foreach ($checkoutdetail as $item) {
                                                $subtotal = $subtotal + $item->total;
                                            }
                                        @endphp
                                        <strong>Subtotal</strong>
                                    </td>
                                    <td class="right"><strong>Rp {{ number_format($subtotal)}}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>