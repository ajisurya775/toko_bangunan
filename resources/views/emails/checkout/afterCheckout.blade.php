@component('mail::message')
# Pembelian Barang No : {{ $checkout->invoice}}

Hi {{ $checkout->user->name}}
<br>
Terimakasih telah belanja ditoko kami. Subtotal belanja anda senilai Rp {{number_format($checkout->subtot, 0,',','.')}} akan segera kami proses mohon menunggu balasan email kami!

@component('mail::button', ['url' => route('history')])
Login
@endcomponent

Terimakasih,<br>
{{ config('app.name') }}
@endcomponent
