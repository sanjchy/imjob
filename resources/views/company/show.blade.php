@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/job/job.css') }}">
<link rel="stylesheet" href="{{ asset('css/files/index.css') }}">
@endsection
@section('content')
<div class="container-fluid px-lg-5 px-sm-0">
    <div class="row px-lg-5 px-sm-0">
        @include('company.inc.components.LeftSidebar')
        @include('company.inc.components.RightSidebar')
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset("js/note/validation.js") }}"></script>
@endsection
