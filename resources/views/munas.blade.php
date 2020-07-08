@extends('layouts.landing.masterv2')
@section('content')
<!--body content start-->

<div class="page-content">
    <!-- Video -->
    <div class="col-lg-5 ml-auto mr-auto" data-aos="fade-up" data-aos-delay="500">
      <div class="featured-item style-3">
        <div class="featured-title">
          <div class="title-effect title-effect-2">
            <div class="ellipse"></div> <i class="la la-play"></i>
          </div>
            <h5>Video Branding Munas FKMPI 2020</h5>
          </div>
          <div class="video-box">
            <div class="video-btn heartbeat"> <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=5Ht14iWr8DY"><i class="la la-play"></i></a>
              <div class="spinner-eff">
                <div class="spinner-circle circle-1"></div>
                <div class="spinner-circle circle-2"></div>
              </div>
            </div>
          </div>
      </div>
      </div>
    </div>
    <!-- End Video -->
<!-- Login -->
<section id="login" class="pos-r">
    <div class="hexagon-bg style-2">
    <div class="hexagon"></div>
    <div class="hexagon"></div>
    <div class="hexagon"></div>
    <div class="hexagon"></div>
  </div>
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-12 ml-auto mr-auto">
        <div class="section-title">
          <div class="title-effect title-effect-2">
            <div class="ellipse"></div> <i class="la la-user"></i>
          </div>
          <h2 class="title">Silahkan Register Untuk User baru</h2>
          <a href="{{ route('login') }}" class="btn btn-theme btn-sm">Login</a>
          <a href="{{ route('register') }}" class="btn btn-theme btn-sm">Register</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Login end-->
<!--about start-->

<section id="about" class="text-center" data-bg-img="{{asset('landing/assetsv2/images/pattern/01.png')}}">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-12 ml-auto mr-auto">
        <div class="title-effect title-effect-2">
            <div class="ellipse"></div> <i class="la la-book"></i>
          </div>
        <h3 class="text-black font-weight-normal line-h-2">Forum Komunikasi <span class="text-theme">Mahasiswa Politeknik Se-Indonesia</span> merupakan wadah penyatuan mahasiswa politeknik dari seluruh Indonesia. <span class="text-theme">FKMPI</span> berharap agar dapat menjadi wadah komunikasi, aspirasi dan pengembangan minat-bakat <span class="text-theme">mahasiswa politeknik.</span></h3>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-4 col-md-12">
        <div class="featured-item style-2">
          <div class="featured-icon"> <i class="flaticon-data"></i>
            <span class="rotateme"></span>
          </div>
          <div class="featured-title">
            <h5>Professional tools</h5>
          </div>
          <div class="featured-desc">
            <p>Top quality Software services, labore et dolore magna ali qua Lorem ipsum dolor sit amet.</p>
            <a class="icon-btn mt-4" href="#"> <i class="la la-angle-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 md-mt-5">
        <div class="featured-item style-2">
          <div class="featured-icon"> <i class="flaticon-collaboration"></i>
            <span class="rotateme"></span>
          </div>
          <div class="featured-title">
            <h5>Fully Customizable</h5>
          </div>
          <div class="featured-desc">
            <p>Top quality Software services, labore et dolore magna ali qua Lorem ipsum dolor sit amet.</p>
            <a class="icon-btn mt-4" href="#"> <i class="la la-angle-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 md-mt-5">
        <div class="featured-item style-2">
          <div class="featured-icon"> <i class="flaticon-market"></i>
            <span class="rotateme"></span>
          </div>
          <div class="featured-title">
            <h5>Marketing</h5>
          </div>
          <div class="featured-desc">
            <p>Top quality Software services, labore et dolore magna ali qua Lorem ipsum dolor sit amet.</p>
            <a class="icon-btn mt-4" href="#"> <i class="la la-angle-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--about end-->
@stop