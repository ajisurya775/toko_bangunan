@component('mail::message')
# Pesanan Diterima

Hi {{$checkout->user->name}}
<br>
Selamat pesanan anda diterima oleh kami. Pesanan anda akan di antarkan oleh kurir kami sesuai dengan alamat yaitu:
<br><br>
Desa     : {{$checkout->desa}}
<br>
Alamat   : {{ $checkout->deskripsi_alamat}}
<br>
No hp    : {{ $checkout->hp}}
<br>
subtotal : Rp {{ number_format($checkout->subtot, 0,',','.')}}

@component('mail::button', ['url' => route('history')])
Login
@endcomponent

Terimakasih,<br>
{{ config('app.name') }}
@endcomponent
