@extends('layouts.master')
@section('title', 'Services')
@section('content')
<section class="inner-header-block">
   <div class="container">
      <div class="row">
         <div class="col-md-12 mx-auto text-left">
            <h1>Services</h1>
            <p class="mt-1 mb-0">We provide the best digital solutions</p>
            <span class="section-title-line"></span>
         </div>
      </div>
   </div>
</section>

<section class="features-block" id="features">
   <div class="container">
      <div class="row">


            @forelse ($services as $servicetype)
                    <div class="col-md-4 mt-4">
                        <div class="features-item text-center" style="height:400px;">
                            <img class="img fluid mb-4"  src="{{ asset($servicetype->icon) }}" alt="{{$servicetype->name}}">
                            <h5 class="mb-4">{{$servicetype->name}}</h5>
                            <p>
                                {{$servicetype->description}}
                            </p>
                        </div>
                    </div>
                    @empty
                    <div class="">
                        <h5>No Service Available</h5>
                    </div>
            @endforelse
         <!-- <div class="col-md-4">
            <div class="features-item text-center" style="height:450px;">
                  <img class="img-fluid mb-4" src="{{ asset('img/ios.png') }}" alt="IOS DEVELOPMENT">
                  <h5 class="mb-4">IOS DEVELOPMENT</h5>
                  <p>Unity, IONIC and Native Applicaiton<br/>
                     We are an iPhone Development company in India. who provides iPhone Apps and game Development services at affordable costs</p>
            </div>
         </div> -->

         <!-- <div class="col-md-4">
            <div class="features-item text-center" style="height:450px;">
                  <img class="img-fluid mb-4" src="{{ asset('img/f5.png') }}" alt="ANDROID DEVELOPMENT">
                  <h5 class="mb-4">ANDROID DEVELOPMENT</h5>
                  <p>Unity, IONIC and Native Applicaiton<br/>
                     Android Development is becoming a rage all around the globe. Android Development and Android Game Development simply 
                     rocks exclaims most of the Mobile Apps Developers</p>
            </div>
         </div>

         <div class="col-md-4">
            <div class="features-item text-center" style="height:450px;">
                  <img class="img-fluid mb-4" src="{{ asset('img/f3.png') }}" alt="WEB DESIGN &amp; DEVELOPMENT">
                  <h5 class="mb-4">WEB DESIGN &amp; DEVELOPMENT</h5>
                  <p>PHP, Codeignator, Wordpress, HTML5 and CSS3<br />
                  We provide professional Web Design &amp; Development and Website Maintenance Services to Our Clients Worldwide.</p>
            </div>
         </div>

         <div class="col-md-4 mt-4">
            <div class="features-item text-center" style="height:450px;">
                  <img class="img-fluid mb-4" src="{{ asset('img/unity.png') }}" alt="UNITY DEVELOPMENT">
                  <h5 class="mb-4">UNITY DEVELOPMENT</h5>
                  <p>Unity 2D / 3D, Offline and Multiplayer Game / Application<br/>
                  All kind of unity game and app development service we provides.</p>
            </div>
         </div>

         <div class="col-md-4 mt-4">
            <div class="features-item text-center" style="height:450px;">
                  <img class="img-fluid mb-4" src="{{ asset('img/f6.png') }}" alt="SOCIAL INTEGRATION">
                  <h5 class="mb-4">SOCIAL INTEGRATION</h5>
                  <p>Facebook, Google+, Twitter, Instagram and more...<br/>
                  Want to be part of most famous electronics media than we can provide you one stop solution.</p>
            </div>
         </div>

         <div class="col-md-4 mt-4">
            <div class="features-item text-center" style="height:450px;">
                  <img class="img-fluid mb-4" src="{{ asset('img/f4.png') }}" alt="INTERNET MARKETING">
                  <h5 class="mb-4">INTERNET MARKETING</h5>
                  <p>Application / Website Marketing and SEO<br/>
                  Want to get higher visibility in all social search engines and other places.We can provide you a service how you can 
                  achieve it.</p>
            </div>
         </div> -->

      </div>
   </div>
</section>
@endsection