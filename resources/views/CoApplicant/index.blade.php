@extends('layouts.app')
@section('title')
{{ __('messages.dashboard.income_verification') }}
@endsection
@section('page_css')
{{--    <link href="{{ mix('assets/css/dashboard.css') }}" rel="stylesheet" type="text/css"/>--}}
@endsection
@section('content')
<div class="container-fluid mt-3">
    <form action="">
        <div class="mb-3 form-group width-320">
            <input type="search" class="form-control" name="search" placeholder="Search by name or email...."
                value="{{$search ?? ''}}" />
            <!-- <button class="btn btn-primary m-2">Search </button> -->
        </div>
    </form>
    <div class="table-responsive">
        <table class="table table-striped border-bottom-0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($views as $viewss)
                <tr style="border:none;">
                    <td scope="row" style="border:none;padding: 20px 30px !important;">{{$viewss->name}}</td>
                    <td style="border:none;padding: 20px 30px !important;">{{$viewss->email}}</td>
                    <td style="border:none;padding: 20px 30px !important;">{{$viewss->phone}}</td>
                    <td style="border:none;padding: 20px 30px !important;">{{$viewss->status}}</td>
                    <td style="border:none;padding: 20px 30px !important;">
                        <!-- <a href="{{url('/delete/')}}/{{$viewss->id}}">
                            <button class="btn btn-danger mx-2">Delete</button></a>

                        </a> -->
                        <i class="fa-solid fa-trash px-2 text-danger"></i>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $views->links() }}
    </form>
    @endsection
    {{--    <script src="{{ asset('assets/js/plugins/daterangepicker.js') }}"></script>--}}
    {{--    <script src="{{ mix('assets/js/super_admin/dashboard/dashboard.js') }}"></script>--}}