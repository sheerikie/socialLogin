@extends('layouts.app')

@section('content')
  <!-- Styles -->
  <link href="{{ asset('css/header.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="cover-container d-flex h-100 p-3 mx-auto flex-column text-center">
    @include('partials.header')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div >

                <div id="logreg-forms">
                    <form class="form-signin" method="POST" action="{{ route('login') }}">
                        @csrf
                        <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
                            <div class="social-login">
                                <a href="{{ url('/login/facebook') }}" class="btn facebook-btn social-btn btn-block" type="button"><span><i class="fab fa-facebook-f"></i> Sign in with Facebook</span> </a>
                                <a href="{{ url('/login/google') }}" class="btn google-btn social-btn btn-block" type="button"><span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span> </a>
                                <a href="{{ url('/login/twitter') }}" class="btn twitter-btn social-btn btn-block" type="button"><span><i class="fab fa-twitter"></i> Sign in with Twitter</span> </a>
                            </div>
                            <p style="text-align:center"> OR  </p>


                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                <div class="form-check" >
                                    <input class="form-check-input" style="float: left" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary social-btn btn-block">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</div>


@endsection
