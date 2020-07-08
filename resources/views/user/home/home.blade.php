@extends('layouts.frontend.master')
@section('title','Home -- Munas Fkmpi 2020')
@section('isi', 'Selamat datang di web MUNAS')

@section('content')
@if (session('success')) {!! session('success') !!} @endif
@if(auth()->user()->status == 0)
<div class="row">
  <div class="col-12 mb-4">
    <div class="hero bg-primary text-white">
      <div class="hero-inner">
        <h2>Welcome, {{ $user->name }} </h2>
        <p class="lead">Silahkan lengkapi profil anda terlebih dahulu untuk melanjutkan. Dan melengkapi profil anda</p>
        <div class="mt-4">
          <a href="{{ route('user.edit',[$user->uuid]) }}" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Lengkapi Profil</a>
        </div>
      </div>
    </div>
  </div>
  @else
  @if(auth()->user()->status == 1)
<div class="col-12 col-sm-12 col-lg-12">
                <div class="card author-box card-primary">
                  <div class="card-body">
                    <div class="author-box-left">
                      <img alt="image" src="@if(auth()->user()->status == 1)
                            {{ $user->biodata->getGambar() }}
                          @else
                            frontend/assets/img/users/default.png
                          @endif" class="shadow-light rounded-circle" width="100" height="100">
                      <div class="clearfix"></div>
                      @if(is_null($user->biodata->gambar))
                      <a href="{{ route('editprofile',[$user->uuid]) }}" class="btn btn-primary mt-3"><i class="fa fa-user"> Upload Image</i></a>
                      @else

                      @endif
                    </div>
                    <div class="author-box-details">
                      <div class="author-box-name">
                        <i class="fa fa-user"> <a href="#">{{auth()->user()->name}}</a></i>
                      </div>
                      <div class="author-box-job">Musyawarah Nasional</div>
                      <div class="author-box-description">
                        <h6>
                          <table>
                            <tr>
                              <td>Email</td>
                              <td>:</td>
                              <td>{!! $user->email !!}</td>
                            </tr>
                            <tr>
                              <td>No Hp</td>
                              <td>:</td>
                              <td>{!! $user->kontak !!}</td>
                            </tr>
                            <tr>
                              <td>Nim</td>
                              <td>:</td>
                              <td>{!! $user->biodata->nim !!}</td>
                            </tr>
                            <tr>
                              <td>Agama</td>
                              <td>:</td>
                              <td>{!! $user->biodata->agama !!}</td>
                            </tr>
                            <tr>
                              <td>Tanggal Lahir</td>
                              <td>:</td>
                              <td>{!! $user->biodata->ttl !!}</td>
                            </tr>
                            <tr>
                              <td>Jenis Kelamin</td>
                              <td>:</td>
                              <td>
                                @if ($user->biodata->jk == 'L')
                                  Laki-Laki
                                @else
                                  Perempuan
                                @endif
                                </td>
                            </tr>
                            <tr>
                              <td>Alamat Sekarang</td>
                              <td>:</td>
                              <td>{!! $user->biodata->alamat !!}</td>
                            </tr>
                            <tr>
                              <td>Jurusan</td>
                              <td>:</td>
                              <td>{!! $user->biodata->jurusan !!}</td>
                            </tr>
                            <tr>
                              <td>Program Studi</td>
                              <td>:</td>
                              <td>{!! $user->biodata->prodi !!}</td>
                            </tr>
                            <tr>
                              <td>Perguruan Tinggi</td>
                              <td>:</td>
                              <td>{!! $user->biodata->perguruan !!}</td>
                            </tr>
                          </table><br>
                          @if(auth()->user()->pembayaran == 1)
                          <a href="{{ route('downloadpdf') }}" class="btn btn-primary"><i class="fa fa-user"> Cetak Bukti Regitrasi</i></a>
                          @endif
                          @if(auth()->user()->pembayaran == 0)
                          <a href="{{ route('payment',[$user->uuid]) }}" class="btn btn-primary">Konfirmasi Pembayaran</a>
                          <p>Silahkan klik pembayaran untuk menyelesaikan pendaftaran!!!</p>
                          NOTE
                          <p>Admin akan menyetujui jika sudah menyelesaikan pembayaran</p>
                          @endif
                          @if(auth()->user()->pembayaran == 3)
                          <button class="btn btn-primary trigger--fire-modal-2" id="modall">Lihat</button>
                          @endif
                        </h6>
                        @if(session('berhasil'))
                          <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                              <button class="close" data-dismiss="alert">
                                <span>×</span>
                              </button>
                              {{ session('berhasil') }}
                            </div>
                          </div>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endif
            </div>
            @endif
@endsection
@section('footer')
<script>
  $("#modall").fireModal({title:'Dokumentasi Lagi diunggah...', body: 'Harap menunggu confirmasi dari kami ya. kalau dokumennya sudah selesai di verifikasi.', center: true});
</script>
@endsection
