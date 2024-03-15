@extends('backend.master')


@section('content')

<h1>View All Products</h1>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Status</th>
      <th scope="col">Adding Time</th>
      <th scope="col">Update Time</th>
    </tr>
  </thead>
  <tbody>
    @foreach($product as $p)
    <tr>
      <th scope="row">{{ $p->id }}</th>
      <td>{{$p->productName}}</td>
      <td>{{$p->price}}</td>
      <td>{{$p->description}}</td>
      <td>{{$p->quantity}}</td>
      <td>{{$p->status}}</td>
      <td>{{$p->created_at}}</td>
      <td>{{$p->updated_at}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>



@endsection