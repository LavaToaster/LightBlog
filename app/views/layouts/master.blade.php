<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>{{ $title }}</title>
        <link href="{{ asset('components/bootstrap/bootstrap.css') }}" rel="stylesheet">
    </head>
    <body>
        @yield('content')

        <script src="{{ asset('components/jquery/jquery.js }}"></script>
        <script src="{{ asset('components/bootstrap/bootstrap.js }}"></script>
    </body>
</html>