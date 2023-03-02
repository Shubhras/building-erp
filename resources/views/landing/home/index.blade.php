@extends('landing.layouts.app')
@section('title')
    {{ __('messages.web_home.home') }}
@endsection
@section('page_css')
    {{--    <link href="{{asset('assets/css/landing/landing.css')}}" rel="stylesheet" type="text/css"/>--}}
{{--    <link href="{{mix('landing_front/css/home.css')}}" rel="stylesheet" type="text/css">--}}
  {{--   <link href="{{ asset('landing_front/css/jquery.toast.min.css') }}" rel="stylesheet" type="text/css"/> --}}
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
    <header class="header-section" style="padding-top:0px; padding-bottom:0px;">
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
                                        <li><a class="nav-link" href="payments-01.html">Business Payments</a></li>
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
                                        <li><a class="nav-link" href="error">Error</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown main-navbar">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">Help</a>
                                    <ul class="dropdown-menu main-menu shadow">
                                        <li><a class="nav-link" href="help-center">Help Center</a></li>
                                        <li><a class="nav-link" href="help-center-category">Help Category</a></li>
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
    <section class="banner-section index">
        <div class="overlay">
            <div class="shape-area">
                <img src="assets2/images/banner-box.png" class="obj-1" alt="image">
                <img src="assets2/images/banner-human.png" class="obj-2" alt="image">
                <img src="assets2/images/banner-rocket.png" class="obj-3" alt="image">
                <img src="assets2/images/banner-clock.png" class="obj-4" alt="image">
            </div>
            <div class="banner-content">
                <div class="container wow fadeInUp">
                    <div class="content-shape">
                        <img src="assets2/images/banner-wallet.png" class="obj-1" alt="image">
                    </div>
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="main-content">
                                <div class="top-area section-text">
                                    <h5 class="sub-title">Trusted by over 3M customers</h5>
                                    <h1 class="title">Pay Anyone, Anywhere</h1>
                                    <p class="xlr">Quickly and easily send, receive and request money online with Paylio. Get a customised solution to fit your business needs.</p>
                                </div>
                                <div class="bottom-area d-xxl-flex">
                                    <a href="register" class="cmn-btn">Open a Free Account</a>
                                    <a class="cmn-btn active mfp-iframe popupvideo" href="https://www.youtube.com/watch?v=Djz8Nc0Qxwk">See How it Works</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-5 col-md-6">
                            <div class="send-money">
                                <form action="#">
                                    <div class="currency-area">
                                        <div class="left-side">
                                            <span class="mdr">You send</span>
                                            <input type="text" class="xlr" placeholder="Enter Amount" value="1000">
                                        </div>
                                        <div class="right-side">
                                            <select>
                                                <option value="1">USD</option>
                                                <option value="2">GBP</option>
                                                <option value="3">AUS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="calculation">
                                        <div class="head-area">
                                            <img src="assets2/images/icon/conversion.png" alt="image">
                                            <span class="mdr highlight">Show calculation</span>    
                                        </div>
                                        <div class="calculation-details">
                                            <div class="single-area d-flex align-items-center">
                                                <div class="left-area">
                                                    <i class="fas fa-minus"></i>
                                                    <span class="mdr">10.04 USD</span>
                                                </div>
                                                <div class="right-area">
                                                    <span class="mdr">Our fee</span>
                                                </div>
                                            </div>
                                            <div class="single-area d-flex align-items-center">
                                                <div class="left-area">
                                                    <i class="fas fa-equals"></i>
                                                    <span class="mdr">989.96 USD</span>
                                                </div>
                                                <div class="right-area">
                                                    <span class="mdr">We’ll Convert</span>
                                                </div>
                                            </div>
                                            <div class="single-area d-flex align-items-center">
                                                <div class="left-area">
                                                    <i class="fas fa-times"></i>
                                                    <span class="mdr">1.3947</span>
                                                </div>
                                                <div class="right-area">
                                                    <span class="mdr highlight">Paylio Rate</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="currency-area">
                                        <div class="left-side">
                                            <span class="mdr">Recipient gets</span>
                                            <h5>1,380.69</h5>
                                        </div>
                                        <div class="right-side recipient">
                                            <select>
                                                <option value="1">AUS</option>
                                                <option value="2">USD</option>
                                                <option value="3">GBP</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="btn-area mt-40">
                                        <a href="javascript:void(0)" class="cmn-btn w-100">Get Started</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="counter-section">
            <div class="container wow fadeInUp">
                <div class="row cus-mar">
                    <div class="col-xl-3 col-md-3 col-sm-6">
                        <div class="single-area d-flex align-items-center justify-content-center">
                            <div class="text-area text-center">
                                <h2><span class="counter">50</span><span>+</span></h2>
                                <p>Supported Currencies</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 col-sm-6">
                        <div class="single-area d-flex align-items-center justify-content-center">
                            <div class="text-area text-center">
                                <h2><span class="counter">100</span><span>+</span></h2>
                                <p>Available Countries</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 col-sm-6">
                        <div class="single-area d-flex align-items-center justify-content-center">
                            <div class="text-area text-center">
                                <h2><span class="counter">70</span><span>+</span></h2>
                                <p>Payment Methods</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 col-sm-6">
                        <div class="single-area d-flex align-items-center justify-content-center">
                            <div class="text-area text-center">
                                <h2><span class="counter">7</span><span>/</span><span class="counter">24</span><span>+</span></h2>
                                <p>Support Team</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section end -->

    <!-- Global Payment start -->
    <section class="global-payment">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-header text-center">
                            <h5 class="sub-title">Send money in a heartbeat</h5>
                            <h2 class="title">The World At Your Fingertips</h2>
                            <p>Sign up to start saving on international money transfers and currency exchange.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-6 col-xl-5 order-xl-0 order-1">
                        <div class="image-area d-rtl left-side">
                            <img src="assets2/images/global-payment-img.png" alt="images" class="max-un">
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-7">
                        <div class="row cus-mar">
                            <div class="col-sm-6 col-6">
                                <div class="single-item">
                                    <img src="assets2/images/icon/global-payment-icon-1.png" alt="icon">
                                    <h5>Peace of Mind</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit posuere vel venenatis, eu sit massa. Volutpat massa rhoncus odio.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-6">
                                <div class="single-item">
                                    <img src="assets2/images/icon/global-payment-icon-2.png" alt="icon">
                                    <h5>Business-Ready</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit posuere vel venenatis, eu sit massa. Volutpat massa rhoncus odio.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-6">
                                <div class="single-item">
                                    <img src="assets2/images/icon/global-payment-icon-3.png" alt="icon">
                                    <h5>100% Transparent</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit posuere vel venenatis, eu sit massa. Volutpat massa rhoncus odio.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-6">
                                <div class="single-item">
                                    <img src="assets2/images/icon/global-payment-icon-4.png" alt="icon">
                                    <h5>International Network</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit posuere vel venenatis, eu sit massa. Volutpat massa rhoncus odio.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Global Payment end -->

    <!-- Our Solutions start -->
    <section class="our-solutions">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-header dark-sec text-center">
                            <h5 class="sub-title">High speeds. Low fees. No hassle.</h5>
                            <h2 class="title">All Your Payments In One Place</h2>
                            <p>Get used to low fees and great exchange rates on international money transfers.Expand your business worldwide</p>
                        </div>
                    </div>
                </div>
                <div class="row cus-mar">
                    <div class="col-xl-3 col-6">
                        <div class="single-item">
                            <img src="assets2/images/icon/our-solutions-icon-1.png" alt="icon">
                            <h5>Payments</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6">
                        <div class="single-item">
                            <img src="assets2/images/icon/our-solutions-icon-2.png" alt="icon">
                            <h5>Collections</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6">
                        <div class="single-item">
                            <img src="assets2/images/icon/our-solutions-icon-3.png" alt="icon">
                            <h5>Conversions</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6">
                        <div class="single-item">
                            <img src="assets2/images/icon/our-solutions-icon-4.png" alt="icon">
                            <h5>Global Account</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Solutions end -->

    <!-- How it Works start -->
    <section class="how-it-works">
        <div class="overlay pb-120">
            <div class="container wow fadeInUp">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-header text-center">
                            <h5 class="sub-title">How it works?</h5>
                            <h2 class="title">Just few steps to start</h2>
                            <p>It's easier than you think. Follow 3 simple easy steps</p>
                        </div>
                    </div>
                </div>
                <div class="row cus-mar">
                    <div class="col-xl-3 col-sm-6 col-6">
                        <div class="single-item first text-center">
                            <img src="assets2/images/icon/how-works-icon-1.png" alt="icon">
                            <h5>Register for free</h5>
                            <p>Simply sign up online for free and verify your identity</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-6">
                        <div class="single-item second text-center">
                            <img src="assets2/images/icon/how-works-icon-2.png" alt="icon">
                            <h5>Set up your transfer</h5>
                            <p>Add a recipient's details and choose which currency ...</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-6">
                        <div class="single-item first text-center">
                            <img src="assets/images/icon/how-works-icon-3.png" alt="icon">
                            <h5>Make your payment</h5>
                            <p>Send us your funds with a bank transfer and we'll notify..</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-6">
                        <div class="single-item text-center">
                            <img src="assets2/images/icon/how-works-icon-4.png" alt="icon">
                            <h5>You're all done!</h5>
                            <p>We inform you when the money has been sent and can also ...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How it Works end -->

    <!-- App Download start -->
    <section class="app-download">
        <div class="overlay pb-120">
            <div class="container wow fadeInUp">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 order-lg-0 order-1">
                        <div class="image-area d-rtl left-side">
                            <img src="assets2/images/app-download-img.png" alt="images" class="max-un">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="section-area">
                            <h5 class="sub-title">App Download</h5>
                            <h2 class="title">Fast, Secure Money Transfers</h2>
                            <p>Access your account via your mobile phone. View balance, transfer funds, view transactions wherever you are.</p>
                        </div>
                        <ul class="features">
                            <li>
                                <img src="assets2/images/icon/check.png" alt="icon">
                                Login with fingerprint or Face ID.
                            </li>
                            <li>
                                <img src="assets2/images/icon/check.png" alt="icon">
                                Simple few Taps to send money
                            </li>
                            <li>
                                <img src="assets/images/icon/check.png" alt="icon">
                                View transaction history.
                            </li>
                            <li>
                                <img src="assets2/images/icon/check.png" alt="icon">
                                Get instant App notifications.
                            </li>
                        </ul>
                        <div class="brand-area mt-40">
                            <a href="javascript:void(0)">
                                <img src="assets2/images/GooglePlay-btn.png" alt="icon">
                            </a>
                            <a href="javascript:void(0)">
                                <img src="assets2/images/apple-btn.png" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- App Download end -->

    <!-- Testimonials start -->
    <section class="testimonials">
        <div class="overlay pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-header text-center">
                            <h5 class="sub-title">Testimonials</h5>
                            <h2 class="title">What Our Customers Say</h2>
                            <p>245m+ happy clients all around the world. Don’t just take our word for it</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid wow fadeInUp">
                <div class="testimonials-carousel">
                    <div class="single-slide">
                        <div class="single-content">
                            <div class="start-area">
                                <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                            </div>
                            <h5 class="title-area">Great Fast Reliable Service</h5>
                            <p class="xlr">"Paylio has always been a reliable solution for my business. I am very satisfied with their speedy service and professional customer care. I highly recommend Paylio to businesses with regular overseas payments."</p>
                            <div class="profile-area d-flex align-items-center">
                                <div class="icon-area">
                                    <img src="assets2/images/testimonials-img-1.png" alt="icon">
                                </div>
                                <div class="text-area">
                                    <h5>Aspen Press</h5>
                                    <p>Web Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="single-content">
                            <div class="start-area">
                                <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                            </div>
                            <h5 class="title-area">Great Fast Reliable Service</h5>
                            <p class="xlr">"Paylio has always been a reliable solution for my business. I am very satisfied with their speedy service and professional customer care. I highly recommend Paylio to businesses with regular overseas payments."</p>
                            <div class="profile-area d-flex align-items-center">
                                <div class="icon-area">
                                    <img src="assets2/images/testimonials-img-2.png" alt="icon">
                                </div>
                                <div class="text-area">
                                    <h5>Courtney Henry</h5>
                                    <p>Balance Studio</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="single-content">
                            <div class="start-area">
                                <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                            </div>
                            <h5 class="title-area">Great Fast Reliable Service</h5>
                            <p class="xlr">"Paylio has always been a reliable solution for my business. I am very satisfied with their speedy service and professional customer care. I highly recommend Paylio to businesses with regular overseas payments."</p>
                            <div class="profile-area d-flex align-items-center">
                                <div class="icon-area">
                                    <img src="assets2/images/testimonials-img-3.png" alt="icon">
                                </div>
                                <div class="text-area">
                                    <h5>Paul Howell</h5>
                                    <p>President of Sales</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="single-content">
                            <div class="start-area">
                                <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                            </div>
                            <h5 class="title-area">Great Fast Reliable Service</h5>
                            <p class="xlr">"Paylio has always been a reliable solution for my business. I am very satisfied with their speedy service and professional customer care. I highly recommend Paylio to businesses with regular overseas payments."</p>
                            <div class="profile-area d-flex align-items-center">
                                <div class="icon-area">
                                    <img src="assets2/images/testimonials-img-2.png" alt="icon">
                                </div>
                                <div class="text-area">
                                    <h5>Courtney Henry</h5>
                                    <p>Balance Studio</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- App Download end -->

    <!-- FAQs In start -->
    <section class="faqs-section">
        <div class="overlay pt-120 pb-120">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-header text-center">
                            <h5 class="sub-title">Frequently Asked Questions</h5>
                            <h2 class="title">If you got questions we have answer</h2>
                            <p>We have a list of frequently asked questions about us</p>
                        </div>
                    </div>
                </div>
                <div class="row cus-mar">
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionLeft">
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="headingLeftOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseLeftOne"
                                        aria-expanded="false" aria-controls="collapseLeftOne">
                                        How to send money online?
                                    </button>
                                </h6>
                                <div id="collapseLeftOne" class="accordion-collapse collapse"
                                    aria-labelledby="headingLeftOne" data-bs-parent="#accordionLeft">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit posuere vel venenatis, eu sit massa. Volutpat massa rhoncus odio feugiat tellus elit massa sed ullamcorper a in.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="headingLeftTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseLeftTwo"
                                        aria-expanded="false" aria-controls="collapseLeftTwo">
                                        How much are money transfer fees?
                                    </button>
                                </h6>
                                <div id="collapseLeftTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingLeftTwo" data-bs-parent="#accordionLeft">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit posuere vel venenatis, eu sit massa. Volutpat massa rhoncus odio feugiat tellus elit massa sed ullamcorper a in.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="headingLeftThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseLeftThree"
                                        aria-expanded="false" aria-controls="collapseLeftThree">
                                        What is the fastest way to send money abroad?
                                    </button>
                                </h6>
                                <div id="collapseLeftThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingLeftThree" data-bs-parent="#accordionLeft">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit posuere vel venenatis, eu sit massa. Volutpat massa rhoncus odio feugiat tellus elit massa sed ullamcorper a in.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="headingLeftFour">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseLeftFour"
                                        aria-expanded="false" aria-controls="collapseLeftFour">
                                        How to use Paylio?
                                    </button>
                                </h6>
                                <div id="collapseLeftFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingLeftFour" data-bs-parent="#accordionLeft">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit posuere vel venenatis, eu sit massa. Volutpat massa rhoncus odio feugiat tellus elit massa sed ullamcorper a in.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="headingLeftFive">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseLeftFive"
                                        aria-expanded="false" aria-controls="collapseLeftFive">
                                        How does Paylio protect your money?
                                    </button>
                                </h6>
                                <div id="collapseLeftFive" class="accordion-collapse collapse"
                                    aria-labelledby="headingLeftFive" data-bs-parent="#accordionLeft">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit posuere vel venenatis, eu sit massa. Volutpat massa rhoncus odio feugiat tellus elit massa sed ullamcorper a in.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionRight">
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="headingRightOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseRightOne"
                                        aria-expanded="false" aria-controls="collapseRightOne">
                                        Are money transfer apps safe?
                                    </button>
                                </h6>
                                <div id="collapseRightOne" class="accordion-collapse collapse"
                                    aria-labelledby="headingRightOne" data-bs-parent="#accordionRight">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit posuere vel venenatis, eu sit massa. Volutpat massa rhoncus odio feugiat tellus elit massa sed ullamcorper a in.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="headingRightTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseRightTwo"
                                        aria-expanded="false" aria-controls="collapseRightTwo">
                                        How much money can I send?
                                    </button>
                                </h6>
                                <div id="collapseRightTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingRightTwo" data-bs-parent="#accordionRight">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit posuere vel venenatis, eu sit massa. Volutpat massa rhoncus odio feugiat tellus elit massa sed ullamcorper a in.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="headingRightThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseRightThree"
                                        aria-expanded="false" aria-controls="collapseRightThree">
                                        Which currency can I send?
                                    </button>
                                </h6>
                                <div id="collapseRightThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingRightThree" data-bs-parent="#accordionRight">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit posuere vel venenatis, eu sit massa. Volutpat massa rhoncus odio feugiat tellus elit massa sed ullamcorper a in.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="headingRightFour">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseRightFour"
                                        aria-expanded="false" aria-controls="collapseRightFour">
                                        Cancel transaction
                                    </button>
                                </h6>
                                <div id="collapseRightFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingRightFour" data-bs-parent="#accordionRight">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit posuere vel venenatis, eu sit massa. Volutpat massa rhoncus odio feugiat tellus elit massa sed ullamcorper a in.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="headingRightFive">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseRightFive"
                                        aria-expanded="false" aria-controls="collapseRightFive">
                                        Can I send multiple payments?
                                    </button>
                                </h6>
                                <div id="collapseRightFive" class="accordion-collapse collapse"
                                    aria-labelledby="headingRightFive" data-bs-parent="#accordionRight">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit posuere vel venenatis, eu sit massa. Volutpat massa rhoncus odio feugiat tellus elit massa sed ullamcorper a in.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQs In end -->

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
                                <button><img src="assets2/images/icon/arrow-right-2.png" alt="icon"></button>
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
                                    <li><a href="about-us">About Us</a></li>
                                    <li><a href="help-center">Support</a></li>
                                    <li><a href="fees">Fees</a></li>
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


