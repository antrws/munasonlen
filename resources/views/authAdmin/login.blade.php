<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  <link rel="icon" type="text/css" href="{{ asset('landing/assets/images/fkmpi.jpg') }}">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('frontend/assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('frontend/assets/modules/bootstrap-social/bootstrap-social.css')}}">
  <script src="{{ asset('frontend/assets/sweet-alert2/sweetalert2.all.min.js') }}"></script>

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
<div class="preloader">
  <div class="loading">
    <img src="{{asset('landing/assets/images/loading/loading.gif')}}" width="80">
    <p>Harap Tunggu</p>
  </div>
</div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        @if (session('success')) {!! session('success') !!} @endif
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="{{ asset('landing/assets/images/fkmpi.jpg') }}" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="{{ route('admin.login.submit') }}" class="needs-validation" novalidate="">
                    @csrf
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                        <label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="{{ route('admin.password.request') }}" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>

              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Belum punya akun? <a href="{{url('/register')}}"><i class="fa fa-user"> Buat akun</i></a>
            </div>
            <div class="simple-footer">
              Copyright &copy; Rumah Code 2019
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('frontend/assets/modules/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/assets/modules/popper.js')}}"></script>
  <script src="{{asset('frontend/assets/modules/tooltip.js')}}"></script>
  <script src="{{asset('frontend/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('frontend/assets/modules/moment.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/stisla.js')}}"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
    $(document).ready(function(){
    $(".preloader").fadeOut();
    })
</script>
</body>
</html>
