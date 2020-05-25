<!DOCTYPE html>
<html lang="zh-TW">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <head>
        <title>@yield('title')</title>
    </head>

    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/light.css') }}" rel="stylesheet">
    <script src="{{ asset('jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <body>
       @include('frontend.layouts.header')
       @yield('content')
       @include('frontend.layouts.footer')
    </body>    
</html>