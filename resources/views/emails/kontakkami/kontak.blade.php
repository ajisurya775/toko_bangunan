@component('mail::message')
# Hi Admin

Kritik dan saran dari pelanggan.
<br>
Nama Pelanggan : {{ $request->name }}<br>
Subjek : {{ $request->subject}}<br>
Email : {{ $request->email}}<br>
No Hp : {{ $request->hp}}<br>
Pesan : {{ $request->message}}

@component('mail::button', ['url' => route('/')])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
