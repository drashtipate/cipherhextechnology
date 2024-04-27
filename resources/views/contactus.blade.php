@extends('layouts.master')
@section('title', 'Contact Us')
@section('content')

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3731.7758303057512!2d72.88333369633862!3d21.237206068338068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e5539c1cde1%3A0x6ea21118d0f566b6!2sCipherhex+Technology!5e0!3m2!1sen!2sin!4v1523357621221" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<section class="trial-block" id="trial">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="section-title text-left">
                    <h2>Contact Us</h2>
                    <span class="section-title-line"></span>
                </div>
                <form action="{{ url('users/contact')}}" method="post" enctype="multipart/form-data"  id="contactForm">
                    @csrf
                    <div class="row">
                        <div class="control-group form-group col-md-6">
                            <div class="controls">
                                <input type="text" placeholder="Full Name" class="form-control" id="contact_name" name="contact_name"  data-validation-required-message="Please enter your Name.">
                                    @error('contact_name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>
                        <div class="control-group form-group col-md-6">
                            <div class="controls">
                                <input type="email" placeholder="Email Address"  class="form-control" id="contact_email" name="contact_email"  data-validation-required-message="Please enter your email address.">
                                    @error('contact_email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="text" placeholder="Subject" class="form-control" id="contact_subject" name="contact_subject"  data-validation-required-message="Please enter Subject.">
                                    @error('contact_subject')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <textarea rows="4" cols="100" placeholder="Message"  class="form-control" id="contact_message" name="contact_message"  data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                                    @error('contact_message')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
                    <div id="success"></div>
                    <!-- For success/fail messages -->
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
                    <button type="submit"  class="btn btn-primary btn-lg btn-block">CONTACT US</button>
                </form>
            </div>

            <div class="col-md-4">
                <div class="section-title text-left">
                <h2>Our Office</h2>
                <span class="section-title-line"></span>
                </div>
                <div class="contact-footer sidebar-widget">
                <ul>
                    <li><a href="#"><i class="fa fa-compass "></i> 403, Dhara Arcade, Near Mahadev Chowk, Mota Varachha, Surat, GJ, India</a></li>
                    <li><a href="#"><i class="fa fa-mobile"></i> +91 9998-855-118, +91 9998-854-400</a></li>
                    <li><a href="#"><i class="fa fa-envelope-open"></i> support@cipherhex.com</a></li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection