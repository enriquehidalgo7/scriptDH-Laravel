@extends('layouts.master')


@section('title')
Resultados de búsqueda
@endsection

@section('content')
<div class="container">
  <h1 class="linea">Tu búsqueda arrojo los siguientes resultados:</h1>
  <br>
  <div class="container d-flex flex-row">
  @forelse($Products as $product)
  <div class="col-sm-10 col-md-4 col-lg-3 d-flex justify-content-around">
      <div class="card mx-2" style="width: 18rem;">
  <img class="card-img-top" src="{{$product->images}}">
  <div class="card-body">
    <h5 class="card-title">{{ $product->name }}</h5>
    <h6 class="card-title">{{ $product->price }}</h6>
    <p class="card-text">{{ $product->description }}</p>
    <a href="order/{{$product->id}}">
      <div class="agregar">agregar al <i class="fas fa-shopping-cart"></i></div>
    </a>
  </div>
</div>
</div>
<br>
  @empty
  <div class="container text-center">
    <h4>No encontramos productos como los que buscas.</h4>
  </div>
  @endforelse
</div>
</div>

  <br><br>

  <div class="container">
  <div class="container d-flex flex-row">
  @foreach($Accesories as $accesory)
  <div class="col-sm-10 col-md-4 col-lg-3 d-flex justify-content-around">
      <div class="card mx-2" style="width: 18rem;">
    <img class="card-img-top" src="{{$accesory->images}}">
    <div class="card-body">
      <h6 class="card-title">{{ $accesory->name }}</h6>
      <h6 class="card-title">{{ $accesory->price }}</h6>
      <p class="card-text">{{ $accesory->description }}</p>
      <a href="order/{{$accesory->id}}">
        <div class="agregar">agregar al <i class="fas fa-shopping-cart"></i></div>
      </a>
    </div>
    </div>
  </div>
  @endforeach
  </div>
  </div>
  <br><br>






@endsection
