<div class="position-relative">
    <div class="header-content d-flex flex-column h-100">
        @include('');
        <div class="header on-image d-none d-md-block">
            <div class="container h-100">
                <div class="row no-gutters h-100 align-items-center">
                    <div class="col-12 col-md-12 col-lg-9 pb-5">
                        <h2>Welcome to International Mobility Job</h2>
                        <p>Check our offers, take part to a new experience for a job abroad.</p>
                        <div class="link mt-auto">
                            <span class="btn-red-outline">
                                <a href="/job-offer" target="_self" class="btn btn-red">Job offers <span class="pl-2"><i
                                            class="fas fa-arrow-right"></i></span></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('storage/imjob/images/header-home.png') }}" class="img-fluid header-image">

    <div class="header dark-text d-block d-md-none">
        <div class="container">
            <div class="row no-gutters h-100 align-items-center">
                <div class="col-12 col-md-5 pt-4">
                    <h2>Welcome to International Mobility Job</h2>
                    <p>Check our offers, take part to a new experience for a job abroad.</p>
                    <div class="link mt-auto">
                        <span class="btn-red-outline">
                            <a href="{{ route('job-offers',app()->getLocale()) }}" target="_self"
                                class="btn btn-red">Job offers <span class="pl-2"><i
                                        class="fas fa-arrow-right"></i></span></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
