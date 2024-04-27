@extends('layouts.app')
@section('title', 'Cipherhex Technology')
@section('content')

<!-- features -->
<section class="features-block" id="features">
         <div class="container">
            <div class="section-title text-center">
               <span class="badge badge-primary">Services</span>
               <h2>We provide the best digital solutions</h2>
               <span class="section-title-line"></span>
            </div>
            <div class="service-list">
                <div class="row">
                        @forelse ($services as $servicetype)
                            <div class="col-md-4 mt-4">
                                <div class="features-item text-center" style="height:400px;">
                                    <img class="img fluid mb-4"  src="{{ asset($servicetype->icon) }}" alt="{{$servicetype->name}}">
                                    <h5 class="mb-4">{{$servicetype->name}}</h5>
                                    <p>
                                        {{$servicetype->description}}
                                    </p>
                                </div>
                            </div>
                            @empty
                            <div class="">
                                <h5>No Service Available</h5>
                            </div>
                        @endforelse
                    <!-- <div class="col-md-4">
                        <div class="features-item text-center" style="height:450px;">
                            <img class="img fluid mb-4" src="{{ asset('img/f5.png') }}" alt="ANDROID DEVELOPMENT">
                            <h5 class="mb-4">ANDROID DEVELOPMENT</h5>
                            <p>
                                Unity, IONIC and Native Applicaiton<br>
                                Android Development is becoming a rage all around the globe. Android Development and Android Game Development simply rocks exclaims most of the Mobile Apps Developers.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="features-item text-center" style="height:450px;">
                            <img class="img fluid mb-4" src="{{ asset('img/ios.png') }}" alt="IOS DEVELOPMENT">
                            <h5 class="mb-4">IOS DEVELOPMENT</h5>
                            <p>
                                Unity, IONIC and Native Applicaiton<br>
                                We are an iPhone Development company in India. who provides iPhone Apps and game Development services at affordable costs.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="features-item text-center" style="height:450px;">
                            <img class="img fluid mb-4" src="{{ asset('img/f3.png') }}" alt="WEB DESIGN & DEVELOPMENT">
                            <h5 class="mb-4">WEB DESIGN & DEVELOPMENT</h5>
                            <p>
                                PHP, Codeignator, Wordpress, HTML5 and CSS3<br>
                                We provide professional Web Design & Development and Website Maintenance Services to Our Clients Worldwide.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="features-item text-center" style="height:450px;">
                            <img class="img fluid mb-4" src="{{ asset('img/unity.png') }}" alt="UNITY DEVELOPMENT">
                            <h5 class="mb-4">UNITY DEVELOPMENT</h5>
                            <p>
                                Unity 2D / 3D, Offline and Multiplayer Game / Application<br>
                                All kind of unity game and app development service we provides.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="features-item text-center" style="height:450px;">
                            <img class="img fluid mb-4" src="{{ asset('img/f6.png') }}" alt="SOCIAL INTEGRATION">
                            <h5 class="mb-4">SOCIAL INTEGRATION</h5>
                            <p>
                                Facebook, Google+, Twitter, Instagram and more...<br>
                                Want to be part of most famous electronics media than we can provide you one stop solution.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="features-item text-center" style="height:450px;">
                            <img class="img fluid mb-4" src="{{ asset('img/f4.png') }}" alt="INTERNET MARKETING">
                            <h5 class="mb-4">INTERNET MARKETING</h5>
                            <p>
                                Application / Website Marketing and SEO<br>
                                Want to get higher visibility in all social search engines and other places.
                                We can provide you a service how you can achieve it.
                            </p>
                        </div>
                    </div> -->
                </div>
            </div>
         </div>
</section>

