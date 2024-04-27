<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta property="og:url" content="" />
                <meta name="description" content="We know the beauty in code. That's why we are damn good coders. We believe that by applying 100% of our efforts, we are making a difference by delivering best quality products. We are happy to contribute to your Dream Projects with our professional skills." />
                <meta name="keywords" content="cipherhex technology, it company,  website developing, ios developing, android developing, gaming company, game development company in india, it company india, top 100 it company in india" />
                <meta property="og:title" content="Cipherhex Technology" />
                <meta property="og:image" content="http://www.cipherhex.com/upload/gallery/512x512_background.png" />
                <meta property="og:site_name" content="Cipherhex Technology" />
                <meta property="og:description" content="We know the beauty of code. That's why we are damn good coders. We believe that by applying 100% of our efforts, we are making a difference by delivering best quality products. We are happy to contribute to your Dream Projects with our professional skills. 1. Plan, 2. Quality, 3. Support" />
                <!-- <title>Cipherhex Technology</title> -->
                <title>@yield('title')</title>
                <!-- Favicon Icon -->
                <link rel="icon" type="image/png" href="{{ asset('img/fav.png') }}">
                <!-- Bootstrap core CSS -->
                <link href="https://www.cipherhex.com/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                <!-- Font Awesome -->
                <!-- <link href="https://www.cipherhex.com/vendor/font/css/fontawesome-all.css" rel="stylesheet"> -->
                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet"> 
                <!-- Owl Stylesheets -->
                <link rel="stylesheet" href="https://www.cipherhex.com/vendor/owlcarousel/assets/owl.carousel.min.css">
                <link rel="stylesheet" href="https://www.cipherhex.com/vendor/owlcarousel/assets/owl.theme.default.min.css">
                <!-- Animate CSS  -->
                <link href="{{ asset ('vendor/animate/animate.css') }}" rel="stylesheet">
                <!-- Custom styles for this template -->
                <link href="{{ asset ('css/style.css') }}" rel="stylesheet">

                <script src="{{ asset ('vendor/jquery/jquery.min.js') }}"></script>

                <!-- google recaptcha -->
                {!!htmlScriptTagJsApi()!!}

                <!-- Global site tag (gtag.js) - Google Analytics -->
                <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117512209-1"></script>
                <script>
                    window.dataLayer = window.dataLayer || [];
                    function gtag(){dataLayer.push(arguments);}
                    gtag('js', new Date());

                    gtag('config', 'UA-117512209-1');
                </script>

   </head>
   <body id="page-top">
    
    @include('layouts.topbar-index')

    @yield('content')

    @include('layouts.footer')    


    <!-- Bootstrap core JavaScript -->
      <script src="https://www.cipherhex.com/vendor/jquery/jquery.min.js"></script>
      <script src="https://www.cipherhex.com/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Plugin JavaScript -->
      <script src="https://www.cipherhex.com/vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Scrolling Nav JavaScript -->
      <script src="https://www.cipherhex.com/vendor/scrolling-nav/scrolling-nav.js"></script>
      <!-- Contact Form JavaScript -->
      <script src="https://www.cipherhex.com/vendor/contact/jqBootstrapValidation.js"></script>
      <script src="{{ asset ('vendor/contact/contact_me.js') }}"></script>
      <!-- Particles JavaScript -->
      <script src="https://www.cipherhex.com/vendor/particles/particles.js"></script>
      <!-- Owl Carousel javascript -->
      <script src="https://www.cipherhex.com/vendor/owlcarousel/owl.carousel.js"></script>
      <!-- WOW JavaScript -->
      <script src="https://www.cipherhex.com/vendor/animate/wow.min.js"></script>
      <!-- Custom JavaScript -->
      <script src="https://www.cipherhex.com/vendor/custom/custom.js"></script>
      
      <!-- Start Visual Website Optimizer Asynchronous Code -->
        <script type='text/javascript'>
        var _vwo_code=(function(){
        var account_id=388694,
        settings_tolerance=2000,
        library_tolerance=2500,
        use_existing_jquery=false,
        /* DO NOT EDIT BELOW THIS LINE */
        f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
        </script>
        <!-- End Visual Website Optimizer Asynchronous Code -->
</body>
</html>