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
      Productos
    </div>
    <div class="buscador">
      <input type="text" id="buscador" name="buscador" placeholder="buscar...">
      <button type="submit" class="btnLupa"><i class="fas fa-search lupa"></i></button>
    </div>
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
                <a href="{{ url('/home') }}">Home</a>
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
