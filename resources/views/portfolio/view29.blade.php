@extends('layouts.master')
@section('title', 'You Jump I Jump')
@section('content')

<section class="section pb-4 pt-0 success-story-block">
    <img class="bg-body-top-bg" style="bottom: auto; top: 140px;width: 100%;" src="{{ asset('images/1024x500_1.png') }}" alt="you jump i jump">

    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="blog-dediated-block" style="height: 15rem;">
                    <div class="blog-status">
                        <div class="blog-date text-center" style="height: 15rem;width: 15rem;padding-top: 0px;background-color: #ffffff;">
                           <img src="{{ asset('img/Infinity_Tower_300_x_300.png') }}" style="height: 100%;" />
                        </div>
                    </div>
                    <h2 style="margin-left: 9rem;">You Jump I Jump</h2>
                    <p class="caption-text" style="margin-left: 9rem;">The You jump I jump is based on a very popular theme of flappy games with addicted and relaxing approach.</p>

                    <div style="margin-left: 8rem;">
                        <a href="https://play.google.com/store/apps/details?id=com.cipherhex.animalplanet" target="_blank" style="">
                            <img src="{{ asset('images/google-play-badge.png') }}" alt=""  style="height: 60px;">
                        </a>
                        <a href="">
                            <img src="{{ asset('images/website-logo.png') }}" style="width:115px; height:60px;">    
                        </a>
                    </div>
                </div>
                
                <h2 class="mt-5">1. DESCRIPTION</h2>
                <p>The You jump I jump is based on a very popular theme of flappy games with addicted and relaxing approach. 
                    This popular game is a ery new game with the concept ofj umping game. 
                    This jumping game is completely free forever. The game contains amazing animations and 
                    music that you would really like. This really fun game is the fun game for kid, so 
                    everyone in your family will like to play this free fun app. This fun games to play 
                    come along with really cool graphics and eye catching animations. The music is very 
                    smooth and had perfect symmentry with the game play. This new game is a skill game 
                    with the proven concept of the estiamtion. This really fun game will help you to be 
                    relaxed and sharpen your mind at the same time. The amazing 3D effects and great music 
                    will make you mesmerised. This is one of the top free game of our studio and made with
                     excellency. The concept of the game is derived by mixing one of the best arcade game 
                     and the classic arcade game. This cool game with stunning visualization is completely 
                     free game and fun game for you.</p>
            </div>
        </div>
    </div>
</section>
@endsection