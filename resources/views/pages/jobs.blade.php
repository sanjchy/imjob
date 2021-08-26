@extends('layouts/layout')
@section('header')
@include('pages.joboffers.header')
@endsection
@section('content')
<div class="container-fluid pb-5 my-1">
    <div class="row justify-content-center notice-parent">
        <div class="container mt-1 mb-5">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 px-sm-3">
                <div class="px-sm-5">
                    @if (session()->has("covid"))
                    <div id="covidAlert"
                        class="specialcard notice py-4 px-0 alert alert-dismissable fade-show alert-warning">
                        <div class="container">
                            <div class="row p-0 m-0 d-flex justify-content-between">
                                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10 my-2 text-left">
                                    <span class="h2 mb-1 card-title d-block">@lang('job_offers.h1')</span>
                                </div>
                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1 text-right">
                                    <span class="float-right notice-x" class="close" data-dismiss="" aria-label="Close"
                                        data-cookie="jonotice_covid19" onclick="hideCovidAlert();">
                                        <i class="fas fa-times"></i>
                                    </span>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 py-1">
                                    <p>@lang('job_offers.p')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="container my-1">
                        @foreach ($jobs as $job)
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10">
                                <div class="pb-5">
                                    <div class="specialcard p-4">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-7 col-lg-6">
                                                <span class="h2 mb-1 card-title d-block">{!! $job->position ?
                                                    $job->position : "" !!}</span>
                                                <div class="joboffer-divider"></div>
                                            </div>
                                            <div class="col-12 pt-3 pb-4">
                                                {!! $job->description ? $job->description : "" !!}
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-12 col-md-7">
                                                        <div class="d-flex flex-column">
                                                            <div class="d-flex align-items-center">
                                                                <div class="fa-2x">
                                                                    <span class="fa-layers fa-fw joboffer-icon">
                                                                        <svg class="svg-inline--fa fa-circle fa-w-16"
                                                                            aria-hidden="true" focusable="false"
                                                                            data-prefix="fas" data-icon="circle"
                                                                            role="img"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 512 512" data-fa-i2svg="">
                                                                            <path fill="currentColor"
                                                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                                                            </path>
                                                                        </svg><!-- <i class="fas fa-circle"></i> -->
                                                                        <svg class="svg-inline--fa fa-euro-sign fa-w-10"
                                                                            data-fa-transform="shrink-8"
                                                                            aria-hidden="true" focusable="false"
                                                                            data-prefix="fas" data-icon="euro-sign"
                                                                            role="img"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 320 512" data-fa-i2svg=""
                                                                            style="transform-origin: 0.3125em 0.5em;">
                                                                            <g transform="translate(160 256)">
                                                                                <g
                                                                                    transform="translate(0, 0)  scale(0.5, 0.5)  rotate(0 0 0)">
                                                                                    <path fill="currentColor"
                                                                                        d="M310.706 413.765c-1.314-6.63-7.835-10.872-14.424-9.369-10.692 2.439-27.422 5.413-45.426 5.413-56.763 0-101.929-34.79-121.461-85.449h113.689a12 12 0 0 0 11.708-9.369l6.373-28.36c1.686-7.502-4.019-14.631-11.708-14.631H115.22c-1.21-14.328-1.414-28.287.137-42.245H261.95a12 12 0 0 0 11.723-9.434l6.512-29.755c1.638-7.484-4.061-14.566-11.723-14.566H130.184c20.633-44.991 62.69-75.03 117.619-75.03 14.486 0 28.564 2.25 37.851 4.145 6.216 1.268 12.347-2.498 14.002-8.623l11.991-44.368c1.822-6.741-2.465-13.616-9.326-14.917C290.217 34.912 270.71 32 249.635 32 152.451 32 74.03 92.252 45.075 176H12c-6.627 0-12 5.373-12 12v29.755c0 6.627 5.373 12 12 12h21.569c-1.009 13.607-1.181 29.287-.181 42.245H12c-6.627 0-12 5.373-12 12v28.36c0 6.627 5.373 12 12 12h30.114C67.139 414.692 145.264 480 249.635 480c26.301 0 48.562-4.544 61.101-7.788 6.167-1.595 10.027-7.708 8.788-13.957l-8.818-44.49z"
                                                                                        transform="translate(-160 -256)">
                                                                                    </path>
                                                                                </g>
                                                                            </g>
                                                                        </svg>
                                                                        <!-- <i class="fas fa-euro-sign" data-fa-transform="shrink-8"></i> -->
                                                                    </span>
                                                                </div>
                                                                <span>{{ $job->job->salary ? $job->job->salary : ""}}</span>
                                                            </div>
                                                            <div class="pt-2 d-flex align-items-center">
                                                                <div class="fa-2x">
                                                                    <span class="fa-layers fa-fw joboffer-icon">
                                                                        <svg class="svg-inline--fa fa-circle fa-w-16"
                                                                            aria-hidden="true" focusable="false"
                                                                            data-prefix="fas" data-icon="circle"
                                                                            role="img"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 512 512" data-fa-i2svg="">
                                                                            <path fill="currentColor"
                                                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                                                            </path>
                                                                        </svg><!-- <i class="fas fa-circle"></i> -->
                                                                        <svg class="svg-inline--fa fa-hourglass-start fa-w-12"
                                                                            data-fa-transform="shrink-8"
                                                                            aria-hidden="true" focusable="false"
                                                                            data-prefix="fas"
                                                                            data-icon="hourglass-start" role="img"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 384 512" data-fa-i2svg=""
                                                                            style="transform-origin: 0.375em 0.5em;">
                                                                            <g transform="translate(192 256)">
                                                                                <g
                                                                                    transform="translate(0, 0)  scale(0.5, 0.5)  rotate(0 0 0)">
                                                                                    <path fill="currentColor"
                                                                                        d="M360 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24 0 90.965 51.016 167.734 120.842 192C75.016 280.266 24 357.035 24 448c-13.255 0-24 10.745-24 24v16c0 13.255 10.745 24 24 24h336c13.255 0 24-10.745 24-24v-16c0-13.255-10.745-24-24-24 0-90.965-51.016-167.734-120.842-192C308.984 231.734 360 154.965 360 64c13.255 0 24-10.745 24-24V24c0-13.255-10.745-24-24-24zm-64 448H88c0-77.458 46.204-144 104-144 57.786 0 104 66.517 104 144z"
                                                                                        transform="translate(-192 -256)">
                                                                                    </path>
                                                                                </g>
                                                                            </g>
                                                                        </svg>
                                                                        <!-- <i class="fas fa-hourglass-start" data-fa-transform="shrink-8"></i> -->
                                                                    </span>
                                                                </div>
                                                                <span>
                                                                    {{ $job->job->contractDetails ? $job->job->contractDetails : "" }}
                                                                </span>
                                                            </div>
                                                            <div class="pt-2 d-flex align-items-center">
                                                                <div class="fa-2x">
                                                                    <span class="fa-layers fa-fw joboffer-icon">
                                                                        <svg class="svg-inline--fa fa-circle fa-w-16"
                                                                            aria-hidden="true" focusable="false"
                                                                            data-prefix="fas" data-icon="circle"
                                                                            role="img"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 512 512" data-fa-i2svg="">
                                                                            <path fill="currentColor"
                                                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                                                            </path>
                                                                        </svg><!-- <i class="fas fa-circle"></i> -->
                                                                        <svg class="svg-inline--fa fa-city fa-w-20"
                                                                            data-fa-transform="shrink-8"
                                                                            aria-hidden="true" focusable="false"
                                                                            data-prefix="fas" data-icon="city"
                                                                            role="img"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 640 512" data-fa-i2svg=""
                                                                            style="transform-origin: 0.625em 0.5em;">
                                                                            <g transform="translate(320 256)">
                                                                                <g
                                                                                    transform="translate(0, 0)  scale(0.5, 0.5)  rotate(0 0 0)">
                                                                                    <path fill="currentColor"
                                                                                        d="M616 192H480V24c0-13.26-10.74-24-24-24H312c-13.26 0-24 10.74-24 24v72h-64V16c0-8.84-7.16-16-16-16h-16c-8.84 0-16 7.16-16 16v80h-64V16c0-8.84-7.16-16-16-16H80c-8.84 0-16 7.16-16 16v80H24c-13.26 0-24 10.74-24 24v360c0 17.67 14.33 32 32 32h576c17.67 0 32-14.33 32-32V216c0-13.26-10.75-24-24-24zM128 404c0 6.63-5.37 12-12 12H76c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm0-96c0 6.63-5.37 12-12 12H76c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm0-96c0 6.63-5.37 12-12 12H76c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm128 192c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm0-96c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm0-96c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm160 96c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm0-96c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm0-96c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12V76c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm160 288c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm0-96c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40z"
                                                                                        transform="translate(-320 -256)">
                                                                                    </path>
                                                                                </g>
                                                                            </g>
                                                                        </svg>
                                                                        <!-- <i class="fas fa-city" data-fa-transform="shrink-8"></i> -->
                                                                    </span>
                                                                </div>
                                                                <span>
                                                                    {{ $job->job->placeOfWork ? $job->job->placeOfWork : "" }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-5 text-right align-self-end pt-3">
                                                        <a class="btn btn-outline-red transform-uppercase"
                                                            href="{{ route("job-offer",["language" => app()->getLocale(),"job"=>$job->id]) }}">Offer
                                                            details
                                                            <span class="pl-2"><svg
                                                                    class="svg-inline--fa fa-arrow-right fa-w-14"
                                                                    aria-hidden="true" focusable="false"
                                                                    data-prefix="fas" data-icon="arrow-right" role="img"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 448 512" data-fa-i2svg="">
                                                                    <path fill="currentColor"
                                                                        d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
                                                                    </path>
                                                                </svg>
                                                                <!-- <i class="fas fa-arrow-right"></i> --></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="row justify-content-center">
                            {{ $jobs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
