@component('mail::message')
# Pembayaran FKMPI-XXI

Selamat. Dokumen anda berhasil kami verifikasi untuk menyelesaikan tahap terakhir silahkan cetak bukti registrasi.

@component('mail::button', ['url' => 'https://munaspolitanisamarinda.xyz/home'])
Klik disini
@endcomponent

From,<br>
{{ config('app.name') }}
@endcomponent
