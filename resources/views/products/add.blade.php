@extends("layouts.app")
@section("content")
<div class="container">
  @if ($errors->any())
  <div class="alert alert-warning">
    {{ "Please enter product name" }}
  </div>
  @endif
  <form method="post">
    @csrf
      <label>Product Name</label>
      <input type="text" name="product_name" autofocus autocomplete="off">
      <button class="btn btn-primary">Add Product</button>
  </form>
  </div>
@endsection