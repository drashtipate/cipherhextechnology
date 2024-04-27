@extends('layouts.master')
@section('title', 'Our Portfolio')
@section('content')

<section class="inner-header-block">
   <div class="container">
      <div class="row">
         <div class="col-md-12 mx-auto text-left">
            <h1>Our Portfolio</h1>
            <p class="mt-1 mb-0">We would like to show you our portfolio.</p>
            <span class="section-title-line"></span>
         </div>
      </div>
   </div>
</section>

<section class="trial-block" id="trial">
    <div class="container">
        <div id="filters" class="button-group">
            <button class="button is-checked btn btn-light btn-sm" data-filter="*" style="margin-right:15px; margin-bottom:15px;">Show all</button>
            <button class="btn btn-light btn-sm" data-filter=".education" style="margin-right:15px; margin-bottom:15px;">Education</button>
            <button class="btn btn-light btn-sm" data-filter=".action" style="margin-right:15px; margin-bottom:15px;">Action</button>
            <button class="btn btn-light btn-sm" data-filter=".arcade" style="margin-right:15px; margin-bottom:15px;">Arcade</button>
            <button class="btn btn-light btn-sm" data-filter=".news" style="margin-right:15px; margin-bottom:15px;">News</button>
            <button class="btn btn-light btn-sm" data-filter=".website" style="margin-right:15px; margin-bottom:15px;">Website</button>
            <button class="btn btn-light btn-sm" data-filter=".family" style="margin-right:15px; margin-bottom:15px;">Family</button>
            <button class="btn btn-light btn-sm" data-filter=".realtime" style="margin-right:15px; margin-bottom:15px;">Real time</button>
            <button class="btn btn-light btn-sm" data-filter=".board" style="margin-right:15px; margin-bottom:15px;">Board</button>
            <button class="btn btn-light btn-sm" data-filter=".security" style="margin-right:15px; margin-bottom:15px;">Security</button>
            <button class="btn btn-light btn-sm" data-filter=".puzzle" style="margin-right:15px; margin-bottom:15px;">Puzzle</button>
            <button class="btn btn-light btn-sm" data-filter=".business" style="margin-right:15px; margin-bottom:15px;">Business</button>
            <button class="btn btn-light btn-sm" data-filter=".entertainment" style="margin-right:15px; margin-bottom:15px;">Entertainment</button>
            <button class="btn btn-light btn-sm" data-filter=".3d" style="margin-right:15px; margin-bottom:15px;">3D</button>
            <button class="btn btn-light btn-sm" data-filter=".ringrush" style="margin-right:15px; margin-bottom:15px;">Ring Rush</button>
        </div>

        <div class="row grid">

            <!-- view 1 -->
            <div class="col-md-4  element-item education metal" data-category="education">
                <a href="{{ url('/portfolio/view/1/animal-planet-3d-vr-360') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid" alt="Animal Planet - 3D, VR, 360" src="{{ asset('img/animalplanet.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Animal Planet - 3D, VR, 360</h4>
                            <p class="card-text">Education</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 2 -->
            <div class="col-md-4  element-item action metal" data-category="action">
                <a href="{{ url('/portfolio/view/2/tank-rifle') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Tank Rifle" src="{{ asset('img/tankrigle.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Tank Rifle</h4>
                            <p class="card-text">Action</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 3 -->
            <div class="col-md-4  element-item arcade metal" data-category="arcade">
                <a href="{{ url('/portfolio/view/3/rsa-snakes-&-hazards') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="RSA Snakes &amp; Hazards " src="{{ asset('img/SnakesAndHazards.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">RSA Snakes &amp; Hazards</h4>
                            <p class="card-text">Arcade</p>
                        </div>
                    </div>
                </a>
            </div>  

            <!-- view 4 -->
            <div class="col-md-4  element-item arcade metal" data-category="arcade">
                <a href="{{ url('/portfolio/view/4/break-the-egg') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Break The Egg " src="{{ asset('img/breaktheegg.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Break The Egg</h4>
                            <p class="card-text">Arcade</p>
                        </div>
                    </div>
                </a>
            </div>  

            <!-- view 5 -->
            <div class="col-md-4 element-item education metal" data-category="education">
                <a href="{{ url('/portfolio/view/5/kides-learning') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Kids Learning " src="{{ asset('img/kidslearning.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Kides Learning</h4>
                            <p class="card-text">Education</p>
                        </div>
                    </div>
                </a>
            </div>  

            <!-- view 6 -->
            <div class="col-md-4  element-item education metal" data-category="education">
                <a href="{{ url('/portfolio/view/6/abc-memonsters') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="ABC MeMonsters " src="{{ asset('img/abc-memonster1.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">ABC MeMonsters</h4>
                            <p class="card-text">Education</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 7 -->
            <div class="col-md-4  element-item education metal" data-category="education">
                <a href="{{ url('/portfolio/view/7/123-memonsters') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="123 MeMonsters " src="{{ asset('img/123-memonster.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">123 MeMonsters</h4>
                            <p class="card-text">Education</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 8 -->
            <div class="col-md-4  element-item arcade metal" data-category="arcade">
                <a href="{{ url('/portfolio/view/8/zombie-shooter') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Zombie Shooter " src="{{ asset('img/hungryzombies.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Zombie Shooter</h4>
                            <p class="card-text">Arcade</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 9 -->
            <div class="col-md-4  element-item arcade metal" data-category="arcade">
                <a href="{{ url('/portfolio/view/9/color-pong') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Color Pong" src="{{ asset('img/colorpong.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Color Pong</h4>
                            <p class="card-text">Arcade</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 10 -->
            <div class="col-md-4  element-item news metal" data-category="news">
                <a href="{{ url('/portfolio/view/10/hindi-news') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Hindi News" src="{{ asset('img/hindinews.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Hindi News</h4>
                            <p class="card-text">News</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 11 -->
            <div class="col-md-4  element-item family metal" data-category="family">
                <a href="{{ url('/portfolio/view/11/mahuva-patel-samaj-surat') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Mahuva Jesar Taluka Patel Samaj Surat" src="{{ asset('img/300x300.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Mahuva Jesar Taluka Patel Samaj Surat</h4>
                            <p class="card-text">Family</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 12 -->
            <div class="col-md-4  element-item family metal" data-category="family">
                <a href="{{ url('/portfolio/view/12/ranpariya-parivar') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Ranpariya Parivar" src="{{ asset('img/512x512_logo.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Ranpariya Parivar</h4>
                            <p class="card-text">Family</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 13 -->
            <div class="col-md-4  element-item family metal" data-category="family">
                <a href="{{ url('/portfolio/view/13/munjapara-parivar') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Munjapara Parivar" src="{{ asset('img/IMG-PATEL.jpg') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Munjapara Parivar</h4>
                            <p class="card-text">Family</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 14 -->
            <div class="col-md-4  element-item realtime metal" data-category="realtime">
                <a href="{{ url('/portfolio/view/14/cricvilla') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="CricVilla" src="{{ asset('img/ezgif_com-webp-to-png.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">CricVilla</h4>
                            <p class="card-text">Real Time</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 15 -->
            <div class="col-md-4  element-item website metal" data-category="website">
                <a href="{{ url('/portfolio/view/15/note-schema') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Note Schema" src="{{ asset('img/noteschema.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Note Schema</h4>
                            <p class="card-text">Website</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 16 -->
            <div class="col-md-4  element-item website metal" data-category="website">
                <a href="{{ url('/portfolio/view/16/phoenix-games') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Phoenix Games" src="{{ asset('img/phoneixgames.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Phoenix Games</h4>
                            <p class="card-text">Website</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 17 -->
            <div class="col-md-4  element-item website metal" data-category="website">
                <a href="{{ url('/portfolio/view/17/sky-touch-business') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Sky Touch Business" src="{{ asset('img/skytouch.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Sky Touch Business</h4>
                            <p class="card-text">Website</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 18 -->
            <div class="col-md-4  element-item website metal" data-category="website">
                <a href="{{ url('/portfolio/view/18/sk-auto-motive &amp; tyres-australia') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="SK Auto Motive &amp; Tyres - Australia" src="{{ asset('img/300x300-Logo.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">SK Auto Motive &amp; Tyres - Australia</h4>
                            <p class="card-text">Website</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 19 -->
            <div class="col-md-4  element-item website metal" data-category="website">
                <a href="{{ url('/portfolio/view/19/sphere') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Sphere" src="{{ asset('img/sphere.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Sphere</h4>
                            <p class="card-text">Website</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 20 -->
            <div class="col-md-4  element-item website metal" data-category="website">
                <a href="{{ url('/portfolio/view/20/playmate-blog') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Playmate Blog" src="{{ asset('img/playmateblog.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Playmate Blog</h4>
                            <p class="card-text">Website</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 21 -->
            <div class="col-md-4  element-item website metal" data-category="website">
                <a href="{{ url('/portfolio/view/21/thai-aqua-technology') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Thai Aqua Technology Co. LTD" src="{{ asset('img/thaiaqua.jpg') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Thai Aqua Technology Co. LTD</h4>
                            <p class="card-text">Website</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 22 -->
            <div class="col-md-4  element-item website metal" data-category="realtime">
                <a href="{{ url('/portfolio/view/22/live-coin-rate') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Live Coin Rate" src="{{ asset('img/ezgif_com-webp-to-png_(1).png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Live Coin Rate</h4>
                            <p class="card-text">Real Time</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 23 -->
            <div class="col-md-4  element-item board meta" data-category="board">
                <a href="{{ url('/portfolio/view/23/dot-cricket-multiplayer') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Dot Cricket Multiplayer" src="{{ asset('img/logo_300x300.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Dot Cricket Multiplayer</h4>
                            <p class="card-text">Board</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 24 -->
            <div class="col-md-4  element-item security metal" data-category="security">
                <a href="{{ url('/portfolio/view/24/security-gaze') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Security Gaze " src="{{ asset('img/logos.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Security Gaze </h4>
                            <p class="card-text">Security</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 25 -->
            <div class="col-md-4  element-item puzzle metal" data-category="puzzle">
                <a href="{{ url('/portfolio/view/25/puzzle-challenge') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Puzzle Challenge - Hexa Block" src="{{ asset('img/icon_2.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Puzzle Challenge - Hexa Block </h4>
                            <p class="card-text">Puzzle</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 26 -->
            <div class="col-md-4  element-item business metal" data-category="business">
                <a href="{{ url('/portfolio/view/26/kent-stationary') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Security Gaze " src="{{ asset('img/lentlogo.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Kent Stationery</h4>
                            <p class="card-text">Business</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 27 -->
            <div class="col-md-4  element-item entertainment metal" data-category="entertainment">
                <a href="{{ url('/portfolio/view/27/black-card-entertainment') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Black Card Entertainment" src="{{ asset('img/blackcardentertainment1.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Black Card Entertainment </h4>
                            <p class="card-text">Entertainment</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 28 -->
            <div class="col-md-4  element-item website metal" data-category="website">
                <a href="{{ url('/portfolio/view/28/aditree-bulit') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Security Gaze " src="{{ asset('img/aditrilogo.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Aditree Built</h4>
                            <p class="card-text">Website</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 29 -->
            <div class="col-md-4  element-item 3d metal" data-category="3d">
                <a href="{{ url('/portfolio/view/29/you-jump-i-jump') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="You Jump I Jump" src="{{ asset('img/Infinity_Tower_300_x_300.png') }}" />
                        <div class="card-body">
                            <h4 class="card-title">You Jump I Jump </h4>
                            <p class="card-text">3D</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 30 -->
            <div class="col-md-4  element-item education metal" data-category="education">
                <a href="{{ url('/portfolio/view/30/bhagavad-gita') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Bhagavad Gita" src="{{ asset('img/logo300x300.jpg') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Bhagavad Gita </h4>
                            <p class="card-text">Education</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 31 -->
            <div class="col-md-4  element-item action metal" data-category="action">
                <a href="{{ url('/portfolio/view/31/infinity-tower') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Infinity Tower" src="{{ asset('img/logo-300.jpg') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Infinity Tower</h4>
                            <p class="card-text">Action</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- view 32 -->
            <div class="col-md-4  element-item ringrush metal" data-category="ringrush">
                <a href="{{ url('/portfolio/view/32/ring-rush') }}">
                    <div class="card portfolio-card" style="height:500px; margin-bottom: 30px;">
                        <div class="card-bg"></div>
                        <img class="card-img-top img-fluid"  alt="Ring Rush " src="{{ asset('img/hoop_app_icon_300.jpg') }}" />
                        <div class="card-body">
                            <h4 class="card-title">Ring Rush </h4>
                            <p class="card-text">Ring Rush </p>
                        </div>
                    </div>
                </a>
            </div>
            
        </div>
    </div>
</section>




@endsection