<!-- about/why us -->
<section class="sign-up-block" id="sign-up">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="amazing-dashboard-left">
                        <h2 class="mb-2">Why us?</h2>
                        <span class="section-title-line mb-4"></span>
                        <p class="mb-3">We know the beauty in code. That's why we are damn good coders. We believe that by applying 100% of our efforts, we are making a difference by delivering best quality products. We are happy to contribute to your Dream Projects with our professional skills.</p>
                        <h5>1. Plan</h5>
                        <p class="mb-3">First thing first. We do proper paperwork before start implementation. We divide the project in different modules and give you a better time estimate. So that We can deliver your product on time.</p>
                        <h5>2. Quality</h5>
                        <p class="mb-3">We make sure that our quality of code must be the best. So that your product can outstay trust of your customers always.</p>
                        <h5>3. Support</h5>
                        <p class="mb-0">Product without support is a ship without a rudder. Our customer service has always tended to give you the best service throughout your journey.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="amazing-dashboard-right text-right">
                        <img class="amazing-dashboard" src="{{ asset ('img/slider21.png') }}" alt="Feature Image - Cipherhex Technology">
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- our numbers -->
<section class="why-us-block bg-primary" id="why-us">
    <div class="container">
        <div class="section-title text-center">
            <span class="badge badge-white text-white">Why Us?</span>
            <h2 class="text-white">Our Strong Numbers</h2>
            <span class="section-title-line "></span>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="why-us-item text-center text-white">
                    <i class="fas fa-user-secret"></i>
                    <h1 class="text-white mt-3 mb-0">25</h1>
                    <p class="text-white mb-0">EMPLOYEES</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="why-us-item text-center text-white">
                    <i class="fas fa-smile-wink"></i>
                    <h1 class="text-white mt-3 mb-0">81</h1>
                    <p class="text-white mb-0">HAPPY CLIENTS</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="why-us-item text-center text-white">
                    <i class="fas fa-cube"></i>
                    <h1 class="text-white mt-3 mb-0">110</h1>
                    <p class="text-white mb-0">CLIENTS PROJECTS</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="why-us-item text-center text-white">
                    <i class="fas fa-child"></i>
                    <h1 class="text-white mt-3 mb-0">13</h1>
                    <p class="text-white mb-0">HOME PRODUCTS</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- video yt -->
<section class="video-block pb-0" >
    <div class="container">
        <div class="section-title text-center">
            <span class="badge badge-info">video</span>
            <h2>Watch Our Video</h2>
            <span class="section-title-line"></span>
        </div>
        <div class="row">
            <div class="col-md-11 mx-auto">
                <div class="video-item text-center">
                    <iframe width="100%;" height="500px;" src="https://www.youtube.com/embed/bH4a5l0qE4Q" title="What Dr. Huan Giap (USA) says about Cipherhex Technology." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- testimonials -->
<section class="reviews-block bg-primary">
    <div class="reviews-container-fluid">
        <div class="section-title text-center">
            <span class="badge badge-white text-white">Testimonials</span>
            <h2 class="text-white">Thousands Of Smiles</h2>
            <span class="section-title-line"></span>
        </div>
        
        <div class="reviews-row text-center">
            <div class="screens owl-carousel owl-theme">
                <div class="item">
                    <div class="custom-card testimonials-item text-center">
                    <!--<img class="img-fluid mb-4" src="https://www.cipherhex.com/upload/logo/dkc-logo-final.jpg" alt="" style="height:250px;width:250px;margin:auto;">-->
                        <div class="mb-4 testimonial-img-box" style="background-image:url(../image/dkc-logo-final.jpg);"></div>
                        <p class="mb-4">"Team is an excellent programmers to work with. Their communication was perfect and communicated regularly to update me on their progress. Their programming of App knowledge was very good and has the ability to fulfill my complex requirement to complete 100%."</p>
                        <h6 class="mb-0 text-primary">- Sparkle Infotech</h6>
                        <small></small>
                    </div>
                </div>

                <div class="item">
                    <div class="custom-card testimonials-item text-center">
                    <!--<img class="img-fluid mb-4" src="https://www.cipherhex.com/upload/logo/dkc-logo-final.jpg" alt="" style="height:250px;width:250px;margin:auto;">-->
                        <div class="mb-4 testimonial-img-box" style="background-image:url(../image/munmun.jpg);"></div>
                        <p class="mb-4">"The team is very efficient. If I had any problems with any of the task they were willing to be patient. I very much appreciated their customer service even during the holidays."</p>
                        <h6 class="mb-0 text-primary">- Munmun Alex</h6>
                        <small></small>
                    </div>
                </div>

                <div class="item">
                    <div class="custom-card testimonials-item text-center">
                    <!--<img class="img-fluid mb-4" src="https://www.cipherhex.com/upload/logo/dkc-logo-final.jpg" alt="" style="height:250px;width:250px;margin:auto;">-->
                        <div class="mb-4 testimonial-img-box" style="background-image:url(../image/logo3.png);"></div>
                        <p class="mb-4">"It's always deal of success o work with team of great IT professionals of this company."</p>
                        <h6 class="mb-0 text-primary">- Akshay Shah</h6>
                        <small>JK Instinct Media</small>
                    </div>
                </div>

                <div class="item">
                    <div class="custom-card testimonials-item text-center">
                        <!--<img class="img-fluid mb-4" src="https://www.cipherhex.com/upload/logo/SelfProtrait2.jpg" alt="" style="height:250px;width:250px;margin:auto;">-->
                        <div class="mb-4 testimonial-img-box" style="background-image:url(../image/SelfProtrait2.jpg);"></div>
                        <p class="mb-4">"Great experience! Seller was very good at communicating. I am very happy with the results of our project. Seller was responsive and delivered quality code."</p>
                        <h6 class="mb-0 text-primary">- Richard Vincet</h6>
                        <small></small>
                    </div>
                </div>

                <div class="item">
                    <div class="custom-card testimonials-item text-center">
                        <!--<img class="img-fluid mb-4" src="https://www.cipherhex.com/upload/logo/madassa.png" alt="" style="height:250px;width:250px;margin:auto;">-->
                        <div class="mb-4 testimonial-img-box" style="background-image:url(../image/madassa.png);"></div>
                        <p class="mb-4">Easy to communicate , quick work , meet specs, experienced and creative . Don't hesitate to work with, trust you will be happy !</p>
                        <h6 class="mb-0 text-primary">- Madassa</h6>
                        <small></small>
                    </div>
                </div>

                <div class="item">
                    <div class="custom-card testimonials-item text-center">
                        <!--<img class="img-fluid mb-4" src="https://www.cipherhex.com/upload/logo/cyrus.jpg" alt="" style="height:250px;width:250px;margin:auto;">-->
                        <div class="mb-4 testimonial-img-box" style="background-image:url(../image/cyrus.jpg);"></div>
                        <p class="mb-4">Always provide best service. highly recommended. communication is great and understand the requirement. will keep in touch for future project.</p>
                        <h6 class="mb-0 text-primary">- Cyrus Jayson</h6>
                        <small></small>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- contact us -->
