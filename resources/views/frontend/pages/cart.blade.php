@extends('frontend.frontMaster')



@section('content')




<div class="container">
    <div class="row">
        <div class="col-md-7">

            @foreach(session()->get('cart') as $key=>$item )
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{ $item['image'] }}" class="card-img" alt="">
                    </div>
                    <div class="col-md-4" style="padding: 20px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['name'] }}</h5>
                            <p class="card-text"><strong>Price: </strong> {{ $item['price'] }}</p>
                            <p class="card-text"><strong>Quantity: </strong> {{ $item['quantity'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-top: 60px;">
                        <a href="{{ route('cart.add', $key) }}" class="btn secondary-btn btn-block text-center">Add to cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-md-4 position-fixed" style="margin-top: 20px; top: 0; right: 0;">

            <div class="card d-flex flex-column h-100" style="padding-top: 20px;">
                <div class="card-body" style="display: flex;  flex-direction: column;  justify-content: center;  align-items: center;">
                    <div class="d-flex justify-content-between information"><span>Subtotal</span><span> BDT</span></div>
                    <div class="d-flex justify-content-between information"><span>Shipping</span><span>70.00 BDT</span></div>
                    <div class="d-flex justify-content-between information"><span>Total(Incl. taxes)</span><span> BDT</span></div>
                </div>
                <a style="margin-top: 50px;" href="" class="btn secondary-btn">Checkout</a>
            </div>
        </div>
    </div>
</div>



@endsection