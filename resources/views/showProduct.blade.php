@extends('layouts.master')


@section('title')
{{$product->name}}
@endsection

@section('content')
<div class="container">
  <img src="{{$product->images}}" class="responsive">
</div>
<aside class="description">

  <h1>{{$product->name}}</h1>

  <br><br>

  <p>{{$product->description}}</p>

  <br><br>

  <h2>$ {{$product->price}}</h2>

<br><br>

<h3>Medios de pago habilitados:</h3>
<ul>
  <li>
    <img src="{{ asset('images/visa.png')}}" alt="">
  </li>
  <li>
    <img src="{{ asset('images/master.png')}}" alt="">
  </li>
  <li>
    <img src="{{ asset('images/amex.png')}}" alt="">
  </li>
</ul>

<a href="carrito.php">
  <div class="agregar">agregar al <i class="fas fa-shopping-cart"></i></div>
</a>

</aside>

@endsection
