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
  <div class="row">
    <a href="smarteate/products/create" class="btn btn-success text-center">Crear Productos</a>
  </div>
  <br><br>
  @forelse($Products as $product)
  <div class="row">
    <div class="col-sm-8">
      <img src="{{$product->images}}" class="img-thumbnail">
      <div class="">{{ $product->name}}</div>
      <br>
      <div class="">{{ $product->description}}</div>
      <br>
      <div class="">{{ $product->price}}</div>
      <br>
      <div class="">{{ $product->units}}</div>
      <br>
    </div>
    <div class="list-group col-sm-4 d-inline-flex p-2">
      <!-- <ul>
        <li> -->
          <a href="smarteate/edit/product/{{$product->id}}" class="list-group-item list-group-item-primary">Edit</a>
        <!-- </li>
        <li> -->
        <br><br>

          <a href="smarteate/delete/product/{{$product->id}}" class="list-group-item list-group-item-danger txt-center">Delete</a>
        <!-- </li>
      </ul> -->
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
