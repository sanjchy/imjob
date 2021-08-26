@extends('layouts.layout')
@section('header')
@include('pages.index.header.header')
@endsection
@section('content')
<section class="">
    <div class="pt-2"></div>
    @include('pages.index.whyimjob.whyus')
    @include('pages.index.joboffers.offers')
</section>
@endsection
