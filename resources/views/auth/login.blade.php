@extends('layouts.app')

@section('content')


<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Login</h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-3">
                <div class="basic-login">
                    @include('includes.message')
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="login-username"><i class="icon-user"></i> <b>{{ __('E-Mail Address') }}</b></label>
                            <input class="form-control @error('email') is-invalid @enderror"    id="login-username" type="email" 
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="login-password"><i class="icon-lock"></i> <b>{{ __('Password') }}</b></label>
                            <input class="form-control @error('password') is-invalid @enderror" 
                                id="login-password" type="password" 
                                name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="form-group">

                            <label class="checkbox" for="remember">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                            </label>


                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            <button type="submit" class="btn pull-right">{{ __('Login') }}</button>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
