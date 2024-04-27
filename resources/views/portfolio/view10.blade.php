@extends('layouts.master')
@section('title', 'Hindi News')
@section('content')

<section class="section pb-4 pt-0 success-story-block">
    <img class="bg-body-top-bg" style="bottom: auto; top: 140px;width: 100%;" src="{{ asset('images/hindinewsbanner.jpg') }}" alt="Animal Planet - 3D, VR, 360 - Portfolio">

    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="blog-dediated-block" style="height: 15rem;">
                    <div class="blog-status">
                        <div class="blog-date text-center" style="height: 15rem;width: 15rem;padding-top: 0px;background-color: #ffffff;">
                           <img src="{{ asset('img/hindinews.png') }}" style="height: 100%;" />
                        </div>
                    </div>
                    <h2 style="margin-left: 9rem;">Hindi News</h2>
                    <!-- <p class="caption-text" style="margin-left: 9rem;">Color Pong</p> -->

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
                <p>In current time, It is important to be updated with latest News and incidents around us.</p>
                </br>
                <p>First of all what is the meaning of Newspaper. Word “Newscomes from North, East, West and South and 
                    we are commiited to bring you information from all four directions. So that we are known as Hindi News.</p>

                <h2 class="mt-5">2. BENEFITS</h2>
                <p>It's provide information and general knowledge. Reading it daily will widen the 
                    scope of your knowledge which is an integral part of education and very useful 
                    especially for student. Hindi can provide interesting things and ideas which can 
                    assist students in their learning process at school. Not only are the it itself
                    that are beneficial for students, but Hindi also develop their language skills and 
                    increases their word vocabulary.</p>
                </br>
                <p>It will provide News about a country’s economic situation, sports, games, entertainment, 
                    trade and commerce. People are made aware of the existing condition of politics, culture 
                    and economy by reading the News. Those who hunger for News will surely find satisfaction 
                    by reading the Hindi News as it carries information of various topics.</p>
                </br>
                <p>It makes a good habit and it is already part of the modern life. This habit will widen your 
                    outlook and will enrich your knowledge. It will likewise improve your English as reading
                    English News is a good practice.</p>
                </br>
                <p>Reading Hindi News makes you well informed. It's enables you to take part in every 
                    discussion pertaining to the world’s current events. By taking an active participation 
                    in group discussions, It will make you feel that you belong in an enlightened society. 
                    The only thing that can stop you from joining talks and discussion is if you are 
                    ignorant of what is happening around you.
                </p>
                </br>
                <p>Reading Hindi News will improve your knowledge in general and It will be easy for you 
                    to relate to other people who often talks about current events and politics.</p>
            </div>
        </div>
    </div>
</section>
@endsection