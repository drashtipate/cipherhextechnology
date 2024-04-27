<header class="bg-primary text-white">
        <nav class="navbar osahan-navbar navbar-expand-lg navbar-dark" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger logo-cipherhex" href="http://127.0.0.1:8000/" style="display: block;"><img class="img-fluid" src="{{asset ('img/logo.png') }}" alt="Cipherhex Technology - White Logo"></a>
                <a class="navbar-brand js-scroll-trigger logo-color-cipherhex" href="http://127.0.0.1:8000/" style="display: none;"><img class="img-fluid" style="width:100%;" src="{{ asset ('img/logo-color.png') }}" alt="Cipherhex Technology - Logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item selecter-other-page">
                            <a class="nav-link js-scroll-trigger " href="http://127.0.0.1:8000/" title="Cipherhex Technology">Home</a>
                        </li>
                        <li class="nav-item selecter-other-page">
                            <a class="nav-link js-scroll-trigger {{ request()->is('services') ? 'active' : ''}}" href="{{ url('/services')}}" title="Services">Services</a>
                        </li>
                        <li class="nav-item selecter-other-page">
                            <a class="nav-link js-scroll-trigger {{ request()->is('whyus') ? 'active' : ''}}" href="{{ url('/whyus')}}" title="Why Us?">Why Us?</a>
                        </li>
                        <li class="nav-item selecter-other-page">
                            <a class="nav-link js-scroll-trigger {{ request()->is('testimonials') ? 'active' : ''}}" href="{{ url('/testimonials')}}"  title="Testimonials">Testimonials</a>
                        </li>
                        <li class="nav-item selecter-other-page">
                            <a class="nav-link js-scroll-trigger {{ request()->is('portfolio') ? 'active' : ''}}" href="{{ url('/portfolio')}}"  title="Portfolio">Portfolio</a>
                        </li>
                        
                        <li class="nav-item selecter-other-page">
                            <a class="nav-link js-scroll-trigger {{ request()->is('ourteams') ? 'active' : ''}}" href="{{ url('/ourteams')}}" title="Our Team">Our Team</a>
                        </li>
                        <li class="nav-item selecter-other-page">
                            <a class="nav-link js-scroll-trigger {{ request()->is('contactus') ? 'active' : ''}}" href="{{ url('/contactus')}}" title="Contact Us">Contact Us</a>
                        </li>
                    </ul>
                </div>            
            </div>
        </nav>
</header>
        
