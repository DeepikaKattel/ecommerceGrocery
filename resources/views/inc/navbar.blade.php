<!-- Start Main Top -->
<style>
.navbar-brand {
    height:85px;
}
.bg-dark {
    background-color: #dbd2d2!important;
}
</style>
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="our-link">
                        <ul>
                            <li style="color:white">Call US :- +900 800 10</li>
                            <li style="color:white"><i class="fas fa-location-arrow"></i> Our location</li>
                            <li style="color:white"> Contact Us</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="our-link" style="float:right">
                        <ul class="right">
                        @guest
                            <li><a href="/register" style="color:white">Register</a></li>
                            <li><a href="/login" style="color:white">Login</a></li>
                        @else
                            @if (Auth::user()->isStaff())
                                <li><a href="/admin/dashboard">Dashboard</a></li>
                            @endif
                            <li><a href="/profile"><i class="fa fa-user s_color"></i> {{Auth::user()->name}} </a></li>
                            <li>
                                <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                        </ul>
                    </div>



                    {{--<div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT80
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT30
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                            </ul>
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/"><img src="{{asset('images/logo.png')}}" class="logo" alt="" style="height:60px;width:100px;margin-right:200px"></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
                        <li class="search">
                            <form action="/products/search" method="POST" style="margin-top:5px;">
                                @csrf
                                <div class="control-group pb-3">
                                    <input class="search-field" placeholder="Search..." name="query" style="height:40px;width:600px"/>
                                    <button type="submit" style="height:40px;background:#b0b435"><i class="fa fa-search fa-lg"></i></button>
                                    <a class="search-button" type="submit"></a>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li>
                            <div class="col-xs-12 col-sm-12 col-md-3 top-cart-row no-margin">
                                <div class="top-cart-row-container">
                                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
                                    <div class="top-cart-holder dropdown animate-dropdown" >
                                        <div class="basket" id="cart-dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                @guest
                                                <a href="/login">
                                                    <div class="basket-item-count">
                                                        <span class="count">0</span>
                                                        <img src="/assets/images/icon-cart.png" alt="" />
                                                    </div>
                                                    <div class="total-price-basket" style="width:100px">
                                                        <span class="lbl" style="font-size:10px">Manage cart</span>
                                                    </div>
                                                </a>
                                                @else
                                                    @if ($carts ?? '')
                                                        <div class="basket-item-count" style="width:400px">
                                                            <span class="count">{{count($carts)}}</span>
                                                            <img src="/assets/images/icon-cart.png" alt="" />
                                                        </div>

                                                        <div class="total-price-basket">
                                                            <span class="lbl">your cart:</span>
                                                            <span class="total-price">
                                                                <span class="sign">Rs.</span>
                                                                <span class="value">{{$grand_total}}</span>
                                                            </span>
                                                        </div>
                                                    @else
                                                        <div class="basket-item-count">
                                                            <span class="count">0</span>
                                                            <img src="/assets/images/icon-cart.png" alt="" />
                                                        </div>

                                                        <div class="total-price-basket">
                                                            <span class="lbl">your cart:</span>
                                                            <span class="total-price">
                                                                <span class="sign">Rs.</span>
                                                                <span class="value">0</span>
                                                            </span>
                                                        </div>
                                                    @endif
                                                @endguest
                                            </a>

                                            @if ($carts ?? '')
                                                <ul class="dropdown-menu">
                                                    @foreach ($carts as $cart)
                                                        <li>
                                                            <div class="basket-item">
                                                                <div class="row">
                                                                    <div class="col-xs-4 col-sm-4 no-margin text-center">
                                                                        <div class="thumb">
                                                                            <img alt="" src="/assets/images/products/{{$cart->product->image}}" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-8 col-sm-8">
                                                                        <div class="title">{{$cart->product->name}}</div>
                                                                        <div class="price">Rs.{{$cart->product->rate}}</div>
                                                                    </div>
                                                                </div>
                                                                <a class="close-btn" href="#"></a>
                                                            </div>
                                                        </li>
                                                    @endforeach

                                                    <li class="checkout">
                                                        <div class="basket-item">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-6">
                                                                    <a href="checkout.html" class="le-button">Checkout</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            @endif
                                        </div><!-- /.basket -->
                                    </div><!-- /.top-cart-holder -->
                                </div><!-- /.top-cart-row-container -->
                                <!-- ============================================================= SHOPPING CART DROPDOWN : END ============================================================= -->
                            </div><!-- /.top-cart-row -->
                        </li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="{{asset('images/img-pro-01.jpg')}}" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="{{asset('images/img-pro-02.jpg')}}" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="{{asset('images/img-pro-03.jpg')}}" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->
<!-- ============================================================= TOP NAVIGATION ============================================================= -->
{{--<nav class="top-bar animate-dropdown">
    <div class="container">
        <div class="col-xs-12 col-sm-6 no-margin">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/faq">FAQ</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div><!-- /.col -->

        <div class="col-xs-12 col-sm-6 no-margin">
            <ul class="right">
                @guest
                    <li><a href="/register">{{ __('Register') }}</a></li>
                    <li><a href="/login">{{ __('Login') }}</a></li>
                @else
                    @if (Auth::user()->isStaff())
                        <li><a href="/admin/dashboard">Dashboard</a></li>
                    @endif
                    <li><a href="/profile">{{Auth::user()->name}}</a></li>
                    <li>
                        <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div><!-- /.col -->
    </div><!-- /.container -->
</nav><!-- /.top-bar -->--}}
<!-- ============================================================= TOP NAVIGATION : END ============================================================= -->

<!-- ============================================================= HEADER ============================================================= -->
{{--<header>
    <div class="container no-padding">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
            <!-- ============================================================= LOGO ============================================================= -->
            <div class="logo">
                <a href="/">
                    <img alt="logo" src="/assets/images/logo.png" width="200" height="150" style="margin-top: -25px; margin-bottom: -20px"/>
                    <!--<object id="sp" type="image/svg+xml" data="assets/images/logo.svg" width="233" height="54"></object>-->
                </a>
            </div><!-- /.logo -->
            <!-- ============================================================= LOGO : END ============================================================= -->
        </div><!-- /.logo-holder -->

        <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder no-margin">
            <div class="contact-row">
                <div class="phone inline">
                    <i class="fa fa-phone"></i> (+977) 9876543210
                </div>
                <div class="contact inline">
                    <i class="fa fa-envelope"></i> contact@<span class="le-color">oursupport.com</span>
                </div>
            </div><!-- /.contact-row -->
            <!-- ============================================================= SEARCH AREA ============================================================= -->
            <div class="search-area">
                <form action="/products/search" method="POST">
                    @csrf
                    <div class="control-group">
                        <input class="search-field" placeholder="Search Easy Shopping Nepal" name="query" />
                        <a class="search-button" type="submit"></a>
                    </div>
                </form>
            </div><!-- /.search-area -->
            <!-- ============================================================= SEARCH AREA : END ============================================================= -->
        </div><!-- /.top-search-holder -->

        <div class="col-xs-12 col-sm-12 col-md-3 top-cart-row no-margin">
            <div class="top-cart-row-container">
                <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
                <div class="top-cart-holder dropdown animate-dropdown">
                    <div class="basket" id="cart-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            @guest
                            <a href="/login">
                                <div class="basket-item-count">
                                    <span class="count">0</span>
                                    <img src="/assets/images/icon-cart.png" alt="" />
                                </div>

                                <div class="total-price-basket">
                                    <span class="lbl">login to <br> manage cart</span>
                                </div>
                            </a>
                            @else
                                @if ($carts ?? '')
                                    <div class="basket-item-count">
                                        <span class="count">{{count($carts)}}</span>
                                        <img src="/assets/images/icon-cart.png" alt="" />
                                    </div>

                                    <div class="total-price-basket">
                                        <span class="lbl">your cart:</span>
                                        <span class="total-price">
                                            <span class="sign">Rs.</span>
                                            <span class="value">{{$grand_total}}</span>
                                        </span>
                                    </div>
                                @else
                                    <div class="basket-item-count">
                                        <span class="count">0</span>
                                        <img src="/assets/images/icon-cart.png" alt="" />
                                    </div>

                                    <div class="total-price-basket">
                                        <span class="lbl">your cart:</span>
                                        <span class="total-price">
                                            <span class="sign">Rs.</span>
                                            <span class="value">0</span>
                                        </span>
                                    </div>
                                @endif
                            @endguest
                        </a>

                        @if ($carts ?? '')
                            <ul class="dropdown-menu">
                                @foreach ($carts as $cart)
                                    <li>
                                        <div class="basket-item">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 no-margin text-center">
                                                    <div class="thumb">
                                                        <img alt="" src="/assets/images/products/{{$cart->product->image}}" />
                                                    </div>
                                                </div>
                                                <div class="col-xs-8 col-sm-8">
                                                    <div class="title">{{$cart->product->name}}</div>
                                                    <div class="price">Rs.{{$cart->product->rate}}</div>
                                                </div>
                                            </div>
                                            <a class="close-btn" href="#"></a>
                                        </div>
                                    </li>
                                @endforeach

                                <li class="checkout">
                                    <div class="basket-item">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <a href="checkout.html" class="le-button">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        @endif
                    </div><!-- /.basket -->
                </div><!-- /.top-cart-holder -->
            </div><!-- /.top-cart-row-container -->
            <!-- ============================================================= SHOPPING CART DROPDOWN : END ============================================================= -->
        </div><!-- /.top-cart-row -->
    </div><!-- /.container -->
</header>--}}
<!-- ============================================================= HEADER : END ============================================================= -->

