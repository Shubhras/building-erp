@extends('layouts.app')
@section('title')
    {{__('new')}} {{ __('messages.admin') }}
@endsection
@section('header_toolbar')
    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-7">
            <h1 class="mb-0 header-link" style="text-transform: capitalize;">@yield('title')</h1>
            <a href="{{ route('admins.index') }}"
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
                <div class="card-body">
                    {!! Form::open(['route' => 'admins.store', 'files' => true, 'id' => 'createAdminForm']) !!}

                    @include('admins.fields')

                    {!! Form::close() !!}
                </div>
{{--            </div>--}}
{{--            {{ Form::hidden('utilScript', asset('assets/js/int-tel/js/utils.min.js'), ['class' => 'utilScript']) }}--}}
{{--            {{ Form::hidden('isEdit', false, ['class' => 'isEdit']) }}--}}
{{--            {{ Form::hidden('defaultAvatarImageUrl', asset('assets/img/avatar.png'), ['id' => 'defaultAccountantAvatarImageUrl']) }}--}}
        </div>
        </div>
    </div>
@endsection
