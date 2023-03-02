@extends('layouts.app')
@section('title')
{{ __('messages.documents') }}
@endsection
@section('css')
{{--    <link rel="stylesheet" href="{{ asset('assets/css/sub-header.css') }}">--}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.plaid.com/link/v2/stable/link-initialize.js"></script>
@endsection

@section('content')
@php
$user = getUser();
@endphp


<div class="container-fluid">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:850px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 heading-bold" id="exampleModalLabel">Add a Co-Applicant to Your Rental
                        Application</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <section class="vh-120 bg-image">
                        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                            <div class="container h-100">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                    <div class="col-12">
                                        <div class="card" style="border-radius: 15px;">
                                            <div class="card-body p-5">
                                                <h2 class="text-start mb-10 heading-bold">Co-Applicant 1</h2>
                                                <h2 style="margin-top: -25px; margin-bottom: 30px; color: #706e6e;">if
                                                    over the age of 18 or required your landlord provide their name and
                                                    email below and <span style="color:#262525; font-weight:600;">we
                                                        will send them an invite to apply.Continue filling out this
                                                        application with your information only.</span></h2>
                                                <form action="{{route('coApplicant')}}" method="POST">
                                                    @csrf
                                                    <div class="form-outline" id="room_fileds">
                                                        <label class="form-label" for="form3Example1cg">Enter Your Full
                                                            Name</label>
                                                        <input type="text" id="form3Example1cg"
                                                            placeholder="Enter Your Full Name" class="form-control"
                                                            name="name[]" required />
                                                        <input type="hidden" value="<?php echo Auth::user()->id; ?>"
                                                            name="user_id">
                                                        <input type="hidden"
                                                            value="<?php echo Auth::user()->tenant_id;?>"
                                                            name="tenant_id">
                                                            <input type="hidden" value="coApplicant" name="role">
                                                        <div class="row">
                                                            <h2 class="mt-5" style="color: #706e6e;">Please provide
                                                                either
                                                                an email address and phone number</h2>
                                                            <div class="form-outline mb-4 col-md-6">
                                                                <label class="form-label" for="form3Example3cg">Enter
                                                                    Your
                                                                    Email</label>
                                                                <input type="email" id="form3Example3cg"
                                                                    placeholder="Enter Your Email" class="form-control"
                                                                    name="email[]" required />
                                                            </div>

                                                            <div class="form-outline mb-4 col-md-6">
                                                                <label class="form-label" for="phoneNumber">Enter
                                                                    Your
                                                                    Phone Number</label>
                                                                <input type="number" id="phoneNumber"
                                                                    placeholder="Enter Your Phone Number"
                                                                    class="form-control" name="phone[]" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 dash-border" onclick="add_fields();">
                                                        <i class="fa fa-add set-add"></i>
                                                        <a class="verify-button add-co-button">Add-Coapplicant</a>
                                                    </div>
                                                    <div class="col-lg-12"
                                                        style="text-align:end; margin: 30px 18px 10px 8px;">
                                                        <button class="verify-button btn btn-primary" type="submit"
                                                            style="border: 1px px solid; padding: 15px 30px; border-radius: 20px; margin: 10px; color: #fff; font-size: 20px; font-weight:600; background-color: #4743c9; text-decoration: none; cursor:pointer;">Continue</button>
                                                    </div>

                                                </form>

                                                <div class="form-check d-flex justify-content-center mb-5">
                                                    <!-- <input class="form-check-input me-2" type="checkbox" value=""
                                                                    id="form2Example3cg" /> -->
                                                    <!-- <label class="form-check-label" for="form2Example3g">
                                                                        I agree all statements in <a href="#!"
                                                                        class="text-body"><u>Terms of service</u></a>
                                                                    </label> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>
    <div class="modal fade" id="gurantorModal" tabindex="-1" aria-labelledby="gurantorModalLabel" aria-hidden="true">
        @include('documents.gurantor')
    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-sm-6 widget">
                    <a class="text-decoration-none" href="{{ route('CoApplicant') }}">
                        <div
                            class="bg-success shadow-md rounded-10 span-xxl-10 px-5 py-10 d-flex align-items-center justify-content-between my-sm-3 my-2">
                            <div
                                class="bg-green-300 widget-icon rounded-10 me-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-toggle-on fs-1-xl text-white"></i>
                            </div>
                            <div class="text-end text-white">
                                <h2 class="fs-1-xxl fw-bolder text-white"
                                    style="font-size: 17px !important; text-transform: capitalize;">
                                    Co-applicant</h2>
                                <h3 class="mb-0 fs-5 fw-light text-white">
                                    12</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xxl-4 col-xl-4 col-sm-6 widget">
                    <a class="text-decoration-none" href="{{ route('CoApplicant') }}">
                        <div
                            class="bg-info shadow-md rounded-10 span-xxl-10 px-5 py-10 d-flex align-items-center justify-content-between my-sm-3 my-2">
                            <div
                                class="bg-blue-300 widget-icon rounded-10 me-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-toggle-off fs-1-xl text-white"></i>
                            </div>
                            <div class="text-end text-white">
                                <h2 class="fs-1-xxl fw-bolder text-white"
                                    style="font-size: 17px !important; text-transform: capitalize;">
                                    Gurantor</h2>
                                <h3 class="mb-0 fs-5 fw-light text-white">
                                    5</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xxl-4 col-xl-4 col-sm-6 widget">
                    <a class="text-decoration-none super-admin-dashboard">
                        <div
                            class="bg-warning shadow-md rounded-10 span-xxl-10 px-5 py-10 d-flex align-items-center justify-content-between my-sm-3 my-2">
                            <div
                                class="bg-yellow-300 widget-icon rounded-10 me-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-hospital fs-1-xl text-white"></i>
                            </div>
                            <div class="text-end text-white">

                                <h2 class="fs-1-xxl fw-bolder text-white"
                                    style="font-size: 17px !important; text-transform: capitalize;">Approve Income</h2>
                                <h3 class="mb-0 fs-5 fw-light text-white">$10000</h3>

                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 row" style="margin-top:50px;">
        <div class="col-lg-6">
            <a class="verify-button co-app-button1" href="{{ route('plaid-verification')}}">Verify
                Identity</a>
            <button class="verify-button link-account co-app-button">Verify
                Income</button>
        </div>
        <div class="col-lg-6" style="text-align:end;">
            <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="verify-button co-app-button"
                class="">Add Up To 2 Co-Applicant</button>
            <button data-bs-toggle="modal" data-bs-target="#gurantorModal" class="verify-button co-app-button"
                class="">Add-Gurantor</button>
        </div>
    </div>
    <script>
    $(".link-account").click(function() {
        createLinkToken();
    });

    function createLinkToken() {
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            },
            url: "/createLinkToken",
            type: "GET",
            dataType: "json",
            success: function(response) {
                const data = JSON.parse(response.data);
                console.log('Link Token: ' + data.link_token);
                linkPlaidAccount(data.link_token);
            },
            error: function(err) {
                console.log('Error creating link token.');
                const errMsg = JSON.parse(err);
                alert(err.error_message);
                console.error("Error creating link token: ", err);
            }
        });
    }

    function linkPlaidAccount(linkToken) {
        var linkHandler = Plaid.create({
            token: linkToken,
            onSuccess: function(public_token, metadata) {
                var body = {
                    public_token: public_token,
                    accounts: metadata.accounts,
                    institution: metadata.institution,
                    link_session_id: metadata.link_session_id,
                    link_token: linkToken
                };
                $.ajax({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                    },
                    url: "/storePlaidAccount",
                    type: "POST",
                    data: body,
                    dataType: "json",
                    success: function(data) {
                        getInvestmentHoldings(data.item_id);
                    },
                    error: function(err) {
                        console.log('Error linking Plaid account.');
                        const errMsg = JSON.parse(err);
                        console.error("Error linking Plaid account: ", err);
                    }
                });
            },
            onExit: function(err, metadata) {
                console.log("linkBankAccount error=", err, metadata);
                const errMsg = JSON.parse(err);
                console.error("Error linking Plaid account: ", err);

                linkHandler.destroy();
                if (metadata.link_session_id == null && metadata.status == "requires_credentials") {
                    createLinkToken();
                }
            }
        });
        linkHandler.open();
    }
    
    function getInvestmentHoldings(itemId) {
    var body = {
        itemId: itemId,
    };
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
        url: "/getInvestmentHoldings",
        type: "POST",
        data: body,
        dataType: "json",
        success: function (data) {
            console.log("Plaid holdings successfully imported.");
        },
        error: function (err) {
            console.log('ssssdddddddddddddd',err);
            const errMsg = JSON.parse(err);
            alert(err.error_message);
            console.error("Error importing holdings from Plaid: ", err);
        }
    });
}
    </script>

