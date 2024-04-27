@extends('layouts.master')
@section('title', 'Founders')
@section('content')

<section class="inner-header-block">
   <div class="container">
      <div class="row">
         <div class="col-md-12 mx-auto text-left">
            <h1>Founders</h1>
            <p class="mt-1 mb-0">Meet our Code Crusaders.</p>
            <span class="section-title-line"></span>
         </div>
      </div>
   </div>
</section>

<section class="team-block" id="team">
    <div class="container">
        <div class="row">

        @forelse ($teams as $teamtype)
            <div class="col-md-3">
                <div class="custom-card card team-item card h-100 text-center">
                    <img class="card-img-top" src="{{ asset($teamtype->developerImage) }}" alt="{{$teamtype->developerName}}">
                    <div class="card-body">
                        <h4 class="card-title">{{$teamtype->developerName}}</h4>
                        <h6 class="card-subtitle mb-2 text-muted">{{$teamtype->developerPost}}</h6>
                        <p class="card-text">{{$teamtype->developerDescription}}</p>
                    </div>
                    <div class="card-footer social-icons">
                            <a href="{{$teamtype->facebook}}" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="{{$teamtype->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="{{$teamtype->linkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            @empty
                    <div class="">
                        <h5>No founders Available</h5>
                    </div>
        @endforelse
            <!-- <div class="col-md-3">
                <div class="custom-card card team-item card h-100 text-center">
                    <img class="card-img-top" src="{{ asset ('image/bhavesh.png') }}" alt="Bhavesh Bhimani">
                    <div class="card-body">
                        <h4 class="card-title">Bhavesh Bhimani</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Co-Founder & CEO (Chief Executive Officer)</h6>
                        <p class="card-text">Skills: Unity 2D/3D Game Development, AR (Augmented Reality), VR (Virtual Reality), Oculus, Samsung Gear, Google Daydream, Unity UI Expert, IOS Development, Visual Studio, App Optimization, Photon Multiplayer, PlayFab</p>
                    </div>
                    <div class="card-footer social-icons">
                            <a href="https://www.facebook.com/bhimanibhavu" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="https://twitter.com/bhimanibhavu" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/in/bhavesh-bhimani-27b12877" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="custom-card card team-item card h-100 text-center">
                    <img class="card-img-top" src="{{ asset ('image/hitesh1.png') }}" alt="Hitesh Upadhyay">
                    <div class="card-body">
                        <h4 class="card-title">Hitesh Upadhyay</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Co-Founder & MD ( Managing Director ) </h6>
                        <p class="card-text">Skills: Web Design, Client Side Web Development, HTML Master, Javascript Expert, Angular, Angular 2, React, Ionic, Ionic 2, Site Optimization Expert, Python, Machine Learning, Project Management, SEO (Search Engine Optimization), ASO (App Store Optimization)</p>
                    </div>
                    <div class="card-footer social-icons">
                            <a href="https://www.facebook.com/bhimanibhavu" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="https://twitter.com/bhimanibhavu" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/in/bhavesh-bhimani-27b12877" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="custom-card card team-item card h-100 text-center">
                    <img class="card-img-top" src="{{ asset ('image/raju.png') }}" alt="Rajesh Kevadiya">
                    <div class="card-body">
                        <h4 class="card-title">Rajesh Kevadiya</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Co-Founder & COO (Chief Operating Officer) </h6>
                        <p class="card-text">Skills: Unity 2D/3D Game Development, Blender, MakeHuman, 3D character making, Game optimization, VR (Virtual Reality), Oculus, Samsung Gear, Google Daydream, Unity Plugin making, Flash Development</p>
                    </div>
                    <div class="card-footer social-icons">
                            <a href="https://www.facebook.com/bhimanibhavu" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="https://twitter.com/bhimanibhavu" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/in/bhavesh-bhimani-27b12877" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
@endsection