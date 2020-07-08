<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('backend/assets/img/icon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('backend/assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" href="{{asset('backend/assets/modules/fontawesome/css/all.min.css')}}">

    <!-- toastr -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('backend/assets/modules/izitoast/css/iziToast.min.css')}}">

    <script src="{{ asset('frontend/assets/sweet-alert2/sweetalert2.all.min.js') }}"></script>
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/components.css')}}">

    <!-- Tables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <!-- EndTables -->

<!-- tombol -->

    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA --></head>

<body class="sidebar-gone">
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
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250" style="width: 250px;">
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
                        <div class="dropdown-list-content dropdown-list-icons">
                            <a href="#" class="dropdown-item dropdown-item-unread">
                                <div class="dropdown-item-icon bg-primary text-white">
                                    <i class="fas fa-code"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Template update is available now!
                                    <div class="time text-primary">2 Min Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                                    <div class="time">10 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-icon bg-success text-white">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                                    <div class="time">12 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-icon bg-danger text-white">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Low disk space. Let's clean it!
                                    <div class="time">17 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white">
                                    <i class="fas fa-bell"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Welcome to Stisla template!
                                    <div class="time">Yesterday</div>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-footer text-center">
                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </li>
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="{{asset('frontend/assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->name}}</div></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-title">{{Auth::user()->email}}</div>
                        <a href="#" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> Profile
                        </a>
                        <a href="features-activities.html" class="dropdown-item has-icon">
                            <i class="fas fa-bolt"></i> Activities
                        </a>
                        <a href="{{ route('PassAdmin') }}" class="dropdown-item has-icon">
                            <i class="fas fa-cog"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{route('admin.logout')}}" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="main-sidebar sidebar-style-2" tabindex="1" style="overflow: hidden; outline: none;">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="{{ url('admin') }}">Admin</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="{{ url('admin') }}">NG</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li class="dropdown">
                        <a href="{{ url('/admin') }}" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
                    </li>
                    <li class="menu-header">Users</li>
                    <li><a class="nav-link" href="{{ route('datauser') }}"><i class="fas fa-user-tie"></i> <span>All User</span></a></li>
                    @if(auth()->user()->role == 'Administrator')
                    <li class="menu-header">Crate Akun Admin</li>
                        <li class="dropdown">
                            <a class="nav-link has-dropdown" data-toggle="dropdown" href=""><i class="fas fa-user-friends"></i> <span>Create Admin</span></a>
                                <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('createAdmin') }}">Create Admin</a></li>
                            <li><a class="nav-link" href="{{ route('dataAdmin') }}">List Admin</a></li>
                        </ul>
                    </li>
                    <li class="menu-header">Post</li>
                        <li><a class="nav-link" href="{{ route('posts') }}"><i class="fas fa-book"></i><span>Create Post</span></a></li>
                    @endif
                    <li class="menu-header">Contact</li>
                        <li><a class="nav-link" href="{{ route('contact') }}"><i class="fas fa-envelope"></i><span>Send Pesan</span></a></li>
                </ul>
            </aside>
        </div>

        <!-- Main Content -->
        <div class="main-content" style="min-height: 572px;">
            @yield('content')
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2018 <div class="bullet"></div> Modify <a href="#">-_<</a>
            </div>
            <div class="footer-right">
                Gugun21
            </div>
        </footer>

    </div>
</div>

<!-- General JS Scripts -->
<script src="{{asset('backend/assets/modules/jquery.min.js')}}"></script>
<script src="{{asset('backend/assets/modules/popper.js')}}"></script>
<script src="{{asset('backend/assets/modules/tooltip.js')}}"></script>
<script src="{{asset('backend/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('backend/assets/modules/moment.min.js')}}"></script>
<script src="{{asset('backend/assets/js/stisla.js')}}"></script>



<!-- JS Libraies -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<!-- Page Specific JS File -->
<!-- toastr -->
  <script src="{{asset('backend/assets/modules/izitoast/js/iziToast.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/page/modules-toastr.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- Template JS File -->
<script src="{{asset('backend/assets/js/scripts.js')}}"></script>
<script src="{{asset('backend/assets/js/custom.js')}}"></script>
<script>
    $(document).ready(function(){
    $(".preloader").fadeOut();
    })
</script>
@yield('footer')
</body>
</html>
