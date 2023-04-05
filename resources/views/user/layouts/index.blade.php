<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Amaisoft" name="author"/>

    @yield('user_head')

    <base href="{{ asset('') }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="user-assets/images/favicon.ico">

    @include('user.includes.style')

</head>

@yield('user_main')

</html>
