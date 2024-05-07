@extends('frontend.frontMaster')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="about__text">
                <div class="section-title">
                    <span>Product Name:</span>
                    <h3>{{ $productDetails->productName }}</h3><br>
                    <span>Product Description:</span>
                    <p>{{ $productDetails->description }}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <h2>{{ $productDetails->category->categoryName }}</h2>
            <div class="container">
                <div class="d-flex justify-content-around">
                    <img src="{{$productDetails->image}}" style="max-width: 200px;" alt="">
                </div>

                <a href="" class="btn primary-btn mr-2">Add to Cart</a>
                <a href="" class="btn primary-btn">Add to Wishlist</a>
            </div>


        </div>
    </div>
</div>





@endsection