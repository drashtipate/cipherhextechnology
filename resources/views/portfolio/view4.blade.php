@extends('layouts.master')
@section('title', 'Breal The Egg')
@section('content')

<section class="section pb-4 pt-0 success-story-block">
    <img class="bg-body-top-bg" style="bottom: auto; top: 140px;width: 100%;" src="{{ asset('images/breaktheeggbanner.jpg') }}" alt="Animal Planet - 3D, VR, 360 - Portfolio">

    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="blog-dediated-block" style="height: 15rem;">
                    <div class="blog-status">
                        <div class="blog-date text-center" style="height: 15rem;width: 15rem;padding-top: 0px;background-color: #ffffff;">
                           <img src="{{ asset('img/breaktheegg.png') }}" style="height: 100%;" />
                        </div>
                    </div>
                    <h2 style="margin-left: 9rem;">Break The Egg</h2>
                    <p class="caption-text" style="margin-left: 9rem;">Break The Egg</p>

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
                <p>Try to tap when sword is over egg and gain points by Break the egg. Break the egg is mind improvement game Which helps us to 
                    improve our mind power,decision making, improve response time and along</p>
                </br>
                <p>with all it can be enjoyed withing free time like in travelling,waiting for turn/someone or at time of stress as stress 
                    buster. In short we are providing a multi function tool via Break the egg with.
                </p>
                </br>
                <p>amazing amenities and graphic to you which is compatible almost all android devices.</p>

                <h2 class="mt-5">2. FEATURES</h2>
                <p>
                    - Mind game<br/>
                    - Boredom killer<br/>
                    - Response time improvement<br/>
                    - Addicted<br/>
                    - Timepass<br/>
                    - Easy ui<br/>
                    - Unlimited Level<br/>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection