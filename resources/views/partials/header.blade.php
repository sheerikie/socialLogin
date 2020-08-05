<header class="masthead mb-auto" style="margin-bottom: 2rem;">
    <div class="inner">
     <a href="/"> <h3 class="masthead-brand" style=" margin-bottom: 0;color:whitesmoke">My Shopify Store</h3></a>
      <nav class="nav nav-masthead justify-content-center">
          @auth
        <a class="nav-link active" href="/home">Home</a>
        @endauth
        @guest
        <a class="nav-link" href="/login">Login</a>
        <a class="nav-link" href="/register">Register</a>
        @endguest
      </nav>
    </div>
  </header>
