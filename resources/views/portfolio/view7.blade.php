@extends('layouts.master')
@section('title', '123 MeMonsters')
@section('content')

<section class="section pb-4 pt-0 success-story-block">
    <img class="bg-body-top-bg" style="bottom: auto; top: 140px;width: 100%;" src="{{ asset('images/123-memonster-banner.png') }}" alt="Animal Planet - 3D, VR, 360 - Portfolio">

    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="blog-dediated-block" style="height: 15rem;">
                    <div class="blog-status">
                        <div class="blog-date text-center" style="height: 15rem;width: 15rem;padding-top: 0px;background-color: #ffffff;">
                           <img src="{{ asset('img/123-memonster.png') }}" style="height: 100%;" />
                        </div>
                    </div>
                    <h2 style="margin-left: 9rem;">123 MeMonsters</h2>
                    <p class="caption-text" style="margin-left: 9rem;">Kids will enjoy learning to count to Ten with with the MeMonsters.</p>

                    <div style="margin-left: 8rem;">
                        <a href="https://play.google.com/store/apps/details?id=com.cipherhex.animalplanet" target="_blank" style="">
                            <img src="{{ asset('images/google-play-badge.png') }}" alt=""  style="height: 60px;">
                        </a>
                        <!-- <a href="https://itunes.apple.com/us/app/animal-zoo-vr-360/id1219634245?mt=8" target="_blank">
                            <img src="{{ asset('images/appstore-button.png') }}" alt=""  style="height: 60px;">
                        </a> -->
                    </div>
                </div>

                <h2 class="mt-5">1. DESCRIPTION</h2>
                <p>Kids will enjoy learning to count to Ten with with the MeMonsters. 123 MeMonster is a cool, interactive and musical learning app for kids.</p>
                </br>
                <p>Rated Ages 1 - 5</p>
                </br>
                <p>WE STRONGLY STAND BY KIDS SAFE APPS!</br>
                There are no ads or unsafe clicking areas in our app
                </p>
            </div>
        </div>
    </div>
</section>
@endsection