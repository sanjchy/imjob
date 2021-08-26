@extends('layouts/layout')
@section('header')
@include('pages.about.header')
@endsection
@section('content')
<div class="container py-1 mb-5">
    <div class="pb-5">
        <div class="pt-3">
            <div class="thickborder pt-3">
                <h2 class="d-none d-sm-block textblock-title pb-2 side-left bg-light">@lang('about.first_h1_tag')</h2>
                <div class="">
                    <div class="pt-4 px-1 pb-2 d-block d-sm-none">
                        <h2 class="d-block pt-2 d-sm-none textblock-title position-relative bg-light">
                            @lang('about.first_h1_tag')
                        </h2>
                    </div>
                    <p class="px-5 py-2">@lang('about.first_p_tag')</p>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-5 mb-2">
        <div class="pt-4">
            <div class="thickborder pt-sm-3">
                <h2 class="d-none d-sm-block textblock-title pb-2 side-right bg-light">@lang('about.second_h1_tag')</h2>
                <div class="py-3 px-5">
                    <div class="pb-5 d-block d-sm-none">
                        <h2 class="d-block d-sm-none textblock-title mt-1 position-relative side-right bg-light">
                            @lang('about.second_h1_tag')
                        </h2>
                    </div>
                    <div>
                        <p>@lang('about.second_p_tag')</p>
                        <p>@lang('about.third_p_tag')</p>
                        <ul>
                            <li>@lang('about.first_li_tag')</li>
                            <li>@lang('about.second_li_tag')</li>
                            <li>@lang('about.third_li_tag')</li>
                        </ul>
                        <p>@lang('about.fourth_p_tag')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