</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script type="text/javascript">
var room = 0;

function add_fields() {
    room++;
    if (room == 1) {
        var objTo = document.getElementById('room_fileds')
        var divtest = document.createElement("div");
        divtest.innerHTML =
            '<div class="form-outline" id="room_fileds"><h2 class="text-start heading-bold"> Co-Applicant 2</h2><label class="form-label" for="form3Example1cg">Enter Your Full Name</label><input type="hidden"value="<?php echo Auth::user()->tenant_id;?>"name="tenant_id"> <input type="text" id="form3Example1cg" placeholder="Enter Your Full Name" class="form-control" name="name[]" required /><input type="hidden" value="<?php echo Auth::user()->id; ?>" name="user_id"> <div class="row"><h2 class="mt-5" style="color: #706e6e;">Please provide either an email address and phone number</h2> <div class="form-outline mb-4 col-md-6"> <label class="form-label" for="form3Example3cg">Enter Your Email</label> <input type="email" id="form3Example3cg" placeholder="Enter Your Email" class="form-control" name="email[]" required /> </div><div class="form-outline mb-4 col-md-6"> <label class="form-label" for="phoneNumber">Enter Your Phone Number</label><input type="number" id="phoneNumber" placeholder="Enter Your Phone Number" class="form-control" name="phone[]" required /></div></div></div>';

        objTo.appendChild(divtest)
    }
}



