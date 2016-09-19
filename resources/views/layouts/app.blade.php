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

        </header>
        @endif
        @yield('content')
    </body>
</html>

{{-- @if (Auth::guest())
    <li><a href="{{ url('/login') }}">Login</a></li>
    <li><a href="{{ url('/register') }}">Register</a></li>
@else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            <li>
                <a href="{{ url('/logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>
@endif --}}
