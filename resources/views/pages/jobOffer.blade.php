@extends('layouts/layout')
@section('header')
@include('pages.joboffer.header')
@endsection
@section('content')
<div class="container-fluid pb-5">
    <div class="row justify-content-center notice-parent">
        <div class="container mt-1 mb-5">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 px-sm-3">
                <div class="px-sm-5">
                    <div class="py-5">
                        <div class="specialcard px-4 py-5 px-md-5">
                            <div class="cat-title text-red">{!! $job->warning !!}</div>
                            <div class="row joboffer-items">
                                <div class="container-fluid">
                                    <div class="col-12 px-0 py-2 font-weight-bold text-muted">
                                            {!! $job->position !!}
                                    </div>
                                    <div id="jobDescriptionPreview">
                                        {!! $job->description !!}
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="row p-2 m-2">
                                        <div class="col-12">
                                            <h5 class="text-left pb-0 mt-0 font-weight-bold text-muted">We Are Looking For</h5>
                                        </div>
                                        <div id="lookingForPreview">
                                            {!! $job->lookingFor !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="row p-2 m-2">
                                        <div class="col-12">
                                            <h5 class="text-left pb-0 mt-0 font-weight-bold text-muted">What Do You Get</h5>
                                        </div>
                                        <div id="whatDoYouGetPreview">
                                            {!! $job->weOffer !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="row p-2 m-2">
                                        <div id="NotesPreview">
                                            {!! $job->note !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3">
                                <span class="btn-red-outline">
                                    <a href="{{ route("send-cv",[
                                        "language" => app()->getLocale(),
                                        "job" => $request->job
                                    ]) }}" class="btn btn-red text-uppercase">Apply <span class="pl-2"><svg
                                                class="svg-inline--fa fa-arrow-right fa-w-14" aria-hidden="true"
                                                focusable="false" data-prefix="fas" data-icon="arrow-right" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
                                                </path>
                                            </svg><!-- <i class="fas fa-arrow-right"></i> --></span></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
