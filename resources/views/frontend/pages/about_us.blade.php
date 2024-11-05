@extends('layouts.frontend.master', ['title' => $metaData->title ?? env('APP_NAME'), 'description' => $metaData->description ?? env('APP_NAME')])
@section('content')
    <section class="bradcrum_sec_pad">
        @php
            $about_bradcrumb = App\Models\Bradcrumb::first();
        @endphp
        <div class="page-title text-center"
            style=" background: url({{ $generalInfo->bradcrum_photo }}) no-repeat left center #ffe9e6; background-size:cover">
            <div class="contact_tag1 text-center text-bold">About Us</div>
            <hr class="hr_for_all">
        </div>
    </section>
    {{-- <section class="about_nav_res">

        <nav class="navbar navbar-expand-lg navbar-dark about_us_navbar sticky_nav fixed_top">
            <div class="container">

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class='nav-link nav_link_focus chairman' id="chairman_scroll" href="#chairman">CHAIRMAN
                                MESSAGE</a>
                        </li>
                        <li class="nav-item">
                            <a class='nav-link nav_link_focus aboutus' id="about_scroll" href="#aboutus">ABOUT US</a>
                        </li>

                        <li class="nav-item">
                            <a class='nav-link nav_link_focus mission' id="mission_scroll" href="#mission"
                                style="margin-left:0 !important">MISSION & VISION</a>
                        </li>
                        <li class="nav-item">
                            <a class='nav-link nav_link_focus approach' id="approach_scroll" href="#approach">OUR APPROACH</a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>

    </section> --}}

    <section class="page_sec_pad_50 pad_top_0_res" style="padding-bottom: 0">
        {{-- <div class="container">
            <div class="row about__us scroll_margin brand" id="chairman">
                <div class="col-md-4 text-center mt-4">
                    <div class="chairman_photo_section">
                        <div class="chairman_img">
                            <img src="{{ $about->chairman_photo }}" class="img-fluid"
                                alt="{{ $about->name ?? 'chairman-image' }}">
                        </div>
                        <div class="chairman_details">
                            <div class="chair_name pt_20">
                                {{ $about->name }}
                            </div>
                            <div class="chair_description pb-20 text-white">
                                {{ $about->designation }}
                            </div>
                            <div class="chairman_contact">
                                Contact Here
                            </div>
                            <div>
                                <a href="mailto:{{ $about->email }}" class="text-white">{{ $about->email }}</a>
                            </div>
                            <div class="social_icon">
                                <a href="{{ $about->facebook }}" target="_blank" class="facebook"><i
                                        class="fab fa-facebook"></i></a>
                                <a href="{{ $about->linkedin }}" target="_blank" class="linkedin"><i
                                        class="fa-brands fa-linkedin"></i></a>
                                <a href="https://wa.me/{{ $about->whatsapp }}" target="_blank" class="whatsapp"><i
                                        class="fa-brands fa-whatsapp"></i></a>
                                <a href="{{ $about->twitter }}" target="_blank" class="twitter"><i
                                        class="fa-brands fa-x-twitter"></i></a>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="">
                        <div class="chair_pad">
                            <div class="chairman-title">Chairman's Message</div>
                        </div>

                        <div class="pad__">
                            <div class="dear">DEAR CUSTOMERS,</div>

                            <div class="full_message">
                                <div class="about_quote">“</div>
                                <div class="des concern_description about_btn">
                                    {!! $about->chairman_message !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div> --}}
        <div class="about9 page_sec_pad_50  pad_top_0">
            <div class="container">
                <div class="row scroll_margin" id="aboutus">
                    <div class="col-lg-5">
                        <div class="about9-images position-relative">
                            <div class="about9-img1 img5" data-aos="zoom-out" data-aos-duration="700">
                                <img src="{{ $about->photo }}" class="img-fluid" alt="about-image">
                            </div>
                            @if ($about->youtube_link)
                                <div class="video-play-box" data-aos="zoom-out" data-aos-duration="700">
                                    <div class="about9-img2 img5">
                                        <img src="{{ $about->youtube_thumb }}" alt="">
                                    </div>
                                    <div class="video-play-btn9">
                                        <a id="play-video" class="video-play-button popup-youtube"
                                            href="{{ $about->youtube_link }}">
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="hadding9 about9-hadding pt-mobile-30">
                            <span class="span font-f-3" data-aos="fade-left" data-aos-duration="700">Know Us</span>
                            <div class="space16"></div>
                            <h1 class="font-f-3" data-aos="fade-left" data-aos-duration="900">{{ $about->title }}</h1>
                            <div class="space24"></div>
                            {!! $about->description !!}

                            @if ($about->important_note)
                                <div class="about9-after-pera" data-aos="fade-left" data-aos-duration="800">
                                    <p class="font-f-7">“{{ $about->important_note }}”</p>
                                </div>
                            @endif
                            <div class="space30"></div>
                            {{-- <div class="" data-aos="fade-left" data-aos-duration="800">
                                <a href="service.html" class="theme-btn18 font-f-7">View Our Services</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- <div class="service2 sp3 _relative">
            <div class="container">
                <div class="row scroll_margin mt-5 mb-3" id="approach">
                    <div class="col-lg-5">
                        <div class="hero2-all-images text-end">
                            <div class="hero2-img1">
                                <img src="{{ $about->approach_photo }}" class="img-fluid" alt="core-value">
                            </div>


                        </div>
                    </div>

                    <div class="col-lg-7 pt-mobile-30">
                        <div class="hadding2 about2-hadding card_pad_l_r_20">
                            <div class="hadding9 concern_details_heading">
                                <span class="span font-f-3" data-aos="fade-up" data-aos-duration="700">
                                    Core Values
                                </span>
                            </div>
                            <div class="space16"></div>
                            <div class="space24"></div>
                            <div class="concern_description">
                                <p>{!! $about->approach_des !!}</p>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div> --}}

        @if (count($team_types) > 0)
            @foreach ($team_types as $team_type)
                @if (count($team_type->teams) > 0)
                    <div class="team2 page_sec_pad_25 _relative">
                        <div class="container">
                            <h1 class="our_team_title">{{ $team_type->name }}</h1>
                            <div class="row scroll_margin" id="team">
                                @foreach ($team_type->teams as $team)
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="team2-box">
                                            <div class="team2-box-img img100 img5">
                                                <img src="{{ $team->photo }}" class="img-fluid" alt="">
                                            </div>

                                            <div class="team2-box-hover">
                                                <div class="team2-hadding mt-3">
                                                    <h4> <a href="">{{ $team->name }}</a></h4>
                                                    <div class="space6"></div>
                                                    <p>{{ $team->designation }}</p>
                                                </div>
                                                <div class="space16"></div>
                                                <div class="site-footer__social">
                                                    <a href="{{ $team->facebook }}" target="_blank"><i
                                                            class="fab fa-facebook"></i></a>
                                                    <a href="{{ $team->linkedin }}" target="_blank"><i
                                                            class="fa-brands fa-linkedin"></i></a>
                                                    <a href="{{ $team->instagram }}" target="_blank"><i
                                                            class="fab fa-instagram"></i></a>
                                                    <a href="{{ $team->twitter }}" target="_blank"><i
                                                            class="fa-brands fa-square-x-twitter"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach

                            </div>


                        </div>
                    </div>
                @endif
            @endforeach
        @endif
    </section>
@endsection
@push('script')
    <script>
        function scrollToSection(sectionId) {
            event.preventDefault();
            var target = document.getElementById(sectionId);

            if (target) {
                // Scroll to the target section with 200px offset
                window.scrollTo({
                    top: target.offsetTop - 180,
                    behavior: 'smooth'
                });
            }
        }
        $('.info').readmore({
            moreLink: '<a class="my-btn theme_btn" href="#">Read More</a>',
            collapsedHeight: 305,
            afterToggle: function(trigger, element, expanded) {
                if (!expanded) { // The "Close" link was clicked
                    $('html, body').animate({
                        scrollTop: element.offset().top
                    }, {
                        duration: 100
                    });
                }
            }
        });

        $('article').readmore({
            speed: 500
        });
    </script>

    <script>
        $(document).ready(function() {
            $('a[href^="#"]').on('click', function(event) {
                $('.nav_link_focus').removeClass('focus__design');
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: ($($.attr(this, 'href')).offset().top) - 200
                }, 1000);
            });
        });
    </script>
    <script>
        window.onscroll = function() {
            var pageTitle = document.querySelector('.page-title'); // Select the page-title div
            var navbar = document.querySelector('.fixed_top');
            var about__us = document.querySelector('.about__us'); // Replace with the appropriate selector
            var pageTitleBottom = pageTitle.getBoundingClientRect()
                .bottom; // Get the bottom position of the page-title div
            var scrollPosition = window.scrollY;


            // if (scrollPosition >= pageTitleBottom + 180) {

            //     navbar.classList.add('sticky_nav');
            // } else {
            //     navbar.classList.remove('sticky_nav');
            // }
        };

        function make__focus(val) {
            $('.nav_link_focus').removeClass('focus__design');
            $('.' + val).addClass('focus__design');
        }

        var oneH = $('#chairman').offset().top;
        var twoH = $('#aboutus').offset().top - 300;
        var founder = $('#mission').offset().top - 300;
        var team = $('#team').offset().top - 300;
        // var boardofDireector = $('#approach').offset().top - 300;
        // var coreValue = $('#coreValue').offset().top;
        $(window).scroll(function() {
            if ($(window).scrollTop() >= oneH) {
                $(".nav-item a").removeClass("focus__design");
                $("#chairman_scroll").addClass("focus__design");
            }

            if ($(window).scrollTop() >= twoH) {
                $(".nav-item a").removeClass("focus__design");
                $("#about_scroll").addClass("focus__design");
            }
            if ($(window).scrollTop() >= founder) {
                $(".nav-item a").removeClass("focus__design");
                $("#mission_scroll").addClass("focus__design");
            }
            if ($(window).scrollTop() >= team) {
                $(".nav-item a").removeClass("focus__design");
                $("#team_scroll").addClass("focus__design");
            }
            // if ($(window).scrollTop() >= boardofDireector) {
            //     $(".nav-item a").removeClass("focus__design");
            //     $("#approach_scroll").addClass("focus__design");
            // }
            // if ($(window).scrollTop() >= coreValue) {
            //     $(".nav-item a").removeClass("focus__design");
            //     $("#coreValue_scroll").addClass("focus__design");
            // }
        });
    </script>
    <script>
        var check = true;
        $(document).ready(function() {
            var hash = window.location.hash;
            if (hash) {
                if (check) {
                    $('.nav_link_focus').removeClass('focus__design');
                    hash = hash.replace("#", "");
                    make__focus(hash);
                    check = false;
                }
            }
        });
        $(".navbar-expand-lg").removeClass("sticky_nav");
    </script>

    <script>
        $('.concern_description').readmore({
            moreLink: '<a class="my-btn theme_btn" href="#">Read More</a>',
            collapsedHeight: 330,
            afterToggle: function(trigger, element, expanded) {
                if (!expanded) { // The "Close" link was clicked
                    $('html, body').animate({
                        scrollTop: element.offset().top
                    }, {
                        duration: 100
                    });
                }
            }
        });

        $('article').readmore({
            speed: 500
        });

        $('.popup-youtube').magnificPopup({
            type: 'iframe'
        });

        let teams_list = '{{ count($team_type->teams) }}';
        if (teams_list > 0) {
            $('#mission_section').addClass('brand')
        } else {
            $('#mission_section').removeClass('brand')
        }
    </script>
@endpush
