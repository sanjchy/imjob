<!DOCTYPE html>
<html lang="en-US">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="{{ asset('storage/imjob/images/logo_white.svg') }}" type="image/x-icon">
        {{-- <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"> --}}
        <link href="{{ asset("font/Monserat/Monserat.css") }}" rel="stylesheet">
        <title>@yield('title', ucwords(\Request::route()->getName()))</title>
        {{-- app.css call --}}
        {{-- fonts --}}
        <link rel="stylesheet" href="https://fontlibrary.org/face/metropolis">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/imjob.css') }}">
        <script src="{{ asset('js/font-awesome.js') }}"></script>
        <script src="{{ asset("js/jquery.min.js") }}"></script>
        <script src="{{ asset("js/validation/jquery.validate.min.js") }}"></script>
        <script src="{{ asset("js/jquery/additional-methods.min.js") }}"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/style.css">
    </head>

    <body oncontextmenu="return false"
        class="page-template page-template-page-gutenbergnocontainer page-template-page-gutenbergnocontainer-php page page-id-321 logged-in admin-bar no-customize-support wp-custom-logo d-flex flex-column">
        <header>
            @yield('header')
        </header>
        <main class="flex-shrink-0 pt-5" style="background-color: #f6f9fb;">
            @yield('content')
        </main>
        @include('partials.footer')
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"
            integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.8.3/umd/popper.min.js"
            integrity="sha512-4dvO5Z/pIXt0GRvvrgYNjb+ihLc2thByw1vVsP8AbHh4GNaYatYqAUJVDqFvxCP3FTkzqnqloRa10UVtxkb5sQ=="
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/index.js"></script>
        <script src="{{ asset("js/flatpickr/monthSelect/index.js") }}"></script>
        <script src="{{ asset("js/imjob/copyelement.js") }}"></script>
        @include('candidate.validation.candidateRequestValidation')
        @include('company.validation.companyRequestValidation')
        @include('pages.contact.contactValidation')
        <script>
            $(document).ready(function () {
                bsCustomFileInput.init()
            });
            $(document).ready(function ($) {
                $(window).resize(function () {
                    setTriangleMargin();
                });
                setTimeout(function () {
                    setTriangleMargin();
                }, 500);

                function setTriangleMargin() {
                    $triangleheight = $(".footer-triangle").outerHeight();
                    $(".wide-image-bottom").css("margin-bottom", -$triangleheight);
                }
                $("#navbarheadertop").on("show.bs.collapse", function () {
                    $(".header.on-image").fadeTo(100, 0);
                });
                $("#navbarheadertop").on("hide.bs.collapse", function () {
                    $(".header.on-image")
                        .delay(100)
                        .fadeTo(100, 1);
                });

                if ($("div.contactform").length) {
                    setTimeout(function () {
                        $(".contactform .wpcf7-submit").prop("disabled", true);
                    }, 100);

                    $(".contactform input, .contactform textarea").on(
                        "change paste keyup",
                        function () {
                            $all_filled =
                                $(".contactform input, .contactform textarea").filter(
                                    function () {
                                        return $.trim($(this).val()).length == 0;
                                    }
                                ).length == 0;
                            $checkbox_checked = $(".contactform input:checkbox").is(
                                ":checked"
                            );
                            if ($all_filled && $checkbox_checked) {
                                $(".contactform .wpcf7-submit").prop("disabled", false);
                            } else {
                                $(".contactform .wpcf7-submit").prop("disabled", true);
                            }
                        }
                    );
                }

                $(".notice-x").click(function (e) {
                    e.preventDefault();
                    var cookie = $(this).data("cookie");
                    Cookies.set(cookie, "dismissed", {
                        path: "/"
                    });
                    $(".notice-parent").slideUp();
                });
            });

        </script>
        @yield('scripts')
    </body>

</html>
