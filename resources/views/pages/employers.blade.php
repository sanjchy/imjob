@extends('layouts/layout')
@section('header')
@include('pages.for-employers.header')
@endsection
@section('content')
<div class="wp-bootstrap-blocks-container container mb-2">
    <div class="container-fluid px-0">
        <div class="pb-5">
            <div class="pt-4">
                <div class="thickborder pt-3">
                    <h2 class="textblock-title d-none d-sm-block pb-2 side-left bg-light">@lang('employers.div1_h1')
                    </h2>
                    <div class="">
                        <div class="my-4 d-block d-sm-none">
                            <div class="mb-5">
                                <h2 class="d-sm-none pb-2 side-left bg-light text-left">
                                    <span class="textblock-title bg-light pt-3">
                                        @lang('employers.div1_h1')
                                    </span>
                                </h2>
                            </div>
                        </div>
                        <div>
                            <p class="p-4">@lang('employers.div1_p')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0">
        <div class="pb-5">
            <div class="pt-4">
                <div class="thickborder pt-3">
                    <h2 class="d-none d-sm-block textblock-title side-right bg-light">@lang('employers.div2_h1')
                    </h2>
                    <div class="">
                        <div class="my-4 pb-3 text-left px-0 d-block d-sm-none">
                            <h2 class="d-block d-sm-none textblock-title text-left bg-light">
                                @lang('employers.div2_h1')
                            </h2>
                        </div>
                        <div class="px-5 py-3 pt-sm-none">
                            <p>@lang('employers.div2_p1')</p>
                            <p>@lang('employers.div2_p2')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0">
        <div class="pb-5">
            <div class="pt-4">
                <div class="thickborder pt-3">
                    <h2 class="d-none d-sm-block textblock-title pb-2 side-left bg-light">@lang('employers.div3_h1')
                    </h2>
                    <div class="px-3 py-3">
                        <div class="my-3 py-3 d-block d-sm-none text-left">
                            <h2 class="textblock-title pb-2 bg-light">@lang('employers.div3_h1')</h2>
                        </div>
                        <p class="px-4">@lang('employers.div3_p1')</p>
                        <p class="px-4">@lang('employers.div3_p2')</p>
                        <div class="d-flex justify-content-between align-items-center flex-column flex-lg-row iconlist">
                            <div class="d-flex flex-column align-items-center justify-content-between h-100">
                                <i class="fas fa-search icon"></i>
                                <span class="pt-2">@lang('employers.div3_span1')</span>
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
                                <i class="fas fa-people-arrows icon"></i>
                                <span class="pt-2">@lang('employers.div3_span2')</span>
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
                                <span class="pt-2">@lang('employers.div3_span3')</span>
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
                                <span class="pt-2">@lang('employers.div3_span4')</span>
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
                                <span class="pt-2">@lang('employers.div3_span5')</span>
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
                                <span class="pt-2">@lang('employers.div3_span6')</span>
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
                                <span class="pt-2">@lang('employers.div3_span7')</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid px-0 pb-5">
    <div class="wide-image-bottom position-relative container-block_5eb50bf4df9d1 py-5">
        <img src="{{ asset('storage/imjob/images/photo3.png') }}" class="w-100 d-none d-md-block img-fluid">
        <div class="wideimage-textcontainer position-md-absolute">
            <div class="container h-100">
                <div class="row h-100 align-items-center py-3 light-text justify-content-start text-left">
                    <div class="col-12 col-md-7 col-lg-5 pb-5">
                        <div class="pb-5">
                            <span class="h1 font-weight-bold">@lang('employers.div4_h1')</span>
                            <p>@lang('employers.div4_p')</p>
                            <div class="link mt-auto">
                                <span class="btn-white-outline">
                                    <a href="{{ route('join-us', app()->getLocale()) }}" target="_self"
                                        class="btn btn-white">@lang('employers.div4_a') <span class="pl-2"><i
                                                class="fas fa-arrow-right"></i></span></a>
                                </span>
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
        .container-block_5eb50bf4df9d1 {
            background-color: #bfb8ae;
        }

        footer {
            background-color: #bfb8ae;
        }
    }
</style>
@endsection
