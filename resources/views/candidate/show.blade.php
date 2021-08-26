@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/user/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/user/rightSidebar.css') }}">
<link rel="stylesheet" href="{{ asset('css/job/job.css') }}">
<style>
    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        background-color: #dee5eb !important;
        opacity: 1;
        color: black !important;
        box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
    }

</style>
@endsection
@section('content')
<div class="col-xl-10 col-lg-10 col-md-10 offset-1">
    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid">
                @if (session()->has('message'))
                <div class="alert alert-dismissable {{ session('type') }} shadow-sm mb-0">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <span>{!! session('message') !!}</span>
                </div>
                @endif
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="container-fluid px-0">
                    @if (session()->has('message'))
                    <div class="alert alert-dismissable {{ session('type') }} shadow-sm mb-0">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <span>{!! session('message') !!}</span>
                    </div>
                    @endif
                </div>
                @include('candidate.inc.leftSidebar')
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                @include('candidate.inc.rightSidebar')
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/candidate/assignJob.js') }}"></script>
<script src="{{ asset('js/recruitment/updateRecruitment.js') }}"></script>
<script src="{{ asset('js/recruitment/deleteRecruitment.js') }}"></script>
@endsection
