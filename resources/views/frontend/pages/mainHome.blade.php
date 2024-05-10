@extends('frontend.frontMaster')


@section('carousal')

@include('frontend.partials.frontCarousal')

@endsection


@section('content')
<section class="about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about__text">
                    <div class="section-title">
                        <span>About Cake shop</span>
                        <h2>Cakes and bakes from the house of Queens!</h2>
                    </div>
                    <p>The "Cake Shop" is a Jordanian Brand that started as a small family business. The owners are
                        Dr. Iyad Sultan and Dr. Sereen Sharabati, supported by a staff of 80 employees.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about__bar">
                    <div class="about__bar__item">
                        <p>Cake design</p>
                        <div id="bar1" class="barfiller">
                            <div class="tipWrap"><span class="tip"></span></div>
                            <span class="fill" data-percentage="95"></span>
                        </div>
                    </div>
                    <div class="about__bar__item">
                        <p>Cake Class</p>
                        <div id="bar2" class="barfiller">
                            <div class="tipWrap"><span class="tip"></span></div>
                            <span class="fill" data-percentage="80"></span>
                        </div>
                    </div>
                    <div class="about__bar__item">
                        <p>Cake Recipes</p>
                        <div id="bar3" class="barfiller">
                            <div class="tipWrap"><span class="tip"></span></div>
                            <span class="fill" data-percentage="90"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">

                @foreach($categories as $category)
                <div class="categories__item">
                    <div class="categories__item__icon">
                        <span class="flaticon-029-cupcake-3"></span>
                        <h5>{{$category->categoryName}}</h5>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>


<section class="product spad">
    <div class="container">
        <div class="row">
            @foreach($products as $product)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="{{$product->image}}">
                        <div class="product__label">
                            <span>{{$product->category->categoryName}}</span>
                        </div>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="{{route('product.details', $product->id)}}">{{$product->productName}}</a></h6>
                        <div class="product__item__price">${{$product->price}}</div>
                        <div class="cart_add">
                            <a href="{{route('cart.add', $product->id)}}">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endsection