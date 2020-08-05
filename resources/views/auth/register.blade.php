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
                    <form method="POST" action="{{ route('register') }}" class="form-signin">

                        @csrf
                          <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign Up</h1>
                            <div class="social-login">
                                <a class="btn facebook-btn social-btn btn-block"  href="{{ url('/login/facebook') }}" type="button"><span><i class="fab fa-facebook-f"></i> Sign in with Facebook</span> </a>
                                <a class="btn google-btn social-btn btn-block"  href="{{ url('/login/google') }}" type="button"><span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span> </a>
                                <a class="btn twitter-btn social-btn btn-block"  href="{{ url('/login/twitter') }}" type="button"><span><i class="fab fa-twitter"></i> Sign in with Twitter</span> </a>
                            </div>

                            <hr>

                                <p style="text-align:center">OR</p>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Full Name" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"  placeholder="Repeat Password">
                                <button class="btn btn-primary btn-block" type="submit" ><i class="fas fa-user-plus"></i> Sign Up</button>
                                <a href="/" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
                            </form>
                        </div>
            </div>
        </div>
    </div>

        @include('partials.footer')
</div>
 @endsection
