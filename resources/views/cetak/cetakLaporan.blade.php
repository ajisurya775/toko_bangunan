<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Penjualan</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Tanggal : 
                {{ \Carbon\Carbon::parse($tglawal)->format('d/m/Y')}} SAMPAI DENGAN {{ \Carbon\Carbon::parse($tglakhir)->format('d/m/Y')}}
                

            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h6 class="mb-3"></h6>
                        <div>
                            <strong>TOKO BANGUNAN UD. RIZKI</strong>
                        </div>
                        <div>Perbaungan</div>
                        <div>Desa Melati II Dusun Sei Tontong</div>
                        <div>Email: ud.rizki123@gmail.com</div>
                        <div>Phone: 081263487168</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center">
                            <div>
                                <strong>LAPORAN PENJUALAN</strong>
                            </div>
                        </h2><br>
                    </div>
                </div>

                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Nama Pelanggan</th>
                                <th>Nama Desa</th>

                                <th class="right">No Hp</th>
                                <th class="center">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($checkout as $item)
                            <tr>
                                <td class="center">{{ $loop->iteration}}</td>
                                <td class="left strong">{{ $item->user->name}}</td>
                                <td class="left">{{ $item->desa}}</td>

                                <td class="right">{{ $item->hp}}</td>
                                <td class="right">Rp {{ number_format($item->subtot, 0,',','.')}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5">

                    </div>

                    <div class="col-5 ml-auto">
                        <table class="table table-clear" style="margin-right: 100px;">
                            <tbody>
                                <tr>
                                    <td>
                                        <strong>Subtotal</strong>
                                    </td>
                                    @php
                                        $subtotal = 0;
                                        foreach ($checkout as $item) {
                                            $subtotal = $subtotal + $item->subtot;
                                        }
                                    @endphp
                                    <td class="right"><strong>Rp {{ number_format($subtotal, 0,',','.')}}</strong></td>
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