// $(document).ready(function(e) {
//     $("#loadData").hide();
//     $(document).on('click', '#load_more', function(e) {
//         $("#loadData").show();
//     });
// });
// $(document).ready(function(e) {
//     var limit = 1;
//     // $("#loadMore").slice(1, limit).hide();
//     console.log('11111111111111111');
//     $(document).on('click', '#load_more', function(e) {
//         console.log('222222222222222');
//         limit += 1;
//         e.preventDefault();
//         $("#loadMore").slice(1, limit).show();
//     });
// });
</script>
{{--    <script src="{{ mix('assets/js/custom/delete.js') }}"></script>--}}
{{--    <script src="{{ mix('assets/js/custom/reset_models.js') }}"></script>--}}
{{--let documentsCreateUrl = "{{route('documents.store')}}";--}}
{{--let documentsUrl = "{{route('documents.index')}}";--}}
{{--let defaultDocumentImageUrl = "{{ asset('assets/img/default_image.jpg') }}";--}}
{{--let downloadDocumentUrl = "{{ url('document-download') }}";--}}
{{--let patientUrl = "{{ route('patients.index') }}";--}}
{{--    <script src="{{ mix('assets/js/document/document.js') }}"></script>--}}
{{--    <script src="{{ mix('assets/js/custom/new-edit-modal-form.js') }}"></script>--}}