<div class="position-relative bg-light">
    <div class="header-content d-flex flex-column h-100">
        @include('partials.navbar');
        <div class="header on-image d-none d-md-block">
            <div class="container h-100">
                <div class="row no-gutters h-100 align-items-center">
                    <div class="col-12 col-md-12 col-lg-9 pb-5">
                        <h2>@lang('employers.header_h1')</h2>
                        <p>@lang('employers.header_p')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('/storage/imjob/images/header-employers.png') }}" class="img-fluid header-image">
    <div class="header dark-text d-block d-md-none">
        <div class="container">
            <div class="row no-gutters h-100 align-items-center">
                <div class="col-12 col-md-5 pt-4">
                    <h2>@lang('employers.header_h1')</h2>
                    <p>@lang('employers.header_p')</p>
                </div>
            </div>
        </div>
    </div>
</div>
