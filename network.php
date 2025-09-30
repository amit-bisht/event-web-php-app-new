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
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
    <style>
        .network-hero {
            background: linear-gradient(135deg, rgba(255,147,1,0.95), rgba(33,150,243,0.85)), url('https://craftohtml.themezaa.com/images/demo-corporate-services-title-bg.jpg');
            background-size: cover;
            background-position: center;
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
        .text-gradient {
            background: linear-gradient(135deg, #ffeb3b, #ff9301);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            display: inline-block;
        }
        .network-stats-overlay {
            min-height: 400px;
            position: relative;
            background: url('images/bg_one.png') no-repeat center;
            background-size: contain;
        }
        .stat-circle {
            max-width: 180px;
            text-align: center;
            animation: float 3s ease-in-out infinite;
        }
        .bg-gradient-orange {
            background: linear-gradient(45deg, #ff9301, #ffb74d) !important;
        }
        .bg-gradient-blue {
            background: linear-gradient(45deg, #2196f3, #64b5f6) !important;
        }
        .bg-gradient-green {
            background: linear-gradient(45deg, #4caf50, #81c784) !important;
        }
        .bg-gradient-yellow {
            background: linear-gradient(45deg, #ffeb3b, #fff176) !important;
        }
        .bg-gradient-yellow-light {
            background: linear-gradient(45deg, #fff9c4, #fff59d) !important;
        }
        .bg-gradient-pink {
            background: linear-gradient(45deg, #e91e63, #f06292) !important;
        }
        .service-item {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .service-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        .stat-box {
            transition: transform 0.3s ease;
        }
        .stat-box:hover {
            transform: scale(1.05);
        }
        
        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .network-hero {
                min-height: 70vh;
                padding: 2rem 0;
            }
            .network-hero h1 {
                font-size: 2.5rem !important;
                line-height: 1.2;
            }
            .network-hero p {
                font-size: 16px !important;
                width: 90% !important;
            }
            .floating-shapes::before,
            .floating-shapes::after {
                display: none;
            }
            .stat-circle {
                max-width: 140px;
                padding: 1rem;
            }
            .network-stats-overlay {
                min-height: 300px;
            }
        }
        
        /* Tablet Responsiveness */
        @media (max-width: 1024px) and (min-width: 769px) {
            .network-hero h1 {
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
            <section class="network-hero top-space-margin page-title-big-typography border-radius-6px lg-border-radius-0px p-0" data-parallax-background-ratio="0.5">
                <div class="floating-shapes"></div>
                <div class="container">
                    <div class="row align-items-center justify-content-center small-screen">
                        <div class="col-lg-10 position-relative text-center page-title-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <h1 class="m-auto text-white text-shadow-double-large fw-800 ls-minus-2px mb-3">Our <span class="text-gradient">Network</span> & Capabilities</h1>
                            <p class="text-white fs-18 fw-400 mb-4 w-80 mx-auto opacity-9">Strategically positioned across India with 100+ cities, 1000+ successful assignments, and 24 trusted B2B partners</p>
                            <a href="#down-section" class="btn btn-large btn-white btn-round-edge fw-600 text-dark-gray">Explore Our Network</a>
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
            <section id="down-section" class="border-bottom border-color-extra-medium-gray">
                <div class="container overlap-gap-section"> 
                    <div class="row align-items-end justify-content-center mb-5 md-mb-40px text-center text-md-start">                    
                        <div class="col-xl-5 col-lg-6 col-md-10 md-mb-20px text-center text-lg-start" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">Our Network</span>
                            <h3 class="text-dark-gray fw-700 mb-0 ls-minus-1px">More than 100 plus Cities, with 1000 plus assignments & 24 B2B Partner</h3>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-10 offset-xl-1 text-center text-lg-start last-paragraph-no-margin">
                            <p class="w-90 xl-w-100" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>We have strategically positioned ourselves across <span class="fw-600 text-dark-gray text-decoration-line-bottom">many affiliates across India</span> to deliver comprehensive marketing solutions. Our network spans over 100+ cities with successful execution of 1000+ assignments through our 24 B2B partners.</p>
                        </div>
                    </div>
                    <!-- start network statistics section -->
                    <div class="row justify-content-center mb-5">
                        <div class="col-12 text-center">
                            <div class="row align-items-center">
                                <!-- Network Map Section -->
                                <div class="col-lg-6 mb-4">
                                    <div class="position-relative">
                                        <div class="network-stats-overlay">
                                            <div class="stat-item position-absolute" style="top: 20%; left: 20%;">
                                                <div class="stat-circle bg-gradient-orange text-white p-3 border-radius-50px">
                                                    <span class="fw-700 fs-16">100+</span><br>
                                                    <small class="fs-12">Projects successfully executed in Last Financial Year</small>
                                                </div>
                                            </div>
                                            <div class="stat-item position-absolute" style="bottom: 30%; left: 10%;">
                                                <div class="stat-circle bg-gradient-blue text-white p-3 border-radius-50px">
                                                    <span class="fw-700 fs-16">Cost Efficient Agency</span>
                                                </div>
                                            </div>
                                            <div class="stat-item position-absolute" style="top: 40%; right: 20%;">
                                                <div class="stat-circle bg-gradient-green text-white p-3 border-radius-50px">
                                                    <span class="fw-700 fs-16">We Value relationship with our Clients</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Sectors and Services -->
                                <div class="col-lg-6">
                                    <div class="row">
                                        <!-- Our Sectors -->
                                        <div class="col-6">
                                            <h4 class="text-dark-gray fw-700 mb-3 bg-light-gray p-3 border-radius-6px">OUR SECTORS</h4>
                                            <ul class="list-unstyled">
                                                <li class="mb-2 p-2 bg-gradient-yellow text-white border-radius-4px">BTL Advertisement</li>
                                                <li class="mb-2 p-2 bg-dark-gray text-white border-radius-4px">Marketing Research</li>
                                                <li class="mb-2 p-2 bg-dark-gray text-white border-radius-4px">Audits</li>
                                                <li class="mb-2 p-2 bg-gradient-yellow-light text-dark-gray border-radius-4px">Contractual Staffing</li>
                                                <li class="mb-2 p-2 bg-dark-gray text-white border-radius-4px">Home to Home</li>
                                                <li class="mb-2 p-2 bg-gradient-yellow text-dark-gray border-radius-4px">Retail & Visual Merchandising</li>
                                            </ul>
                                        </div>
                                        
                                        <!-- Our Services -->
                                        <div class="col-6">
                                            <h4 class="text-dark-gray fw-700 mb-3 bg-light-gray p-3 border-radius-6px">OUR SERVICES</h4>
                                            <div class="services-grid">
                                                <div class="service-item mb-3 p-3 bg-gradient-yellow text-dark-gray border-radius-6px">
                                                    <i class="bi bi-lightbulb icon-medium mb-2"></i>
                                                    <span class="fw-600 d-block">Idea & Planning</span>
                                                </div>
                                                <div class="service-item mb-3 p-3 bg-dark-gray text-white border-radius-6px">
                                                    <i class="bi bi-play-circle icon-medium mb-2"></i>
                                                    <span class="fw-600 d-block">Activations</span>
                                                </div>
                                                <div class="service-item mb-3 p-3 bg-gradient-blue text-white border-radius-6px">
                                                    <i class="bi bi-search icon-medium mb-2"></i>
                                                    <span class="fw-600 d-block">Audit & Survey</span>
                                                </div>
                                                <div class="service-item mb-3 p-3 bg-gradient-pink text-white border-radius-6px">
                                                    <i class="bi bi-rocket icon-medium mb-2"></i>
                                                    <span class="fw-600 d-block">Product Launches</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end network statistics section -->
                    
                    <!-- start depth and breadth section -->
                    <div class="row justify-content-center text-center pt-5">
                        <div class="col-12">
                            <h2 class="text-dark-gray fw-700 mb-4 ls-minus-1px">DEPTH AND BREADTH OF SERVICES PAN INDIA</h2>
                            <div class="row justify-content-center">
                                <div class="col-md-6 mb-4">
                                    <div class="stat-box p-4">
                                        <h3 class="text-base-color fw-700 mb-2">Reach</h3>
                                        <h1 class="text-base-color fw-900 mb-2" style="font-size: 4rem;">300+</h1>
                                        <p class="text-dark-gray fw-600 fs-18">TOWNS</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="stat-box p-4">
                                        <h3 class="text-base-color fw-700 mb-2">Resources</h3>
                                        <h1 class="text-base-color fw-900 mb-2" style="font-size: 4rem;">500+</h1>
                                        <p class="text-dark-gray fw-600 fs-18">TEAM MEMBERS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end depth and breadth section -->
                </div>
            </section>
            <!-- end section -->
            <!-- start section --> 
            <section class="py-0 sm-pt-50px" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="container overlap-section">
                    <div class="row justify-content-center g-0">
                        <div class="col-auto text-center last-paragraph-no-margin icon-with-text-style-08 pt-20px pb-20px ps-8 pe-8 md-ps-30px md-pe-30px bg-white border border-color-extra-medium-gray box-shadow-medium-bottom border-radius-100px xs-border-radius-10px">
                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                <div class="feature-box-icon me-10px">
                                    <i class="bi bi-chat-text icon-extra-medium text-base-color"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin text-dark-gray text-uppercase fs-15 fw-700 ls-05px">
                                    Let's make something great work together. <a href="contact-us.php" class="text-base-color text-decoration-line-bottom-medium border-1">Contact Us</a>
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