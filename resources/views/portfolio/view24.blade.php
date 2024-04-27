@extends('layouts.master')
@section('title', 'Security Gaze')
@section('content')

<section class="section pb-4 pt-0 success-story-block">
    <img class="bg-body-top-bg" style="bottom: auto; top: 140px;width: 100%;" src="{{ asset('images/security-gaze-banner.png') }}" alt="security gaze">

    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="blog-dediated-block" style="height: 15rem;">
                    <div class="blog-status">
                        <div class="blog-date text-center" style="height: 15rem;width: 15rem;padding-top: 0px;background-color: #ffffff;">
                           <img src="{{ asset('img/logos.png') }}" style="height: 100%;" />
                        </div>
                    </div>
                    <h2 style="margin-left: 9rem;">Security Gaze</h2>
                    <p class="caption-text" style="margin-left: 9rem;">A GAZE THAT ASSURES SAFETY</p>

                    <div style="margin-left: 8rem;">
                        <!-- <a href="https://play.google.com/store/apps/details?id=com.cipherhex.animalplanet" target="_blank" style="">
                            <img src="{{ asset('images/google-play-badge.png') }}" alt=""  style="height: 60px;">
                        </a> -->
                        <a href="https://itunes.apple.com/us/app/animal-zoo-vr-360/id1219634245?mt=8" target="_blank">
                            <img src="{{ asset('images/appstore-button.png') }}" alt=""  style="height: 60px;">
                        </a>
                    </div>
                </div>

                <h2 class="mt-5">1. DESCRIPTION</h2>
                <p>Security Gaze is a personal safety and security app that sends, Pictures, GPS Location and Movement to your Emergency Contacts when serious and potentially dangerous situations are encountered.</p></br>
                <p>GPS LOCATION :
                    </br>Security Gaze’s unique Geo-Fencing technology and your Smartphone’s GPS ensure that your Emergency Contacts will be instantly and accurately notified of your exact location, when an incident starts.
                </p></br>
                <p>MOVEMENT TRACKING :
                    </br>Your phone’s GPS tracks your exact location. Even if you're on the move, Security Gaze will be able to share your GPS location information with your Emergency Contacts.
                </p></br>
                <p>HOTLINE NUMBERS :
                    </br>Nationwide Emergency hotline numbers are pre-stored in accordance with the user’s country/location
                        Emergency numbers are pre-stored in accordance with the user’s location.
                </p></br>
                <p>INSTANT ALERTS / CONTACTS ALERTED :
                    </br>Distress emails with visual alerts are instantly sent to Emergency Contacts, when an incident occurs.
                </p>


            </div>
        </div>
    </div>
</section>
@endsection