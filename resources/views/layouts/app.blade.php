<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('storage/imjob/images/logo_white.svg') }}" type="image/x-icon">
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
        <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
        <link rel="stylesheet" href="{{ asset('css/uicons/css/uicons-regular-rounded.css') }}">
    </head>

    <body>
        <div id="app">
            @include('partials.nav')
            <main class="py-2">
                @yield('content')
            </main>
        </div>
        <script src="{{ mix("/js/manifest.js") }}"></script>
        <script src="{{ mix("/js/vendor.js") }}"></script>
        <script src="{{ mix("/js/app.js") }}"></script>
        {{-- <script src="{{ asset('js/validation/jquery.validate.min.js') }}"></script> --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/style.css">
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/index.js"></script>
        <script src="{{ asset('js/file/addFile.js') }}" async></script>
        <script src="{{ asset('js/company/AddFile.js') }}" async></script>
        <script src="{{ asset('js/job/AddJob.js') }}" async></script>
        <script src="{{ asset('js/company/AddCompany.js') }}" async></script>
        @yield('scripts')
    </body>

</html>
