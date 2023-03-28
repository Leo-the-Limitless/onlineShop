@extends ("layouts.app")

@section ("content")
  <div class="container">
    @if ($errors->any())
    <div class="alert alert-warning">
    {{ "Please enter your name and try again" }}
    </div>
    @endif
  <form method="post">
    @csrf
    <h2>Place an order</h2>
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="customerName" class="form-control" placeholder="Enter your name" autofocus autocomplete="off">
  </div>
  <div class="form-group">
    <label>Product</label>
    <input type="text" class="form-control" value="{{ $product['product_name'] }} " disabled>
  </div>
  <button type="submit" class="btn btn-primary">Order</button>
</form>
</div>
@endsection