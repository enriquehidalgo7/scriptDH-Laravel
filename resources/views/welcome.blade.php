@extends('layouts.master')



@section('content')
            <div class="content">
              <div class="slider">
      <img src="img/sliderIphoneX.jpg" class="responsive">
    </div>
    <div class="container">
      <div class="linea">
        <span>productos destacados</span>
      </div>
    </div>
    <div class="container">
      <div class="productos">
          @forelse($products as product)
        <a href= "show/{{$product->id}}">
          <article class="producto">
            <img src="{{$product->images}}" width="100%" class="nuevo">
            <div class="nombreProducto">{{ $product->name}}</div>
            <div class="precioProducto">{{ $product->price}}</div>
            <!-- podemos agregar la descripción del producto acá, dentro de la página del producto especifico -->
            <!-- <div class="DescriptionProducto">{{ $product->description}}</div> -->


            <!-- La opción de agregar al carrito la incluiria en la pagina especifica del producto -->
            <!-- <a href="/carrito">
              <div class="agregar">agregar al <i class="fas fa-shopping-cart"></i></div>
            </a> -->
            @empty
            <p>No tenemos productos en este momento</p>
          </article>
        </a>
          @endforelse  
        <a href="/productos">
          <article class="producto">
            <div class="descuento">10%</div>
            <img src="img/samsungs9.jpg" width="100%">
            <div class="nombreProducto">Samsung S9</div>
            <div class="precioDescuento">$32.999</div>
            <div class="precioProducto">$29.699</div>
            <a href="carrito.php">
              <div class="agregar">agregar al <i class="fas fa-shopping-cart"></i></div>
            </a>
          </article>
        </a>
        <a href="/productos">
          <article class="producto">
            <img src="img/motorola.jpg" width="100%">
            <div class="nombreProducto">Motorola Z3</div>
            <div class="precioProducto">$23.900</div>
            <a href="carrito.php">
              <div class="agregar">agregar al <i class="fas fa-shopping-cart"></i></div>
            </a>
          </article>
        </a>
        <a href="/productos">
          <article class="producto">
            <div class="descuento">9%</div>
            <img src="img/huaweip20.jpg" width="100%">
            <div class="nombreProducto">Huawei P20</div>
            <div class="precioDescuento">$29.999</div>
            <div class="precioProducto">$28.499</div>
            <a href="carrito.php">
              <div class="agregar">agregar al <i class="fas fa-shopping-cart"></i></div>
            </a>
          </article>
        </a>
      </div>
    </div>

    <div class="container-total">
      <div class="container justificar">
        <div class="ofertas">
          <div class="linea">
            <span>accesorios</span>
          </div>
          <div class="contenedorOfertas">
            <div class="bordeCategoria">
              <img src="img/categorias/cargadores.jpg" class="fotoCategoria">
              cargadores
            </div>
            <div class="bordeCategoria">
              <img src="img/categorias/auriculares.jpg" class="fotoCategoria">
              auriculares
            </div>
            <div class="bordeCategoria">
              <img src="img/categorias/fundas.jpg" class="fotoCategoria">
              fundas
            </div>
            <div class="bordeCategoria">
              <img src="img/categorias/soportes.jpg" class="fotoCategoria">
              soportes
            </div>
            <div class="bordeCategoria">
              <img src="img/categorias/films.jpeg" class="fotoCategoria">
              films
            </div>
            <div class="bordeCategoria">
              <img src="img/categorias/cables.jpg" class="fotoCategoria">
              cables
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container justificar">
      <div class="datos">
        <div class="ventaTelefonica">
          <p class="bold">Venta telefónica</p>
          <i class="fas fa-phone"></i> 0810-123-smart
        </div>
        <div class="atencionTelefonica">
          <p class="bold">Atención al cliente</p>
          <i class="fas fa-envelope"></i><a href="mailto:cliente@smarteate.com.ar?subject=Correo%20desde%20la%20web%20SmarTeate">cliente@smarteate.com.ar</a>
        </div>
        <div class="entrega">
          <p class="bold">Entrega</p>
          <i class="fas fa-shipping-fast"></i> En 24 hs. recibís tus productos.
        </div>
      </div>
    </div>
            </div>
    @endsection
