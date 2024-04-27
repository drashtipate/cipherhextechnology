@extends('layouts.master')
@section('title', 'Why us?')
@section('content')

<section class="inner-header-block">
   <div class="container">
      <div class="row">
         <div class="col-md-12 mx-auto text-left">
            <h1>Why us?</h1>
         </div>
      </div>
   </div>
</section>


<section class="sign-up-block" id="sign-up">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="amazing-dashboard-left">
                        <span class="section-title-line mb-4"></span>
                        <p class="mb-3">We know the beauty in code. That's why we are damn good coders. We believe that by applying 100% of our efforts, we are making a difference by delivering best quality products. We are happy to contribute to your Dream Projects with our professional skills.</p>
                        <h5>1. Plan</h5>
                        <p class="mb-3">First thing first. We do proper paperwork before start implementation. We divide the project in different modules and give you a better time estimate. So that We can deliver your product on time.</p>
                        <h5>2. Quality</h5>
                        <p class="mb-3">We make sure that our quality of code must be the best. So that your product can outstay trust of your customers always.</p>
                        <h5>3. Support</h5>
                        <p class="mb-0">Product without support is a ship without a rudder. Our customer service has always tended to give you the best service throughout your journey.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="amazing-dashboard-right text-right">
                        <img class="amazing-dashboard" src="{{ asset ('img/slider21.png') }}" alt="Feature Image - Cipherhex Technology">
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="why-us-block bg-primary" id="why-us">
    <div class="container">
        <div class="section-title text-center">
            <span class="badge badge-white text-white">Why Us?</span>
            <h2 class="text-white">Our Strong Numbers</h2>
            <span class="section-title-line "></span>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="why-us-item text-center text-white">
                    <i class="fas fa-user-secret"></i>
                    <h1 class="text-white mt-3 mb-0">20</h1>
                    <p class="text-white mb-0">EMPLOYEES</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="why-us-item text-center text-white">
                    <i class="fas fa-smile-wink"></i>
                    <h1 class="text-white mt-3 mb-0">49</h1>
                    <p class="text-white mb-0">HAPPY CLIENTS</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="why-us-item text-center text-white">
                    <i class="fas fa-cube"></i>
                    <h1 class="text-white mt-3 mb-0">84</h1>
                    <p class="text-white mb-0">CLIENTS PROJECTS</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="why-us-item text-center text-white">
                    <i class="fas fa-child"></i>
                    <h1 class="text-white mt-3 mb-0">12</h1>
                    <p class="text-white mb-0">HOME PRODUCTS</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="video-block pb-0" >
    <div class="container">
        <div class="section-title text-center">
            <span class="badge badge-info">video</span>
            <h2>Watch Our Video</h2>
            <span class="section-title-line"></span>
        </div>
        <div class="row">
            <div class="col-md-11 mx-auto">
                <div class="video-item text-center">
                    <iframe width="100%;" height="500px;" src="https://www.youtube.com/embed/bH4a5l0qE4Q" title="What Dr. Huan Giap (USA) says about Cipherhex Technology." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection