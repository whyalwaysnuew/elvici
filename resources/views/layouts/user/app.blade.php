<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
        <link rel="stylesheet" href="parallo/css/all.min.css" />
        <link rel="stylesheet" href="parallo/css/bootstrap.min.css" />
        <link rel="stylesheet" href="parallo/css/templatemo-style.css" />
    </head>
    <body>

        @yield('content')

        {{--    --}}
        <script src="parallo/js/jquery.min.js"></script>
        <script src="parallo/js/parallax.min.js"></script>
        <script src="parallo/js/bootstrap.min.js"></script>
    </body>
</html>
