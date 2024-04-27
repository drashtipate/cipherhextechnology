@extends('layouts.master')
@section('title', 'Zombie Shooter')
@section('content')

<section class="section pb-4 pt-0 success-story-block">
    <img class="bg-body-top-bg" style="bottom: auto; top: 140px;width: 100%;" src="{{ asset('images/17.jpg') }}" alt="Animal Planet - 3D, VR, 360 - Portfolio">

    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="blog-dediated-block" style="height: 15rem;">
                    <div class="blog-status">
                        <div class="blog-date text-center" style="height: 15rem;width: 15rem;padding-top: 0px;background-color: #ffffff;">
                           <img src="{{ asset('img/hungryzombies.png') }}" style="height: 100%;" />
                        </div>
                    </div>
                    <h2 style="margin-left: 9rem;">Zombie Shooter</h2>
                    <!-- <p class="caption-text" style="margin-left: 9rem;">Kids will enjoy learning to count to Ten with with the MeMonsters.</p> -->

                    <div style="margin-left: 8rem;">
                        <a href="https://play.google.com/store/apps/details?id=com.cipherhex.animalplanet" target="_blank" style="">
                            <img src="{{ asset('images/google-play-badge.png') }}" alt=""  style="height: 60px;">
                        </a>
                        <!-- <a href="https://itunes.apple.com/us/app/animal-zoo-vr-360/id1219634245?mt=8" target="_blank">
                            <img src="{{ asset('images/appstore-button.png') }}" alt=""  style="height: 60px;">
                        </a> -->
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</section>
@endsection