@component('mail::message')
# Pesanan Ditolak

Hi {{$checkout->user->name}}
<br>
Maaf pesanan anda kami tolak. Silahkan cek kembali bukti pembayaran anda dengan benar dan silahkan checkout kembali!


@component('mail::button', ['url' => route('history')])
Login
@endcomponent

Terimakasih,<br>
{{ config('app.name') }}
@endcomponent
