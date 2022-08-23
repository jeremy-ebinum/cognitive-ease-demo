<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    {{-- FAVICON --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ 'site.webmanifest' }}">

    @section('head-scripts')
        <!-- Scripts -->
        <script src="{{ asset('js/manifest.js') }}" defer></script>
        <script src="{{ asset('js/vendor.js') }}" defer></script>
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @show

    <script>
        /* Fix for Firefox FOUC (Flash of Unstyled Content) */
        let FF_FOUC_FIX;
    </script>
</head>

<body class="@yield('page-class')">
    @yield('header')

    @yield('content')

    @yield('footer')

    @include('includes.helper-js')

    @yield('body-scripts')

    <script>
        onDomReady(() => {
            document.body.style.opacity = '1';
        });
    </script>

    <noscript>
        <style>
            body {
                opacity: 1;
            }
        </style>
    </noscript>
</body>

</html>
