@extends('web.layouts.front')
@section('title')
{{ __('web.home') }}
@endsection
@section('content')
@php
$user = getUser();
@endphp
<?php
$style = 'style=';
$display = 'display:';
?>
<style>
@import url("https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&display=swap");

.home-set {
    font-size: 40px;
    font-weight: 600;
    color: #0c266c !important;
    font-family: "Jost", sans-serif;
}

.sub-home {
    font-weight: 400;
    line-height: 30px;
    color: #0c266c;
    font-family: "Jost", sans-serif;
}

.icon-boxes {
    background-color: #f5f8f9;
    color: #706c6c;
}

.solution-card .icon-boxes {
    width: 70px;
    height: 70px;
}

.verify-button {
    border: 1px solid;
    padding: 15px 30px;
    border-radius: 20px;
    margin: 10px;
    color: #fff;
    font-size: 20px;
    font-family: "Jost", sans-serif;
    background-color: #4743c9;
}

.verify-button1 {
    border: 1px solid;
    padding: 15px 30px;
    border-radius: 20px;
    margin: 10px;
    color: #fff;
    font-size: 20px;
    font-family: "Jost", sans-serif;
    background-color: #4743c9;
    min-width: 25%
}

/* a:hover {
    background-color: #5660d9;
    border-color: #515acc;
    color: #fff;
} */

.heading-easy {
    color: #0c266c !important;
    font-size: 20px;
    font-weight: 600;
    font-family: "Jost", sans-serif;
}

.button-align {
    position: relative;
    left: 7%;
    margin-bottom: 50px;
}

.easy-step {
    font-size: 18px;
    font-family: "Jost", sans-serif;
    color: #0c266c;
    text-align: start;
    font-weight: 400;
}

.step1 {
    font-weight: 700;
    line-height: 30px;
    color: #0c266c;
    font-family: "Jost", sans-serif;
    font-size: 20px;
    text-align: start;
}

.code-qr {
    font-size: 25px;
    font-weight: 500;
    text-align: center;
    font-family: "Jost", sans-serif;
}

.set-img-padding {
    padding: 0px 10px 10px 90px;
}

.home-page .easy-solution-section .easy-solution-cards::after {
    background-color: #ffffff;
}

