@extends('layouts.backend.master')
@section('title', 'Dashboard -- Munas Fkmpi 2020')
@section('isi', 'Selamat Datang Admin')
@section('content')

    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total User</h4>
                    </div>
                    <div class="card-body">
                        {{hitung()}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Admin Biasa</h4>
                    </div>
                    <div class="card-body">
                        {{hitungAdmin()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="row">
            @foreach($user as $user)
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <article class="article">
                        <div class="article-header">
                            <div class="article-image" data-background="{!! asset('frontend/assets/img/profiles/' . $user['biodata']['gambar']) !!}" style="background-image: url('http://multiauth.test/frontend/assets/img/users/default.png');" >
                            </div>
                            <div class="article-title">
                      <span>
                        @if ($user->pembayaran == 0)
                              <div class="badge badge-warning badge-sm">Pending</div>
                          @endif
                        @if ($user->pembayaran == 1)
                              <div class="badge badge-success badge-sm">Lunas</div>
                          @endif
                        @if ($user->pembayaran == 3)
                            <div class="badge badge-danger badge-sm">Proses Cek Data</div>
                        @endif
                      </span>
                            </div>
                        </div>
                        <div class="article-details">
                            <p><i class="fa fa-user"> {!! $user['name'] !!}</i></p>
                            <p><i class="ion-ios-telephone"> {!! $user['role'] !!}</i></p>
                            <div class="article-cta">
                                <a href="{!! route('datauser.id', [$user->uuid]) !!}" class="btn btn-primary">Lihat</a>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
@endsection
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
@stop
