@extends('backend.master')

@section('content')

<h1>Create Order</h1>
<form action="{{route('order.create')}}" method="post">
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
        <label for="productName">Order Name</label>
        <input type="text" name="orderName" class="form-control" id="orderName" placeholder="Enter Order Name" value="{{old('orderName')}}">

    </div>

    <div class="form-group">
        <label for="quantity">quantity</label>
        <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Enter quantity" value="{{old('quantity')}}">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection