<div class="hero__slider owl-carousel">
    @foreach($banner as $data)

    <div class="hero__item set-bg" data-setbg="{{asset('app/uploads/banner/'.$data->image)}}">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    @if($data->catchphrase)
                    <div class="hero__text">
                        <h2>{{$data->catchphrase}}</h2>
                        <a href="#" class="primary-btn">Our cakes</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>