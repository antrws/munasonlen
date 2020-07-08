<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register</title>
  <link rel="icon" type="text/css" href="{{ asset('landing/assets/images/munas.png') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('frontend/assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('frontend/assets/modules/jquery-selectric/selectric.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/components.css')}}">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->
</head>

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
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <a href="{{ url('/') }}"><img src="{{ asset('landing/assets/images/munas.png') }}" alt="logo" width="100" class="shadow-light rounded-circle"></a>
            </div>

            <div class="card card-primary">
              <div class="card-header">
                <h4>Register</h4>
              </div>

              <div class="card-body">
                <form action="{{ route('register') }}" method="post">
                  @csrf
                  <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="nama" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="kontak">No Hp</label>
                    <input id="kontak" type="kontak" class="form-control @error('kontak') is-invalid @enderror" name="kontak" value="{{ old('kontak') }}" required autocomplete="kontak">

                    @error('kontak')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" data-indicator="pwindicator">
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password-confirm" class="d-block">Password Confirmation</label>
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                  </div>

                  <!-- <div class="form-group">

                    <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
                    @if($errors->has('g-recaptcha-response'))
                    <span class="invalid-feedback" style="display:block">
                      <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                    </span>
                    @endif
                  </div> -->

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                    <br>
                    <p class="text-center">Sudah punya akun? <a href="{{url('/login')}}"><i class="fa fa-user"> Login</i></a></p>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Munas FKMPI 2020
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
  <script src="{{asset('frontend/assets/modules/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
  <script src="{{asset('frontend/assets/modules/jquery-selectric/jquery.selectric.min.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{asset('frontend/assets/js/page/auth-register.js')}}"></script>

  <!-- Template JS File -->
  <script src="{{asset('frontend/assets/js/scripts.js')}}"></script>
  <script src="{{asset('frontend/assets/js/custom.js')}}"></script>
  <script>
    $(document).ready(function() {
      $(".preloader").fadeOut();
    })
  </script>
</body>

</html>