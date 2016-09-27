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
            <div class="user" href="#" data-dropdown>
                <span class="user-avatar {{ Auth::user()->color }}">{{ Auth::user()->initials }}</span>
                <span class="user-name">{{ Auth::user()->name }}</span>
                <span class="user-arrow"></span>
                <ul class="menu">
                    <li class="menu-item disabled">{{ Auth::user()->email }}</li>
                    <li class="menu-item"><a href="">Account Settings</a></li>
                    <li class="menu-item"><a href="{{ url('/logout') }}">Sign Out</a></li>
                </ul>
            </div>
        </header>
        <section class="wrapper">
            <section class="sidebar {{ Auth::user()->collapsed ? 'collapsed' : '' }}">
                <a class="burger" href="{{ url('/update') }}"></a>
                <ul class="nav">
                    <li class="nav-item {{ isActiveRoute('workout') }}"><a class="inbox" href="{{ route('workout') }}" data-pjax>Workout</a></li>
                    <li class="nav-item {{ isActiveRoute('calendar') }}"><a class="calendar" href="{{ route('calendar') }}" data-pjax><time>{{ Carbon::now()->day }}</time>Calendar</a></li>
                </ul>
            </section>
            @endif
            @yield('content')
        </section>
        <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.pjax.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('assets/js/app.js') }}"></script>
    </body>
</html>
