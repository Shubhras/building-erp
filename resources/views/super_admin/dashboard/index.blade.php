@extends('layouts.app')
@section('title')
{{ __('messages.dashboard.dashboard') }}
@endsection
@section('page_css')
{{--    <link href="{{ mix('assets/css/dashboard.css') }}" rel="stylesheet" type="text/css"/>--}}
@endsection
@section('content')
{{--    {{Form::hidden('super_admin_dashboard',true,['class'=>'super-admin-dashboard'])}}--}}
<style>
    .nav-tabs .nav-item .nav-link:after{
        border-bottom: none !important;
    }
</style>
<div class="container-fluid">
    <div class="d-flex flex-column">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="row">
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                        <a href="{{route('super.admin.hospitals.index') }}"
                            class="text-decoration-none super-admin-dashboard">
                            <div
                                class="bg-warning shadow-md rounded-10 span-xxl-10 px-5 py-10 d-flex align-items-center justify-content-between my-sm-3 my-2">
                                <div
                                    class="bg-yellow-300 widget-icon rounded-10 me-2 d-flex align-items-center justify-content-center">
                                    <i class="fas fa-hospital fs-1-xl text-white"></i>
                                </div>
                                <div class="text-end text-white">

                                    <h2 class="fs-1-xxl fw-bolder text-white">{{formatCurrency($data['users'])}}</h2>
                                    <h3 class="mb-0 fs-5 fw-light text-white">{{ __('total building') }}</h3>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                        <a href="{{ route('subscriptions.transactions.index') }}" class="text-decoration-none">
                            <div
                                class="bg-primary shadow-md rounded-10 span-xxl-10 px-5 py-10 d-flex align-items-center justify-content-between my-sm-3 my-2">
                                <div
                                    class="bg-cyan-300 widget-icon rounded-10 me-2 d-flex align-items-center justify-content-center">
                                    <i class="fas fa-money-bill-wave fs-1-xl text-white"></i>
                                </div>
                                <div class="text-end text-white">

                                    <h2 class="fs-1-xxl fw-bolder text-white">{{formatCurrency($data['revenue'], 2)}}
                                    </h2>
                                    <h3 class="mb-0 fs-5 fw-light text-white">
                                        {{ __('messages.dashboard.total_revenue') }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                        <a href="{{ route('super.admin.subscription.plans.index') }}" class="text-decoration-none">
                            <div
                                class="bg-success shadow-md rounded-10 span-xxl-10 px-5 py-10 d-flex align-items-center justify-content-between my-sm-3 my-2">
                                <div
                                    class="bg-green-300 widget-icon rounded-10 me-2 d-flex align-items-center justify-content-center">
                                    <i class="fas fa-toggle-on fs-1-xl text-white"></i>
                                </div>
                                <div class="text-end text-white">
                                    <h2 class="fs-1-xxl fw-bolder text-white">
                                        {{formatCurrency($data['activeHospitalPlan'])}}</h2>
                                    <h3 class="mb-0 fs-5 fw-light text-white">
                                        {{ __('messages.dashboard.total_active_hospital_plan') }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                        <a href="{{ route('super.admin.subscription.plans.index') }}" class="text-decoration-none">
                            <div
                                class="bg-info shadow-md rounded-10 span-xxl-10 px-5 py-10 d-flex align-items-center justify-content-between my-sm-3 my-2">
                                <div
                                    class="bg-blue-300 widget-icon rounded-10 me-2 d-flex align-items-center justify-content-center">
                                    <i class="fas fa-toggle-off fs-1-xl text-white"></i>
                                </div>
                                <div class="text-end text-white">
                                    <h2 class="fs-1-xxl fw-bolder text-white">
                                        {{ formatCurrency($data['deActiveHospitalPlan'])}}</h2>
                                    <h3 class="mb-0 fs-5 fw-light text-white">
                                        {{ __('messages.dashboard.total_expired_hospital_plan') }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{--<div class="row mt-4">
            <div class="col-lg-12 col-xl-3 col-md-12 col-sm-12">
                <h1 class="heading-bold">{{ __('messages.dashboard.income_report') }}</h1>
            </div>
            <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 ms-auto">
                <div class="form-group mb-3 d-flex">
                    <a href="javascript:void(0)" class="btn btn-icon btn-primary me-5 ps-3 pe-2" title="Switch Chart">
                        <span class="m-0 text-center" id="changeChart">
                            <i class="fas fa-chart-bar fs-1 chart"></i>
                        </span>
                    </a>
                    <input class="form-control" autocomplete="off"
                        placeholder="{{ __('messages.dashboard.please_select_rang_picker') }}" id="chartFilter" />
                </div>
            </div>
        </div>--}}
        {{--<div class="row">
            <div id="hospitalIncomeChart"></div>
        </div>--}}
    </div>

    {{--<div class="row mt-4 section-all">
                <div class="col-lg-12 col-md-12 col-sm-12 section-text">
                <h1 class="heading-bold ">Activity</h1>
                <span class="sub-heading">Updated every several minutes</span>
                </div>
                <div class="top-area d-flex align-items-center justify-content-between">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active static-table" id="latest-tab" data-bs-toggle="tab" data-bs-target="#latest" type="button" role="tab" aria-controls="latest" aria-selected="true">Latest</button>
                        </li>
                        <li class="nav-item" role="presentation">
                             <button class="nav-link static-table" id="upcoming-tab" data-bs-toggle="tab" data-bs-target="#upcoming" type="button" role="tab" aria-controls="upcoming" aria-selected="false">Upcoming</button>
                        </li>
                    </ul>
                        <div class="view-all d-flex align-items-center">
                            <a href="javascript:void(0)">View All</a>
                         </div>
                 </div>
    </div>--}}
    <div class="transactions-area" style="margin-top: 40px;">
        <div class="section-text">
            <h5 class="heading-bold">Activity</h5>
            <span style="font-size:18px; color:#0c266c;">Updated every several minutes</span>
        </div>
        <div class="top-area d-flex align-items-center justify-content-between">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active static-table" id="latest-tab" data-bs-toggle="tab"
                        data-bs-target="#latest" type="button" role="tab" aria-controls="latest"
                        aria-selected="true">Latest</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link static-table" id="upcoming-tab" data-bs-toggle="tab"
                        data-bs-target="#upcoming" type="button" role="tab" aria-controls="upcoming"
                        aria-selected="false">Upcoming</button>
                </li>
            </ul>
            {{--<div class="view-all d-flex align-items-center">
                                        <a href="javascript:void(0)">View All</a>
                                        <img src="assets/images/icon/right-arrow.png" alt="icon">
                                    </div>--}}
        </div>
        <div class="tab-content" style="margin-top: 40px;">
            <div class="tab-pane fade active show" id="latest" role="tabpanel" aria-labelledby="latest-tab">
                <div class="table-responsive">
                    <table class="table">
                        <thead style="background-color:#e1ddef;"> 
                            <tr>
                                <th scope="col">Name/ Business</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                <th scope="row">
                                    <div class="d-flex flex-column">
                                        <span class="table-font">Dwayne John</span>
                                        <span class="mdr sub-heading">Income Verified</span>
                                    </div>
                                </th>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">03:00 PM</span>
                                        <span class="mdr sub-heading">10 Mar 2022</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="completed sub-heading">Approv</span>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">$5,200</span>
                                        <span class="mdr sub-heading">$6.00 Fee</span>
                                    </div>
                                </td>
                            </tr>
                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                <th scope="row">
                                    <div class="d-flex flex-column">
                                        <span class="table-font">Mark Zuck</span>
                                        <span class="mdr sub-heading">Rent Payment Received</span>
                                    </div>
                                </th>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">04:30 PM</span>
                                        <span class="mdr sub-heading">01 Mar 2022</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="completed sub-heading">Rent Paid</span>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">+$4,500</span>
                                        <span class="mdr sub-heading">$12.00 Fee</span>
                                    </div>
                                </td>
                            </tr>
                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                <th scope="row">
                                    <div class="d-flex flex-column">
                                        <span class="table-font">Rob Stewart</span>
                                        <span class="mdr sub-heading">ID Verified</span>
                                    </div>

                                </th>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">01:15 PM</span>
                                        <span class="mdr sub-heading">25 Mar 2022</span>
                                    </div>

                                </td>
                                <td>
                                    <span class="completed sub-heading">Passed</span>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">$2.00</span>
                                        <span class="mdr sub-heading">Fee</span>
                                    </div>

                                </td>
                            </tr>
                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                <th scope="row">
                                    <div class="d-flex flex-column">
                                        <span class="table-font">Jeff Stien</span>
                                        <span class="mdr sub-heading">Tenant Screening</span>
                                    </div>

                                </th>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">07:05 PM</span>
                                        <span class="mdr sub-heading">15 Mar 2022</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="pending sub-heading">Needs Review</span>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">$38</span>
                                        <span class="mdr sub-heading">No Fees</span>
                                    </div>
                                </td>
                            </tr>
                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                <th scope="row">
                                    <div class="d-flex flex-column">
                                        <span class="table-font">Upwork Escow Inc</span>
                                        <span class="mdr sub-heading">Income Verified</span>
                                    </div>
                                </th>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">04:02 PM</span>
                                        <span class="mdr sub-heading">10 Mar 2022</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="completed sub-heading">Completed</span>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">$11,450</span>
                                        <span class="mdr sub-heading">$6 Fee</span>
                                    </div>
                                </td>
                            </tr>
                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                <th scope="row" style="border-bottom:none;">
                                    <div class="d-flex flex-column">
                                        <span class="table-font">Ron Stewart</span>
                                        <span class="mdr sub-heading">ID Verified</span>
                                    </div>
                                </th>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">11:00 PM</span>
                                        <span class="mdr sub-heading">21 Mar 2022</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="cancelled sub-heading">Failed</span>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">+$2.00</span>
                                        <span class="mdr sub-heading">Fee</span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="upcoming" role="tabpanel" aria-labelledby="upcoming-tab">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name/ Business</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                <th scope="row">
                                    <div class="d-flex flex-column">
                                        <span class="table-font">Bangkok Bank</span>
                                        <span class="mdr su-heading">Withdraw to bank account</span>
                                    </div>
                                </th>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">03:00 PM</span>
                                        <span class="mdr sub-heading">10 Mar 2022</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="inprogress sub-heading">In Progress</span>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">-$520</span>
                                        <span class="mdr sub-heading">$3.0</span>
                                    </div>
                                </td>
                            </tr>
                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                <th scope="row">
                                    <div class="d-flex flex-column">
                                        <span class="table-font">Envato Pty Ltd</span>
                                        <span class="mdr sub-heading">Marketplace Payment Received</span>
                                    </div>
                                </th>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">04:30 PM</span>
                                        <span class="mdr sub-heading">01 Mar 2022</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="completed sub-heading">Completed</span>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">+$450</span>
                                        <span class="mdr sub-heading">No Fees</span>
                                    </div>
                                </td>
                            </tr>
                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                <th scope="row">
                                    <div class="d-flex flex-column">
                                        <span class="table-font">Mailchimp</span>
                                        <span class="mdr sub-heading">Subscription Service Payment</span>
                                    </div>
                                </th>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">01:15 PM</span>
                                        <span class="mdr sub-heading">25 Mar 2022</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="completed sub-heading">Completed</span>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">-$100</span>
                                        <span class="mdr sub-heading">No Fees</span>
                                    </div>
                                </td>
                            </tr>
                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                <th scope="row">
                                    <div class="d-flex flex-column">
                                        <span class="table-font">Facebook Ads</span>
                                        <span class="mdr sub-heading">Ads Service</span>
                                    </div>
                                </th>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">07:05 PM</span>
                                        <span class="mdr sub-heading">15 Mar 2022</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="pending sub-heading">Pending</span>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">$200</span>
                                        <span class="mdr sub-heading">No Fees</span>
                                    </div>
                                </td>
                            </tr>
                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                <th scope="row">
                                    <div class="d-flex flex-column">
                                        <span class="table-font">Upwork Escow Inc</span>
                                        <span class="mdr sub-heading">Payment payment</span>
                                    </div>
                                </th>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">04:02 PM</span>
                                        <span class="mdr sub-heading">10 Mar 2022</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="completed sub-heading">Completed</span>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">$450</span>
                                        <span class="mdr sub-heading">$.5</span>
                                    </div>
                                </td>
                            </tr>
                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                <th scope="row">
                                    <div class="d-flex flex-column">
                                        <span class="table-font">Ron Stewart</span>
                                        <span class="mdr sub-heading">Payment Refund</span>
                                    </div>
                                </th>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">11:00 PM</span>
                                        <span class="mdr sub-heading">21 Mar 2022</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="cancelled sub-heading">Cancelled</span>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="table-font">+$450</span>
                                        <span class="mdr sub-heading">No Fees</span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="container-fruid">
        <div class="head-area">
            <div class="row">
                <div class="col-lg-5 col-md-4" style="width:64%">
                    <h4 class="header-link">ID Verifications</h4>
                </div>
                <div class="col-lg-7 col-md-8" style="width:30%">
                    <div class="position-relative d-flex width-320  width-sm-280 transactions-right">
                        <form class="width-320  width-sm-280">
                            <span
                                class="position-absolute d-flex align-items-center top-0 bottom-0 left-0 text-gray-600 ms-3">
                                <i class="fa-solid fa-magnifying-glass"></i> </span>
                            <input class="form-control ps-8" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="transactions-main">
                    <div class="top-items">
                        <h6 class="table-font">All ID Verifications</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead style="background-color:#e1ddef;">
                                <tr>
                                    <th scope="col">Name/ Business</th>
                                    <th scope="col" style="text-align:center;">Date</th>
                                    <th scope="col" style="text-align:center;">Status</th>
                                    <th scope="col" style="text-align:center;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                    <th scope="row">
                                        <div class="d-flex flex-column">
                                            <span class="table-font">Tim Allan</span>
                                            <span class="mdr sub-heading">ID Verified Received</span>
                                        </div>
                                    </th>
                                    <td style="text-align:center;">
                                        <div class="d-flex flex-column">
                                            <span class="table-font">03:00 PM</span>
                                            <span class="mdr sub-heading">10 Mar 2022</span>
                                        </div>
                                    </td>
                                    <td style="text-align:center;">
                                        <span class="completed sub-heading" style="color:#49C96D;">Passed</span>
                                    </td>
                                    <td>
                                    </td>

                                </tr>
                                <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                    <th scope="row">
                                        <div class="d-flex flex-column">
                                            <span class="table-font">Frank Gucci</span>
                                            <span class="mdr sub-heading">ID Verified Received</span>
                                        </div>
                                    </th>
                                    <td style="text-align:center;">
                                        <div class="d-flex flex-column">
                                            <span class="table-font">04:30 PM</span>
                                            <span class="mdr sub-heading">01 Mar 2022</span>
                                        </div>
                                    </td>
                                    <td style="text-align:center;">
                                        <span class="completed" style="color:#49C96D;">Passed</span>
                                    </td>
                                    <td>
                                    </td>

                                </tr>
                                <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                    <th scope="row">
                                        <div class="d-flex flex-column">
                                            <span class="table-font">Dwayne John</span>
                                            <span class="mdr sub-heading">ID Verified Received</span>
                                        </div>
                                    </th>
                                    <td style="text-align:center;">
                                        <div class="d-flex flex-column">
                                            <span class="table-font">01:15 PM</span>
                                            <span class="mdr sub-heading">25 Mar 2022</span>
                                        </div>
                                    </td>
                                    <td style="text-align:center;">
                                        <span class="completed" style="color:#49C96D;">Completed</span>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                    <th scope="row">
                                        <div class="d-flex flex-column">
                                            <span class="table-font">Mark Zuck</span>
                                            <span class="mdr sub-heading">ID Verified Received</span>
                                        </div>
                                    </th>
                                    <td style="text-align:center;">
                                        <div class="d-flex flex-column">
                                            <span class="table-font">07:05 PM</span>
                                            <span class="mdr sub-heading">15 Mar 2022</span>
                                        </div>
                                    </td>
                                    <td style="text-align:center;">
                                        <span class="pending" style="color:#F7A94A;">Needs Review</span>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                    <th scope="row">
                                        <div class="d-flex flex-column">
                                            <span class="table-font">Elon Musket</span>
                                            <span class="mdr sub-heading">ID Verified Received</span>
                                        </div>
                                    </th>
                                    <td style="text-align:center;">
                                        <div class="d-flex flex-column">
                                            <span class="table-font">04:02 PM</span>
                                            <span class="mdr sub-heading">10 Mar 2022</span>
                                        </div>
                                    </td>
                                    <td style="text-align:center;">
                                        <span class="completed" style="color:#49C96D;">Completed</span>
                                    </td>

                                    <td>
                                    </td>
                                </tr>
                                <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                    <th scope="row" style="border-bottom:none;">
                                        <div class="d-flex flex-column">
                                            <span class="table-font">Rob Stewart</span>
                                            <span class="mdr sub-heading">ID Verified Received</span>
                                        </div>
                                    </th>
                                    <td style="text-align:center;">
                                        <div class="d-flex flex-column">
                                            <span class="table-font">11:00 PM</span>
                                            <span class="mdr sub-heading">21 Mar 2022</span>
                                        </div>
                                    </td>
                                    <td style="text-align:center;">
                                        <span class="cancelled" style="color:#E9687F;">Failed</span>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}

    {{--<div class="container-fruid" style="margin-top:40px;">
        <div class="row">
            <div class="col-xl-12">
                <div class="transactions-main1">
                    <div class="filters-item d-flex justify-content-lg-between">
                        <div class="single-item search-area">
                            <div class="col-lg-7 col-md-8">
                                <div class="position-relative d-flex width-320  width-sm-280 transactions-right">
                                    <form class="width-320  width-sm-280">
                                        <span
                                            class="position-absolute d-flex align-items-center top-0 bottom-0 left-0 text-gray-600 ms-3">
                                            <i class="fa-solid fa-magnifying-glass"></i> </span>
                                        <input class="form-group ps-8" type="search" placeholder="Search"
                                            aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="right-area d-flex align-items-center">
                            <div class="single-item">
                                <span data-bs-toggle="modal" data-bs-target="#recipientsMod" style="color:#fff; font-size:18px;">
                                    <i class="fa fa-plus action-icon" style="margin: 0px 5px 2px 0px"></i>
                                    New Applicant
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name/ Business</th>
                                    <th scope="col">Mthly Income</th>
                                    <th scope="col">Mthly Rent </th>
                                    <th scope="col" style="text-align:center;">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-bs-toggle="modal" data-bs-target="#cardMod">
                                    <th scope="row">
                                        <div class="info-area">
                                            <div class="text-area">
                                                <div class="d-flex flex-column">
                                                    <span class="table-font">Darlene Robertson</span>
                                                    <span class="mdr sub-heading">jackson.graham@example.com</span>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="table-font">$12,234.58</span>
                                            <span class="mdr sub-heading">Mar 10, 2022</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="table-font">$4,900.00</span>
                                            <span class="mdr sub-heading">Approv. Limit</span>
                                        </div>
                                    </td>
                                    <td class="btn-item sub-heading" style="text-align:center;">
                                        <a href="javascript:void(0)" class="sub-heading">View Report</a>
                                    </td>
                                </tr>
                                <tr data-bs-toggle="modal" data-bs-target="#cardMod">
                                    <th scope="row">
                                        <div class="info-area">
                                            <div class="text-area">
                                                <div class="d-flex flex-column">
                                                    <span class="table-font">Eleanor Pena</span>
                                                    <span class="mdr sub-heading">michelle.rivera@example.com</span>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="table-font">$9,000.00</span>
                                            <span class="mdr sub-heading">Oct 22, 2022</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="table-font">$3,600.00</span>
                                            <span class="mdr sub-heading">Approv. Limit</span>
                                        </div>
                                    </td>
                                    <td class="btn-item" style="text-align:center;">
                                        <a href="javascript:void(0)" class=" sub-heading">View Report</a>
                                    </td>
                                </tr>
                                <tr data-bs-toggle="modal" data-bs-target="#cardMod">
                                    <th scope="row">
                                        <div class="info-area">
                                            <div class="text-area">
                                                <div class="d-flex flex-column">
                                                    <span class="table-font">Floyd Miles</span>
                                                    <span class="mdr sub-heading">michael.mitc@example.com</span>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="table-font">$14,000.00</span>
                                            <span class="mdr sub-heading">May 24, 2022</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="table-font">$5,600.00</span>
                                            <span class="mdr sub-heading">Approv. Limit</span>
                                        </div>
                                    </td>
                                    <td class="btn-item sub-heading" style="text-align:center;">
                                        <a href="javascript:void(0)"  class="sub-heading">View Report</a>
                                    </td>
                                </tr>
                                <tr data-bs-toggle="modal" data-bs-target="#cardMod">
                                    <th scope="row">
                                        <div class="info-area">
                                            <div class="text-area">
                                                <div class="d-flex flex-column">
                                                    <span class="table-font">Theresa Webb</span>
                                                    <span class="mdr sub-heading">dolores.chambers@example.com</span>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="table-font">$18,000.00</span>
                                            <span class="mdr sub-heading">May 24, 2022</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="table-font">$7,200.00</span>
                                            <span class="mdr sub-heading">Approv. Limit</span>
                                        </div>
                                    </td>
                                    <td class="btn-item sub-heading" style="text-align:center;">
                                        <a href="javascript:void(0)"  class="sub-heading">View Report</a>
                                    </td>
                                </tr>
                                <tr data-bs-toggle="modal" data-bs-target="#cardMod">
                                    <th scope="row">
                                        <div class="info-area">
                                            <div class="text-area">
                                                <div class="d-flex flex-column">
                                                    <span class="table-font">Esther Howard</span>
                                                    <span class="mdr sub-heading">jackson.graham@example.com</span>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="table-font">$12,000.00</span>
                                            <span class="mdr sub-heading">May 24, 2022</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="table-font">$4,800.00</span>
                                            <span class="mdr sub-heading">Approv. Limit</span>
                                        </div>
                                    </td>
                                    <td class="btn-item sub-heading" style="text-align:center;">
                                        <a href="javascript:void(0)"  class="sub-heading">View Report</a>
                                    </td>
                                </tr>
                                <tr data-bs-toggle="modal" data-bs-target="#cardMod">
                                    <th scope="row">
                                        <div class="info-area">
                                            <div class="text-area">
                                                <div class="d-flex flex-column">
                                                    <span class="table-font">Jane Cooper</span>
                                                    <span class="mdr sub-heading">debra.holt@example.com</span>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="table-font">$10,000.00</span>
                                            <span class="mdr sub-heading">May 24, 2022t</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="table-font">$4,000.00</span>
                                            <span class="mdr sub-heading">Approv. Limit</span>
                                        </div>
                                    </td>
                                    <td class="btn-item sub-heading" style="text-align:center;">
                                        <a href="javascript:void(0)"  class="sub-heading">View Report</a>
                                    </td>
                                </tr>
                                <tr data-bs-toggle="modal" data-bs-target="#cardMod">
                                    <th scope="row">
                                        <div class="info-area">
                                            <div class="text-area">
                                                <div class="d-flex flex-column">
                                                    <span class="table-font">Brooklyn Simmons</span>
                                                    <span class="mdr sub-heading">nathan.roberts@example.com</span>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="table-font">$10,000.00</span>
                                            <span class="mdr sub-heading">May 24, 2022</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="table-font">$4,000.00</span>
                                            <span class="mdr sub-heading">Approv. Limit</span>
                                        </div>
                                    </td>
                                    <td class="btn-item sub-heading" style="text-align:center;">
                                        <a href="javascript:void(0)"  class="sub-heading">View Report</a>
                                    </td>
                                </tr>
                                <tr data-bs-toggle="modal" data-bs-target="#cardMod">
                                    <th scope="row">
                                        <div class="info-area">
                                            <div class="text-area">
                                                <div class="d-flex flex-column">
                                                    <span class="table-font">Darrell Steward</span>
                                                    <span class="mdr sub-heading">tim.jennings@example.com</span>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="table-font">$12,000.00</span>
                                            <span class="mdr sub-heading">May 24, 2022</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="table-font">$4,800.00</span>
                                            <span class="mdr sub-heading">Approv. Limit</span>
                                        </div>
                                    </td>
                                    <td class="btn-item sub-heading" style="text-align:center;">
                                        <a href="javascript:void(0)"  class="sub-heading">View Report</a>
                                    </td>
                                </tr>
                                <tr data-bs-toggle="modal" data-bs-target="#cardMod">
                                    <th scope="row">
                                        <div class="info-area">
                                            <div class="text-area">
                                                <div class="d-flex flex-column">
                                                    <span class="table-font">Savannah Nguyen</span>
                                                    <span class="mdr sub-heading">curtis.weaver@example.com</span>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="table-font">$18,000.00</span>
                                            <span class="mdr sub-heading">May 24, 2022</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="table-font">$7,200.00</span>
                                            <span class="mdr sub-heading">Approv. Limit</span>
                                        </div>
                                    </td>
                                    <td class="btn-item sub-heading" style="text-align:center;">
                                        <a href="javascript:void(0)"  class="sub-heading">View Report</a>
                                    </td>
                                </tr>
                                <tr data-bs-toggle="modal" data-bs-target="#cardMod">
                                    <th scope="row">
                                        <div class="info-area">
                                            <div class="text-area">
                                                <div class="d-flex flex-column">
                                                    <span class="table-font">Jane Cooper</span>
                                                    <span class="mdr sub-heading">debra.holt@example.com</span>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="table-font">$10,500.00</span>
                                            <span class="mdr sub-heading">May 24, 2022</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="table-font">$4,200.00</span>
                                            <span class="mdr sub-heading">Approv. Limit</span>
                                        </div>
                                    </td>
                                    <td class="btn-item" style="text-align:center;">
                                        <a href="javascript:void(0)"  class="sub-heading">View Report</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
</div>
@endsection
{{--    <script src="{{ asset('assets/js/plugins/daterangepicker.js') }}"></script>--}}
{{--    <script src="{{ mix('assets/js/super_admin/dashboard/dashboard.js') }}"></script>--}}