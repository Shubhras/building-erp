@extends('layouts.app')
@section('title')
    {{ __('messages.hospitals_list.new_hospital') }}
@endsection
@section('page_css')
{{--    <link rel="stylesheet" href="{{ asset('assets/css/int-tel/css/intlTelInput.css') }}">--}}
@endsection
@section('header_toolbar')
    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-7">
            <h1 class="mb-0 header-link">@yield('title')</h1>
            <a href="{{ route('super.admin.hospitals.index') }}"
               class="btn btn-outline-primary">{{ __('messages.common.back') }}</a>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <div class="row">
                <div class="col-12">
                    @include('layouts.errors')
                </div>
            </div>
            <div class="card">
                <div class="card-body p-12">
                    {{ Form::hidden('isEdit', false, ['class' => 'isEdit']) }}
                    {{ Form::hidden('utilsScript', asset('assets/js/int-tel/js/utils.min.js'), ['class' => 'utilsScript']) }}
                    {{ Form::hidden('phoneNo', old('prefix_code').old('phone'), ['class' => 'phoneNo']) }}
                    {{ Form::open(['route' => ['hospital.store'], 'method'=>'post', 'files' => true, 'id' => 'createHospitalUserForm']) }}
                    @include('super_admin.users.fields')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
{{--let utilsScript = "{{asset('assets/js/int-tel/js/utils.min.js')}}";--}}
{{--let phoneNo = "{{ old('prefix_code').old('phone') }}";--}}
{{--isEdit = false;--}}
{{--    <script src="{{ mix('assets/js/super_admin/users/create-edit.js') }}"></script>--}}
{{--    <script src="{{ mix('assets/js/custom/phone-number-country-code.js') }}"></script>--}}

