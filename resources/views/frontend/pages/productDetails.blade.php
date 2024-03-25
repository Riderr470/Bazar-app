@extends('frontend.master')


@section('content')


<h1>Prdouct Details</h1>


<div class="row">
    <div class="col-md-4">
        <img src="{{asset('app/products/'.$productDetails->image)}}" class="img-fluid" style="max-width: 200px; height: auto;" alt="">
    </div>

    <div class="col-md-8">
        <div class="d-flex flex-column justify-content-center h-100">
            <h5>Product Name:</h5>
            <p>{{ $productDetails->productName }}</p>
            <h5>Product Description:</h5>
            <p>{{ $productDetails->description }}</p>
            <div class="col">
                <a href="" class="btn btn-primary mr-2">Add to Cart</a>
                <a href="" class="btn btn-primary">Add to Wishlist</a>
            </div>
        </div>
    </div>
</div>
<p></p>


@endsection