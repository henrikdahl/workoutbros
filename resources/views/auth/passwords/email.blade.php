@extends('layouts.app')

@section('title', 'Forgot your password?')

@section('content')
<section class="login">
    @foreach ($errors->all() as $error)
    @if ($loop->first)
    <div class="error">{{ $error }}</div>
    @endif
    @endforeach
    <form id="email" method="POST" action="{{ url('/password/email') }}">
        <h2>Forgot your password?</h2>
        <p>Don't worry. Just enter your email address below and we'll send you some instructions.</p>
        {{ csrf_field() }}
        <input class="icon email" type="email" name="email" value="{{ old('email') }}" placeholder="Email" autofocus>
        <button class="blue" type="submit">Reset Password</button>
    </form>
    <span class="create">Have an account already? <a href="{{ url('/login') }}">Sign In</a></span>
</section>
@endsection
