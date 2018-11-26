@extends('layouts.masterAdmin')


@section('title')
Resultados de busqueda
@endsection

@section('content')
<div class="container">

  <div class="">
    @if (session()->has('message'))
  		<div class="alert alert-success text-center">
  			{{ session()->get('message') }}
  		</div>
  	@endif
  </div>

  <h1 class="linea">Encotramos los siguientes productos:</h1>
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
    <div class="d-flex justify-content-between">
      <a href="/products/modify/{{$product->id}}" class="btn btn-success">Editar</a>

      <form action="/products/delete/{{$product->id}}" method="post">
				@method('DELETE')
				@csrf
				<button class="btn btn-danger">Borrar</button>
			</form>
    </div>
  </div>
</div>
</div>
<br>
  @empty
  <h1 class="linea">No encontramos productos como los que buscas.</h1>
  @endforelse
</div>
</div>

  <br><br>

  <div class="container">
  <h2 class="linea">Encotramos los siguientes accesorios:</h2>
  <br>
  <div class="container d-flex flex-row">
  @forelse($Accesories as $accesory)
  <div class="col-sm-10 col-md-4 col-lg-3 d-flex justify-content-around">
      <div class="card mx-2" style="width: 18rem;">
    <img class="card-img-top" src="{{$accesory->images}}">
    <div class="card-body">
      <h6 class="card-title">{{ $accesory->name }}</h6>
      <h6 class="card-title">{{ $accesory->price }}</h6>
      <p class="card-text">{{ $accesory->description }}</p>

      <div class="d-flex justify-content-between">
        <a href="/accesory/modify/{{$accesory->id}}" class="btn btn-success">Editar</a>

        <form action="/accesory/delete/{{$accesory->id}}" method="post">
  				@method('DELETE')
  				@csrf
  				<button class="btn btn-danger">Borrar</button>
  			</form>
      </div>
    </div>
    </div>
  </div>
    @empty
    <h1 class="linea">No encontramos accesorios como los que buscas.</h1>
    @endforelse
  </div>
  </div>
  <br><br>






@endsection
