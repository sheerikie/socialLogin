<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CoVibes</title>

        <!-- Fonts -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/cover.css') }}" rel="stylesheet">
          </head>
    <body class="text-center">
            <div class="content">
                <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
                    <header class="masthead mb-auto">
                      <div class="inner">
                        <h3 class="masthead-brand">My Shopify Store</h3>
                        <nav class="nav nav-masthead justify-content-center">
                            @auth
                          <a class="nav-link active" href="/">Home</a>
                          @endauth
                          @guest
                          <a class="nav-link" href="/login">Login</a>
                          <a class="nav-link" href="/register">Register</a>
                          @endguest
                        </nav>
                      </div>
                    </header>

                    <main role="main" class="inner cover">
                      <h1 class="cover-heading">CoVibes Social Login App.</h1>
                      <p class="lead">Demo App for Interview Purposes</p>
                      <p class="lead">
                        <a href="/login" class="btn btn-lg btn-secondary">Learn more</a>
                      </p>
                    </main>

                    <footer class="mastfoot mt-auto">
                      <div class="inner">
                        <p>Made By <a href="#">Adrian</a></p>
                      </div>
                    </footer>
                  </div>
            </div>
    </body>
</html>
