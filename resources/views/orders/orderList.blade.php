@extends("layouts.app")

@section("content")
@if (session('info'))
<div class="alert alert-info">
  {{ session('info') }}
</div>
@endif
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">product_name</th>
      <th scope="col">customer_name</th>
      <th scope="col"></th>
    </tr>
  </thead>
  @foreach($orders as $order)
  <tbody>
    <tr>
      <th scope="row">{{ $order['id'] }}</th>
      <td>{{ $order->product->product_name }}</td>
      <td>{{ $order['customerName'] }}</td>
      <td><a href="{{ url("/orders/cancel/$order->id") }}" class="btn btn-primary">Cancel Order</a></td>
    </tr>
  </tbody>
  @endforeach
</table>
@endsection