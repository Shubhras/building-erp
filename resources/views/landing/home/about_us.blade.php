@extends('landing.layouts.app')
@section('title')
    {{ __('messages.web_home.about_us') }}
@endsection
@section('page_css')
    {{--    <link href="{{asset('assets/css/landing/landing.css')}}" rel="stylesheet" type="text/css"/>--}}
{{--    <link href="{{mix('landing_front/css/about.css')}}" rel="stylesheet" type="text/css">--}}
    <link href="{{ asset('landing_front/css/jquery.toast.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paylio - Money Transfer and Online Payments HTML Template</title>

    <link rel="shortcut icon" href="assets2/images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets2/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets2/css/jquery-ui.css">
    <link rel="stylesheet" href="assets2/css/plugin/nice-select.css">
    <link rel="stylesheet" href="assets2/css/plugin/magnific-popup.css">
    <link rel="stylesheet" href="assets2/css/plugin/slick.css">
    <link rel="stylesheet" href="assets2/css/arafat-font.css">
    <link rel="stylesheet" href="assets2/css/plugin/animate.css">
    <link rel="stylesheet" href="assets2/css/style.css">
</head>

<body>
    <!-- start preloader -->
    <div class="preloader" id="preloader"></div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <a href="javascript:void(0)" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>
    <!-- Scroll To Top End -->

    <!-- header-section start -->
    <header class="header-section">
        <div class="overlay">
            <div class="container">
                <div class="row d-flex header-area">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/images/hms-saas-logo.png" class="logo" alt="logo">
                        </a>
                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbar-content">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbar-content">
                            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown main-navbar">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">Personal</a>
                                    <ul class="dropdown-menu main-menu shadow">
                                        <li><a class="nav-link" href="payments-01.html">Freelancer Payments</a></li>
                                        <li><a class="nav-link" href="subscriptions.html">Subscriptions</a></li>
                                        <li><a class="nav-link" href="security.html">Security</a></li>
                                        <li><a class="nav-link" href="fees.html">Fees</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown main-navbar">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">Business</a>
                                    <ul class="dropdown-menu main-menu shadow">
                                        <li><a class="nav-link" href="payments-01">Business Payments</a></li>
                                        <li><a class="nav-link" href="business-account.html">Business Account</a></li>
                                        <li><a class="nav-link" href="corporate-card.html">Corporate Card</a></li>
                                        <li><a class="nav-link" href="expense-management.html">Expense Management</a></li>
                                        <li><a class="nav-link" href="budgeting-and-analytics.html">Budgeting</a></li>
                                        <li><a class="nav-link" href="integrations.html">Integrations</a></li>
                                        <li><a class="nav-link" href="invoice-management.html">Invoice</a></li>
                                        <li><a class="nav-link" href="security.html">Security</a></li>
                                        <li><a class="nav-link" href="rewards.html">Rewards</a></li>
                                        <li><a class="nav-link" href="fees.html">Fees</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown main-navbar">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">Company</a>
                                    <ul class="dropdown-menu main-menu shadow">
                                        <li><a class="nav-link" href="about-us">About Us</a></li>
                                        <li><a class="nav-link" href="career">Career</a></li>
                                        <li><a class="nav-link" href="career-details">Career Details</a></li>
                                        <li class="dropend sub-navbar">
                                            <a href="javascript:void(0)" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                              data-bs-auto-close="outside">Blog</a>
                                            <ul class="dropdown-menu sub-menu shadow">
                                                <li><a class="nav-link" href="blog.html">Blog</a></li>
                                                <li><a class="nav-link" href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="nav-link" href="error.html">Error</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown main-navbar">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">Help</a>
                                    <ul class="dropdown-menu main-menu shadow">
                                        <li><a class="nav-link" href="help-center.html">Help Center</a></li>
                                        <li><a class="nav-link" href="help-center-category.html">Help Category</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="right-area header-action d-flex align-items-center max-un">
                                <a href="login" class="login">Login</a>
                                <a href="register" class="cmn-btn">Sign Up
                                    <i class="icon-d-right-arrow-2"></i>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->

    <!-- Banner Section start -->
    <section class="banner-section about-us">
        <div class="overlay">
            <div class="banner-content">
                <div class="container wow fadeInUp">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-10">
                            <div class="main-content text-center">
                                <div class="top-area section-text dark-sec">
                                    <h5 class="sub-title">Built for entrepreneurs, by entrepreneurs</h5>
                                    <h1 class="title">The platform built to help businesses achieve their ambitions faster</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-img-bottom pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="magnific-area d-flex align-items-center justify-content-around">
                            <div class="bg-area">
                                <img class="bg-item" src="assets2/images/about-popup.png" alt="image">
                            </div>
                            <a class="mfp-iframe popupvideo" href="https://www.youtube.com/watch?v=Djz8Nc0Qxwk">
                                <img src="assets2/images/icon/popup-icon.png" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="stars-info pt-120">
                    <div class="row justify-content-center justify-content-around">
                        <div class="col-sm-3">
                            <div class="single-box">
                                <div class="icon-box">
                                    <img src="assets2/images/icon/stats-info-icon-1.png" alt="icon">
                                </div>
                                <h5>2000+ employees & 100+ nationalities</h5>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-box">
                                <div class="icon-box">
                                    <img src="assets2/images/icon/stats-info-icon-2.png" alt="icon">
                                </div>
                                <h5>27+ offices around the world</h5>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-box">
                                <div class="icon-box">
                                    <img src="assets2/images/icon/stats-info-icon-3.png" alt="icon">
                                </div>
                                <h5>€303.6 BN billion in processed volume in 2020</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section end -->

    <!-- Our Values start -->
    <section class="our-values">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-header text-center">
                            <h5 class="sub-title">Our values</h5>
                            <h2 class="title">The values that drive everything we do</h2>
                            <p>Lorem ipsum dolor sit amet consectetur imp adipiscing elit justo aliquet elit sed</p>
                        </div>
                    </div>
                </div>
                <div class="row cus-mar align-items-center">
                    <div class="col-lg-6">
                        <div class="single-box d-flex">
                            <div class="img-box">
                                <img src="assets2/images/icon/values-icon-1.png" alt="icon">
                            </div>
                            <div class="text-box">
                                <h4>Innovation</h4>
                                <p>Lorem ipsum dolor sit amet consectetur imp adipiscing elit justo aliquet elit sed convallisolo neque aliquam elementum dolr.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-box d-flex">
                            <div class="img-box">
                                <img src="assets2/images/icon/values-icon-2.png" alt="icon">
                            </div>
                            <div class="text-box">
                                <h4>Accountability</h4>
                                <p>Lorem ipsum dolor sit amet consectetur imp adipiscing elit justo aliquet elit sed convallisolo neque aliquam elementum dolr.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-box d-flex">
                            <div class="img-box">
                                <img src="assets2/images/icon/values-icon-3.png" alt="icon">
                            </div>
                            <div class="text-box">
                                <h4>Commitment</h4>
                                <p>Lorem ipsum dolor sit amet consectetur imp adipiscing elit justo aliquet elit sed convallisolo neque aliquam elementum dolr.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-box d-flex">
                            <div class="img-box">
                                <img src="assets2/images/icon/values-icon-4.png" alt="icon">
                            </div>
                            <div class="text-box">
                                <h4>Team Work</h4>
                                <p>Lorem ipsum dolor sit amet consectetur imp adipiscing elit justo aliquet elit sed convallisolo neque aliquam elementum dolr.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Values end -->

    <!-- Our Team start -->
    <section class="our-team">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-header text-center">
                            <h5 class="sub-title">Our team</h5>
                            <h2 class="title">The amazing team behind our company</h2>
                            <p>We are a team of entrepreneurs, payment specialists and blockchain enthusiasts.</p>
                        </div>
                    </div>
                </div>
                <div class="row cus-mar align-items-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-box">
                            <div class="img-box">
                                <img src="assets/images/team-image-1.png" alt="image">
                            </div>
                            <div class="body-area">
                                <h5>Emily Ellis</h5>
                                <p class="designation">CEO & Co-founder</p>
                                <div class="social-link d-flex justify-content-center align-items-center">
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/facebook.png" alt="icon"></a>
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/linkedin.png" alt="icon"></a>
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/instagram.png" alt="icon"></a>
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/twitter.png" alt="icon"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-box">
                            <div class="img-box">
                                <img src="assets/images/team-image-2.png" alt="image">
                            </div>
                            <div class="body-area">
                                <h5>Leo Nunez</h5>
                                <p class="designation">VP of Product</p>
                                <div class="social-link d-flex justify-content-center align-items-center">
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/facebook.png" alt="icon"></a>
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/linkedin.png" alt="icon"></a>
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/instagram.png" alt="icon"></a>
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/twitter.png" alt="icon"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-box">
                            <div class="img-box">
                                <img src="assets/images/team-image-3.png" alt="image">
                            </div>
                            <div class="body-area">
                                <h5>Ken Moss</h5>
                                <p class="designation">Head of Marketing</p>
                                <div class="social-link d-flex justify-content-center align-items-center">
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/facebook.png" alt="icon"></a>
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/linkedin.png" alt="icon"></a>
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/instagram.png" alt="icon"></a>
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/twitter.png" alt="icon"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-box">
                            <div class="img-box">
                                <img src="assets/images/team-image-4.png" alt="image">
                            </div>
                            <div class="body-area">
                                <h5>Teri Wise</h5>
                                <p class="designation">Creative Director</p>
                                <div class="social-link d-flex justify-content-center align-items-center">
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/facebook.png" alt="icon"></a>
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/linkedin.png" alt="icon"></a>
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/instagram.png" alt="icon"></a>
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/twitter.png" alt="icon"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-box">
                            <div class="img-box">
                                <img src="assets/images/team-image-5.png" alt="image">
                            </div>
                            <div class="body-area">
                                <h5>Billy Roy</h5>
                                <p class="designation">VP of Infrastructure</p>
                                <div class="social-link d-flex justify-content-center align-items-center">
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/facebook.png" alt="icon"></a>
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/linkedin.png" alt="icon"></a>
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/instagram.png" alt="icon"></a>
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/twitter.png" alt="icon"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-box">
                            <div class="img-box">
                                <img src="assets/images/team-image-6.png" alt="image">
                            </div>
                            <div class="body-area">
                                <h5>Emily Ellis</h5>
                                <p class="designation">CEO & Co-founder</p>
                                <div class="social-link d-flex justify-content-center align-items-center">
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/facebook.png" alt="icon"></a>
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/linkedin.png" alt="icon"></a>
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/instagram.png" alt="icon"></a>
                                    <a href="javascript:void(0)"><img src="assets2/images/icon/twitter.png" alt="icon"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Team end -->

    <!-- Location start -->
    <section class="location">
        <div class="overlay pb-120">
            <div class="container wow fadeInUp">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8">
                        <div class="section-header text-center">
                            <h5 class="sub-title">Our offices</h5>
                            <h2 class="title">Come and visit our offices around the world</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit diam malesuada nisl enim phasellus condimentum.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center cus-mar">
                    <div class="col-xl-4 col-md-6">
                        <div class="single-box">
                            <div class="head-area d-flex align-items-center">
                                <div class="img-box">
                                    <img src="assets2/images/icon/location-icon-1.png" alt="image">
                                </div>
                                <h4>San Francisco</h4>
                            </div>
                            <div class="email-phone">
                                <div class="img-box">
                                    <img src="assets2/images/icon/email-icon-1.png" alt="icon">
                                </div>
                                <p>sanfrancisco@paylio.com</p>
                            </div>
                            <div class="email-phone">
                                <div class="img-box">
                                    <img src="assets2/images/icon/phone-icon-1.png" alt="icon">
                                </div>
                                <p>415) 931 - 1616</p>
                            </div>
                            <div class="bottom-area">
                                <a href="javascript:void(0)">
                                    View Location
                                    <img src="assets2/images/icon/arrow-right-4.png" alt="icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="single-box">
                            <div class="head-area d-flex align-items-center">
                                <div class="img-box">
                                    <img src="assets2/images/icon/location-icon-2.png" alt="image">
                                </div>
                                <h4>New York</h4>
                            </div>
                            <div class="email-phone">
                                <div class="img-box">
                                    <img src="assets2/images/icon/email-icon-2.png" alt="icon">
                                </div>
                                <p>newyork@paylio.com</p>
                            </div>
                            <div class="email-phone">
                                <div class="img-box">
                                    <img src="assets2/images/icon/phone-icon-2.png" alt="icon">
                                </div>
                                <p>415) 931 - 1616</p>
                            </div>
                            <div class="bottom-area">
                                <a href="javascript:void(0)">
                                    View Location
                                    <img src="assets2/images/icon/arrow-right-4.png" alt="icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="single-box">
                            <div class="head-area d-flex align-items-center">
                                <div class="img-box">
                                    <img src="assets2/images/icon/location-icon-3.png" alt="image">
                                </div>
                                <h4>San Francisco</h4>
                            </div>
                            <div class="email-phone">
                                <div class="img-box">
                                    <img src="assets2/images/icon/email-icon-3.png" alt="icon">
                                </div>
                                <p>london@paylio.com</p>
                            </div>
                            <div class="email-phone">
                                <div class="img-box">
                                    <img src="assets2/images/icon/phone-icon-3.png" alt="icon">
                                </div>
                                <p>415) 931 - 1616</p>
                            </div>
                            <div class="bottom-area">
                                <a href="javascript:void(0)">
                                    View Location
                                    <img src="assets2/images/icon/arrow-right-4.png" alt="icon">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Location end -->

    <!-- Footer Area Start -->
    <footer class="footer-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="newsletter">
                        <div class="section-area mb-30 dark-sec text-center">
                            <h3 class="title">Subscribe to Our Newsletter</h3>
                        </div>
                        <form action="#">
                            <div class="form-group d-flex align-items-center">
                                <input type="text" placeholder="Your Email Address">
                                <button><img src="assets/images/icon/arrow-right-2.png" alt="icon"></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-area pt-120">
                <div class="footer-top">
                    <div class="row align-items-center">
                        <div class="col-sm-6 d-flex justify-content-center justify-content-sm-start">
                            <div class="menu-item">
                                <ul class="footer-link d-flex align-items-center">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="help-center.html">Support</a></li>
                                    <li><a href="fees.html">Fees</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-link d-flex justify-content-sm-end justify-content-center align-items-center">
                                <a href="javascript:void(0)"><img src="assets2/images/icon/facebook.png" alt="icon"></a>
                                <a href="javascript:void(0)"><img src="assets2/images/icon/linkedin.png" alt="icon"></a>
                                <a href="javascript:void(0)"><img src="assets2/images/icon/instagram.png" alt="icon"></a>
                                <a href="javascript:void(0)"><img src="assets2/images/icon/twitter.png" alt="icon"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-6 col-sm-8 d-flex justify-content-center justify-content-sm-start order-sm-0 order-1">
                            <div class="copyright text-center text-sm-start">
                                <p> Copyright © 2022 <a href="index.html">Paylio.</a> All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-4">
                            <div class="menu-item">
                                <ul class="footer-link d-flex justify-content-sm-end justify-content-center align-items-center">
                                    <li><a href="terms-conditions.html">Terms</a></li>
                                    <li><a href="privacy-policy.html">Privacy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!--==================================================================-->
    <script src="assets2/js/jquery.min.js"></script>
    <script src="assets2/js/jquery-ui.js"></script>
    <script src="assets2/js/bootstrap.min.js"></script>
    <script src="assets2/js/fontawesome.js"></script>
    <script src="assets2/js/plugin/slick.js"></script>
    <script src="assets2/js/plugin/jquery.nice-select.min.js"></script>
    <script src="assets2/js/plugin/counter.js"></script>
    <script src="assets2/js/plugin/waypoint.min.js"></script>
    <script src="assets2/js/plugin/jquery.magnific-popup.min.js"></script>
    <script src="assets2/js/plugin/wow.min.js"></script>
    <script src="assets2/js/plugin/plugin.js"></script>
    <script src="assets2/js/main.js"></script>
