@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>


                <div>

                    <div class="form-group">

                    <div id="logreg-forms">
                        <form class="form-signin" method="POST" action="{{ route('register') }}">
                            @csrf
                            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
                            <div class="social-login">
                                <a class="btn facebook-btn social-btn btn-block"  href="{{ url('/login/facebook') }}" type="button"><span><i class="fab fa-facebook-f"></i> Sign in with Facebook</span> </a>
                                <a class="btn google-btn social-btn btn-block"  href="{{ url('/login/google') }}" type="button"><span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span> </a>
                                <a class="btn twitter-btn social-btn btn-block"  href="{{ url('/login/twitter') }}" type="button"><span><i class="fab fa-twitter"></i> Sign in with Twitter</span> </a>
                            </div>

                            <hr>
                            <form action="/signup/" class="form-signup">


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
                                <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
                            </form>
                            <br>
                            <!-- <p>Don't have an account!</p>  -->
                            <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Sign up New Account</button>
                            </form>

                            <form action="/reset/password/" class="form-reset">
                                <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
                            </form>



                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