{{-- old Code Home start --}}

  {{--   <div class="home-page ">
        <!-- start banner section -->
        <section class="banner-section bg-light py-100" id="home">
            <div class="container">
                <div class="row align-items-center flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 text-lg-start text-center">
                        <div class="banner-content mt-lg-0 mt-sm-5 mt-4 pe-lg-4">
                            <h1 class="mb-md-3 mb-2"> {{ $sectionOne['text_main'] }} </h1>
                            @if(!getLoggedInUser())
                                <p class="mb-md-5 mb-4"> {{ $sectionOne['text_secondary'] }}</p>
                            @endif
                            <div class="d-flex align-items-center justify-content-center justify-content-lg-start">
                                @if(!getLoggedInUser())
                                    <a href="{{ route('register') }}" data-turbo="false"
                                       class="btn btn-primary me-3">{{ __('messages.web_home.sign_up') }}</a>
                                @endif
                                <a href="{{ route('landing.contact.us') }}"
                                   class="btn btn-secondary ms-1">{{ __('messages.contact_us') }}</a>
                            </div>
                            <span class="ps-xl-2 mb-3 mb-lg-0 d-lg-block mt-3 d-none">{{ __('messages.landing.call') }} :
                                    <a href="tel:{{$settingValue['phone']['value']}}"
                                       class="text-decoration-none text-primary">
                                        {{$settingValue['phone']['value']}}
                                    </a>
                                </span>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-end text-center">
                        <img src="{{ isset($sectionOne['img_url']) ? asset($sectionOne['img_url']) : asset('landing_front/images/hospital.png') }}" alt="manage hospital"
                             class="img-fluid"/>
                    </div>
                </div>
            </div>
        </section>
        <!-- end banner section -->

        <!-- start protect-health section -->
        <section class="health-section pt-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-heading">
                            <h2 class="mb-3">{{ $sectionTwo['text_main'] }}</h2>
                            <p class="mb-0">{{ $sectionTwo['text_secondary'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="protect-health">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-md-6 my-xl-0 py-xl-0 my-2 py-1">
                            <div class="card">
                                <div class="row justify-content-md-between justify-content-center text-center text-sm-start">
                                    <div class=" col-md-4 col-sm-3 col-4">
                                        <img class="card-img home-section-two-img"
                                             src="{{ isset($sectionTwo['card_one_image']) ? asset($sectionTwo['card_one_image']) : asset('landing_front/images/schedule.png')}}"
                                             alt="schedule appointment">
                                    </div>
                                    <div class="col-md-8 col-sm-9">
                                        <div class="card-body p-0">
                                            <h3 class="mt-sm-0 mt-3">{{ $sectionTwo['card_one_text'] }}</h3>
                                            <p class="card-text">{{ html_entity_decode($sectionTwo['card_one_text_secondary']) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 my-xl-0 py-xl-0 my-2 py-1">
                            <div class="card">
                                <div class="row justify-content-md-between justify-content-center text-center text-sm-start">
                                    <div class="col-md-4 col-sm-3 col-4">
                                        <img class="card-img"
                                             src="{{ isset($sectionTwo['card_two_image']) ? asset($sectionTwo['card_two_image']) : asset('landing_front/images/opd.png') }}"
                                             alt="OPD Management">
                                    </div>
                                    <div class="col-md-8 col-sm-9">
                                        <div class="card-body p-0 ">
                                            <h3 class="mt-sm-0 mt-3">{{ $sectionTwo['card_two_text'] }}</h3>
                                            <p class="card-text">{{ html_entity_decode($sectionTwo['card_two_text_secondary']) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 my-xl-0 py-xl-0 my-2 py-1">
                            <div class="card">
                                <div class="row justify-content-md-between justify-content-center text-center text-sm-start">
                                    <div class="col-md-4 col-sm-3 col-4">
                                        <img class="card-img"
                                             src="{{ isset($sectionTwo['card_third_image']) ? asset($sectionTwo['card_third_image']) : asset('landing_front/images/ipd.png') }}"
                                             alt="IPD Management">
                                    </div>
                                    <div class="col-md-8 col-sm-9">
                                        <div class="card-body p-0">
                                            <h3 class="mt-sm-0 mt-3">{{ $sectionTwo['card_third_text'] }}</h3>
                                            <p class="card-text">{{ html_entity_decode($sectionTwo['card_third_text_secondary']) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end protect-health section -->

        <!-- start hospital-sass-section -->
        <section class="hospital-sass-section overflow-hidden pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-12 margin-b-80px">
                        <div class="row align-items-center flex-column-reverse flex-lg-row">
                            <div class=" col-lg-6">
                                <div class="sass-left-content bg-light">
                                    <div class="d-flex align-items-center justify-content-lg-end flex-wrap">
                                        <img class="img-fluid" src="{{asset('landing_front/images/frame_9.png')}}"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-6 position-relative">
                                <div class="sass-right-content ms-lg-5 ps-lg-5">
                                    <div class="section-heading mb-0 ">
                                        <h2 class="mb-3">{{ $sectionThree['text_main'] }}</h2>
                                        <p class="mb-4 pb-3">{{ $sectionThree['text_secondary'] }}
                                        </p>
                                    </div>
                                    <div class="sass-desc mb-4">
                                        <div class="row">
                                            <div class="col-sm-6 d-flex align-items-center mb-3 pb-1">
                                                <i class="fa-solid fa-check d-flex align-items-center justify-content-center me-2 text-white bg-primary"></i>
                                                <p class="mb-0">{{ $sectionThree['text_one'] }}</p>
                                            </div>
                                            <div class="col-sm-6 d-flex align-items-center mb-3 pb-1">
                                                <i class="fa-solid fa-check d-flex align-items-center justify-content-center me-2 text-white bg-primary"></i>
                                                <p class="mb-0">{{ $sectionThree['text_two'] }}</p>
                                            </div>
                                            @if(!empty($sectionThree['text_three']))
                                                <div class="col-sm-6 d-flex align-items-center mb-3 pb-1">
                                                    <i class="fa-solid fa-check d-flex align-items-center justify-content-center me-2 text-white bg-primary"></i>
                                                    <p class="mb-0">{{$sectionThree['text_three']}}</p>
                                                </div>
                                            @endif
                                            @if(isset($sectionThree['text_four']))
                                                <div class="col-sm-6 d-flex align-items-center mb-3 pb-1">
                                                    <i class="fa-solid fa-check d-flex align-items-center justify-content-center me-2 text-white bg-primary"></i>
                                                    <p class="mb-0">{{$sectionThree['text_four']}}</p>
                                                </div>
                                            @endif
                                            @if(isset($sectionThree['text_five']))
                                                <div class="col-sm-6 d-flex align-items-center mb-3 pb-1">
                                                    <i class="fa-solid fa-check d-flex align-items-center justify-content-center me-2 text-white bg-primary"></i>
                                                    <p class="mb-0">{{$sectionThree['text_five']}}</p>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="sass-btn d-flex col-lg-12">
                                        <a href="{{ route('landing.contact.us') }}"
                                           class="btn btn-primary me-3">{{ __('messages.contact_us') }}</a>
                                        @if(!getLoggedInUser())
                                            <a href="{{ route('register') }}" data-turbo="false"
                                               class="btn btn-secondary ms-1">{{ __('messages.web_home.sign_up') }}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end hospital-sass-section -->

        <!-- start grow-your-hospital section -->
  {{--   @include('landing.home.grow_hospital_section') --}}
        <!-- end grow-your-hospital section -->

        <!-- start-service-section -->
     {{--    @include('landing.home.count_section') --}}
        <!-- end-service-section -->

        <!--start our-hospitals sectiom -->
{{--        <section class="our-hospitals-section py-120">--}}
{{--            <div class="container">--}}
{{--                <div class="row justify-content-center">--}}
{{--                    <div class="col-lg-6 text-center">--}}
{{--                        <div class="section-heading">--}}
{{--                            <h2>{{ __('messages.our_hospitals') }}</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="our-hospitals">--}}
{{--                    <div class="row justify-content-between">--}}
{{--                        @foreach($hospitals as $hospital)--}}
{{--                            <div class="col-lg-4 col-md-6 mb-lg-5 mb-md-4 mb-3 d-flex align-items-stretch ps-4 ps-md-3">--}}
{{--                                <div class="card flex-fill ms-lg-4 me-xl-5 ms-md-4 me-md-2 ms-4 ps-1 ps-md-0">--}}
{{--                                    <a href="{{ route('front',$hospital->username) }}">--}}
{{--                                        <div class="row justify-content-between align-items-center">--}}
{{--                                            <div class="col-md-2 col-1 ps-xl-2 ps-2">--}}
{{--                                                <img class="card-img rounded-circle"--}}
{{--                                                     src="{{ isset($hospital) ? asset($hospital['image_url']) : ''}}"--}}
{{--                                                     alt="New-Horizon">--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-10 col-11">--}}
{{--                                                <div class="card-body d-flex flex-column py-4">--}}
{{--                                                    <h3>{{ $hospital->full_name }}</h3>--}}
{{--                                                    <p class="card-text">{{ $hospital->email }}</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="pagination-section">--}}

{{--                    {{ $hospitals->links() }}--}}

{{--                    --}}{{--                    <nav aria-label="Page navigation example">--}}
{{--                    --}}{{--                        <ul class="pagination mb-0 justify-content-center flex-wrap">--}}
{{--                    --}}{{--                            <li class="page-item">--}}
{{--                    --}}{{--                                <a class="page-link previous" href="#" aria-label="Previous">--}}
{{--                    --}}{{--                                            <span aria-hidden="true">--}}
{{--                    --}}{{--                                                <i class="fa-solid fa-angle-left"></i>--}}
{{--                    --}}{{--                                            </span>--}}
{{--                    --}}{{--                                    <span class="sr-only">Previous</span>--}}
{{--                    --}}{{--                                </a>--}}
{{--                    --}}{{--                            </li>--}}
{{--                    --}}{{--                            <li class="page-item"><a class="page-link active" href="#">1</a></li>--}}
{{--                    --}}{{--                            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                    --}}{{--                            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                    --}}{{--                            <li class="page-item"><a class="page-link" href="#">4</a></li>--}}
{{--                    --}}{{--                            <li class="page-item"><a class="page-link" href="#">5</a></li>--}}
{{--                    --}}{{--                            <li class="page-item"><a class="page-link" href="#">6</a></li>--}}
{{--                    --}}{{--                            <li class="page-item">--}}
{{--                    --}}{{--                                <a class="page-link next" href="#" aria-label="Next">--}}
{{--                    --}}{{--                                            <span aria-hidden="true">--}}
{{--                    --}}{{--                                                <i class="fa-solid fa-angle-right"></i>--}}
{{--                    --}}{{--                                            </span>--}}
{{--                    --}}{{--                                    <span class="sr-only">Next</span>--}}
{{--                    --}}{{--                                </a>--}}
{{--                    --}}{{--                            </li>--}}
    {{--                    --}}{{--                        </ul>--}}
    {{--                    --}}{{--                    </nav>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </section>--}}
    <!--end our-hospitals section -->
 {{--    @if(getLoggedInUser() == null || !getLoggedInUser()->hasRole('Super Admin'))

        <!-- start-plan-section -->
            <div class="mt-5">
                @include('landing.home.pricing_plan_page', ['screenFrom' => Route::currentRouteName()])
            </div>

    @endif
    --}}
    <!-- end-plan-section -->

        <!-- start subscribe-section -->
 {{--    @include('landing.home.subscribe_section') --}}
    <!-- end subscribe-section -->
        {{ Form::hidden('getLoggedInUserdata', getLoggedInUser(), ['class' => 'getLoggedInUser']) }}
        {{ Form::hidden('logInUrl', url('login'), ['class' => 'logInUrl']) }}
        {{ Form::hidden('fromPricing', true, ['class' => 'fromPricing']) }}
        {{ Form::hidden('makePaymentURL', route('purchase-subscription'), ['class' => 'makePaymentURL']) }}
        {{ Form::hidden('subscribeText', __('messages.subscription_pricing_plans.choose_plan'), ['class' => 'subscribeText']) }}
{{--        {{ Form::hidden('toastData', json_encode(session('toast-data')), ['class' => 'toastData']) }}--}}

    </div>

@endsection
@section('page_scripts')
{{--    <script src="{{ asset('landing_front/js/jquery.toast.min.js') }}"></script>--}}
@endsection
@section('scripts')
    <script>
        {{--let getLoggedInUserdata = "{{ getLoggedInUser() }}"--}}
        {{--let logInUrl = "{{ url('login') }}"--}}
        {{--let fromPricing = true--}}
        {{--let makePaymentURL = "{{ route('purchase-subscription') }}"--}}
        {{--let subscribeText = "{{ __('messages.subscription_pricing_plans.choose_plan') }}"--}}
        {{--let toastData = JSON.parse('@json(session('toast-data'))')--}}
    </script>
    {{--    <script src="{{ mix('assets/js/subscriptions/free-subscription.js') }}"></script>--}}
    {{--    <script src="{{ mix('assets/js/subscriptions/payment-message.js') }}"></script>--}}
@endsection
