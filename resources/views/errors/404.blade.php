<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'ImJob') }}</title>
        {{-- Jquery --}}
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/imjob.css') }}">
        <script src="{{ asset('js/bootstrap-notify-master/bootstrap-notify.min.js') }}" defer></script>
        @yield('css')
        <!-- Fonts -->
        @yield('fonts')
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ asset('js/font-awesome.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/uicons/css/uicons-regular-rounded.css') }}">
    </head>

    <body>
        <div id="app">
            <main class="py-2">
                <div class="page-wrap d-flex flex-row align-items-center" style="height: 100vh;">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12 text-center">
                                <span class="display-1 d-block">404</span>
                                <div class="mb-4 lead">The page you are looking for was not found.</div>
                                <a href="#" onclick="window.history.back();" class="btn btn-link">Back to Home</a>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
        <script src="{{ mix("/js/manifest.js") }}"></script>
        <script src="{{ mix("/js/vendor.js") }}"></script>
        <script src="{{ mix("/js/app.js") }}"></script>
    </body>

</html>
