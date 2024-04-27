@extends('layouts.master')
@section('title', 'Color Pong')
@section('content')

<section class="section pb-4 pt-0 success-story-block">
    <img class="bg-body-top-bg" style="bottom: auto; top: 140px;width: 100%;" src="{{ asset('images/colorpongbanner2.jpg') }}" alt="Animal Planet - 3D, VR, 360 - Portfolio">

    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="blog-dediated-block" style="height: 15rem;">
                    <div class="blog-status">
                        <div class="blog-date text-center" style="height: 15rem;width: 15rem;padding-top: 0px;background-color: #ffffff;">
                           <img src="{{ asset('img/colorpong.png') }}" style="height: 100%;" />
                        </div>
                    </div>
                    <h2 style="margin-left: 9rem;">Color Pong</h2>
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
                <p>Fast reaction time is a skill that you need to achieve more in your life. Reaction time is depend on your decision making skill that is essential ingredient of success. Scientific research proves.</p>
                </br>
                <p>that people with Fast reaction time tend to achieve more compared to people with slow reaction time.</p>
                </br>
                <p>If you have Slow reaction time then Don't worry. 
                    We came with great tool named Color Pong that will help you to develop fast reaction time.
                </p></br>
                <p>Benefits of playing Color Pong:<br>
                    It will help you to develop fast reaction time.<br>
                    It will help you to develop decision making skill.<br>
                    It will help you to kill your boredom.<br>
                    It will awake your mind and make it active.<br>
                    If you feel sleepy after waking up early, then Play Color Pong. It is so efficient that you will feel active after playing it for some seconds.
                </p></br>
                <p>Features of Color Pong:<br>
                    Google Play Profile<br>
                    Leaderboard<br>
                    Beautiful design<br>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection