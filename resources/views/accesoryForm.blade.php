@extends('layouts.masterAdmin')



@section('title')
Smarteate- Add products
@endsection



@section('content')
<div class="container">
  <br>
  <h1 class="linea">Products Creation Panel</h1>
  <br>
  <form class="form-group" action="product/new/add" method="post" enctype="multipart/form-data">
    @csrf
    <br>

    <label for="name">Product Name:</label>
    <br>
    <input type="text" name="name" class="form-control" id="name" placeholder="Specify Name..." required>
    <br>

    <label for="description">Description:</label>
    <br>
    <textarea class="form-control" id="Description" rows="4" placeholder="This product is..."></textarea>
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
      <button type="submit" class="btn btn-primary btn-lg">Create Product</button>
    </div>
    <br>
    <br>

  </form>
</div>
@endsection
