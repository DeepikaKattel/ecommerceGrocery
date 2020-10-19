@extends('layouts.app')
@section('content')
<!-- Start Slider -->
    <div id="slides-shop" class="cover-slides col-md-9 mt-5" >
        <ul class="slides-container">
            <li class="text-center">
                <img src="{{asset('images/banner-01.jpg')}}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>

                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="{{asset('images/banner-02.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>

                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="{{asset('images/banner-03.jpg')}}" alt=''>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                            <p class="m-b-40">See how your user experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next" style="margin-right:30px"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev" ><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->
    <div class="wrapper">
        <div id="top-banner-and-menu">
            <div class="container">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="col-xs-12 col-sm-4 col-md-3 sidemenu-holder">
                    <!-- ================================== TOP NAVIGATION ================================== -->
                    <div class="side-menu animate-dropdown">
                        <div class="head" style="background:#b0b435"><i class="fa fa-list"></i>All Categories</div>
                        <nav class="yamm megamenu-horizontal" role="navigation">
                            <ul class="nav" id="departmentList">

                            </ul><!-- /.nav -->
                        </nav><!-- /.megamenu-horizontal -->
                    </div><!-- /.side-menu -->
                    <!-- ================================== TOP NAVIGATION : END ================================== -->
                </div><!-- /.sidemenu-holder -->


                    <!-- ========================================= SECTION – HERO : END ========================================= -->
                </div><!-- /.homebanner-holder -->
            </div><!-- /.container -->
        </div><!-- /#top-banner-and-menu -->


        <div id="products-tab" class="wow fadeInUp">
            <div class="container">
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="title-all text-center">
                            <h1>Shop Products</h1>
                            <p>Buy products with your own ease.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-holder">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="special-menu text-center">
                                 <div class="button-group filter-button-group">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" >
                                        <li class="active"><a href="#featured" data-toggle="tab">featured</a></li>
                                        <li><a href="#new-arrivals" data-toggle="tab">new arrivals</a></li>
                                        <li><a href="#top-sales" data-toggle="tab">top sales</a></li>
                                    </ul>
                                 </div>
                            </div>
                         </div>
                    </div>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="featured">
                            <div class="product-grid-holder">
                                @foreach ($featured as $f)
                                <div class="col-sm-4 col-md-3  no-margin product-item-holder">
                                    <div class="product-item">
                                        <div class="image">
                                            <img alt="" src="assets/images/blank.gif" data-echo="/storage/images/products/{{$f->image}}" height="238" width="246"/>
                                        </div>
                                        <div class="body">
                                            <div class="title">
                                                <a href="/product/{{$f->id}}" style="color:black">{{$f->name}}</a>
                                            </div>
                                            <div class="brand">{{$f->brand}}</div>
                                            <span class="badge badge-success">{{$f->availability}}</span>
                                        </div>
                                        <div class="prices">
                                            <div class="price-prev"><del>Rs.{{$f->prev_price}}</del></div>
                                            <div class="price-current pull-right">Rs.{{$f->rate}}</div>
                                        </div>
                                        <div class="add-cart-button center inner-xxs">
                                            <a class="le-button" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" style="color:white">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane" id="new-arrivals">
                            <div class="product-grid-holder">
                                @foreach ($new_arrival as $f)
                                <div class="col-sm-4 col-md-3  no-margin product-item-holder">
                                    <div class="product-item">
                                        <div class="image">
                                            <img alt="" src="assets/images/blank.gif" data-echo="/storage/images/products/{{$f->image}}" height="238" width="246"/>
                                        </div>
                                        <div class="body">
                                            <div class="title">
                                                <a href="/product/{{$f->id}}" style="color:black">{{$f->name}}</a>
                                            </div>
                                            <div class="brand">{{$f->brand}}</div>
                                            <span class="badge badge-success">{{$f->availability}}</span>
                                        </div>
                                        <div class="prices">
                                            <div class="price-prev"><del>Rs.{{$f->prev_price}}</del></div>
                                            <div class="price-current pull-right">Rs.{{$f->rate}}</div>
                                        </div>
                                        <div class="add-cart-button center inner-xxs">
                                            <a class="le-button" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" style="color:white">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane" id="top-sales">
                            <div class="product-grid-holder">
                                @foreach ($top_sales as $f)
                                <div class="col-sm-4 col-md-3  no-margin product-item-holder">
                                    <div class="product-item">
                                        <div class="image">
                                            <img alt="" src="assets/images/blank.gif" data-echo="/storage/images/products/{{$f->image}}" height="238" width="246"/>
                                        </div>
                                        <div class="body">
                                            <div class="title">
                                                <a href="/product/{{$f->id}}" style="color:black">{{$f->name}}</a>
                                            </div>
                                            <div class="brand">{{$f->brand}}</div>
                                            <span class="badge badge-success">{{$f->availability}}</span>
                                        </div>
                                        <div class="prices">
                                            <div class="price-prev"><del>Rs.{{$f->prev_price}}</del></div>
                                            <div class="price-current pull-right">Rs.{{$f->rate}}</div>
                                        </div>
                                        <div class="add-cart-button center inner-xxs">
                                            <a class="le-button" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" style="color:white">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.wrapper -->
@endsection
