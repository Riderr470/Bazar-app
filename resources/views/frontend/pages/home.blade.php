@extends('frontend.master')

@section('banner')
<div id="myCarousel" class="carousel slide mb-6 h-50" data-bs-ride="carousel" data-bs-wrap="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    </div>
    <div class="carousel-inner">
        @php
        $isFirst = true; // Flag to track first iteration
        @endphp
        @foreach($banners as $banner)
        <div class="carousel-item {{ $isFirst ? 'active' : '' }}">
            <img src="{{ asset('/app/banner/' . $banner->image) }}" class="d-block w-100 h-25" alt="">
            @if (!empty($banner->image))
            @else
            <img src="{{ asset('placeholder.jpg') }}" class="d-block w-100 h-25" alt="Placeholder image">
            @endif

            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
            </svg>
            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Example headline.</h1>
                    <p class="opacity-75">Some representative placeholder content for the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                </div>
            </div>
        </div>
        @php
        $isFirst = false;
        @endphpx
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

@endsection

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
                    <a href="{{route('product.details', $prod->id)}}" class="btn btn-primary">View Details</a>
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