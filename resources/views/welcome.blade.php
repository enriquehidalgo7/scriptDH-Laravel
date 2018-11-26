@extends('layouts.master')



@section('content')
            <div class="content">
              <div class="slider">
      <img src="{{ asset('images/sliderIphoneX.jpg')}}" class="responsive">
    </div>
    <div class="container">
      <div class="linea">
        <span>productos destacados</span>
      </div>
    </div>

    <div class="container d-flex flex-row">
    @foreach($latestproducts as $product)
    <div class="col-sm-10 col-md-4 col-lg-3 d-flex justify-content-around">
    <a class="mx-3" href="/productos/{{$product->id}}">
      <div class="card mx-2" style="width: 18rem;">
        <img class="card-img-top" src="{{$product->images}}">
      <div class="card-body">
      <h5 class="card-title text-center">{{ $product->name }}</h5>
      <h6 class="card-title text-center">{{ $product->price }}</h6>
    </div>
  </div>
  </a>
  </div>
  @endforeach
  <br>
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
              <a href="/accesorio/{{$accesory->id}}">{{$accesory->name}}</a>
            </div>
              @endforeach
          </div>
        </div>
      </div>
    </div>
    @endsection
