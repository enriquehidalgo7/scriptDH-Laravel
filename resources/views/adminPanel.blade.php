@extends('layouts.masterAdmin')


@section('title')
Smarteate - Admin Panel
@endsection

@section('content')
<section class="container">
  <div class="linea">
    <span>Productos</span>
  </div>
  <br>
  <div class="row justify-content-center">
    <a href="smarteate/products/create" class="btn btn-success text-center">Crear Productos</a>
  </div>
  <br><br>
  @forelse($Products as $product)
  <div class="row">
    <div class="col-sm-8 d-flex flex-column justify-content-center">
      <img src="{{$product->images}}" class="img-thumbnail mx-auto">
      <div class="ustify-content-center">{{ $product->name}}</div>
      <br>
      <div class="justify-content-center">{{ $product->description}}</div>
      <br>
      <div class="justify-content-center">{{ $product->price}}</div>
      <br>
      <div class="justify-content-center">{{ $product->units}}</div>
      <br>
    </div>
    <div class="list-group col-sm-4 d-inline-flex p-2">
      <br><br>
      <a href="smarteate/edit/product/{{$product->id}}" class="list-group-item list-group-item-primary text-center">Edit</a>

      <br><br>

      <a href="smarteate/delete/product/{{$product->id}}" class="list-group-item list-group-item-danger text-center">Delete</a>
    </div>
    @empty
    <strong>No hay productos cargados</strong>
    @endforelse
    <div class="container">
      {{$Products->links()}}
    </div>
  </div>
</section>
<br><br>
@endsection
