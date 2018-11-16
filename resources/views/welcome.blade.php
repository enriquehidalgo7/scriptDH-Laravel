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
    </div

    <div class="container">
      <div class="productos">
          @foreach($latestproducts as $product)
        <a href= "show/{{$product->id}}">
          <article class="producto">
            <img src="{{$product->images}}" width="100%" class="nuevo">
            <div class="nombreProducto">{{ $product->name}}</div>
            <div class="precioProducto">{{ $product->price}}</div>
              </article>
          </a>
          @endforeach
      </div>
    </div>

    <div class="container-total">
      <div class="container justificar">
        <div class="ofertas">
          <div class="linea">
            <span>accesorios</span>
          </div>
          <div class="contenedorOfertas">
            @foreach($latestaccesories as $accesory)
            <div class="bordeCategoria">
              <img src="{{$accesory->images}}" class="fotoCategoria">
              {{$accesory->name}}
            </div>
              @endforeach
          </div>
        </div>
      </div>
    </div>
    @endsection
