@extends('layouts.app')

@section('title', 'Sign Up')

@section('content')
<section class="login">
    @foreach ($errors->all() as $error)
    @if ($loop->first)
    <div class="error">{{ $error }}</div>
    @endif
    @endforeach
    <form id="register" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}
        <input class="icon name" type="text" name="name" value="{{ old('name') }}" placeholder="Name" autofocus>
        <input class="icon email" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
        <input class="icon password" type="password" name="password"  placeholder="Password">
        <button class="blue" type="submit">Create Free Account</button>
    </form>
    <span class="create">Have an account already? <a href="{{ url('/login') }}">Sign In</a></span>
</section>
@endsection
