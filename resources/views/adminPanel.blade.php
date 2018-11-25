@extends('layouts.masterAdmin')


@section('title')
Smarteate - Panel de Administrador
@endsection

@section('content')
<section class="container">
  <div class="linea">
    <span>Productos</span>
  </div>
    
  <div class="">
    @if (session()->has('message'))
  		<div class="alert alert-success text-center">
  			{{ session()->get('message') }}
  		</div>
  	@endif
  </div>

  <br>
  <div class="row justify-content-center">
    <a href="/products/create" class="btn btn-success text-center">Crear Productos</a>
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
    <div class="col-sm-4 flex-column p-2">
      <br><br>

      <a href="/products/modify/{{$product->id}}" class="btn btn-warning">Editar</a>

      <br><br>

      <form action="/products/delete/{{$product->id}}" method="post">
				@method('DELETE')
				@csrf
				<button class="btn btn-danger">Borrar</button>
			</form>
    </div>
    @empty
    <strong>No hay productos cargados</strong>
    @endforelse
    <div class="container d-flex justify-content-center">
      {{$Products->links()}}
    </div>
  </section>

    <br><br>

    <section class="container">
    <div class="linea">
      <span>Accesorios</span>
    </div>
    <br>
    <div class="row justify-content-center">
      <a href="/accesories/create" class="btn btn-success text-center">Crear Accesorio</a>
    </div>
    <br><br>
    @forelse($Accesories as $accesory)
    <div class="row">
      <div class="col-sm-8 d-flex flex-column justify-content-center">
        <img src="{{$accesory->images}}" class="img-thumbnail mx-auto">
        <div class="ustify-content-center">{{ $accesory->name}}</div>
        <br>
        <div class="justify-content-center">{{ $accesory->description}}</div>
        <br>
        <div class="justify-content-center">{{ $accesory->price}}</div>
        <br>
        <div class="justify-content-center">{{ $accesory->units}}</div>
        <br>
      </div>
      <div class="list-group col-sm-4 d-inline-flex p-2">
        <br><br>
        <a href="/accesory/modify/{{$accesory->id}}" class="list-group-item list-group-item-primary text-center">Editar</a>

        <br><br>

        <form action="/accesory/delete/{{$accesory->id}}" method="post">
          @method('DELETE')
          @csrf
          <button class="btn btn-danger">Borrar</button>
        </form>

      </div>
      @empty
      <strong>No hay accesorios cargados</strong>
      @endforelse
      <div class="container d-flex justify-content-center">
        {{$Accesories->links()}}
      </div>
  </div>
</section>
<br><br>
@endsection
