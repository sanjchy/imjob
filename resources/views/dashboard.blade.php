@extends('layouts.app')
@section('css')
@endsection
@section('content')
@include("dashboard.cards")
<div class="container-fluid">
    <div class="col">
        <div class="row my-5 mx-lg-auto">
            <div class="col-xl-6 px-1">
                @include('dashboard.newCandidates')
            </div>
            <div class="col-xl-6 px-1">
                @include('dashboard.newCompanies')
            </div>
            <div class="col-xl-6 px-1">
                @include('dashboard.newRecruitments')
            </div>
            <div class="col-xl-6 px-1">
                @include('dashboard.newJobs')
            </div>
        </div>
    </div>
</div>
@endsection
