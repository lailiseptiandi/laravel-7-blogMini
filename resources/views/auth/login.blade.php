@extends('layouts.app')

@section('content')
<div class="container">
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="{{ asset('img/login.png') }}" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="email" id="email" class="fadeIn second {{ $errors->has('email') ? ' is-invalid' : '' }}"
                    name="email" placeholder="E-Mail Address" value="{{ old('email') }}" required autocomplete="email"
                    autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <input type="password" id="password" class="fadeIn third @error('password') is-invalid @enderror"
                    name="password" placeholder="Password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                {{-- <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button> --}}
                <input type="submit" class="fadeIn fourth" value="{{ __('Login') }}">

                <!-- Remind Passowrd -->
                @if (Route::has('password.request'))
                <div id="formFooter">
                    <a class="underlineHover" href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
                </div>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection