<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bazar</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/barfiller.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}" type="text/css">
    <script nonce="4d5bd136-fc4e-4efe-b077-72094de95ba8">
        try {
            (function(w, d) {
                ! function(ng, nh, ni, nj) {
                    ng[ni] = ng[ni] || {};
                    ng[ni].executed = [];
                    ng.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    ng.zaraz._v = "5594";
                    ng.zaraz.q = [];
                    ng.zaraz._f = function(nk) {
                        return async function() {
                            var nl = Array.prototype.slice.call(arguments);
                            ng.zaraz.q.push({
                                m: nk,
                                a: nl
                            })
                        }
                    };
                    for (const nm of ["track", "set", "debug"]) ng.zaraz[nm] = ng.zaraz._f(nm);
                    ng.zaraz.init = () => {
                        var nn = nh.getElementsByTagName(nj)[0],
                            no = nh.createElement(nj),
                            np = nh.getElementsByTagName("title")[0];
                        np && (ng[ni].t = nh.getElementsByTagName("title")[0].text);
                        ng[ni].x = Math.random();
                        ng[ni].w = ng.screen.width;
                        ng[ni].h = ng.screen.height;
                        ng[ni].j = ng.innerHeight;
                        ng[ni].e = ng.innerWidth;
                        ng[ni].l = ng.location.href;
                        ng[ni].r = nh.referrer;
                        ng[ni].k = ng.screen.colorDepth;
                        ng[ni].n = nh.characterSet;
                        ng[ni].o = (new Date).getTimezoneOffset();
                        if (ng.dataLayer)
                            for (const nt of Object.entries(Object.entries(dataLayer).reduce(((nu, nv) => ({
                                    ...nu[1],
                                    ...nv[1]
                                })), {}))) zaraz.set(nt[0], nt[1], {
                                scope: "page"
                            });
                        ng[ni].q = [];
                        for (; ng.zaraz.q.length;) {
                            const nw = ng.zaraz.q.shift();
                            ng[ni].q.push(nw)
                        }
                        no.defer = !0;
                        for (const nx of [localStorage, sessionStorage]) Object.keys(nx || {}).filter((nz => nz.startsWith("_zaraz_"))).forEach((ny => {
                            try {
                                ng[ni]["z_" + ny.slice(7)] = JSON.parse(nx.getItem(ny))
                            } catch {
                                ng[ni]["z_" + ny.slice(7)] = nx.getItem(ny)
                            }
                        }));
                        no.referrerPolicy = "origin";
                        no.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(ng[ni])));
                        nn.parentNode.insertBefore(no, nn)
                    };
                    ["complete", "interactive"].includes(nh.readyState) ? zaraz.init() : ng.addEventListener("DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>
</head>

<body>

    <div id="preloder">
        <div class="loader"></div>
    </div>

    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__cart">
            <div class="offcanvas__cart__links">
                <a href="#" class="search-switch"><img src="img/icon/search.png" alt></a>
                <a href="#"><img src="img/icon/heart.png" alt></a>
            </div>
            <div class="offcanvas__cart__item">
                <a href="#"><img src="img/icon/cart.png" alt> <span>0</span></a>
                <div class="cart__price">Cart: </div>
            </div>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__option">
            <ul>
                <li>USD <span class="arrow_carrot-down"></span>
                    <ul>
                        <li>EUR</li>
                        <li>USD</li>
                    </ul>
                </li>
                <li>ENG <span class="arrow_carrot-down"></span>
                    <ul>
                        <li>Spanish</li>
                        <li>ENG</li>
                    </ul>
                </li>
                <li><a href="#">Sign in</a> <span class="arrow_carrot-down"></span></li>
            </ul>
        </div>
    </div>




    @include('frontend.partials.frontNavbar')





    <section class="hero">

        @if(request()->routeIs('home'))

        @yield('carousal')

        @endif


    </section>


    @yield('content')


    <section class="class spad">

        @yield('registration')

    </section>










    <!-- <div class="map">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-7">
                    <div class="map__inner">
                        <h6>COlorado</h6>
                        <ul>
                            <li>1000 Lakepoint Dr, Frisco, CO 80443, USA</li>
                            <li><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="50032735352433313b3510232520203f22247e333f3d">[email&#160;protected]</a></li>
                            <li>+1 800-786-1000</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="map__iframe">
            <iframe src="https://www.google.com/maps/embed/v1/place?q=VCF3%2B8M8%2C%20R%20%23%202%20%26%205%2C%20S%23%2006%2C%20Uttara%2C%20Dhaka%2C%20Dhaka%201230&key=1!5e0!3m2!1sen!2sbd!4v1543907528304" height="300" style="border:0;" allowfullscreen aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div> -->


    @include('frontend.partials.frontFooter')


    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>


    <script src="{{url('frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{url('frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{url('frontend/js/jquery.barfiller.js')}}"></script>
    <script src="{{url('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('frontend/js/jquery.slicknav.js')}}"></script>
    <script src="{{url('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('frontend/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{url('frontend/js/main.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v55bfa2fee65d44688e90c00735ed189a1713218998793" integrity="sha512-FIKRFRxgD20moAo96hkZQy/5QojZDAbyx0mQ17jEGHCJc/vi0G2HXLtofwD7Q3NmivvP9at5EVgbRqOaOQb+Rg==" data-cf-beacon='{"rayId":"87ac757a7c9ff440","version":"2024.4.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>

</html>