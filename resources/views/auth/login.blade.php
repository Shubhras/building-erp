<!--begin::Authentication - Sign-in -->
{{--<?php
$style = 'style=';
$display = 'display:';
?>--}}
<!--<style>
    .set-login-img{
    width: auto;
    margin: 0;
    max-width: 700px;
    margin-top: 110px;
    margin-right: 40px;
}
.set-card-login{
    margin-top: 53px;
}
</style> -->
@php
    $style = 'style=background-image:url(' . asset('assets/img/progress-hd.png') . ')';
    $settingValue = getSuperAdminSettingValue();
    App::setLocale(session('languageName'));
    
@endphp
@extends('layouts.auth_app')

@section('title')
    {{ __('auth.login.login') }}
@endsection
@section('content')
    {{--    <ul class="nav nav-pills" style="justify-content: flex-end; cursor: pointer"> --}}
    {{--        <li class="nav-item dropdown"> --}}
    {{--            <a class="btn btn-primary w-150px mb-5 indicator m-3" --}}
    {{--               data-bs-toggle="dropdown" href="javascript:void(0)" role="button" --}}
    {{--               aria-expanded="false">{{ getCurrentLanguageName() }}</a> --}}
    {{--            <ul class="dropdown-menu w-150px"> --}}
    {{--                @foreach (getLanguages() as $key => $value) --}}
    {{--                    <li class="{{(checkLanguageSession() == $key) ? 'active' : '' }}"><a --}}
    {{--                                class="dropdown-item  px-5 language-select {{(checkLanguageSession() == $key) ? 'bg-primary text-white' : 'text-dark' }}" --}}
    {{--                                data-id="{{$key}}">{{$value}}</a> --}}
    {{--                    </li> --}}
    {{--                @endforeach --}}
    {{--            </ul> --}}
    {{--        </li> --}}
    {{--    </ul> --}}

    {{-- <ul class="nav nav-pills language-option" style="justify-content: flex-end; cursor: pointer">
        <li class="nav-item dropdown">
            <a class="btn btn-primary w-150px mb-5 indicator m-3 dropdown-toggle"
               data-bs-toggle="dropdown" href="javascript:void(0)" role="button"
               aria-expanded="false">{{ getCurrentLanguageName() }}</a>
            <ul class="dropdown-menu w-150px">
                @foreach (getLanguages() as $key => $value)
                    <li class="{{(checkLanguageSession() == $key) ? 'active' : '' }}"><a
                                class="dropdown-item  px-5 language-select {{(checkLanguageSession() == $key) ? 'bg-primary text-white' : 'text-dark' }}"
                                data-id="{{$key}}">{{$value}}</a>
                    </li>
                @endforeach
            </ul>
        </li>
    </ul>

    <div class="d-flex flex-column flex-column-fluid align-items-center justify-content-center p-4">
        <div class="col-12 text-center">
            <a href="{{ route('landing-home') }}" class="image mb-7 mb-sm-10">
                <img alt="Logo" src="{{ asset($settingValue['app_logo']['value']) }}" class="img-fluid logo-fix-size">
            </a>
        </div>
        <div class="bg-theme-white rounded-15 shadow-md width-540 px-5 px-sm-7 py-10 mx-auto">
            @include('flash::message')
            @if ($errors->any())
                <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <h1 class="text-center mb-7">{{__('auth.sign_in')}}</h1>
            <form method="post" action="{{ url('/login') }}">
                @csrf
                <input type="hidden" name="route_name"
                       value="{{ app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName() }}">
                <div class="mb-sm-7 mb-4">
                    <label for="formInputEmail" class="form-label">
                        {{__('auth.email')}} <span class="required"></span>
                    </label>
                    <input type="email" class="form-control" name="email"
                           value="{{ (Cookie::get('email') !== null) ? Cookie::get('email') : old('email') }}"
                           required placeholder="{{__('auth.login.enter_email')}}" id="formInputEmail">
                </div>
                <div class="mb-sm-7 mb-4">
                    <div class="d-flex justify-content-between">
                        <label for="formInputPassword" class="form-label">{{__('auth.password')}}:
                            <span class="required"></span>
                        </label>
                        <a href="{{ url('/password/reset') }}" class="link-info fs-6 text-decoration-none">
                            {{__('auth.login.forgot_password')}} ?
                        </a>
                    </div>
                    <input type="password"
                           class="form-control" name="password" id="formInputPassword"
                           placeholder="{{__('auth.login.enter_password')}}"
                           value="{{ (Cookie::get('password') !== null) ? Cookie::get('password') : null }}"
                           required>
                </div>
                <div class="mb-sm-7 mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck">
                    <label class="form-check-label" for="formCheck">{{__('auth.remember_me')}}</label>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">{{__('auth.login.login')}}</button>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <span class="text-gray-700 me-2"> Don’t have an account?</span>
                    <a href="{{ route('register')  }}" class="link-info fs-6 text-decoration-none">
                        Sign up
                    </a>
                </div>
            </form>
        </div>
    </div> --}}
    <!--end::Authentication - Sign-in -->
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Paylio - Money Transfer and Online Payments HTML Template</title>

        <link rel="shortcut icon" href="assets1/images/fav.png" type="image/x-icon">
        <link rel="stylesheet" href="assets1/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets1/css/fontawesome.min.css">
        <link rel="stylesheet" href="assets1/css/jquery-ui.css">
        <link rel="stylesheet" href="assets1/css/plugin/nice-select.css">
        <link rel="stylesheet" href="assets1/css/plugin/magnific-popup.css">
        <link rel="stylesheet" href="assets1/css/plugin/slick.css">
        <link rel="stylesheet" href="assets1/css/arafat-font.css">
        <link rel="stylesheet" href="assets1/css/plugin/animate.css">
        <link rel="stylesheet" href="assets1/css/style.css">
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
                                <img src="assets1/images/logo.png" class="logo" alt="logo" style="max-width:60%;">
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
                                            <li><a class="nav-link" href="expense-management.html">Expense Management</a>
                                            </li>
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
                                            <li><a class="nav-link" href="career.html">Career</a></li>
                                            <li><a class="nav-link" href="career-details.html">Career Details</a></li>
                                            <li class="dropend sub-navbar">
                                                <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">Blog</a>
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
                                            <li><a class="nav-link" href="help-center-category.html">Help Category</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="right-area header-action d-flex align-items-center max-un">
                                    <a href="{{ route('login')  }}" class="login">Login</a>
                                    <a href="{{ route('register')  }}" class="cmn-btn">Sign Up
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

        <!-- Login Reg start -->
        <section class="login-reg">
            <div class="overlay pt-120">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-6 order-xl-0 order-1">
                            <div class="sec-img d-rtl">
                                <img src="assets1/images/login-reg-bg.png" class="max-un" alt="image">
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="section-text text-center">
                                <h5 class="sub-title">Account</h5>
                                <h2 class="title">Log in to Continue</h2>
                                <p class="dont-acc">Don’t have an account? <a href="{{ route('register') }}">Sign up</a></p>
                               {{--  <div class="reg-google">
                                    <a href="javascript:void(0)"><i class="fab fa-google"></i>Log in with Google</a>
                                </div> --}}
                                {{-- <span class="or">Or Continue With</span> --}}
                            </div>
                            <form method="post" action="{{ url('/login') }}">
                                @csrf
                                <input type="hidden" name="route_name"
                                       value="{{ app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName() }}">
                                {{-- <div class="mb-sm-7 mb-4">
                                    <label for="formInputEmail" class="form-label">
                                        {{__('auth.email')}} <span class="required"></span>
                                    </label>
                                    <input type="email" class="form-control" name="email"
                                           value="{{ (Cookie::get('email') !== null) ? Cookie::get('email') : old('email') }}"
                                           required placeholder="{{__('auth.login.enter_email')}}" id="formInputEmail">
                                </div> --}}
                                {{-- <div class="single-input">
                                    <div class="d-flex justify-content-between">
                                        <label for="formInputPassword" class="form-label">{{__('auth.password')}}:
                                            <span class="required"></span>
                                        </label>
                                        <a href="{{ url('/password/reset') }}" class="link-info fs-6 text-decoration-none">
                                            {{__('auth.login.forgot_password')}} ?
                                        </a>
                                    </div> --}}
                                    {{-- <input type="password"
                                           class="form-control" name="password" id="formInputPassword"
                                           placeholder="{{__('auth.login.enter_password')}}"
                                           value="{{ (Cookie::get('password') !== null) ? Cookie::get('password') : null }}"
                                           required>
                                </div>
                                 --}}
            
                                <div class="row">
                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="logemail"> {{__('auth.email')}} <span class="required"></span></label>
                                            <input type="email"  name="email"
                                            value="{{ (Cookie::get('email') !== null) ? Cookie::get('email') : old('email') }}"
                                            required placeholder="{{__('auth.login.enter_email')}}" id="formInputEmail">
                                        </div>
                                        <div class="single-input">
                                            <label for="logpassword">Your Password
                                            <span class="required"></span>
                                            </label>
                                            <input  type="password"  name="password" id="formInputPassword"
                                            placeholder="{{__('auth.login.enter_password')}}" value="{{ (Cookie::get('password') !== null) ? Cookie::get('password') : null }}"
                                            required>
                                        </div>
                                        <button  type="submit" class="cmn-btn w-100">{{__('auth.login.login')}}</button>
                                    </div>
                            </form>
                            <div class="forgot-pass mt-30 text-center">
                             {{-- <a href=" {{ url('/password/reset') }} javascript:void(0)">Forgot Password ?</a>
                              --}}
                              <a href=" {{ url('/password/reset') }}">Forgot Password ?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- Login Reg end -->

        <!--==================================================================-->
        <script src="assets1/js/jquery.min.js"></script>
        <script src="assets1/js/jquery-ui.js"></script>
        <script src="assets1/js/bootstrap.min.js"></script>
        <script src="assets1/js/fontawesome.js"></script>
        <script src="assets1/js/plugin/slick.js"></script>
        <script src="assets1/js/plugin/jquery.nice-select.min.js"></script>
        <script src="assets1/js/plugin/counter.js"></script>
        <script src="assets1/js/plugin/waypoint.min.js"></script>
        <script src="assets1/js/plugin/jquery.magnific-popup.min.js"></script>
        <script src="assets1/js/plugin/wow.min.js"></script>
        <script src="assets1/js/plugin/plugin.js"></script>
        <script src="assets1/js/main.js"></script>
    </body>

    </html>
@endsection