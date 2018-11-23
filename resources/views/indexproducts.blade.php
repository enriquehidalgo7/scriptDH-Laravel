@extends('layouts.master')


@section('title')
Nuestros Productos
@endsection

@section('content')
<div class="container">
  @forelse($allProducts as $product)
  <a href= "/productos/{{$product->id}}">
    <article class="producto">
      <img src="{{$product->images}}" width="100%" class="nuevo">
      <div class="nombreProducto">{{ $product->name}}</div>
      <div class="precioProducto">{{ $product->price}}</div>
        </article>
    </a>
  @empty
  <h1>No hay productos cargados</h1>
  @endforelse
  </div>
  <br><br>
  <div class="container">
    {{$allProducts->links()}}
  </div>
@endsection
