@extends('backend.master')


@section('content')

<h1>Create new product</h1>
<form action="{{route('product.create')}}" method="post" enctype="multipart/form-data">
  @csrf
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <div class="form-group">
    <label for="productName">Product Name</label>
    <input type="text" name="productName" class="form-control" id="productName" placeholder="Enter Product Name" value="{{old('productName')}}">

  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="number" name="price" class="form-control" id="price" placeholder="Enter Price" value="{{old('price')}}">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" id="description" placeholder="Enter Description" value="{{old('description')}}"></textarea>
  </div>
  <div class="form-group">
    <label for="quantity">quantity</label>
    <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Enter quantity" value="{{old('quantity')}}">
  </div>
  <div class="form-group">
    <label for="image">quantity</label>
    <input type="file" name="image" class="form-control" id="image">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection