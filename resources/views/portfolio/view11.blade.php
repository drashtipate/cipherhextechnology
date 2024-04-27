@extends('layouts.master')
@section('title', 'Mahuva Jesar Taluka Patel Samaj Surat')
@section('content')

<section class="section pb-4 pt-0 success-story-block">
    <img class="bg-body-top-bg" style="bottom: auto; top: 140px;width: 100%;" src="{{ asset('images/banner1.jpg') }}" alt="Animal Planet - 3D, VR, 360 - Portfolio">

    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="blog-dediated-block" style="height: 15rem;">
                    <div class="blog-status">
                        <div class="blog-date text-center" style="height: 15rem;width: 15rem;padding-top: 0px;background-color: #ffffff;">
                           <img src="{{ asset('img/300x300.png') }}" style="height: 100%;" />
                        </div>
                    </div>
                    <h2 style="margin-left: 9rem;">Mahuva Jesar Taluka Patel Samaj Surat</h2>
                    <!-- <p class="caption-text" style="margin-left: 9rem;">Color Pong</p> -->

                    <div style="margin-left: 8rem;">
                        <a href="https://play.google.com/store/apps/details?id=com.cipherhex.animalplanet" target="_blank" style="">
                            <img src="{{ asset('images/google-play-badge.png') }}" alt=""  style="height: 60px;">
                        </a>
                        <a href="https://itunes.apple.com/us/app/animal-zoo-vr-360/id1219634245?mt=8" target="_blank">
                            <img src="{{ asset('images/appstore-button.png') }}" alt=""  style="height: 60px;">
                        </a>
                    </div>
                </div>

                <h2 class="mt-5">1. DESCRIPTION</h2>
                <p>Like this stream of river flowing in the flowing stream and from our everyday life 
                    style of split, we have created this application to remain unified under one 
                    umbrella of Sardar Patel family, and to remain informed by the family, as well as 
                    the entire tree branches of the same tree for life uplift. The launch of the mobile 
                    app is on 28-05-2017. Thank you
                </p>
                
            </div>
        </div>
    </div>
</section>
@endsection