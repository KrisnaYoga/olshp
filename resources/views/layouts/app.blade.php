<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('judul')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php
/*
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
*/
?>

</head>
<body>
    <div class="navbar navbar navbar-fixed-top">
        <a href="/" style="color:black; text-decoration:none;"><h6>Online Shopping</h6></a>
        <a href="/home" style="color:black; text-decoration:none;"><h6>HOME</h6></a>
            <a href="{{ route('login') }}"><button type="button" class="btn btn-light">Login</button></a>
            <h6>|</h6>
            <!--<a href="{{ route('register') }}"><button type="button" class="btn btn-light">Register</button></a> -->
            <a href="user/create"><button type="button" class="btn btn-light">Register</button></a>
    </div>

    <main class="py-4">
            @yield('content')
    </main>

    <footer>
        <h6 style="text-align:center">Krisna Yoga @ 2019</h6>
    </footer>
</body>
</html>