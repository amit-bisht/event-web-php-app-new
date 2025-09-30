<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>WaveNeer: Elevating Brands, Perfecting Events</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="CureVention">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description"
        content="Don't just host an event; create a brand experience. WaveNeer offers a unique, integrated solution to make your brand the star. We design stunning custom-branded water bottles that act as mobile billboards, and our expert team manages every aspect of your event to ensure it's a resounding success. Let's combine powerful advertising with seamless event management to make a lasting impression.">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/new_favicon.png">
    <link rel="apple-touch-icon" href="images/favicon_57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon_72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon_114.png">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- slider revolution CSS files -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="css/vendors.min.css" />
    <link rel="stylesheet" href="css/icon.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="demos/corporate/corporate.css" />
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
    <style>
        .container.overlap-section.position-relative.z-index-2 {
                margin-top: -10.338px !important;

        }
        .about-hero-section {
            background: linear-gradient(135deg, rgba(255,147,1,0.9), rgba(33,150,243,0.8)), url('images/demo-corporate-about-title-bg.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
        }
        .feature-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.05);
            background: #fff;
            border-radius: 12px;
            padding: 2rem;
            height: 100%;
        }
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            border-color: rgba(255,147,1,0.2);
        }
        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(45deg, #ff9301, #ffb74d);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            transition: all 0.3s ease;
        }
        .feature-card:hover .feature-icon {
            transform: scale(1.1);
            background: linear-gradient(45deg, #e8840a, #ff9301);
        }
        .stats-counter {
            font-size: 3.5rem;
            font-weight: 800;
            color: #ff9301;
            line-height: 1;
        }
        .company-story-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            position: relative;
        }
        .story-highlight {
            background: linear-gradient(45deg, rgba(255,147,1,0.1), rgba(33,150,243,0.1));
            border-left: 4px solid #ff9301;
            padding: 1.5rem;
            border-radius: 0 8px 8px 0;
            margin: 1.5rem 0;
        }
        .about-cta-section {
            background: linear-gradient(135deg, #ff9301, #2196f3);
            position: relative;
            overflow: hidden;
        }
        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        .floating-elements::before,
        .floating-elements::after {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }
        .floating-elements::before {
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }
        .floating-elements::after {
            bottom: 10%;
            right: 10%;
            animation-delay: 3s;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(10deg); }
        }
        .section-divider {
            height: 4px;
            background: linear-gradient(90deg, #ff9301, #2196f3, #ff9301);
            margin: 3rem 0;
            border-radius: 2px;
        }
        .text-highlight {
            background: linear-gradient(45deg, #ff9301, #2196f3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
        }
        .slide-content {
            padding: 2rem;
            background: rgba(255,255,255,0.95);
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-left: 4px solid #ff9301;
        }
    </style>
</head>

<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="modern" data-mobile-nav-bg-color="#242E45">
<div class="spinner-container">
        <div class="spinner-border" role="status" style="width: 3rem; height: 3rem;color:#ff9301">
            <span class="visually-hidden"></span>
        </div>
    </div>    
<div class="box-layout">
        <!-- start header -->
       <?php include 'includes/navbar.php'; ?>
        <!-- end header -->
        <!-- start page title -->
            <section class="about-hero-section top-space-margin page-title-big-typography border-radius-6px lg-border-radius-0px p-0" data-parallax-background-ratio="0.5">
                <div class="floating-elements"></div>
                <div class="container">
                    <div class="row align-items-center justify-content-center small-screen">
                        <div class="col-lg-10 position-relative text-center page-title-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <h1 class="m-auto text-white text-shadow-double-large fw-800 ls-minus-2px mb-3">Elevating Brands Through <span class="text-highlight">Immersive Experiences</span></h1>
                            <p class="text-white fs-18 fw-400 mb-4 w-80 mx-auto opacity-9">Integrated BTL Marketing, Research & Event Management Agency delivering impeccable services with seasoned marketing professionals</p>
                            <a href="#down-section" class="btn btn-large btn-white btn-round-edge fw-600 text-dark-gray">Discover Our Story</a>
                        </div>
                        <div class="down-section text-center mt-4" data-anime='{ "translateY": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <a href="#down-section" class="section-link">
                                <div class="text-white">
                                    <i class="feather icon-feather-chevron-down icon-very-medium"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end page title -->
            <!-- start section -->
            <section id="down-section" class="company-story-section">
                <div class="container overlap-gap-section"> 
                    <div class="row align-items-center justify-content-center mb-6 text-center">                    
                        <div class="col-lg-10" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <span class="ps-25px pe-25px mb-20px text-uppercase text-white fs-13 lh-42px fw-700 border-radius-100px bg-gradient-orange-sky-blue d-inline-block">Who We Are</span>
                            <h2 class="text-dark-gray fw-800 ls-minus-2px mb-4">Crafting <span class="text-highlight">Immersive Marketing Solutions</span> Since Years</h2>
                            <div class="section-divider w-50 mx-auto"></div>
                        </div>
                    </div>
                    
                    <div class="row align-items-center mb-6">
                        <div class="col-lg-6 mb-4 mb-lg-0" data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 800, "delay": 0, "easing": "easeOutQuad" }'>
                            <div class="story-highlight">
                                <h4 class="text-dark-gray fw-700 mb-3">Our Foundation</h4>
                                <p class="fs-16 lh-28 mb-0">WaveNeer is an <strong>integrated BTL marketing, Marketing Research & Event Management agency</strong> in Delhi with seasoned marketing professionals providing immersive interactive marketing solutions.</p>
                            </div>
                            <p class="fs-16 lh-28 text-medium-gray">With our strong commitment to serve clients with <strong>impeccable services every time</strong>, we offer a wide range of services for corporate and social events. Through our journey over the years, we have gained extensive experience and constantly upgraded ourselves to meet the needs of this ever-dynamic business environment.</p>
                        </div>
                        <div class="col-lg-6" data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "easing": "easeOutQuad" }'>
                            <div class="story-highlight">
                                <h4 class="text-dark-gray fw-700 mb-3">Our Capabilities</h4>
                                <p class="fs-16 lh-28 mb-3">We have our <strong>in-house production setup</strong> for Fabrication & Printing, ensuring quality control and timely delivery.</p>
                                <p class="fs-16 lh-28 mb-0">We love designing creative events and are renowned for <strong>unique styling ideas, unusual venue sourcing</strong> and going the extra mile to ensure you get the perfect event.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Statistics Section -->
                    <div class="row text-center mb-6" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="feature-card text-center">
                                <div class="stats-counter">100+</div>
                                <h5 class="text-dark-gray fw-600 mb-0">Cities Covered</h5>
                                <p class="text-medium-gray fs-14 mb-0">Nationwide Presence</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="feature-card text-center">
                                <div class="stats-counter">1000+</div>
                                <h5 class="text-dark-gray fw-600 mb-0">Projects Completed</h5>
                                <p class="text-medium-gray fs-14 mb-0">Successful Campaigns</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="feature-card text-center">
                                <div class="stats-counter">24</div>
                                <h5 class="text-dark-gray fw-600 mb-0">B2B Partners</h5>
                                <p class="text-medium-gray fs-14 mb-0">Strategic Alliances</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="feature-card text-center">
                                <div class="stats-counter">5+</div>
                                <h5 class="text-dark-gray fw-600 mb-0">Years Experience</h5>
                                <p class="text-medium-gray fs-14 mb-0">Industry Expertise</p>
                            </div>
                        </div>
                    </div>
                    <!-- Our Core Services -->
                    <div class="row justify-content-center mb-5">
                        <div class="col-lg-8 text-center mb-5" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <h3 class="text-dark-gray fw-800 ls-minus-1px mb-3">Our <span class="text-highlight">Core Services</span></h3>
                            <p class="text-medium-gray fs-16 w-80 mx-auto">We solve the problem of generating buzz by giving experiences that are novel, helping brands engage audiences effectively.</p>
                        </div>
                    </div>
                    
                    <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <!-- BTL Marketing -->
                        <div class="col mb-4">
                            <div class="feature-card text-center">
                                <div class="feature-icon">
                                    <i class="bi bi-megaphone-fill text-white fs-24"></i>
                                </div>
                                <h5 class="text-dark-gray fw-700 mb-3">BTL Marketing</h5>
                                <p class="text-medium-gray fs-15 lh-26 mb-0">Integrated below-the-line marketing solutions that create direct connections with your target audience.</p>
                            </div>
                        </div>
                        
                        <!-- Marketing Research -->
                        <div class="col mb-4">
                            <div class="feature-card text-center">
                                <div class="feature-icon">
                                    <i class="bi bi-graph-up-arrow text-white fs-24"></i>
                                </div>
                                <h5 class="text-dark-gray fw-700 mb-3">Marketing Research</h5>
                                <p class="text-medium-gray fs-15 lh-26 mb-0">Comprehensive market analysis and consumer insights to drive strategic decision-making.</p>
                            </div>
                        </div>
                        
                        <!-- Event Management -->
                        <div class="col mb-4">
                            <div class="feature-card text-center">
                                <div class="feature-icon">
                                    <i class="bi bi-calendar-event text-white fs-24"></i>
                                </div>
                                <h5 class="text-dark-gray fw-700 mb-3">Event Management</h5>
                                <p class="text-medium-gray fs-15 lh-26 mb-0">End-to-end event planning and execution for corporate and social gatherings.</p>
                            </div>
                        </div>
                        
                        <!-- Creative Solutions -->
                        <div class="col mb-4">
                            <div class="feature-card text-center">
                                <div class="feature-icon">
                                    <i class="bi bi-palette-fill text-white fs-24"></i>
                                </div>
                                <h5 class="text-dark-gray fw-700 mb-3">Creative Solutions</h5>
                                <p class="text-medium-gray fs-15 lh-26 mb-0">Innovative design concepts and unique styling ideas for memorable brand experiences.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->
            <!-- start section --> 
            <section class="about-cta-section py-5" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="floating-elements"></div>
                <div class="container overlap-section position-relative z-index-2">
                    <div class="row justify-content-center g-0">
                        <div class="col-lg-8 text-center">
                            <div class="bg-white border-radius-12px p-5 box-shadow-large">
                                <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                    <div class="feature-box-icon me-15px">
                                        <i class="bi bi-chat-text icon-extra-medium text-base-color"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin text-dark-gray">
                                        <h4 class="fw-800 mb-2">Ready to Create Something Amazing?</h4>
                                        <p class="fs-16 mb-3 text-medium-gray">Let's make something great work together and elevate your brand experience.</p>
                                        <a href="contact-us.php" class="btn btn-large btn-dark-gray btn-round-edge fw-600">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->
            <!-- start section -->
            <section class="position-relative overflow-hidden py-6">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-5 col-lg-6 mb-5 mb-lg-0 position-relative" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <div class="w-75 sm-w-80" data-animation-delay="200" data-shadow-animation="true" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                                <img src="images/img_event_One.png" alt="WaveNeer Events" class="border-radius-12px w-100 box-shadow-large">
                            </div>
                            <div class="w-55 overflow-hidden position-absolute right-15px xs-w-55 bottom-minus-50px" data-shadow-animation="true" data-animation-delay="100" data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)">
                                <img src="images/img_event_Two.png" alt="WaveNeer Team" class="border-radius-12px box-shadow-extra-large w-100" />
                            </div>
                        </div>
                        <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 150, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <div class="swiper position-relative magic-cursor" data-slider-options='{ "autoHeight": true, "loop": true, "allowTouchMove": true, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "effect": "slide" }'>
                                <div class="swiper-wrapper mb-4">
                                    <!-- Our Mission -->
                                    <div class="swiper-slide">
                                        <div class="slide-content">
                                            <span class="ps-25px pe-25px mb-20px text-uppercase text-white fs-13 lh-42px fw-700 border-radius-100px bg-gradient-orange-sky-blue d-inline-block">Our Mission</span>
                                            <h3 class="text-dark-gray fw-800 ls-minus-1px mb-20px">Delivering Impeccable Services Every Time</h3>
                                            <p class="fs-16 lh-28 text-medium-gray">WaveNeer is an integrated BTL marketing, Marketing Research & Event Management agency in Delhi with seasoned marketing professionals providing immersive interactive marketing solutions.</p>
                                        </div>
                                    </div>
                                    
                                    <!-- Our Vision -->
                                    <div class="swiper-slide">
                                        <div class="slide-content">
                                            <span class="ps-25px pe-25px mb-20px text-uppercase text-white fs-13 lh-42px fw-700 border-radius-100px bg-gradient-orange-sky-blue d-inline-block">Our Vision</span>
                                            <h3 class="text-dark-gray fw-800 ls-minus-1px mb-20px">Evolving with Dynamic Business Environment</h3>
                                            <p class="fs-16 lh-28 text-medium-gray">With our forgoing journey over the years, we have gained wide experience and constantly upgraded ourselves to meet the needs of this ever-dynamic business environment. We have our in-house production setup of Fabrication & Printing.</p>
                                        </div>
                                    </div>
                                    
                                    <!-- Our Values -->
                                    <div class="swiper-slide">
                                        <div class="slide-content">
                                            <span class="ps-25px pe-25px mb-20px text-uppercase text-white fs-13 lh-42px fw-700 border-radius-100px bg-gradient-orange-sky-blue d-inline-block">Our Values</span>
                                            <h3 class="text-dark-gray fw-800 ls-minus-1px mb-20px">Creative Excellence & Unique Experiences</h3>
                                            <p class="fs-16 lh-28 text-medium-gray">We love designing creative events and are renowned for unique styling ideas, unusual venue sourcing, and going the extra mile to make sure you get the perfect event.</p>
                                        </div>
                                    </div>
                                    
                                    <!-- Our Approach -->
                                    <div class="swiper-slide">
                                        <div class="slide-content">
                                            <span class="ps-25px pe-25px mb-20px text-uppercase text-white fs-13 lh-42px fw-700 border-radius-100px bg-gradient-orange-sky-blue d-inline-block">Our Approach</span>
                                            <h3 class="text-dark-gray fw-800 ls-minus-1px mb-20px">Solving Brand Engagement Challenges</h3>
                                            <p class="fs-16 lh-28 text-medium-gray">We solve the problem of generating buzz by giving experiences that are novel, helping brands engage audiences through innovative and immersive marketing solutions.</p>
                                        </div>
                                    </div>
                                </div> 
                                <div class="d-flex justify-content-center justify-content-lg-start">
                                    <!-- start slider navigation -->
                                    <div class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 border border-color-extra-medium-gray bg-white"><i class="bi bi-arrow-left-short icon-very-medium text-dark-gray"></i></div>
                                    <div class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 border border-color-extra-medium-gray bg-white"><i class="bi bi-arrow-right-short icon-very-medium text-dark-gray"></i></div>
                                    <!-- end slider navigation --> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->
           
        
           
        <!-- start footer -->
       <?php include 'includes/footer.php'; ?>
        <!-- start scroll progress -->
        <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Scroll</span><span class="scroll-line"><span
                        class="scroll-point"></span></span>
            </a>
        </div>
        <!-- end scroll progress -->
    </div>
    <!-- javascript libraries -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/vendors.min.js"></script>
     <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA56KqSJ11nQUw_tXgXyNMiPmQeM7EaSA&callback=initMap"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <!-- slider revolution core javaScript files -->
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- slider revolution extension scripts. ONLY NEEDED FOR LOCAL TESTING -->
    <!-- <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script> -->

    <!-- Slider's main "init" script -->
    <script>
        var tpj = jQuery;
        var revapi7;
        var $ = jQuery.noConflict();
        tpj(document).ready(function () {
            if (tpj("#demo-corporate-slider").revolution == undefined) {
                revslider_showDoubleJqueryError("#demo-corporate-slider");
            } else {
                revapi7 = tpj("#demo-corporate-slider").show().revolution({
                    sliderType: "standard",
                    /* sets the Slider's default timeline */
                    delay: 9000,
                    /* options are 'auto', 'fullwidth' or 'fullscreen' */
                    sliderLayout: 'fullscreen',
                    /* RESPECT ASPECT RATIO */
                    autoHeight: 'off',
                    /* options that disable autoplay */
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    navigation: {
                        keyboardNavigation: 'on',
                        keyboard_direction: 'horizontal',
                        mouseScrollNavigation: 'off',
                        mouseScrollReverse: 'reverse',
                        onHoverStop: 'off',
                        arrows: {
                            enable: true,
                            style: 'hesperiden',
                            rtl: false,
                            hide_onleave: false,
                            hide_onmobile: true,
                            hide_under: 500,
                            hide_over: 9999,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            left: {
                                container: 'slider',
                                h_align: 'left',
                                v_align: 'center',
                                h_offset: 50,
                                v_offset: 0
                            },
                            right: {
                                container: 'slider',
                                h_align: 'right',
                                v_align: 'center',
                                h_offset: 50,
                                v_offset: 0
                            }
                        },
                        bullets: {

                            enable: true,
                            style: 'hermes',
                            tmp: '',
                            direction: 'horizontal',
                            rtl: false,

                            container: 'layergrid',
                            h_align: 'center',
                            v_align: 'bottom',
                            h_offset: 0,
                            v_offset: 30,
                            space: 12,

                            hide_onleave: false,
                            hide_onmobile: true,
                            hide_under: 0,
                            hide_over: 500,
                            hide_delay: true,
                            hide_delay_mobile: 500

                        },
                        touch: {
                            touchenabled: 'on',
                            touchOnDesktop: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: 'horizontal',
                            drag_block_vertical: true
                        }
                    },
                    responsiveLevels: [1240, 1024, 768, 480],
                    visibilityLevels: [1240, 1024, 768, 480],
                    gridwidth: [1240, 1024, 768, 480],
                    gridheight: [930, 850, 900, 850],
                    /* Lazy Load options are "all", "smart", "single" and "none" */
                    lazyType: "smart",
                    spinner: "spinner0",
                    parallax: {
                        type: "scroll",
                        origo: "slidercenter",
                        speed: 400,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 5],
                    },
                    shadow: 0,
                    shuffle: "off",
                    fullScreenAutoWidth: "on",
                    fullScreenAlignForce: "on",
                    fullScreenOffsetContainer: "nav",
                    fullScreenOffset: "",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/
    </script>
    
</body>
 <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
 <script type="text/javascript" src="js/contact-us.js"></script>
 
</html>

<!-- YouTube modal fallback: opens YouTube links with class .popup-youtube in a simple modal if Magnific fails -->
<style>
    .yt-modal-backdrop{position:fixed;inset:0;background:rgba(0,0,0,.75);z-index:2000;display:none}
    .yt-modal-wrap{position:fixed;left:50%;top:50%;transform:translate(-50%,-50%);z-index:2001;width:90%;max-width:960px;display:none}
    .yt-modal-content{position:relative;padding-top:56.25%;background:#000;border-radius:6px;overflow:hidden}
    .yt-modal-content iframe{position:absolute;inset:0;width:100%;height:100%;border:0}
    .yt-modal-close{position:absolute;right:8px;top:8px;z-index:5;background:rgba(0,0,0,.6);color:#fff;border:0;border-radius:50%;width:36px;height:36px;cursor:pointer;font-size:18px}
</style>
<div id="yt-modal-backdrop" class="yt-modal-backdrop" aria-hidden="true"></div>
<div id="yt-modal" class="yt-modal-wrap" role="dialog" aria-modal="true" aria-hidden="true">
    <div class="yt-modal-content">
        <button id="yt-modal-close" class="yt-modal-close" aria-label="Close video">×</button>
        <iframe id="yt-modal-iframe" src="" allow="autoplay; encrypted-media" allowfullscreen title="YouTube video"></iframe>
    </div>
</div>
<script>
    (function(){
        function extractYouTubeId(url){
            if(!url) return null;
            var m = url.match(/[?&]v=([^&]+)/);
            if(m && m[1]) return m[1];
            m = url.match(/youtu\.be\/([^?&]+)/);
            if(m && m[1]) return m[1];
            m = url.match(/embed\/([^?&]+)/);
            return m && m[1] ? m[1] : null;
        }

        var backdrop = document.getElementById('yt-modal-backdrop');
        var modal = document.getElementById('yt-modal');
        var iframe = document.getElementById('yt-modal-iframe');
        var closeBtn = document.getElementById('yt-modal-close');

        function showModal(embedUrl){
            iframe.src = embedUrl;
            backdrop.style.display = 'block';
            modal.style.display = 'block';
            backdrop.setAttribute('aria-hidden','false');
            modal.setAttribute('aria-hidden','false');
            document.body.style.overflow = 'hidden';
        }

        function hideModal(){
            iframe.src = '';
            backdrop.style.display = 'none';
            modal.style.display = 'none';
            backdrop.setAttribute('aria-hidden','true');
            modal.setAttribute('aria-hidden','true');
            document.body.style.overflow = '';
        }

        // Capture-phase listener to intercept clicks before other handlers (fallback)
        document.addEventListener('click', function(e){
            var el = e.target.closest && e.target.closest('.popup-youtube');
            if(!el) return;
            try{ e.preventDefault(); e.stopPropagation(); }catch(_){ }
            var href = el.getAttribute('href') || el.getAttribute('data-href') || el.getAttribute('data-mfp-src');
            var id = extractYouTubeId(href);
            if(id){
                var embed = 'https://www.youtube.com/embed/' + id + '?autoplay=1&rel=0';
                showModal(embed);
            } else {
                // fallback, open href in new tab
                window.open(href || el.href, '_blank', 'noopener');
            }
        }, true);

        backdrop.addEventListener('click', hideModal);
        closeBtn.addEventListener('click', hideModal);
        document.addEventListener('keydown', function(e){ if(e.key === 'Escape') hideModal(); });
    })();
</script>