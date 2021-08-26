@extends('layouts/layout')
@section('header')
@include('pages.candidates.header')
@endsection
@section('content')
<div class="wp-bootstrap-blocks-container container mb-2">
    <div class="pb-5">
        <div class="pt-4">
            <div class="thickborder pt-3">
                <h2 class="d-none d-sm-block textblock-title pb-2 side-left bg-light">@lang('candidates.div1_h1')</h2>
                <div class="py-3">
                    <div class="mb-3 pt-4 pl-2 d-block d-sm-none">
                        <h2 class="d-block d-sm-none textblock-title bg-light p-0 mb-1 text-left">
                            @lang('candidates.div1_h1')
                        </h2>
                    </div>
                    <p class="px-5 py-2">@lang('candidates.div1_p')</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row px-0">
            <div class="pb-5">
                <div class="pt-4">
                    <div class="thickborder pt-3">
                        <div class="d-md-block">
                            <h2 class="bg-light textblock-title pb-md-2 pb-sm-5 side-right bg-light d-none d-md-block">
                                @lang('candidates.div2_h1')
                            </h2>
                        </div>
                        <div class="">
                            <div class="d-block d-sm-none px-0 pt-4">
                                <h2
                                    class="bg-light textblock-title pb-md-0 px-0 pb-sm-0 text-wrap py-3 px-3 bg-light mb-0">
                                    @lang('candidates.div2_h1')
                                </h2>
                            </div>
                            <div class="mt-5 mt-sm-0">
                                <div class="py-4 px-5 mt-sm-0 mt-md-1">
                                    <p class="pt-0">@lang('candidates.div2_p1')</p>
                                    <p class="">@lang('candidates.div2_p2')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-5">
        <div class="pt-4">
            <div class="thickborder pt-3">
                <h2 class="d-none d-sm-block textblock-title pb-2 side-left bg-light">@lang('candidates.div3_h1')</h2>
                <div class="py-3">
                    <div class="mt-3 mb-5 d-block d-sm-none">
                        <h2 class="d-block d-sm-none textblock-title bg-light text-left">
                            @lang('candidates.div3_h1')</h2>
                    </div>
                    <div class="px-5">
                        <p>@lang('candidates.div3_p1')</p>
                        <p>@lang('candidates.div3_p2')</p>
                        <div class="d-flex justify-content-between align-items-center flex-column flex-lg-row iconlist">
                            <div class="d-flex flex-column align-items-center justify-content-between h-100">
                                <i class="fas fa-briefcase icon"></i>
                                <span class="pt-2">@lang('candidates.div3_span1')</span>
                            </div>
                            <span class="fa-2x">
                                <span class="fa-layers fa-fw arrow d-none d-lg-inline-block" style="">
                                    <i class="fas fa-circle"></i>
                                    <i class="fa-inverse fas fa-arrow-right" data-fa-transform="shrink-6"></i>
                                </span>
                                <span class="fa-layers fa-fw arrow d-lg-none py-2" style="">
                                    <i class="fas fa-circle"></i>
                                    <i class="fas fa-arrow-down" data-fa-transform="shrink-6"></i>
                                </span>
                            </span>
                            <div class="d-flex flex-column align-items-center justify-content-between h-100">
                                <i class="fas fa-scroll icon"></i>
                                <span class="pt-2">@lang('candidates.div3_span2')</span>
                            </div>
                            <span class="fa-2x">
                                <span class="fa-layers fa-fw arrow d-none d-lg-inline-block" style="">
                                    <i class="fas fa-circle"></i>
                                    <i class="fa-inverse fas fa-arrow-right" data-fa-transform="shrink-6"></i>
                                </span>
                                <span class="fa-layers fa-fw arrow d-lg-none py-2" style="">
                                    <i class="fas fa-circle"></i>
                                    <i class="fas fa-arrow-down" data-fa-transform="shrink-6"></i>
                                </span>
                            </span>
                            <div class="d-flex flex-column align-items-center justify-content-between h-100">
                                <i class="fas fa-comments icon"></i>
                                <span class="pt-2">@lang('candidates.div3_span3')</span>
                            </div>
                            <span class="fa-2x">
                                <span class="fa-layers fa-fw arrow d-none d-lg-inline-block" style="">
                                    <i class="fas fa-circle"></i>
                                    <i class="fa-inverse fas fa-arrow-right" data-fa-transform="shrink-6"></i>
                                </span>
                                <span class="fa-layers fa-fw arrow d-lg-none py-2" style="">
                                    <i class="fas fa-circle"></i>
                                    <i class="fas fa-arrow-down" data-fa-transform="shrink-6"></i>
                                </span>
                            </span>
                            <div class="d-flex flex-column align-items-center justify-content-between h-100">
                                <i class="fas fa-vote-yea icon"></i>
                                <span class="pt-2">@lang('candidates.div3_span4')</span>
                            </div>
                            <span class="fa-2x">
                                <span class="fa-layers fa-fw arrow d-none d-lg-inline-block" style="">
                                    <i class="fas fa-circle"></i>
                                    <i class="fa-inverse fas fa-arrow-right" data-fa-transform="shrink-6"></i>
                                </span>
                                <span class="fa-layers fa-fw arrow d-lg-none py-2" style="">
                                    <i class="fas fa-circle"></i>
                                    <i class="fas fa-arrow-down" data-fa-transform="shrink-6"></i>
                                </span>
                            </span>
                            <div class="d-flex flex-column align-items-center justify-content-between h-100">
                                <i class="fas fa-book icon"></i>
                                <span class="pt-2">@lang('candidates.div3_span5')</span>
                            </div>
                            <span class="fa-2x">
                                <span class="fa-layers fa-fw arrow d-none d-lg-inline-block" style="">
                                    <i class="fas fa-circle"></i>
                                    <i class="fa-inverse fas fa-arrow-right" data-fa-transform="shrink-6"></i>
                                </span>
                                <span class="fa-layers fa-fw arrow d-lg-none py-2" style="">
                                    <i class="fas fa-circle"></i>
                                    <i class="fas fa-arrow-down" data-fa-transform="shrink-6"></i>
                                </span>
                            </span>
                            <div class="d-flex flex-column align-items-center justify-content-between h-100">
                                <i class="fas fa-plane icon"></i>
                                <span class="pt-2">@lang('candidates.div3_span6')</span>
                            </div>
                            <span class="fa-2x">
                                <span class="fa-layers fa-fw arrow d-none d-lg-inline-block" style="">
                                    <i class="fas fa-circle"></i>
                                    <i class="fa-inverse fas fa-arrow-right" data-fa-transform="shrink-6"></i>
                                </span>
                                <span class="fa-layers fa-fw arrow d-lg-none py-2" style="">
                                    <i class="fas fa-circle"></i>
                                    <i class="fas fa-arrow-down" data-fa-transform="shrink-6"></i>
                                </span>
                            </span>
                            <div class="d-flex flex-column align-items-center justify-content-between h-100">
                                <i class="fas fa-handshake icon"></i>
                                <span class="pt-2">@lang('candidates.div3_span7')</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid px-0 pb-5 pb-md-5">
    <div class="pb-5">
        <div class="wide-image-bottom position-relative container-block_5ec8f6c5e9271">
            <img src="{{ asset('storage/imjob/images/photo4.png') }}" class="w-100 d-none d-md-block">
            <div class="wideimage-textcontainer position-md-absolute">
                <div class="container h-100">
                    <div class="row h-100 align-items-center py-3 light-text justify-content-end text-right">
                        <div class="col-12 col-md-7 col-lg-5">
                            <div class="">
                                <span class="h1 font-weight-bold">@lang('candidates.div4_h1')</span>
                                <p>@lang('candidates.div4_p1') </p>
                                <div class="link mt-auto">
                                    <span class="btn-white-outline">
                                        <a href="{{ route('job-offers',app()->getLocale()) }}" target="_self"
                                            class="btn btn-white">@lang('candidates.div4_a1') <span class="pl-2"><i
                                                    class="fas fa-arrow-right"></i></span></a>
                                    </span>
                                </div>
                                <p>@lang('candidates.div4_p2')</p>
                                <div class="link mt-auto">
                                    <span class="btn-white-outline">
                                        <a href="{{ route('send-cv', app()->getLocale()) }}" target="_self"
                                            class="btn btn-white">@lang('candidates.div4_a2')
                                            <span class="pl-2"><i class="fas fa-arrow-right"></i></span></a>
                                    </span>
                                </div>
                                <p>@lang('candidates.div4_p3')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    @media (max-width: 767.98px) {
        .container-block_5ec8f6c5e9271 {
            background-color: #d9c4b8;
        }

        footer {
            background-color: #d9c4b8;
        }
    }
</style>
@endsection