header {
    background-color: #e1ddef;
}
</style>
<div class="home-page">
    <!-- start hero section -->
    <section style="background:#ffffff"
        class="hero-section position-relative p-t-60 border-bottom-right-rounded border-bottom-left-rounded bg-gray">
        <div class="container">
            <div class="row align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-5 text-lg-start text-center">
                    <div class="hero-content test_title mt-5 mt-lg-0">
                        {{--<h6 class="text-primary mb-3">{{ $frontSetting['home_page_experience'] }}
                        {{ __('messages.web_home.years_experience') }}</h6>--}}
                        <h1 class="mb-3 pb-1  home-set">
                            {{ \Illuminate\Support\Str::limit($frontSetting['home_page_title'], 42) }}
                        </h1>
                        <p class="mb-lg-4 pb-lg-3 mb-4 sub-home">
                            {{ \Illuminate\Support\Str::limit($frontSetting['home_page_description'], 170) }}</p>
                        @if(!Auth::user())
                        <!-- <a href="{{ route('register') }}"
                                   class="btn btn-primary">{{ __('messages.web_home.sign_up') }}</a> -->
                        <a href="{{ route('appointment', $user->username) }}"
                            class="btn btn-primary btn-sm mb-3 rounded-2 mb-xl-0">
                            Sign Up
                        </a>
                        @endif
                    </div>
                </div>
                <div class="col-lg-7 text-lg-end text-center set-img-padding">
                    <img style="width: 100%; margin-left:-50px;"
                        src="{{ asset($frontSetting['home_page_image']) ? asset($frontSetting['home_page_image']) : asset('web_front/images/doctors/doctor.png') }}"
                        alt="Infy Care" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <!-- end hero section -->

    <!--start book-appointment section-->
    <section class="appointment-section" style="margin-top:60px;">
        {{-- <div class="container">
                <div class="book-appintment position-relative br-2 bg-white">
                    <form action="{{route('appointment.post', $user->username)}}" class="book-appointment-form"
        method="POST" turbo:load>
        @csrf
        <div class="row align-items-center justify-content-around">
            <div class="col-lg-3">
                <h3 class="mb-lg-0 mb-3 fw-bold">{{ __('messages.web_home.book_an_appointment') }}</h3>
            </div>
            <div class="col-lg-3 col-md-6 text-center mb-lg-0 mb-3">
                <select class="doctor-name-filter" name="doctorId"
                    aria-label="{{ __('messages.web_home.select_doctor') }}">
                    <option value="">{{ __('messages.web_home.select_doctor') }}</option>
                    @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->user->full_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-3 col-md-6 text-center mb-lg-0 mb-3">
                <input type="text" name="appointmentDate" class="form-control datepicker" id="datepicker"
                    placeholder="{{ __('messages.web_appointment.select_date') }}">

            </div>
            <div class="col-lg-3 text-end">
                <button type="submit"
                    class="btn btn-primary d-block w-100">{{ __('messages.web_home.book_now') }}</button>
            </div>
        </div>
        </form>
</div>
</div>--}}
<div class="container mt-4">
    {{--<div class="card">
            <div class="card-header test_title">
                <h2 class="home-set">Share QR Code</h2>
            </div>
            <div class="card-body set-qr" style="text-align:center;">
                {!! QrCode::size(300)->generate('http://localhost:8000/RemoteStack') !!}
                <!-- {!! QrCode::size(300)->generate('http://localhost:8000/front-settings'); !!} -->
                <!-- <p>Scan me to return to the original page.</p> -->
                <a href="{{ asset('/web/img/qrcode.svg') }}" download class="set-button">Download</a>
</div>
</div>--}}
<div class="container">
    <div class="row align-items-center flex-column-reverse flex-lg-row">
        <div class="col-lg-5 text-lg-start text-center">
            <div class="hero-content test_title mt-5 mt-lg-0" style="margin-left:-20px;">
                <div class="card">
                    <div class="card-header test_title">
                        <h2 class="code-qr">Share QR Code</h2>
                    </div>
                    <div class="card-body set-qr" style="text-align:center;">
                        <!-- {!! QrCode::size(300)->generate('http://localhost:8000/front-settings') !!} -->
                        {!! $qrCode = QrCode::size(300)->generate('http://localhost:8000/front-settings') !!}
                        <!-- <p>Scan me to return to the original page.</p> -->
                    </div>
                    <div style="text-align:center;">
                        <!-- <a href="{{ asset('/web/img/qrcode.svg') }}" download class="verify-button1">Download</a> -->
                        <button id="download-button" class="verify-button1">Download QR Code</button>
                        <a id="download-link" style="display:none;"></a>
                        <div id="qr-code" style="display:none;">{{ $qrCode }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 text-lg-start text-center set-section set-img-padding">
            <div class="hero-content test_title mt-5 mt-lg-0">
                <h1 class="mb-3 pb-1  home-set">
                    The story behind our building
                </h1>
                <p class="mb-lg-4 pb-lg-3 mb-4 home-color sub-home" style="line-break: anywhere;">
                    We will foster a culture that is free from any kind of discrimination, promoting ethical values,
                    recruiting a talented workforce, and staying at the forefront of the industry.All this will help us
                    innovate products that leapfrog into the future and above all, be fair to all.</p>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<!--end book-appointment section-->

<!-- start easy-solution section -->
<section class="easy-solution-section position-relative">
    <div class="container">
        <div class="col-lg-6 text-center mx-auto test_title">
            <h6 class="text-primary pb-2 heading-easy">{{ __('messages.web_home.easy_solutions') }}</h6>
            <h2 class="mb-4 pb-4 home-set">{{ __('messages.web_home.4_easy_step_and_get_the_world_best_treatment') }}
            </h2>
        </div>
        <div class="easy-solution-cards">
            <div class="row justify-content-between">
                <!-- <div class="col-xxl-3 col-md-6 text-center solution-card mb-xxl-0 mb-4">
                    <div class="card">
                        <div class="icon-box mx-auto br-5 mb-4 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-user fs-5"></i>
                        </div>
                        <div class="card-body p-0 text-center test_title">
                            <h4 class="step1">
                                {{ \Illuminate\Support\Str::limit($frontSetting['home_page_step_1_title'], 22) }}</h4>
                            <p class="mb-0 easy-step">
                                {{ \Illuminate\Support\Str::limit($frontSetting['home_page_step_1_description'], 114) }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6 text-center solution-card mb-xxl-0 mb-4">
                    <div class="card">
                        <div class="icon-box mx-auto br-5 mb-4 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-headphones-simple fs-5"></i>
                        </div>
                        <div class="card-body p-0 text-center test_title">
                            <h4 class="step1">
                                {{ \Illuminate\Support\Str::limit($frontSetting['home_page_step_2_title'], 22) }}</h4>
                            <p class="mb-0 easy-step">
                                {{ \Illuminate\Support\Str::limit($frontSetting['home_page_step_2_description'], 114) }}
                            </p>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="container"> -->
                <div class="row justify-content-center">
                    <div class="col-5 solution-card  mb-4 ">
                        <div class="card">
                            <div class="icon-boxes  mx-auto br-5 mb-4 d-flex align-items-center justify-content-center">
                                <!-- <i class="fa-solid fa-user fs-5"></i> -->
                                <!-- <i class="fa-solid fa-user"></i> -->
                                <img src="/assets1/images/values-icon-1.png">
                            </div>
                            <div class="card-body p-0 text-center test_title">
                                <h4 class="step1">
                                    {{ \Illuminate\Support\Str::limit($frontSetting['home_page_step_1_title'], 22) }}
                                </h4>
                                <p class="mb-0 easy-step">
                                    {{ \Illuminate\Support\Str::limit($frontSetting['home_page_step_1_description'], 114) }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-5 solution-card  mb-4">
                        <div class="card">
                            <div class="icon-boxes  mx-auto br-5 mb-4 d-flex align-items-center justify-content-center">
                                <!-- <i class="fa-solid fa-file-circle-plus fs-5"></i> -->
                                <img src="/assets1/images/values-icon-2.png">
                            </div>
                            <div class="card-body p-0 text-center test_title">
                                <h4 class="step1">
                                    {{ \Illuminate\Support\Str::limit($frontSetting['home_page_step_2_title'], 22) }}
                                </h4>
                                <p class="mb-0 easy-step">
                                    {{ \Illuminate\Support\Str::limit($frontSetting['home_page_step_2_description'], 114) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->

                {{--<div class="col-xxl-3 col-md-6 text-center solution-card mb-xxl-0 mb-4">
                    <div class="card">
                        <div class="icon-box mx-auto br-5 mb-4 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-calendar-check fs-5"></i>
                        </div>
                        <div class="card-body p-0 text-center test_title">
                            <h4 class="step1">
                                {{ \Illuminate\Support\Str::limit($frontSetting['home_page_step_3_title'], 22) }}</h4>
                <p class="easy-step">
                    {{ \Illuminate\Support\Str::limit($frontSetting['home_page_step_3_description'], 114) }}
                </p>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-md-6 text-center solution-card mb-xxl-0 mb-lg-4">
        <div class="card">
            <div class="icon-box mx-auto br-5 mb-4 d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-check-double fs-5"></i>
            </div>
            <div class="card-body p-0 text-center test_title">
                <h4 class="step1">
                    {{ \Illuminate\Support\Str::limit($frontSetting['home_page_step_4_title'], 22) }}</h4>
                <p class="easy-step">
                    {{ \Illuminate\Support\Str::limit($frontSetting['home_page_step_4_description'], 114) }}
                </p>
            </div>
        </div>
    </div>--}}
    <!-- <div class="container"> -->
    <div class="row justify-content-center">
        <div class="col-5 solution-card  mb-4 ">
            <div class="card">
                <div class="icon-boxes  mx-auto br-5 mb-4 d-flex align-items-center justify-content-center">
                    <!-- <i class="fa-solid fa-calendar-check fs-5"></i> -->
                    <!-- <i class="fa-solid fa-calendar-check fs-5"></i> -->
                    <img src="/assets1/images/values-icon-3.png">
                </div>
                <div class="card-body p-0 text-center test_title">
                    <h4 class="step1">
                        {{ \Illuminate\Support\Str::limit($frontSetting['home_page_step_3_title'], 22) }}</h4>
                    <p class="easy-step">
                        {{ \Illuminate\Support\Str::limit($frontSetting['home_page_step_3_description'], 114) }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-5 solution-card  mb-4">
            <div class="card">
                <div class="icon-boxes mx-auto br-5 mb-4 d-flex align-items-center justify-content-center">
                    <!-- <i class="fa-solid fa-check-double fs-5"></i> -->
                    <!-- <i class="fa-solid fa-address-book"></i> -->
                    <img src="/assets1/images/values-icon-4.png">
                </div>
                <div class="card-body p-0 text-center test_title">
                    <h4 class="step1">
                        {{ \Illuminate\Support\Str::limit($frontSetting['home_page_step_4_title'], 22) }}</h4>
                    <p class="easy-step">
                        {{ \Illuminate\Support\Str::limit($frontSetting['home_page_step_4_description'], 114) }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->
    </div>
    </div>
    </div>
</section>
<!-- end easy-solution section -->

<!--start about-section -->
{{--<section class="about-section p-t-200 p-b-120">
            <div class="container">
                <div class="row align-items-stretch flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 col-md-12">
                        <div class="row h-100">
                            <div class="col-lg-7 col-md-7 about-count-block">
                                <div class="about-count h-100 br-2 text-center d-flex align-items-center justify-content-center py-lg-3 py-5 px-3">
                                    <div>
                                        <h3 class="text-green">{{ $totalbeds }}</h3>
<h4 class="fw-normal mb-0">{{ __('messages.web_home.patients_beds') }}</h4>
</div>
</div>
</div>
<div class=" col-lg-5 col-md-5 about-count-block">
    <div class="about-count h-100 br-2 text-center d-flex align-items-center justify-content-center py-lg-3 py-5 px-3">
        <div>
            <h3 class="text-pink">{{ $totalDoctorNurses }}</h3>
            <h4 class="fw-normal mb-0">{{ __('messages.web_home.doctors_nurses') }}</h4>
        </div>
    </div>
</div>
<div class="col-lg-5 col-md-5 about-count-block">
    <div class="about-count h-100 br-2 text-center d-flex align-items-center justify-content-center py-lg-3 py-5 px-3">
        <div>
            <h3 class="text-primary">{{ $totalPatient }}</h3>
            <h4 class="fw-normal mb-0">{{ __('messages.web_home.happy_patients') }}</h4>
        </div>
    </div>
</div>
<div class="col-lg-7 col-md-7 about-count-block">
    <div class="about-count h-100 br-2 text-center d-flex align-items-center justify-content-center py-lg-3 py-5 px-3">
        <div>
            <h3 class="text-blue">{{ $frontSetting['home_page_experience'] }}</h3>
            <h4 class="fw-normal mb-0">{{ __('messages.web_home.years_experience') }}</h4>
        </div>
    </div>
</div>
</div>
</div>
<div class="col-lg-6">
    <div class="about-right pb-5 pt-lg-5 text-lg-start text-center">
        <h2 class="mt-md-3">
            {{ \Illuminate\Support\Str::limit(getFrontSettingValue(\App\Models\FrontSetting::ABOUT_US, 'about_us_title'), 31) }}
        </h2>
        <p class="mt-4">
            {{ \Illuminate\Support\Str::limit(getFrontSettingValue(\App\Models\FrontSetting::ABOUT_US, 'about_us_description'), 615) }}
        </p>
        <form action="{{route('appointment', $user->username)}}" class="book-appointment-form" method="GET">
            @csrf
            <button type="submit"
                class="btn btn-primary mb-3 mb-xl-0">{{ __('messages.web_home.book_appointment') }}</button>
        </form>
    </div>
</div>
</div>
</div>
</section> --}}
<!-- end about-section -->

<!-- start service-section -->
{{--<section class="service-section p-t-120 p-b-100 bg-gray">
            <div class="container">
                <div class="col-lg-6 text-center mx-auto">
                    <h6 class="text-primary mb-3">{{ __('messages.web_home.our_services') }}</h6>
<h2 class="mb-4 pb-xl-4">
    {{ __('messages.web_home.we_offer_different_services_to_improve_your_health') }}
</h2>
</div>
<div class="our-service">
    <div class="row justify-content-center">
        @foreach($frontServices as $frontService)
        <div class="col-xl-3 col-lg-4 col-md-6 py-lg-2 card-hover">
            <div class="card p-c-4 my-lg-2 mx-lg-1 my-md-3 my-2">
                <img src="{{ isset($frontService->icon_url) ? $frontService->icon_url : asset('web_front/images/services/medicine.png') }}"
                    class="card-img-top img-wh mx-auto " alt="Cardiology">
                <div class="card-body p-0 text-center">
                    <h4 class="card-title mt-4">{{ \Illuminate\Support\Str::limit($frontService->name, 16) }}</h4>
                    <p class="card-text">{{ \Illuminate\Support\Str::limit($frontService->short_description, 123) }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
</section>--}}
<!-- end service-section -->

<!-- start quality-section -->
{{--<section class="quality-section p-t-120 p-b-200">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="quality-desc mt-lg-4 text-lg-start text-center">
                            <h6 class="text-primary pb-2">
                                {{ \Illuminate\Support\Str::limit($frontSetting['home_page_certified_doctor_text'], 64) }}
</h6>
<h2 class="mb-3">
    {{ \Illuminate\Support\Str::limit($frontSetting['home_page_certified_doctor_title'], 64) }}
</h2>
<p>
    {{ \Illuminate\Support\Str::limit($frontSetting['home_page_certified_doctor_description'], 326) }}
</p>
<a href="{{ route('appointment', $user->username) }}"
    class="btn btn-primary mt-lg-4 mb-lg-0 mb-4">{{ __('messages.web_home.book_appointment') }}</a>
</div>
</div>

<div class="col-lg-6 col-md-12 position-relative">
    <div class="certified-doctor  text-end">
        <img src="{{ asset($frontSetting['home_page_certified_doctor_image']) }}" alt="Certifired Doctor"
            class="img-fluid">
    </div>
    <div class="doctor-desc position-absolute br-2 d-flex align-items-center">
        <div class="icon-box br-5 me-md-4 me-2 text-primary bg-white d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-certificate fs-5"></i>
        </div>

        <div class="desc">
            <h4 class="text-white">
                {{ \Illuminate\Support\Str::limit($frontSetting['home_page_certified_box_title'], 16) }}
            </h4>
            <p class="text-white fs-14 mb-0">
                {{ \Illuminate\Support\Str::limit($frontSetting['home_page_certified_box_description'], 44) }}
            </p>
        </div>
    </div>
</div>
</div>
</div>
</section>--}}
<!-- end quality-section -->

<!-- start professional-doctors section -->
{{-- <section class="professional-doctors-section shape-rectangle position-relative">
            <div class="container">
                <div class="col-lg-6 text-center mx-auto">
                    <h6 class="text-primary mb-3">{{ __('messages.web_home.professional_doctors') }}</h6>
<h2 class="mb-5 pb-xl-3">{{ __('messages.web_home.we_are_experienced_healthcare_professionals') }}</h2>
</div>
<div class="slick-slider">
    @foreach($doctorAppointments as $doctor)
    <div class="slide text-center">
        <img src="{{ $doctor->user->image_url }}" alt="Doctor" class="mx-auto">
        <div class="slide-desc mt-4 text-center">
            <h6>{{ \Illuminate\Support\Str::limit($doctor->user->full_name, 23) }}</h6>
            <p>{{ \Illuminate\Support\Str::limit($doctor->user->qualification, 45) }}</p>
        </div>
    </div>
    @endforeach
</div>
</div>
</section>--}}
<!-- end professional-doctors section -->

<!-- start testimonial-section -->
<section class=" p-t-120">
    {{--   <div class="container">
                <div class="col-lg-6 text-center mx-auto">
                    <h6 class="text-primary pb-2">{{ __('messages.web_home.our_testimonials') }}</h6>
    <h2 class="mb-4 pb-xl-4">
        {{ __('messages.web_home.what_our_patient_say_about_medical_treatments') }}
    </h2>
    </div>
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <div class="testimonial-slider">
                @foreach($testimonials as $testimonial)
                <div class="justify-content-center">
                    <div class="row align-items-center">
                        <div class="col-md-4 col-sm-4 position-relative">
                            <div class="testimonial-img">
                                <img src="{{ $testimonial->document_url }}" alt="testimonial image" class="img-fluid">
                            </div>
                            <div class="quote-img br-5 position-absolute">
                                <img src="{{ asset('web_front/images/testimonials/quote.png') }}" alt="quote">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 position-relative pb-md-5 mb-md-3">
                            <div class="testimonial-desc ps-lg-5 pt-sm-0 pt-4">
                                <h3>{{ \Illuminate\Support\Str::limit($testimonial->name, 46) }}</h3>
                                <p class="mb-0">
                                    {{ $testimonial->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>--}}
    <!-- <div class="button-align col-lg-6">
        <a href="{{ route('plaid-verification', $user->username) }}" class="verify-button">Verify Identity</a>
        <a class="verify-button">Verify Income</a>
    </div> -->
</section>
</div>
<script>
document.getElementById("download-button").addEventListener("click", function() {
    var qrCode = document.getElementById("qr-code").innerHTML;
    var encodedQrCode = encodeURIComponent(qrCode);
    document.getElementById("download-link").href = "data:image/svg+xml," + encodedQrCode;
    document.getElementById("download-link").download = "qr-code.svg";
    document.getElementById("download-link").click();
});
</script>
@endsection