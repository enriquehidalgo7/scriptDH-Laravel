<div class="navbar">
   <div class="navbar_Link navbar_Link-brand">
     <a href="index.php">
       <i class="fas fa-mobile-alt icono"></i>
       SmarTeate
    </a>
    </div>
    <div class="navbar_Link-right">
      <i class="fas fa-shopping-cart"></i>
      <i class="fas fa-search lupa"></i>
    </div>
    <div class="navbar_Link navbar_Link-toggle">
      <i class="fas fa-bars"></i>
    </div>
  <nav class="navbar_Items">
    <div class="navbar_Link opciones">
      <a href="/allproducts">Productos</a>
    </div>
    </nav>
    <nav class="col-lg-3">
      <form class="form-inline my-2 my-lg-0" action="/search/items/" method="post">
          @csrf
          <input class="form-control px-auto mr-sm-2" type="search" name="buscador" placeholder="buscar..." aria-label="Search">
          <button class="btn" type="submit"><i class="fas fa-search lupa"></i></button>
      </form>
  </nav>

  <nav class="navbar_Items navbar_Items--right">
    <div class="navbar_Link login chango">
      <i class="fas fa-shopping-cart"></i>
      <a href="#">
        Carrito
      </a>
    </div>

<div class="navbar_Items navbar_Items--right">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
          </ul>
            @else
            <div class="navbar_Link login">
              <i class="fas fa-lock"></i>
                <a href="{{ route('login') }}" class="">Login</a>
            </div>

            <div class="navbar_Link">
              <i class="fas fa-user"></i>
                <a href="{{ route('register') }}">Register</a>
            </div>
            @endauth
    @endif
  </div>
  </nav>
</div>
</div>
