@extends('layouts.backend.master')
@section('title', 'List User')
@section('content')
        <section class="section">
            <div class="section-header">
                <h1>User</h1>
            </div>
            <div class="section-body">
                <div class="section-title">
                    Detail
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="{!! asset('frontend/assets/img/profiles/' . $user['biodata']['gambar']) !!}" class="rounded-circle profile-widget-picture" width="100" height="100">
                            <div class="profile-widget-items">
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Status</div>
                                    <div class="profile-widget-item-value">@if($user->pembayaran == 0 ) Pending @endif @if($user->pembayaran == 1 ) Lunas @endif @if($user->pembayaran == 3 ) Proses Cek data @endif</div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Creatted</div>
                                    <div class="profile-widget-item-value"><td>{{ $user->created_at  }}</td></div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">update</div>
                                    <div class="profile-widget-item-value"><td>{{ $user->updated_at  }}</td></div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-widget-description pb-0">
                            <div class="profile-widget-name">{{ $user->name  }} <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> Member Munas FKMPI XXI</div></div>
                            <table>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><td>{{ $user->email  }}</td></td>
                                </tr>
                                <tr>
                                    <td>Perguruan Tinggi</td>
                                    <td>:</td>
                                    <td><td>{{ $user['biodata']['perguruan']  }}</td></td>
                                </tr>
                                <tr>
                                    <td>Fakultas / Jurusan</td>
                                    <td>:</td>
                                    <td><td>{{ $user['biodata']['jurusan']  }}</td></td>
                                </tr>
                            </table>


                        </div>
                        <div class="card-footer text-center pt-0">
                            <div class="font-weight-bold mb-2 text-small">Follow Gugun On</div>
                            <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-social-icon mr-1 btn-github">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    </div>
                    <div class="col-12 col-sm-6 col-sm-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-body">
                                <form action="{{ route('datauser.update', [$user->uuid])  }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="uuid" value="{{ $user->uuid }}">
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Bayar
                                        </label>    
                                    </div>
                                    <div class="form-group">
                                            <select class="form-control" name="pembayaran">
                                                <option value="1" {{ $user->pembayaran == 1 ? 'selected' : ''}} name="pembayaran" >Selesai</option>
                                                <option value="0" {{ $user->pembayaran == 0 ? 'selected' : ''}} name="pembayaran" >Pending</option>
                                                <option value="" disabled="">_--Proses Pengiriman Data--_</option>
                                                <option value="3" {{ $user->pembayaran == 3 ? 'selected' : ''}} name="pembayaran" >Proses Cek Data</option>
                                            </select>
                                        </div>
                                    <div class="form-group">
                                         <button type="submit" class="btn btn-primary">Kirim</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <h4>Informasi Pembayaran User</h4>
                        <div class="card-header-action">
                          <form action="{{ route('deletePayment',[$user->uuid]) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="submit" class="btn btn-danger" value="Delete Payment" onclick="return confirm('Yakin ingin menghapus?')">
                            </form>
                        </div>
                      </div>
                      <div class="card-body">
                        <h3>Nama Pengirim</h3>
                        <div class="mb-2 text-muted">{{ $user['payment']['nama_pengirim']  }}</div>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Lihat Struck</button>
                        <!-- <div class="chocolat-parent">
                          <a href="{!! asset('frontend/assets/img/payments/' . $user['payment']['gambar']) !!}" class="chocolat-image" title="Bukti pembayaran user">
                            <div data-crop-image="285" style="overflow: hidden; position: relative; height: 100px;">
                              <img alt="image" src="{!! asset('frontend/assets/img/payments/' . $user['payment']['gambar']) !!}" class="img-fluid">
                            </div>
                          </a>
                        </div> -->
                      </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <img src="{!! asset('frontend/assets/img/payments/' . $user['payment']['gambar']) !!}" width="100%" height="100%">
      </div>
    </div>
  </div>
</div>
@stop
@section('footer')
<script>
        @if(Session::has('success'))
            iziToast.success({
                title: "Sukses",
                message: "{{ Session::get('success') }}",
                position: "topRight"
              });
        @endif
    </script>
@endsection


