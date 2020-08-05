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
