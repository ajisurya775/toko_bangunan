@component('mail::message')
# Selamat Datang

Hi {{ $user->name }}
<br>
Selamat datang di toko ud.rizki, Akun anda berhasil terdaftar di toko kami. Sekarang anda dapat belanja barang bangunan di toko kami!

@component('mail::button', ['url' => route('/')])
Login
@endcomponent

Terimakasih,<br>
{{ config('app.name') }}
@endcomponent
