@extends('layouts.master')
@section('title', 'CricVilla')
@section('content')

<section class="section pb-4 pt-0 success-story-block">
    <img class="bg-body-top-bg" style="bottom: auto; top: 140px;width: 100%;" src="{{ asset('img/banner.jpg') }}" alt="Animal Planet - 3D, VR, 360 - Portfolio">

    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="blog-dediated-block" style="height: 15rem;">
                    <div class="blog-status">
                        <div class="blog-date text-center" style="height: 15rem;width: 15rem;padding-top: 0px;background-color: #ffffff;">
                           <img src="{{ asset('img/ezgif_com-webp-to-png.png') }}" style="height: 100%;" />
                        </div>
                    </div>
                    <h2 style="margin-left: 9rem;">CricVilla</h2>
                    <p class="caption-text" style="margin-left: 9rem;">All International Cricket tournaments and others domestic matches like IPL and big batch matches.</p>

                    <div style="margin-left: 8rem;">
                        <a href="https://play.google.com/store/apps/details?id=com.cipherhex.animalplanet" target="_blank" style="">
                            <img src="{{ asset('images/google-play-badge.png') }}" alt=""  style="height: 60px;">
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
@endsection