<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>
  <link rel="icon" type="icon" href="{{ asset('frontend/assets/img/icon.png') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('frontend/assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/modules/fontawesome/css/all.min.css')}}">

   <!-- toastr -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <!-- CSS Libraries -->
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
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">

          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>

              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{asset('frontend/assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">{{Auth::user()->email}}</div>
              <a href="{{ route('changePass') }}" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
                <div class="dropdown-divider"></div>
                <a href="{{route('user.logout')}}" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ url('/') }}">MUNAS</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/') }}">MN</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
              <a href="{{ url('/home') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
          </ul>
          <ul class="sidebar-menu">
            <li class="menu-header">Jadwal Munas</li>
            <li class="dropdown">
              <a href="{{ url('/cekJadwal') }}" class="nav-link"><i class="fas fa-fire"></i><span>Lihat Jadwal</span></a>
            </li>
          </ul>
          <ul class="sidebar-menu">
            <li class="menu-header">Data Pemateri</li>
            <li class="dropdown">
              <a href="{{ url('/Pemateri') }}" class="nav-link"><i class="fas fa-fire"></i><span>Lihat Pemateri</span></a>
            </li>
          </ul>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('isi')</h1>
          </div>
              @yield('content')
          <div class="section-body">
          </div>
        </section>
      </div>
      @include('layouts.frontend.footer')
    </div>
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
  <script src="{{asset('frontend/assets/js/page/bootstrap-modal.js')}}"></script>
  <!-- toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <!-- Template JS File -->
  <script src="{{asset('frontend/assets/js/scripts.js')}}"></script>
  <script src="{{asset('frontend/assets/js/custom.js')}}"></script>
  <script>
    $(document).ready(function(){
    $(".preloader").fadeOut();
    })
</script>
  @yield('footer')
</body>
</html>
