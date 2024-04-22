@extends('backend.master')


@section('content')


<h1>Show Category Details</h1>

<div class="row">
    <div class="col-md-6">
        <h5>Category Name</h5>
        <p>{{$data->categoryName}}</p>
        <h5>Brand Name</h5>
        <p>{{$data->brandName}}</p>
    </div>
    <div class="col-md-6">
        <h5>Image</h5>
        <img src="{{url('app/category', $data->image)}}" alt="" width="200">
    </div>
</div>




@endsection