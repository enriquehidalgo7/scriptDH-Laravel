@extends('layouts.masterAdmin')



@section('title')
Smarteate- Edit products
@endsection


@section('content')

<div class="container">

  <div class="container">
    <div class="row d-flex flex-row-reverse">
      <button type="button" class="btn btn-primary btn-large" name="button"><a href="/smarteate/admin" class="text-white">Panel del Administrador</a></button>
    </div>
  </div>

  <br>
  <h1 class="linea">Products Eidition Panel</h1>
  <br>

  <div class="">
    @if (session()->has('message'))
  		<div class="alert alert-success text-center">
  			{{ session()->get('message') }}
  		</div>
  	@endif
  </div>


  <div class="">
    @include('partials.error')
    </div>
    <br>

  <form class="form-group" action="/product/edit/{{$product->id}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <br>

    <label for="name">Nombre del producto:</label>
    <br>
    <input type="text" name="name" class="form-control" id="name" value="{{$product->name}}" required>
    <br>

    <label for="Description">Descripcion:</label>
    <br>
    <textarea class="form-control text-justify" name="description" id="Description" rows="4">{{$product->description}}</textarea>
    <br>

    <label for="price">Precio:</label>
    <br>
    <input type="number" name="price" class="form-control" id="price" value="{{$product->price}}" required>
    <br>

    <label for="units">Unidades:</label>
    <br>
    <input type="number" name="units" class="form-control" id="units" value="{{$product->units}}" required>
    <br>

      <h2 class="linea">La imagen cargada para este producto es:</h2>
      <div class="container text-center">
        <img src="{{$product->images}}" class="mx-auto" alt="">
      </div>
    <br>

    <label for="images">¿Desea cambiar imagen del producto?</label>
    <br>
    <input type="file" name="images" class="form-control" id="images">
    <br>

    <br>
    <div class="d-flex justify-content-center">
      <button type="submit" class="btn btn-success btn-lg">Editar producto</button>
    </div>
    <br>
    <br>
  </form>

  <br><br>


</div>


@endsection
