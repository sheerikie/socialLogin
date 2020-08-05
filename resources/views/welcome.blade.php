@extends('layouts.app')

@section('content')
        <link href="{{ asset('css/cover.css') }}" rel="stylesheet">

                <div class="cover-container d-flex h-100 p-3 mx-auto flex-column text-center">
                    @include('partials.header')

                    <main role="main" class="inner cover">
                      <h1 class="cover-heading">CoVibes Social Login App.</h1>
                      <p class="lead">Demo App for Interview Purposes</p>
                      <p class="lead">
                        <a href="/login" class="btn btn-lg btn-secondary">Learn more</a>
                      </p>
                    </main>
                    @include('partials.footer')


                  </div>

@endsection
