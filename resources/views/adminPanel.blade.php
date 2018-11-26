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
    <a href="/products/create" class="btn btn-primary text-center">Crear Productos</a>
  </div>
  <br><br>
  @forelse($Products as $product)
  <div class="container">
  <div class="row">
    <div class="col-sm-8 d-flex flex-column justify-content-center text-center mx-auto">
        <div class="card mx-5" style="width: 18rem;">
    <img class="card-img-top" src="{{$product->images}}">
    <div class="card-body">
      <h5 class="card-title">{{ $product->name }}</h5>
      <h6 class="card-title">{{ $product->price }}</h6>
      <p class="card-text">{{ $product->description }}</p>
      <p class="card-text">{{ $product->units }}</p>
    </div>
  </div>
  <br><br>
  </div>

    <div class="col-sm-4 flex-column p-2">
      <br><br>

      <a href="/products/modify/{{$product->id}}" class="btn btn-success btn-lg btn-block">Editar</a>

      <br><br>

      <form action="/products/delete/{{$product->id}}" method="post">
				@method('DELETE')
				@csrf
				<button class="btn btn-danger btn-lg btn-block">Borrar</button>
			</form>
    </div>
    <br><br>
    @empty
    <strong>No hay productos cargados</strong>
    @endforelse
  </div>
  </div>

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
      <a href="/accesories/create" class="btn btn-primary text-center">Crear Accesorio</a>
    </div>

    <br><br>

    @forelse($Accesories as $accesory)
    <div class="container">
    <div class="row">
      <div class="col-sm-8 d-flex flex-column justify-content-center text-center mx-auto">
          <div class="card mx-5" style="width: 18rem;">
      <img class="card-img-top" src="{{$accesory->images}}">
      <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <h6 class="card-title">{{ $accesory->price }}</h6>
        <p class="card-text">{{ $accesory->description }}</p>
        <p class="card-text">{{ $accesory->units }}</p>
      </div>
    </div>
    <br><br>
    </div>

      <div class="col-sm-4 flex-column p-2">
        <br><br>
        <a href="/accesory/modify/{{$accesory->id}}" class="btn btn-success btn-lg btn-block">Editar</a>

        <br><br>

        <form action="/accesory/delete/{{$accesory->id}}" method="post">
          @method('DELETE')
          @csrf
          <button class="btn btn-danger btn-lg btn-block">Borrar</button>
        </form>

      </div>
      @empty
      <strong>No hay accesorios cargados</strong>
      @endforelse
    </div>
    </div>

      <div class="container d-flex justify-content-center">
        {{$Accesories->links()}}
      </div>
  </div>
</section>
<br><br>
@endsection
