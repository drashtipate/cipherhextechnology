<header class="bg-primary text-white">
        <nav class="navbar osahan-navbar navbar-expand-lg navbar-dark" id="mainNav">
            <div class="container">
               <a class="navbar-brand js-scroll-trigger logo-cipherhex" href="http://127.0.0.1:8000/" style="display: block;"><img class="img-fluid" src="{{asset ('img/logo.png') }}" alt="Cipherhex Technology - White Logo"></a>
               <a class="navbar-brand js-scroll-trigger logo-color-cipherhex" href="http://127.0.0.1:8000/" style="display: none;"><img class="img-fluid" src="{{ asset ('img/logo-color.png') }}" alt="Cipherhex Technology - Logo"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item selecter-other-page">
                            <a class="nav-link js-scroll-trigger {{ request()->is('/') ? 'active' : ''}}" href="http://127.0.0.1:8000/" title="Cipherhex Technology">Home</a>
                        </li>
                        <li class="nav-item selecter-other-page">
                            <a class="nav-link js-scroll-trigger {{ request()->is('services') ? 'active' : ''}}" href="{{ url('/services')}}" title="Services">Services</a>
                        </li>
                        <li class="nav-item selecter-other-page">
                            <a class="nav-link js-scroll-trigger " href="{{ url('/whyus')}}" title="Why Us?">Why Us?</a>
                        </li>
                        <li class="nav-item selecter-other-page">
                            <a class="nav-link js-scroll-trigger " href="{{ url('/testimonials')}}"  title="Testimonials">Testimonials</a>
                        </li>
                        <li class="nav-item selecter-other-page">
                            <a class="nav-link js-scroll-trigger " href="{{ url('/portfolio')}}" href="https://www.cipherhex.com/portfolio" title="Portfolio">Portfolio</a>
                        </li>
                        
                        <li class="nav-item selecter-other-page">
                            <a class="nav-link js-scroll-trigger " href="{{ url('/ourteams')}}" title="Our Team">Our Team</a>
                        </li>
                        <li class="nav-item selecter-other-page">
                            <a class="nav-link js-scroll-trigger " href="{{ url('/contactus')}}" title="Contact Us">Contact Us</a>
                        </li>
                    </ul>
                </div>  

            </div>
         </nav>

         <section class="banner-block pb-0" id="banner">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 text-center">
                     <h1 class="text-white"> <strong>Welcome To Cipherhex Technology</strong></h1>
                     <p class="lead mb-5 text-white">Believer of Code, Commitment and Contribution</p>
                     <p class="mb-0">
                        <a href="{{url('whyus')}}" class="btn btn-outline-light btn-lg">Why Us?</a> &nbsp;
                        <a href="{{url ('contactus')}}" class="btn btn-outline btn-lg">Contact Us</a>
                    </p>
                     <img class="img-fluid mt-5 wow fadeInUp" src="{{ asset('img/hero2.png')}}" alt="" style="margin-top: -3rem!important;" />
                  </div>
               </div>
            </div>
         </section>
         <div class="effectiv">
            <img class="svg" src="{{ asset ('img/bg.svg') }}" alt="" />
         </div>
</header>