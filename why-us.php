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
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="css/vendors.min.css" />
    <link rel="stylesheet" href="css/icon.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="demos/corporate/corporate.css" />
    <style>
        .why-us-hero {
            background: linear-gradient(135deg, rgba(255,147,1,0.95), rgba(33,150,243,0.85)), url('https://craftohtml.themezaa.com/images/demo-corporate-services-title-bg.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
        }
        .value-prop-card {
            background: linear-gradient(145deg, #ffffff, #f8f9fa);
            border: 1px solid rgba(255,147,1,0.1);
            border-radius: 20px;
            padding: 3rem 2rem;
            height: 100%;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }
        .value-prop-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,147,1,0.05) 0%, transparent 70%);
            transform: scale(0);
            transition: transform 0.6s ease;
        }
        .value-prop-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 60px rgba(255,147,1,0.15);
            border-color: rgba(255,147,1,0.3);
        }
        .value-prop-card:hover::before {
            transform: scale(1);
        }
        .value-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #ff9301, #ffb74d);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            position: relative;
            z-index: 2;
            transition: all 0.3s ease;
        }
        .value-prop-card:hover .value-icon {
            background: linear-gradient(135deg, #e8840a, #ff9301);
            transform: scale(1.1) rotate(5deg);
        }
        .expertise-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            position: relative;
            overflow: hidden;
        }
        .expertise-highlight {
            background: linear-gradient(145deg, rgba(255,147,1,0.1), rgba(33,150,243,0.05));
            border-left: 5px solid #ff9301;
            border-radius: 0 15px 15px 0;
            padding: 2rem;
            margin: 2rem 0;
            position: relative;
        }
        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }
        .floating-shapes::before,
        .floating-shapes::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            background: rgba(255,147,1,0.1);
            animation: float 8s ease-in-out infinite;
        }
        .floating-shapes::before {
            width: 300px;
            height: 300px;
            top: 10%;
            left: -10%;
            animation-delay: 0s;
        }
        .floating-shapes::after {
            width: 200px;
            height: 200px;
            bottom: -5%;
            right: -5%;
            animation-delay: 4s;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.7; }
            50% { transform: translateY(-30px) rotate(10deg); opacity: 1; }
        }
        .section-divider {
            height: 4px;
            background: linear-gradient(90deg, #ff9301, #2196f3, #ff9301);
            margin: 4rem 0;
            border-radius: 2px;
            position: relative;
        }
        .section-divider::before {
            content: '';
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 20px;
            background: #ff9301;
            border-radius: 50%;
            box-shadow: 0 0 20px rgba(255,147,1,0.5);
        }
        .text-gradient {
            background: linear-gradient(45deg, #ff9301, #2196f3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .why-choose-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        .commitment-card {
            background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.05);
            border: 2px solid transparent;
            transition: all 0.3s ease;
            position: relative;
        }
        .commitment-card:hover {
            border-color: rgba(255,147,1,0.3);
            transform: translateY(-5px);
            box-shadow: 0 20px 60px rgba(0,0,0,0.1);
        }
        .number-badge {
            position: absolute;
            top: -15px;
            right: 20px;
            background: linear-gradient(135deg, #ff9301, #ffb74d);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 1.2rem;
        }
        
        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .why-us-hero {
                min-height: 70vh;
                padding: 2rem 0;
            }
            .why-us-hero h1 {
                font-size: 2.5rem !important;
                line-height: 1.2;
            }
            .why-us-hero p {
                font-size: 16px !important;
                width: 90% !important;
            }
            .floating-shapes::before,
            .floating-shapes::after {
                display: none;
            }
            .value-prop-card {
                margin-bottom: 1.5rem;
                padding: 2rem 1.5rem;
            }
            .expertise-highlight {
                margin: 1rem 0;
                padding: 1.5rem;
            }
        }
        
        /* Tablet Responsiveness */
        @media (max-width: 1024px) and (min-width: 769px) {
            .why-us-hero h1 {
                font-size: 3rem !important;
            }
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
            <section class="why-us-hero top-space-margin page-title-big-typography border-radius-6px lg-border-radius-0px p-0" data-parallax-background-ratio="0.5">
                <div class="floating-shapes"></div>
                <div class="container">
                    <div class="row align-items-center justify-content-center small-screen">
                        <div class="col-lg-10 position-relative text-center page-title-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <h1 class="m-auto text-white text-shadow-double-large fw-800 ls-minus-2px mb-3">Why Choose <span class="text-gradient">WaveNeer</span>?</h1>
                            <p class="text-white fs-18 fw-400 mb-4 w-80 mx-auto opacity-9">Deep expertise, proven experience, and unwavering commitment to bringing your vision to life with precision and excellence</p>
                            <a href="#down-section" class="btn btn-large btn-white btn-round-edge fw-600 text-dark-gray">Discover Our Advantages</a>
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
            <section id="down-section" class="expertise-section py-6">
                <div class="floating-shapes"></div>
                <div class="container overlap-gap-section position-relative z-index-2"> 
                    <!-- Main Expertise Section -->
                    <div class="row align-items-center justify-content-center mb-6 text-center">                    
                        <div class="col-lg-10" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <span class="ps-25px pe-25px mb-20px text-uppercase text-white fs-13 lh-42px fw-700 border-radius-100px bg-gradient-orange-sky-blue d-inline-block">Our Competitive Edge</span>
                            <h2 class="text-dark-gray fw-800 ls-minus-2px mb-4">Why <span class="text-gradient">WaveNeer</span> Stands Apart</h2>
                            <div class="section-divider w-50 mx-auto"></div>
                        </div>
                    </div>
                    
                    <!-- Expertise and Experience Content -->
                    <div class="row align-items-center mb-6">
                        <div class="col-lg-6 mb-4 mb-lg-0" data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 800, "delay": 0, "easing": "easeOutQuad" }'>
                            <div class="expertise-highlight">
                                <h3 class="text-dark-gray fw-800 mb-3 d-flex align-items-center">
                                    <i class="bi bi-award-fill text-base-color me-3 fs-28"></i>
                                    Expertise and Experience
                                </h3>
                                <p class="fs-16 lh-28 mb-3">Our <strong>expert team possesses a deep understanding</strong> of client requirements. With many years of industry experience, we are equipped to handle challenges effectively and provide comprehensive <strong>360-degree solutions</strong>, ensuring the best support and execution.</p>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="bg-gradient-orange-sky-blue text-white p-2 border-radius-50px me-3">
                                        <i class="bi bi-check-lg fw-bold"></i>
                                    </div>
                                    <span class="text-medium-gray fs-15">Proven track record of successful project delivery</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "easing": "easeOutQuad" }'>
                            <div class="expertise-highlight">
                                <h3 class="text-dark-gray fw-800 mb-3 d-flex align-items-center">
                                    <i class="bi bi-lightbulb-fill text-base-color me-3 fs-28"></i>
                                    Vision-Centric Approach
                                </h3>
                                <p class="fs-16 lh-28 mb-3">At our core, we prioritize a <strong>deep understanding of our clients' visions</strong>. We believe that every project is unique, and we are dedicated to capturing the essence of your ideas. Our commitment to executing these visions flawlessly sets us apart.</p>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="bg-gradient-orange-sky-blue text-white p-2 border-radius-50px me-3">
                                        <i class="bi bi-check-lg fw-bold"></i>
                                    </div>
                                    <span class="text-medium-gray fs-15">Precision and excellence in every detail</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Our Commitment -->
                    <div class="row justify-content-center mb-5">
                        <div class="col-lg-10 text-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <div class="commitment-card">
                                <div class="number-badge">01</div>
                                <h4 class="text-dark-gray fw-800 mb-3">Our Promise to You</h4>
                                <p class="fs-16 lh-28 text-medium-gray mb-0">We combine <strong>meticulous planning with innovative solutions</strong>, ensuring that every detail aligns with your goals. With us, you can trust that your vision will not only be understood but <strong>brought to life with precision and excellence</strong>.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Why Choose WaveNeer - Value Propositions -->
                    <div class="row justify-content-center mb-5">
                        <div class="col-lg-8 text-center mb-5" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <h3 class="text-dark-gray fw-800 ls-minus-1px mb-3">What Makes Us <span class="text-gradient">Different</span></h3>
                            <p class="text-medium-gray fs-16 w-80 mx-auto">Discover the key advantages that set WaveNeer apart in the competitive landscape of marketing and event management.</p>
                        </div>
                    </div>
                    
                    <div class="why-choose-grid" data-anime='{ "el": "childs", "translateY": [40, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <!-- Deep Client Understanding -->
                        <div class="value-prop-card text-center">
                            <div class="value-icon">
                                <i class="bi bi-people-fill text-white fs-28"></i>
                            </div>
                            <h4 class="text-dark-gray fw-800 mb-3">Deep Client Understanding</h4>
                            <p class="text-medium-gray fs-15 lh-26 mb-0">We prioritize understanding your unique vision and requirements, ensuring every project reflects your brand essence perfectly.</p>
                        </div>
                        
                        <!-- Comprehensive Solutions -->
                        <div class="value-prop-card text-center">
                            <div class="value-icon">
                                <i class="bi bi-gear-fill text-white fs-28"></i>
                            </div>
                            <h4 class="text-dark-gray fw-800 mb-3">360° Solutions</h4>
                            <p class="text-medium-gray fs-15 lh-26 mb-0">From BTL marketing to event management and research - we provide comprehensive solutions under one roof.</p>
                        </div>
                        
                        <!-- Years of Experience -->
                        <div class="value-prop-card text-center">
                            <div class="value-icon">
                                <i class="bi bi-award-fill text-white fs-28"></i>
                            </div>
                            <h4 class="text-dark-gray fw-800 mb-3">Proven Experience</h4>
                            <p class="text-medium-gray fs-15 lh-26 mb-0">Many years of industry experience have equipped us to handle challenges effectively and deliver exceptional results.</p>
                        </div>
                        
                        <!-- Meticulous Planning -->
                        <div class="value-prop-card text-center">
                            <div class="value-icon">
                                <i class="bi bi-clipboard-check-fill text-white fs-28"></i>
                            </div>
                            <h4 class="text-dark-gray fw-800 mb-3">Meticulous Planning</h4>
                            <p class="text-medium-gray fs-15 lh-26 mb-0">Every detail is carefully planned and executed with precision, ensuring flawless delivery of your vision.</p>
                        </div>
                        
                        <!-- Innovative Solutions -->
                        <div class="value-prop-card text-center">
                            <div class="value-icon">
                                <i class="bi bi-lightbulb-fill text-white fs-28"></i>
                            </div>
                            <h4 class="text-dark-gray fw-800 mb-3">Innovation at Core</h4>
                            <p class="text-medium-gray fs-15 lh-26 mb-0">We combine traditional expertise with innovative approaches to create unique and memorable experiences.</p>
                        </div>
                        
                        <!-- Dedicated Support -->
                        <div class="value-prop-card text-center">
                            <div class="value-icon">
                                <i class="bi bi-headset text-white fs-28"></i>
                            </div>
                            <h4 class="text-dark-gray fw-800 mb-3">Dedicated Support</h4>
                            <p class="text-medium-gray fs-15 lh-26 mb-0">Our commitment extends beyond project delivery with ongoing support and consultation for your success.</p>
                        </div>
                    </div>
            </section>
            <!-- end section -->
           
            <!-- start call to action section -->
            <section class="py-6" style="background: linear-gradient(135deg, #ff9301, #2196f3); position: relative; overflow: hidden;">
                <div class="floating-shapes"></div>
                <div class="container position-relative z-index-2">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-8" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "easing": "easeOutQuad" }'>
                            <div class="bg-white bg-opacity-95 p-5 border-radius-20px box-shadow-extra-large">
                                <h2 class="text-dark-gray fw-800 mb-3">Ready to Experience the WaveNeer Difference?</h2>
                                <p class="text-medium-gray fs-16 mb-4 lh-28">Let us bring your vision to life with precision, excellence, and innovative solutions that set your brand apart.</p>
                                <div class="row justify-content-center">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <a href="contact-us.php" class="btn btn-large btn-dark-gray btn-round-edge w-100 fw-600">Start Your Project</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="network.php" class="btn btn-large btn-transparent-dark-gray btn-round-edge w-100 fw-600">View Our Network</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->
           
           
           
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