@extends("layouts.app")

@section("content")
  <div class="container">
    @if(session('info'))
    <div class="alert alert-info">
    {{ session('info') }}
    </div>
    @endif
    {{ $products->links() }}
    <h1>Products</h1>
    @foreach($products as $product)
    <div class="card">
      <div class="card-body">
        <h5> {{ $product['product_name'] }} </h5>
        <a href="{{ url("/products/detail/$product->id") }}" class="card-link">View Details &raquo</a>
      </div>
    </div>
    @endforeach
  </div>
@endsection