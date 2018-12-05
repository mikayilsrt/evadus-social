<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('pageTitle') {{ config('app.name') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />

        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet"> 
    </head>
    <body>
        <!-- wrapper page -->
        <div class="wrapper">
            <!-- main header -->
            @include('layouts._partials._header')

            <!--  body-content -->
            @yield('content')
        </div>

        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/medium-zoom@1.0.2/dist/medium-zoom.min.js"></script>
        <script>
            feather.replace();
            mediumZoom(document.querySelectorAll('.medium-zoom-image'));
        </script>
    </body>
</html>