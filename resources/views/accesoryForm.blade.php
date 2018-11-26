@extends('layouts.masterAdmin')



@section('title')
Smarteate- Add products
@endsection



@section('content')
<div class="container">

  <div class="container">
    <div class="row d-flex flex-row-reverse">
      <button type="button" class="btn btn-primary btn-large" name="button"><a href="/smarteate/admin" class="text-white">Panel del Administrador</a></button>
    </div>
  </div>
  
  <br>
  <h1 class="linea">Accesory Creation Panel</h1>
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

  <form class="form-group" action="/accesory/new/add" method="post" enctype="multipart/form-data">
    @csrf
    <br>

    <label for="name">Accesory Name:</label>
    <br>
    <input type="text" name="name" class="form-control" id="name" placeholder="Specify Name..." required>
    <br>

    <label for="description">Description:</label>
    <br>
    <textarea class="form-control" name="description" id="Description" rows="4" placeholder="This accespry is..."></textarea>
    <br>

    <label for="price">Price:</label>
    <br>
    <input type="text" name="price" class="form-control" id="price" placeholder="Price..." required>
    <br>

    <label for="units">Units:</label>
    <br>
    <input type="numer" name="units" class="form-control" id="units" placeholder="Available units..." required>
    <br>

    <label for="images">Product Image:</label>
    <br>
    <input type="file" name="images" class="form-control" id="images">
    <br>

    <br>
    <div class="d-flex justify-content-center">
      <button type="submit" class="btn btn-success btn-lg">Create Accesory</button>
    </div>
    <br>
    <br>
  </form>

  <br><br>


</div>
@endsection
