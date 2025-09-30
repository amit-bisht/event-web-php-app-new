<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>WaveNeer: Elevating Brands, Perfecting Events</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="CureVention">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="description"
        content="Contact WaveNeer for exceptional event management and BTL marketing solutions. Get in touch with our expert team for custom-branded experiences that elevate your brand.">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/new_favicon.png">
    <link rel="apple-touch-icon" href="images/favicon_57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon_72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon_114.png">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Critical CSS -->
    <link rel="preload" href="css/vendors.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="css/style.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="css/icon.min.css" />
    <link rel="stylesheet" href="css/responsive.min.css" />
    <noscript>
        <link rel="stylesheet" href="css/vendors.min.css">
        <link rel="stylesheet" href="css/style.min.css">
    </noscript>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
    <style>
        .contact-hero {
            background: linear-gradient(135deg, rgba(255,147,1,0.95), rgba(33,150,243,0.85)), url('images/demo-corporate-contact-parallax-img.jpg');
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
        .contact-info-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.05);
        }
        .contact-info-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1) !important;
            border-color: rgba(255,147,1,0.2);
        }
        .contact-icon i {
            transition: all 0.3s ease;
        }
        .contact-info-card:hover .contact-icon i {
            transform: scale(1.1);
            color: #ff9301 !important;
        }
        .form-control {
            border: 2px solid #f0f0f0 !important;
            transition: all 0.3s ease;
            padding: 15px 50px 15px 15px !important;
        }
        .form-control:focus {
            border-color: #ff9301 !important;
            box-shadow: 0 0 0 0.2rem rgba(255,147,1,0.1) !important;
            transform: translateY(-2px);
        }
        .form-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            z-index: 2;
            transition: color 0.3s ease;
        }
        .form-control:focus + .form-icon,
        .form-group:hover .form-icon {
            color: #ff9301;
        }
        .form-label {
            color: #333 !important;
            margin-bottom: 8px !important;
            font-size: 14px !important;
        }
        .btn-dark-gray {
            background: linear-gradient(45deg, #ff9301, #ffb74d) !important;
            border: none !important;
            padding: 15px 30px !important;
            font-weight: 600 !important;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }
        .btn-dark-gray:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(255,147,1,0.3) !important;
            background: linear-gradient(45deg, #e8840a, #ff9301) !important;
        }
        .bg-gradient-orange-sky-blue {
            background: linear-gradient(45deg, #ff9301, #2196f3) !important;
        }
        .text-medium-gray {
            color: #666 !important;
        }
        .hover-effect {
            position: relative;
            overflow: hidden;
        }
        .hover-effect::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,147,1,0.1), transparent);
            transition: left 0.6s ease;
        }
        .hover-effect:hover::before {
            left: 100%;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .contact-info-card {
            animation: fadeInUp 0.6s ease forwards;
        }
        
        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .contact-hero {
                min-height: 70vh;
                padding: 2rem 0;
            }
            .contact-hero h1 {
                font-size: 2.5rem !important;
                line-height: 1.2;
            }
            .contact-hero p {
                font-size: 16px !important;
                width: 90% !important;
            }
            .floating-shapes::before,
            .floating-shapes::after {
                display: none;
            }
            .contact-info-card {
                margin-bottom: 1.5rem;
            }
            .form-control {
                padding: 12px 45px 12px 12px !important;
            }
            .map-overlay-card {
                min-width: 0 !important; 
                padding: 18px 8px 16px 8px !important;
            }
        }
        
        /* Tablet Responsiveness */
        @media (max-width: 1024px) and (min-width: 769px) {
            .contact-hero h1 {
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
            <section class="contact-hero top-space-margin page-title-big-typography border-radius-6px lg-border-radius-0px p-0" data-parallax-background-ratio="0.5">
                <div class="floating-shapes"></div>
                <div class="container">
                    <div class="row align-items-center justify-content-center small-screen">
                        <div class="col-lg-10 position-relative text-center page-title-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <h1 class="m-auto text-white text-shadow-double-large fw-800 ls-minus-2px mb-3">Let's Create Something <span class="text-gradient">Amazing</span> Together</h1>
                            <p class="text-white fs-18 fw-400 mb-4 w-80 mx-auto opacity-9">Ready to bring your vision to life? Connect with our expert team for comprehensive marketing solutions and exceptional event experiences</p>
                            <a href="#down-section" class="btn btn-large btn-white btn-round-edge fw-600 text-dark-gray">Get In Touch</a>
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
            <section id="down-section">
                <div class="container"> 
                    <div class="row align-items-center justify-content-center mb-6 text-center sm-mb-8">                    
                        <div class="col-lg-8 col-md-10" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <span class="ps-25px pe-25px mb-20px text-uppercase text-white fs-13 lh-42px fw-700 border-radius-100px bg-gradient-orange-sky-blue d-inline-block">Let's Start Something Amazing</span>
                            <h2 class="text-dark-gray fw-800 ls-minus-2px mb-20px">Ready to Elevate Your Brand?</h2>
                            <p class="fs-18 lh-32 text-dark-gray w-80 mx-auto" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>Transform your vision into reality with WaveNeer's comprehensive marketing solutions. Whether it's BTL campaigns, events, or brand activations - we're here to make it happen. <span class="fw-600 text-base-color">Let's create something extraordinary together!</span></p>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-2 row-cols-md-2 mb-6 sm-mb-8 justify-content-center" data-anime='{ "el": "childs", "translateY": [40, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <div class="col md-mb-30px text-center text-sm-start">
                            <span class="alt-font fs-18 fw-700 d-block w-90 text-dark-gray border-bottom border-2 border-color-dark-gray pb-15px mb-15px xs-w-100"><i class="feather icon-feather-map-pin d-inline-block icon-small me-10px"></i>Office location</span>
                            <div class="last-paragraph-no-margin">
                                <p>C4/23. Keshav. Puram. Near. By Malhotra clinic. Keshav. Puram.<br> 110059, India</p>
                            </div>
                        </div>
                        <div class="col mb-30px">
                            <div class="contact-info-card p-4 h-100 bg-white border-radius-10px box-shadow-large text-center hover-effect">
                                <div class="contact-icon mb-20px">
                                    <i class="bi bi-envelope-fill text-base-color fs-35"></i>
                                </div>
                                <h5 class="text-dark-gray fw-700 mb-15px">Send Us Email</h5>
                                <p class="mb-15px text-medium-gray fs-15 lh-26">Ready to start your project?<br>Drop us a line!</p>
                                <a href="mailto:contact@waveneer.com" class="text-base-color fw-600 text-decoration-line-bottom">contact@waveneer.com</a>
                            </div>
                        </div>
                        <div class="col mb-30px">
                            <div class="contact-info-card p-4 h-100 bg-white border-radius-10px box-shadow-large text-center hover-effect">
                                <div class="contact-icon mb-20px">
                                    <i class="bi bi-telephone-fill text-base-color fs-35"></i>
                                </div>
                                <h5 class="text-dark-gray fw-700 mb-15px">Call Us Now</h5>
                                <p class="mb-15px text-medium-gray fs-15 lh-26">Speak directly with our team</p>
                                <a href="tel:+919911201557" class="d-block text-dark-gray fw-600 mb-5px">+91 99112 01557</a>
                                <a href="tel:+919990655548" class="d-block text-dark-gray fw-600">+91 99906 55548</a>
                            </div>
                        </div>
                        <div class="col mb-30px">
                            <div class="contact-info-card p-4 h-100 bg-white border-radius-10px box-shadow-large text-center hover-effect">
                                <div class="contact-icon mb-20px">
                                    <i class="bi bi-people-fill text-base-color fs-35"></i>
                                </div>
                                <h5 class="text-dark-gray fw-700 mb-15px">Join Our Team</h5>
                                <p class="mb-15px text-medium-gray fs-15 lh-26">Explore career opportunities<br>with WaveNeer</p>
                                <a href="mailto:contact@waveneer.com" class="text-base-color fw-600 text-decoration-line-bottom">careers@waveneer.com</a>
                            </div>
                        </div>
                    </div>
                        <!-- <div class="row justify-content-center g-0" data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                            <div class="col-auto text-center last-paragraph-no-margin icon-with-text-style-08 pt-20px pb-20px ps-8 pe-8 md-ps-30px md-pe-30px bg-gradient-flamingo-amethyst-green border-radius-100px xs-border-radius-30px">
                                <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                    <div class="feature-box-icon me-10px">
                                        <i class="bi bi-chat-text fs-24 icon-very-medium text-white"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin text-white text-uppercase fs-15 fw-600 ls-05px xs-lh-24">
                                        Let's make something great work together. <a href="demo-corporate-contact.html" class="text-white text-decoration-line-bottom-medium">Got a project in mind?</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                </div>
            </section>
            <!-- end section -->
            <!-- start section --> 
            <section class="position-relative one-half-screen sm-small-screen overflow-hidden border border-radius-top-lr lg-border-radius-0px" data-parallax-background-ratio="0.5" style="background-image: url('images/demo-corporate-contact-parallax-img.jpg')">
                <div class="opacity-light bg-dark-gray"></div>
                <div class="fs-225 ls-minus-10px alt-font text-gradient-orange-sky-blue fw-600 position-absolute left-minus-25px bottom-minus-50px sm-ls-minus-5px sm-bottom-minus-20px sm-fs-200 xs-left-minus-10px xs-fs-130">contact</div>
            </section>
            <!-- end section --> 
            <!-- start section Map-->
            <section class="bg-gradient-quartz-white position-relative z-index-0 sm-pt-0">
                <div class="container-fluid overlap-section p-0">
                    <div class="row g-0 justify-content-end overlap-section-one-fourth">
                        <div class="col-md-6 position-relative" style="min-height:400px;">
                            <div style="width: 100%; height: 400px; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 16px rgba(0,0,0,0.08); filter: grayscale(1);">
                                <iframe src="https://www.google.com/maps?q=28.6877,77.1621&z=17&output=embed" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="map-overlay-card" style="position:absolute;top:28px;left:50%;transform:translateX(-50%);background:#fff;border-radius:10px;box-shadow:0 4px 24px rgba(0,0,0,0.13);padding:16px 18px 14px 18px;min-width:220px;max-width:90%;z-index:2;text-align:center;">
                                <div style="font-size:1.05rem;font-weight:600;color:#232b38;margin-bottom:4px;">WaveNeer Office</div>
                                <div style="color:#6c757d;font-size:0.92rem;margin-bottom:12px;line-height:1.4;">C4/23. Keshav. Puram. Near. By Malhotra clinic. Keshav. Puram.<br>110059, India</div>
                                <a href="https://maps.app.goo.gl/VR4d3TY4rP6Gvvue6?g_st=ipc" target="_blank" rel="noopener" style="display:inline-block;padding:8px 18px;background:#232b38;color:#fff;border-radius:4px;font-weight:500;text-decoration:none;box-shadow:0 2px 8px rgba(62,49,203,0.08);font-size:0.98rem;letter-spacing:0.5px;">VIEW MAP</a>
                                <div class="map-blink-outer"></div>
                                <div class="map-blink-inner"></div>
                <style>
                .map-blink-outer {
                    position: absolute;
                    left: 50%;
                    bottom: -14px;
                    transform: translateX(-50%);
                    width: 24px;
                    height: 24px;
                    background: rgba(62,49,203,0.15);
                    border-radius: 50%;
                    z-index: -1;
                    animation: map-blink-pulse 1.2s infinite cubic-bezier(0.66,0,0,1);
                }
                .map-blink-inner {
                    position: absolute;
                    left: 50%;
                    bottom: -4px;
                    transform: translateX(-50%);
                    width: 8px;
                    height: 8px;
                    background: #3e31cb;
                    border-radius: 50%;
                    z-index: 1;
                    box-shadow: 0 0 0 0 rgba(62,49,203,0.5);
                }
                @keyframes map-blink-pulse {
                    0% {
                        box-shadow: 0 0 0 0 rgba(62,49,203,0.25);
                        opacity: 1;
                    }
                    70% {
                        box-shadow: 0 0 0 16px rgba(62,49,203,0);
                        opacity: 0.7;
                    }
                    100% {
                        box-shadow: 0 0 0 0 rgba(62,49,203,0);
                        opacity: 0.5;
                    }
                }
                </style>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                @media (max-width: 600px) {
                    .map-overlay-card { min-width: 0 !important; padding: 18px 8px 16px 8px !important; }
                }
                </style>
                <div class="container-fluid overflow-hidden position-relative pt-6 sm-pt-40px">
                    <img src="https://via.placeholder.com/605x580" class="position-absolute top-0 left-minus-300px z-index-minus-1" data-bottom-top="transform: rotate(0deg) translateY(0)" data-top-bottom="transform:rotate(-15deg) translateY(0)" alt=""/>
                    <div class="row justify-content-center mb-4 sm-mb-5">
                        <div class="col-lg-8 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <span class="ps-25px pe-25px mb-20px text-uppercase text-white fs-13 lh-42px fw-700 border-radius-100px bg-gradient-orange-sky-blue d-inline-block">Drop Us A Message</span>
                            <h3 class="text-dark-gray fw-800 ls-minus-1px mb-15px">Let's Discuss Your Next Big Idea</h3>
                            <p class="text-medium-gray fs-16 w-70 mx-auto">Fill out the form below and we'll get back to you within 24 hours. Every great project starts with a conversation.</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xxl-6 col-xl-7 col-lg-11">
                            <form id="contact-form" class="contact-form-style-03">
                                <div class="row justify-content-center" data-anime='{ "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <div class="col-md-6">
                                        <label for="txtUserName" class="form-label fw-600 text-dark-gray mb-0">Enter your name*</label>
                                        <div class="position-relative form-group mb-25px">
                                            <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>
                                            <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required" id="txtUserName" type="text" name="name" placeholder="What's your good name?" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="txtUserEmail" class="form-label fw-600 text-dark-gray mb-0">Email address*</label>
                                        <div class="position-relative form-group mb-25px">
                                            <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                            <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required" id="txtUserEmail" type="email" name="email" placeholder="Enter your email address" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="txtUserMobileNo" class="form-label fw-600 text-dark-gray mb-0">Phone number</label>
                                        <div class="position-relative form-group mb-25px">
                                            <span class="form-icon"><i class="bi bi-telephone"></i></span>
                                            <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control" id="txtUserMobileNo" type="tel" name="phone" placeholder="Enter your phone number" />
                                        </div>
                                    </div> 
                                    <div class="col-md-6">
                                        <label for="txtUserCompany" class="form-label fw-600 text-dark-gray mb-0">Company</label>
                                        <div class="position-relative form-group mb-25px">
                                            <span class="form-icon"><i class="bi bi-journals"></i></span>
                                            <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control" id="txtUserCompany" type="text" name="subject" placeholder="How can we help you?" />
                                        </div>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="txtUserMessage" class="form-label fw-600 text-dark-gray mb-0">Your message</label>
                                        <div class="position-relative form-group form-textarea mb-0"> 
                                            <textarea id="txtUserMessage" class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control" name="comment" placeholder="Describe about your project" rows="4"></textarea>
                                            <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-lg-7 col-md-8">
                                        <p class="mb-0 fs-14 lh-24 text-center text-md-start">We are committed to protecting your privacy. We will never collect information about you without your explicit consent.</p>
                                    </div>
                                    <div class="col-xxl-6 col-lg-5 col-md-4 text-center text-md-end sm-mt-25px">
                                        <input id="exampleInputEmail5" type="hidden" name="redirect" value="">
                                        <button class="btn btn-medium btn-dark-gray btn-box-shadow btn-round-edge text-transform-none primary-font submit" type="submit">Send message</button>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-results mt-20px d-none"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section> 
        <!-- start footer -->
        <?php include 'includes/footer.php'; ?>
        <!-- end footer -->
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