<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header__top__inner">
                        <div class="header__top__left">
                            <ul>
                                <li>Profile <span class="arrow_carrot-down"></span>
                                    <ul>
                                        <li></li>
                                        <li>USD</li>
                                    </ul>
                                </li>



                                <div class="header__top__right__links">
                                    <a href="#" class="search-switch"><img width="20" src="{{url('images/others/search.png')}}" alt></a>
                                    <a href="#"><img src="img/icon/heart.png" alt></a>
                                </div>
                            </ul>
                        </div>
                        <div class="header__logo">
                            <a href="./index.html"><img width="100" src="{{asset('images/svg/logo-no-background.svg')}}" alt></a>
                        </div>
                        <div class="header__top__right">

                            <div class="header__top__right__links">
                                <a href="#">Register</a>

                            </div>
                            <div class="header__top__right__links">
                                <a href="#">Login</a>

                            </div>




                            <div class="header__top__right__cart">
                                <a href="#"><img width="30" src="{{asset('images/others/cart.webp')}}" alt></a>
                                <div class="cart__price">Cart</div>
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