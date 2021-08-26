<div class="position-relative bg-light">
    <div class="header-content d-flex flex-column h-100">
        @include('partials.navbar')
        <div class="header on-image d-none d-md-block pt-0">
            <div class="container h-100 px-2 py-0">
                <div class="row no-gutters h-100 align-items-center m-0 p-0">
                    <div class="col-lg-12 col-md-5 pt-0 pb-3 mt-0">
                        <h2>@lang('candidates_header.h2')</h2>
                        <p>@lang('candidates_header.p')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('/storage/imjob/images/header-candidates.png') }}" class="img-fluid header-image">
    <div class="header dark-text d-block d-sm-block">
        <div class="container">
            <div class="row no-gutters h-100 align-items-center">
                <div class="col-12 col-md-5 pt-4 d-sm-none">
                    <div class="col-12 col-md-12 col-lg-9 pb-5">
                        <h2>@lang('candidates_header.h2')</h2>
                        <p>@lang('candidates_header.p')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
