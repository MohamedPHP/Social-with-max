<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" media="screen" title="no title">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" media="screen" title="no title">
        <link rel="stylesheet" href="{{ asset('css/backend.css') }}" media="screen" title="no title">
    </head>
    <body>
        @include('includes.header')
        <div class="container">
            @yield('content')
        </div>
        <script type="text/javascript" src="{{ asset('js/jquery-1.12.3.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/backend.js') }}"></script>
    </body>
</html>