</body>

</html>

<!-- old code about start -->

    {{-- <div class="about-page ">
        <!-- start hero section -->
        <section class="hero-section pt-120 bg-light ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-lg-start text-center mb-lg-0 mb-md-5 mb-sm-4 mb-3">
                        <div class="hero-content ">
                            <h1 class="mb-0">
                                {{ __('messages.web_home.about_us') }}
                            </h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-lg-start justify-content-center  mb-lg-0 pb-lg-4 ">
                                    <li class="breadcrumb-item "><a href="{{ route('landing-home') }}"
                                                                    class="fs-18">{{ __('messages.web_home.home') }} </a>
                                    </li>
                                    <li class="breadcrumb-item text-cyan fs-18"
                                        aria-current="page">{{ __('messages.web_home.about_us') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-end text-center">
                        <img src="{{asset('landing_front/images/about-hero-img.png')}}" alt="HMS-Sass"
                             class="img-fluid"/>
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero section -->

        <!--start work-section -->
        <section class="work-section py-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-heading ">
                            <h2>{{ $landingAboutUs['text_main'] }}</h2>
                        </div>
                    </div>
                </div>
                <div class="work-content">
                    <div class="row">
                        <div class="col-md-4 text-center mb-md-0 mb-2">
                            <span class="text-cyan bg-white text-center fs-64">
                                <img src="{{ isset($landingAboutUs['card_img_one']) ? asset($landingAboutUs['card_img_one']) : '' }}"
                                     alt="" width="40" height="40">
                            </span>
                            <h3>{{ $landingAboutUs['card_one_text'] }}</h3>
                            <p>{!! $landingAboutUs['card_one_text_secondary'] !!}</p>
                        </div>
                        <div class="col-md-4 text-center mb-md-0 mb-2">
                            <span class="text-cyan bg-white text-center fs-64">
                                  <img src="{{ isset($landingAboutUs['card_img_two']) ? asset($landingAboutUs['card_img_two']) : '' }}"
                                       alt="" width="40" height="40">
                            </span>
                            <h3>{{ $landingAboutUs['card_two_text'] }}</h3>
                            <p>{!! $landingAboutUs['card_two_text_secondary']  !!}</p>
                        </div>
                        <div class="col-md-4 text-center ">
                            <span class="text-cyan bg-white text-center fs-64">
                                <img src="{{ isset($landingAboutUs['card_img_three']) ? asset($landingAboutUs['card_img_three']) : '' }}"
                                     alt="" width="40" height="40">
                            </span>
                            <h3>{{ $landingAboutUs['card_three_text'] }}</h3>
                            <p>{!! $landingAboutUs['card_three_text_secondary'] !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end work-section -->

        <!-- start-about-section -->
        <section class="about-section bg-light py-120">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-8 col-md-12">
                        <div class="row justify-content-between ">
                            <div class=" col-md-6 about-content-block mb-4 ">
                                <div class="about-content bg-white py-20 h-100">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-md-3 col-sm-2 col-3">
                                            <img class="card-img"
                                                 src="{{ isset($sectionFour['img_url_one']) ? asset($sectionFour['img_url_one']) : asset('landing_front/images/seo.png') }}"
                                                 alt="built-seo">
                                        </div>
                                        <div class="col-md-9 col-sm-10 ">
                                            <div class="card-body p-0">
                                                <h3 class="mt-sm-0 mt-3">{{ $sectionFour['card_text_one'] }}</h3>
                                                <p class="fs-14">{!! $sectionFour['card_text_one_secondary'] !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 about-content-block mb-4">
                                <div class="about-content bg-white py-20  h-100">
                                    <div class="row justify-content-between align-items-center">
                                        <div class=" col-md-3 col-sm-2 col-3">
                                            <img class="card-img"
                                                 src="{{ isset($sectionFour['img_url_two']) ? asset($sectionFour['img_url_two']) : asset('landing_front/images/profile.png') }}"
                                                 alt="hospital-profile">
                                        </div>
                                        <div class="col-md-9 col-sm-10">
                                            <div class="card-body p-0">
                                                <h3 class="mt-sm-0 mt-3">{{ $sectionFour['card_text_two'] }}</h3>
                                                <p class="fs-14">{!! $sectionFour['card_text_two_secondary'] !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 about-content-block mb-lg-0 mb-4">
                                <div class="about-content bg-white py-20 h-100">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-md-3 col-sm-2 col-3">
                                            <img class="card-img"
                                                 src="{{ isset($sectionFour['img_url_three']) ? asset($sectionFour['img_url_three']) : asset('landing_front/images/online.png') }}"
                                                 alt="online-appointment">
                                        </div>
                                        <div class=" col-md-9 col-sm-10">
                                            <div class="card-body p-0">
                                                <h3 class="mt-sm-0 mt-3">{{ $sectionFour['card_text_three'] }}</h3>
                                                <p class="fs-14">{!! $sectionFour['card_text_three_secondary'] !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 about-content-block mb-lg-0 mb-4">
                                <div class="about-content bg-white py-20 h-100">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-md-3 col-sm-2 col-3">
                                            <img class="card-img w-75"
                                                 src="{{ isset($sectionFour['img_url_four']) ? asset($sectionFour['img_url_four']) : asset('landing_front/images/articles.png') }}"
                                                 alt="articles">
                                        </div>
                                        <div class="col-md-9 col-sm-10">
                                            <div class="card-body p-0">
                                                <h3 class="mt-sm-0 mt-3">{{ $sectionFour['card_text_four'] }}</h3>
                                                <p class="fs-14">{!! $sectionFour['card_text_four_secondary'] !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  text-lg-end text-center mt-lg-0 mt-5">
                        <img src="{{ isset($landingAboutUs['main_img_one']) ? asset($landingAboutUs['main_img_one']) : asset('landing_front/images/about.png') }}"
                             alt="HMS-Sass-about" class="img-fluid"/>
                    </div>

                </div>
            </div>
        </section>
        <!-- end-about-section -->
--}}
        <!-- start-service-section -->
  {{--   @include('landing.home.count_section') --}}
    <!-- end-service-section -->

        <!-- start-question-section -->
 {{--        <section class="question-section py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <img src="{{ isset($landingAboutUs['main_img_two']) ? ($landingAboutUs['main_img_two']) : asset('landing_front/images/about-question.png') }}"
                             alt="about-question" class="img-fluid"/>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion mt-60" id="accordionExample">
                            @foreach($faqs as $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-{{$faq->id}}">
                                        <button class="accordion-button {{$loop->first ? '' : 'collapsed'}} fs-18 p-lg-4 p-sm-3"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{$faq->id}}"
                                                aria-expanded="{{$loop->first ? 'true' : 'false'}}"
                                                aria-controls="#collapse{{$faq->id}}">
                                            {{$faq->question}}
                                        </button>
                                    </h2>
                                    <div id="collapse{{$faq->id}}"
                                         class="accordion-collapse collapse {{$loop->first ? 'show' : ''}}"
                                         aria-labelledby="heading-{{$faq->id}}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body panel">
                                            <p class="fs-14">{!! $faq->answer !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        --}}
        <!-- end-question-section -->

        <!-- start-plan-section -->
  {{--   @if(getLoggedInUser() == null || !getLoggedInUser()->hasRole('Super Admin')) --}}
        <!-- start-plan-section -->
{{--         @include('landing.home.pricing_plan_page', ['screenFrom' => Route::currentRouteName()]) --}}

  {{--    @endif --}}
    <!-- end-plan-section -->

        <!-- start subscribe-section -->
   {{--  @include('landing.home.subscribe_section') --}}
    <!-- end subscribe-section -->
        
 {{--         {{ Form::hidden('getLoggedInUserdata', getLoggedInUser(), ['class' => 'getLoggedInUser']) }}
        {{ Form::hidden('logInUrl', url('login'), ['class' => 'logInUrl']) }}
        {{ Form::hidden('fromPricing', true, ['class' => 'fromPricing']) }}
        {{ Form::hidden('makePaymentURL', route('purchase-subscription'), ['class' => 'makePaymentURL']) }}
        {{ Form::hidden('subscribeText', __('messages.subscription_pricing_plans.choose_plan'), ['class' => 'subscribeText']) }}
        {{ Form::hidden('toastData', json_encode(session('toast-data')), ['class' => 'toastData']) }}
    
    </div> --}}

@endsection
@section('page_scripts')
{{--    <script src="{{ asset('landing_front/js/jquery.toast.min.js') }}"></script>--}}
@endsection
@section('scripts')
{{--    <script src="//js.stripe.com/v3/"></script>--}}
    <script>
        {{--let getLoggedInUserdata = "{{ getLoggedInUser() }}"--}}
        {{--let logInUrl = "{{ url('login') }}"--}}
        {{--let fromPricing = true--}}
        {{--let makePaymentURL = "{{ route('purchase-subscription') }}"--}}
        {{--let subscribeText = "{{ __('messages.subscription_pricing_plans.choose_plan') }}"--}}
{{--        let toastData = JSON.parse('@json(session('toast-data'))')--}}
    </script>
    {{--    <script src="{{ mix('assets/js/subscriptions/free-subscription.js') }}"></script>--}}
    {{--    <script src="{{ mix('assets/js/subscriptions/payment-message.js') }}"></script>--}}
@endsection
