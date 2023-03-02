<?php
// $style = 'style=background-image:url(' . asset('assets/img/progress-hd.png') . ')';
$settingValue = getSuperAdminSettingValue();
App::setLocale(session('languageName'));
?>
<style>
    .nav-tabs .nav-item .nav-link:after {
    border-bottom:none !important;
}
</style>
@extends('layouts.auth_app')

@section('title')
{{ __('auth.registration.registration') }}
@endsection
{{-- @section('css')
    {{-- <link href="{{ asset('backend/css/fonts.css') }}" rel="stylesheet" type="text/css" /> --}}
{{--    <link rel="stylesheet" href="{{ asset('assets/css/int-tel/css/intlTelInput.css') }}"> --}}
{{-- @endsection --}}
@section('content')
<!--begin::Authentication - Sign-up -->

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
        <a href="{{ route('landing-home') }}" data-turbo="false" class="image mb-7 mb-sm-10">
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
        <h1 class="text-center mb-7">{{__('auth.registration.hospital_registration')}}</h1>
        <form method="post" action="{{ url('/register') }}">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-sm-7 mb-4">
                    <label for="formInputName" class="form-label">{{__('auth.hospital_name')}}
                        <span class="required"></span>
                    </label>
                    <input type="text" class="form-control" id="formInputName" name="hospital_name"
                        value="{{ old('hospital_name') }}" placeholder="{{__('auth.registration.enter_hospital_name')}}"
                        pattern="^[a-zA-Z0-9 ]+$" title="Hospital Name Not Allowed Special Character" required>
                </div>
                <div class="col-md-6 mb-sm-7 mb-4">
                    <label class="form-label" for="hospitalSlug">{{__('auth.hospital_slug')}}
                        <span class="required"></span>
                    </label>
                    <input type="text" class="form-control" id="hospitalSlug" name="username"
                        value="{{ old('username') }}" placeholder="{{__('auth.registration.enter_username')}}"
                        pattern="^\S[a-zA-Z0-9]+$"
                        title="ug must be alphanumeric and having exact 12 characters in length" required min="12"
                        maxlength="12">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-sm-7 mb-4">
                    <label class="form-label" for="formInputEmail">{{__('auth.email')}}:
                        <span class="required"></span>
                    </label>
                    <input type="email" class="form-control" id="formInputEmail" name="email" value="{{ old('email') }}"
                        placeholder="{{__('auth.login.enter_email')}}" required>
                </div>
                <div class="col-md-6 mb-sm-7 mb-4">
                    <label class="form-label" for="phoneNumber">{{__('messages.web_contact.phone_number')}}
                        <span class="required"></span>
                    </label>
                    <input type="phone" class="form-control" name="phone" value="{{ old('phone') }}" placeholder=""
                        id="phoneNumber" onkeyup='if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")'
                        required maxlength="11">
                    <input type="hidden" name="prefix_code" value="" id="prefix_code">
                    <span id="valid-msg" class="text-success d-none fw-400 fs-small mt-2">✓ &nbsp;
                        {{__('messages.valid')}}</span>
                    <span id="error-msg" class="text-danger d-none fw-400 fs-small mt-2"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-sm-7 mb-4">
                    <label for="formInputPassword" class="form-label">
                        {{__('auth.password')}}:<span class="required"></span>
                    </label>
                    <input type="password" class="form-control" id="formInputPassword" name="password"
                        placeholder="{{ __('auth.registration.enter_password') }}" required aria-describedby="password">
                </div>
                <div class="col-md-6 mb-sm-7 mb-4">
                    <label for="formInputConfirmPassword" class="form-label">
                        {{__('auth.confirm_password')}}:<span class="required"></span>
                    </label>
                    <input type="password" class="form-control" id="formInputConfirmPassword"
                        aria-describedby="confirmPassword" name="password_confirmation"
                        placeholder="{{ __('auth.registration.enter_confirm_password') }}" required>
                </div>
            </div>
            <div class="col-xl-12 mt-2 d-flex justify-content-center">
                @if (config('app.recaptcha.key'))
                <div class="form-group mb-4">
                    <div class="g-recaptcha" data-sitekey="{{config('app.recaptcha.key')}}">
                    </div>
                </div>
                @endif
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">{{__('auth.submit')}}</button>
            </div>
            <div class="d-flex align-items-center mt-4">
                <span class="text-gray-700 me-2">{{__('auth.already_user')}}</span>
                <a href="{{ route('login') }}" class="link-info fs-6 text-decoration-none">
                    {{__('auth.sign_in')}}
                </a>
            </div>
        </form>
    </div>
</div> --}}
<!--end::Authentication - Sign-up-->
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
                            <img src="assets1/images/logo.png" class="logo" alt="logo">
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
                                        <li><a class="nav-link" href="about-us.html">About Us</a></li>
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
                                <a href="{{ route('login') }}" class="login">Login</a>
                                <a href="{{ route('register') }}" class="cmn-btn">Sign Up
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

    <section class="login-reg log-reg">
        <div class="overlay">
            <div class="container" style="margin-top: 155px;">
                <div class="row align-items-center justify-content-center pt-120">
                    <div class="col-xl-6 order-xl-0 order-1">
                        <div class="sec-img d-rtl">
                            <img src="assets1/images/login-reg-bg.png" class="max-un" alt="image">
                        </div>
                    </div>
                    <div class="col-xl-6">
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
                            <div class="log-reg">
                                <div class="form-box">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <!-- <button class="nav-link active" id="personal-tab" data-bs-toggle="tab"
                                                data-bs-target="#personal" type="button" role="tab"
                                                aria-controls="personal" aria-selected="true">Building</button> -->
                                                <button class="nav-link active" id="personal-tab" data-bs-toggle="tab"
                                                data-bs-target="#personal" type="button" role="tab"
                                                aria-controls="personal" aria-selected="true">Business</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <!-- <button class="nav-link" id="business-tab" data-bs-toggle="tab"
                                                data-bs-target="#business" type="button" role="tab"
                                                aria-controls="business" aria-selected="false">User</button> -->
                                                <button class="nav-link" id="business-tab" data-bs-toggle="tab"
                                                data-bs-target="#business" type="button" role="tab"
                                                aria-controls="business" aria-selected="false">Personal</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="personal" role="tabpanel"
                                        aria-labelledby="personal-tab"> 
                                        <form method="post" action="{{ url('/register') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="single-input">
                                                        <label for="formInputName">{{ __('Building Name') }}
                                                            <span class="required"></span>
                                                        </label>
                                                        <input type="text" id="formInputName"
                                                            placeholder="Enter Building name" name="hospital_name"
                                                            value="{{ old('hospital_name') }}" pattern="^[a-zA-Z0-9 ]+$"
                                                            title="Hospital Name Not Allowed Special Character"
                                                            required>
                                                    </div>
                                                    <div class="single-input">
                                                        <label for="logemail"> {{ __('auth.email') }} <span
                                                                class="required"></span></label>
                                                        <input type="email" id="logemail" name="email"
                                                            placeholder="Enter Your Email"
                                                            value="{{ Cookie::get('email') !== null ? Cookie::get('email') : old('email') }}"
                                                            required placeholder="{{ __('auth.login.enter_email') }}"
                                                            id="formInputEmail">
                                                    </div>
                                                    <div class="single-input">
                                                        <label class="required"
                                                            for="hospitalSlug">{{__('auth.hospital_slug')}}
                                                            <!-- <span class="required"></span> -->
                                                        </label>
                                                        <input type="text" id="hospitalSlug" name="username"
                                                            value="{{ old('username') }}"
                                                            placeholder="Enter Your Building Url "
                                                            pattern="^\S[a-zA-Z0-9]+$"
                                                            title="Hospital Slug must be alphanumeric and having exact 12 characters in length"
                                                            required min="12" maxlength="12">
                                                    </div>
                                                    <div class="single-input">
                                                        <label
                                                            for="phoneNumber">{{ __('messages.web_contact.phone_number') }}
                                                            <span class="required"></span>
                                                        </label>
                                                        <input type="phone" name="phone" placeholder="Enter Your phone"
                                                            value="{{ old('phone') }}"
                                                            onkeyup='if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")'
                                                            required maxlength="11">
                                                        <input type="hidden" name="prefix_code" value=""
                                                            id="prefix_code">
                                                        <span id="valid-msg"
                                                            class="text-success d-none fw-400 fs-small mt-2">✓
                                                            &nbsp; {{ __('messages.valid') }}</span>
                                                        <span id="error-msg"
                                                            class="text-danger d-none fw-400 fs-small mt-2"></span>
                                                    </div>
                                                    <div class="single-input">
                                                        <label for="logpassword">Your Password
                                                            <span class="required"></span>
                                                        </label>
                                                        <input type="password" name="password" id="logpassword"
                                                            placeholder="Enter Your Password"
                                                            value="{{ Cookie::get('password') !== null ? Cookie::get('password') : null }}"
                                                            required>
                                                    </div>
                                                    <div class="single-input">
                                                        <label for="formInputConfirmPassword">
                                                            {{__('auth.confirm_password')}}:<span
                                                                class="required"></span>
                                                        </label>
                                                        <input type="password" aria-describedby="confirmPassword"
                                                            name="password_confirmation"
                                                            placeholder="{{ __('auth.registration.enter_confirm_password') }}"
                                                            required>
                                                    </div>
                                                    <button type="submit"
                                                        class="cmn-btn w-100">{{ __('auth.submit') }}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade show" id="business" role="tabpanel"
                                        aria-labelledby="personal-tab">
                                        <!-- <form action="#"> -->
                                            <div class="container">
                                                <div class="d-flex flex-column">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            @include('layouts.errors')
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div>
                                                            {{Form::hidden('utilsScript',asset('assets/js/int-tel/js/utils.min.js'),['class'=>'utilsScript'])}}
                                                            {{Form::hidden('isEdit',false,['class'=>'isEdit'])}}
                                                            {{Form::hidden('defaultAvatarImageUrl',asset('assets/img/avatar.png'),['class'=>'defaultAvatarImageUrl'])}}
                                                            {{ Form::open(['route' => 'patients.store', 'files' => 'true', 'id' => 'createPatientForm']) }}
                                                            @include('auth.user_singup')
                                                            {{ Form::close() }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- </form> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>

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