<section class="download-app-block bg-primary">
    <div class="container">
        <div class="section-title text-center">
            <span class="badge badge-white text-white">Contact Us</span>
            <h2 class="text-white">We're are always in search of creative people</h2>
            <span class="section-title-line"></span>
        </div>

        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="container">
                        <div class="row">
                            <div class="col-sm-3 text-white card-title">
                                <i class="fas fa-map-marker-alt"></i>
                                Address :
                            </div>
                            <div class="col-sm-9 text-white card-title">
                                403, Dhara Arcade, Near Mahadev Chowk, Mota Varachha, Surat, GJ, India
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 text-white card-title">
                                <i class="fas fa-phone"></i>
                                Phone :
                            </div>
                            <div class="col-sm-9 text-white card-title">
                                +91 9998-855-118, +91 9998-854-400
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 text-white card-title">
                                <i class="fas fa-envelope"></i>
                                Email :
                            </div>
                            <div class="col-sm-9 text-white card-title">
                                support@cipherhex.com
                            </div>
                        </div>
                </div>
            </div>

            <div class="col-md-6 mx-auto">
                <form action="" >
                    <div class="row">
                        <div class="control-group form-group col-md-6">
                            <div class="controls">
                                <input type="text" placeholder="Full Name" class="form-control" id="contact_name" name="contact_name" required>
                                <!-- @error('contact_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="control-group form-group col-md-6">
                            <div class="controls">
                                <input type="email" placeholder="Email Address" id="contact_email" class="form-control" name="contact_email" required>
                            </div>
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="text" placeholder="Subject" class="form-control" id="contact_subject" name="contact_subject" required >
                            <p class="help-block"></p>
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls">
                           <textarea rows="4" cols="100" placeholder="Message"  class="form-control" id="contact_message" name="contact_message" required maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <!-- <div class="controls">
                           <div class="g-recaptcha" data-sitekey="6LcVpRkUAAAAAPMXGfjChDbdjOnR5lS67U-uF9OC"></div>
                        </div> -->
                        {!!htmlFormSnippet()!!}

                        @if($errors->has('g-recaptcha-response'))

                            <div>
                                <small class="text-danger">
                                    {{$errors->first('g-recaptcha-response')}}
                                </small>
                            </div>
                        @endif
                    </div>

                    <!-- <div class="alert alert-success" style="display:none;" id="success">
                        <strong>Thank you. We will touch you shortly. </strong>
                    </div>
                    <div class="alert alert-danger" style="display:none;" id="error">
                        <strong>Please Enter Values</strong>
                    </div> -->
                            @if(Session::has('message'))
                                <div class="alert alert-success">
                                {{Session::get('message')}}
                                </div>
                            @endif
                            @if(Session::has('fail'))
                                <div class="alert alert-danger">
                                {{Session::get('fail')}}
                                </div>
                            @endif
                    <!-- For success/fail messages -->
                    <button type="submit"  class="btn btn-primary btn-lg btn-block">SEND FEEDBACK</button>
                </form>
            </div>
        </div>
    </div>
</section>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3731.7758303057512!2d72.88333369633862!3d21.237206068338068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e5539c1cde1%3A0x6ea21118d0f566b6!2sCipherhex+Technology!5e0!3m2!1sen!2sin!4v1523357621221" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

@endsection