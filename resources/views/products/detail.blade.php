@extends ("layouts.app")

@section("content")
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{ $product['product_name'] }}</h5>
        <p>Ordered By <strong>{{ count($product-> orders) }}</strong> People</p>
        <a href="{{ url("/products/order/$product->id") }}" class="btn btn-primary">Order Now</a>
      </div>
    </div>
  </div>
@endsection