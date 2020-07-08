<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Reset Password</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/components.css')}}">
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
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <a href="{{ route('login') }}"><img src="{{ asset('frontend/assets/img/icon.png') }}" alt="logo" width="100" class="shadow-light rounded-circle"></a>
            </div>
            <div class="card card-primary">
              <div class="card-header"><h4>Reset Password Admin</h4></div>

              <div class="card-body">
                <p class="text-muted">@if (session('status'))<div class="alert alert-success">{!! session('status') !!}</div> @endif</p>
                <form action="{{ route('admin.password.email') }}" method="POST">
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
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Send Password Reset Link
                    </button>
                  </div>
                </form>
              </div>
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
  <script src="{{ asset('frontend/assets/modules/jquery.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/modules/popper.js')}}"></script>
  <script src="{{ asset('frontend/assets/modules/tooltip.js')}}"></script>
  <script src="{{ asset('frontend/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/modules/moment.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/js/stisla.js')}}"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="{{ asset('frontend/assets/js/scripts.js')}}"></script>
  <script src="{{ asset('frontend/assets/js/custom.js')}}"></script>
</body>
</html>
