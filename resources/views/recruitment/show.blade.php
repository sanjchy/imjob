@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/job/job.css') }}">
<link rel="stylesheet" href="{{ asset('css/job/information.css') }}">
<link rel="stylesheet" href="{{ asset('css/files/index.css') }}">

@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        {{-- Left Container --}}
        @include('recruitment.components.candidate')
        {{-- Company && Job Container --}}
        @include('recruitment.components.middle')
        {{-- Right Container --}}
        @include('recruitment.components.right')
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset("js/recruitment/updateRecruitment.js") }}"></script>
<script src="{{ asset("js/recruitment/deleteRecruitment.js") }}"></script>
@endsection
