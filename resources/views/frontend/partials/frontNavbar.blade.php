<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header__top__inner">
                        <div class="header__top__left">
                            <ul>
                                @auth()
                                <li>{{auth()->user()->name}} <span class="arrow_carrot-down"></span>
                                    <ul>
                                        <li><a href="{{route('user.profile', auth()->user()->id)}}">Profile</a></li>
                                        <li><a href="{{route('logout')}}">Logout</a></li>
                                    </ul>
                                </li>
                                @endauth



                                <div class="header__top__right__links">
                                    <a href="#" class="search-switch"><img width="20" src="{{url('images/others/search.png')}}" alt></a>
                                    <a href="#"><img src="img/icon/heart.png" alt></a>
                                </div>
                            </ul>
                        </div>
                        <div class="header__logo">
                            <a href="{{route('home')}}"><img width="100" src="{{asset('images/svg/logo-no-background.svg')}}" alt></a>
                        </div>
                        <div class="header__top__right">
                            @guest

                            <div class="header__top__right__links">
                                <a class="btn secondary-btn" href="{{route('register')}}">Register</a>

                            </div>
                            <div class="header__top__right__links">
                                <a class="btn secondary-btn" href="{{route('login')}}">Login</a>

                            </div>
                            @endguest


                            @php
                            $t_price = 0;
                            @endphp


                            <div class="header__top__right__cart">
                                <div class="header__top__left" style="display: flex;   align-items:center;">
                                    <a href="{{route('cart.view')}}"><img style="vertical-align: middle;" width="35" src="{{asset('images/others/cart.webp')}}" alt></a>
                                    <ul>
                                        <li>Cart
                                            <ul>
                                                @if(session()->has('cart') && !empty(session()->get('cart')))
                                                @foreach(session()->get('cart') as $key=>$cart)
                                                <li style="display: flex; align-items: center;">
                                                    <img src="{{$cart['image']}}" alt="">{{ $cart['name'] }}
                                                    <a class="btn site-btn" href="{{route('cart.remove', $key)}}">remove</a>
                                                </li>
                                                @php
                                                $t_price += $cart['price'] * $cart['quantity'];
                                                @endphp
                                                @endforeach
                                                <li><a class="btn site-btn" href="{{route('cart.clear')}}">Clear list</a></li>
                                                @else
                                                <li>Cart is empty</li>
                                                @endif
                                            </ul>
                                        </li>
                                        @if(session()->has('cart'))
                                        <li>Total: {{ $t_price }}</li>
                                        @endif
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="./index.html">Home</a></li>
                        <li><a href="./about.html">About</a></li>
                        <li><a href="./shop.html">Shop</a></li>
                        <li><a href="#">Category</a>
                            <ul class="dropdown">
                                @foreach($categories as $data)
                                <li><a href="./shop-details.html">{{$data->categoryName}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="./blog.html">Blog</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>