@extends('layouts.master')


@section('title')
Nuestros Accesorios
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="container col-sm-12 col-md-6">
      <img src="{{$accesory->images}}" class="img-fluid w-100">
    </div>
<aside class="container col-sm-12 col-md-6 border">

  <h1 class="text-center py-2">{{$accesory->name}}</h1>

  <br><br>

  <p class="text-justify">{{$accesory->description}}</p>

  <br><br>

  <h2 class="text-center py-2">$ {{$accesory->price}}</h2>

<br><br>

<h3 class="text-center">Medios de pago habilitados:</h3>
<br>
<ul class="row d-flex justify-content-between">
  <li class="d-inline-block w-25 h-100 px-3">
    <img src="{{ asset('images/visa.png')}}" class="w-100" alt="">
  </li>
  <li class="d-inline-block w-25 h-100 px-3">
    <img src="{{ asset('images/master.png')}}" class="w-100" alt="">
  </li>
  <li class="d-inline-block w-25 h-100 px-3">
    <img src="{{ asset('images/amex.png')}}" class="w-100" alt="">
  </li>
</ul>


<a href="/order/{{$accesory->id}}">
  <div class="agregar">agregar al <i class="fas fa-shopping-cart"></i></div>
</a>

</aside>
</div>
</div>
@endsection
