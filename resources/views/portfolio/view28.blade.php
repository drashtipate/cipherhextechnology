@extends('layouts.master')
@section('title', 'Aditree Built')
@section('content')

<section class="section pb-4 pt-0 success-story-block">
    <img class="bg-body-top-bg" style="bottom: auto; top: 140px;width: 100%;" src="{{ asset('img/banner.jpg') }}" alt="playmateblog">

    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="blog-dediated-block" style="height: 15rem;">
                    <div class="blog-status">
                        <div class="blog-date text-center" style="height: 15rem;width: 15rem;padding-top: 0px;background-color: #ffffff;">
                           <img src="{{ asset('img/aditrilogo.png') }}" style="height: 100%;" />
                        </div>
                    </div>
                    <h2 style="margin-left: 9rem;">Aditree Built</h2>
                    <p class="caption-text" style="margin-left: 9rem;">CIVIL CONSULTANT,ARCHITECT & PLANNING,INTERIOR DESIGN,LIAISING</p>

                    <div style="margin-left: 8rem;">
                        <a href="">
                            <img src="{{ asset('images/website-logo.png') }}" style="width:115px; height:60px;">    
                        </a>
                    </div>
                </div>
                

            </div>
        </div>
    </div>
</section>
@endsection