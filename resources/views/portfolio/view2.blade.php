@extends('layouts.master')
@section('title', 'Tank Rifle')
@section('content')

<section class="section pb-4 pt-0 success-story-block">
    <img class="bg-body-top-bg" style="bottom: auto; top: 140px;width: 100%;" src="{{ asset('img/banner.jpg') }}" alt="Animal Planet - 3D, VR, 360 - Portfolio">

    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="blog-dediated-block" style="height: 15rem;">
                    <div class="blog-status">
                        <div class="blog-date text-center" style="height: 15rem;width: 15rem;padding-top: 0px;background-color: #ffffff;">
                           <img src="{{ asset('img/tankrigle.png') }}" style="height: 100%;" />
                        </div>
                    </div>
                    <h2 style="margin-left: 9rem;">Tank Rifle</h2>
                    <p class="caption-text" style="margin-left: 9rem;">Tank Rifle</p>

                    <div style="margin-left: 8rem;">
                        <a href="https://play.google.com/store/apps/details?id=com.cipherhex.animalplanet" target="_blank" style="">
                            <img src="{{ asset('images/google-play-badge.png') }}" alt=""  style="height: 60px;">
                        </a>
                    </div>
                </div>

                <h2 class="mt-5">1. DESCRIPTION</h2>
                <p>This game is Conservator of their territories from enemy invaders In this game your can control a super tank by 
                    different power.</p>
                </br>
                <p>The main task is protect your territory as long as possible from enemy planes and atomic bombs as well as collect the 
                    boxes to get point and power, life.
                </p>
                </br>
                <p>Tank rifle is Endless game, Conservator of your territory to bomb. Leader board, Multiple power, nice graphics & nice sound.</p>
            </div>
        </div>
    </div>
</section>
@endsection