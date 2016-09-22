@extends('layouts.app')

@section('title', 'Login')

@section('content')
<section class="login">
    @foreach ($errors->all() as $error)
    @if ($loop->first)
    <div class="error">{{ $error }}</div>
    @endif
    @endforeach
    <form id="login" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <input type="hidden" name="remember" value="true">
        <input class="icon email" type="email" name="email" value="{{ old('email') }}" placeholder="Email" autofocus>
        <input class="icon password" type="password" name="password"  placeholder="Password">
        <button class="blue" type="submit">Sign In</button>
        <a class="forgot" href="{{ url('/password/reset') }}">Forgot your password?</a>
    </form>
    <span class="create">Don't have an account bitch? <a href="{{ url('/register') }}">Create Account</a></span>
</section>
@endsection
