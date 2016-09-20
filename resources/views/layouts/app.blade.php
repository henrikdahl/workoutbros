<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title'): {{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ URL::asset('assets/css/app.css') }}" rel="stylesheet" type="text/css">
</head>
    <body>
        @if (Auth::check())
        <header>
            <a class="user" href="#">
                <span class="user-avatar"></span>
                <span class="user-name">{{ Auth::user()->name }}</span>
                <span class="user-arrow"></span>
            </a>
        </header>
        @endif
        @yield('content')
    </body>
</html>
