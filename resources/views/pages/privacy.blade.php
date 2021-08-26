@extends('layouts.layout')
@section('header')
@include('pages.company_data_send.header')
@endsection
@section('css')

@endsection
@section('content')
<style>
    body {
        background-color: #F6F9FB;
    }
</style>
<div class="container mb-5">
    <div class="row my-5">
        <div class="wp-block-group specialcard p-4">
            <div class="wp-block-group__inner-container">
                <h2 class="card-title">@lang('privacy.h1')</h2>
                <p>@lang('privacy.p1')</p>
                <p>@lang('privacy.p2')</p>
                <p>
                    @lang('privacy.p3')
                </p>
                <p>@lang('privacy.p4')</p>
                <p>@lang('privacy.p5')</p>
                @lang('privacy.list')
                <p>@lang('privacy.p6')</p>
                <p>
                    @lang('privacy.p7')
                </p>
                <p>@lang('privacy.p8')</p>
            </div>
        </div>
    </div>
</div>
<div class="my-5">&nbsp;</div>
@endsection
