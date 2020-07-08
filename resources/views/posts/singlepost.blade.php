@extends('layouts.landing.master')
@section('navbar')
<div class="intro-section single-cover" id="home-section">
      
      <div class="slide-1 " style="background-image: url('landing/assets/images/img_2.jpg'); background-position: 50% -25px;" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6">
                  <h1 data-aos="fade-up" data-aos-delay="0" class="aos-init aos-animate">Logo Design Course</h1>
                  <p data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">4 Lessons / 12 Week • 2,193 students • <a href="#" class="text-white">6 comments</a></p>
                </div>

                
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
@endsection
@section('content')
<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-5">

            <div class="mb-5">
              <h3 class="text-black">{{$post->title}}</h3>
              <p class="mb-4">
                <strong class="text-black mr-3">Schedule: </strong> {{$post->created_at->format('D, d M Y')}}
              </p>
              <p>{!!$post->content!!}</p>
              <div class="row mb-4">
                <div class="col-md-6">
                  <img src="{{asset('landing/assets/images/img_1.jpg')}}" alt="Image" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                  <img src="{{asset('landing/assets/images/img_2.jpg')}}" alt="Image" class="img-fluid rounded">
                </div>
              </div>
              <p>Ipsam fuga fugiat vero repudiandae, tenetur a ullam, expedita perspiciatis dolores rem quibusdam numquam dicta sint unde repellat magni recusandae. Id, quibusdam, voluptatum. Amet mollitia ratione, illum animi quia ex?</p>
              <p>Sint aut repudiandae, in amet nemo. Nobis labore id iure molestias reprehenderit quisquam illo quod cum dolorum aspernatur ut sequi, facere beatae, porro cupiditate magnam laborum laudantium laboriosam ab autem!</p>
            </div>
            </div>
          <div class="col-lg-4 pl-lg-5">

            <div class="mb-5 text-center border rounded course-instructor">
              <h3 class="mb-5 text-black text-uppercase h6 border-bottom pb-3">Course Instructor</h3>
              <div class="mb-4 text-center">
                <img src="{{asset('landing/assets/images/person_2.jpg')}}" alt="Image" class="w-25 rounded-circle mb-4">  
                <h3 class="h5 text-black mb-4">{{$post->admin->name}}</h3>
                <p>Lorem ipsum dolor sit amet sectetur adipisicing elit. Ipsa porro expedita libero pariatur vero eos.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
@endsection