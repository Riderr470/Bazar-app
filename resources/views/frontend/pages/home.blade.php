@extends('frontend.master')



@section('content')

<div class="container">
    <h2 class="mt-5 mb-4">Featured Products</h2>
    <div class="row">
        <!-- Product 1 -->
        @foreach($products as $prod)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <img src="{{asset('app/products/'.$prod->image)}}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">{{ $prod->productName }}</h5>
                    <p class="card-text">{{ $prod->description }}</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        @endforeach

        <!-- Product 2 -->
        <div class="card product mb-3">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-text">Description of Product 2.</p>
                <a href="#" class="btn btn-primary">View Details</a>
            </div>
        </div>

        <!-- Add more products here -->
    </div>
</div>

@endsection