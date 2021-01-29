@extends('layouts.app')
@section('content')

<style>

    body{
        font-family: Roboto, sans-serif;
        background-color: #f7f7f7;
    }
    .brand{
        font-size: 10px;
        color: #3D3D3D;
    }
    .price-prev del{
        font-size: 11px;
        color: #3D3D3D;
    }
    .price-current{
        font-size: 12px;
    }
    .item{
        position: relative;
        height: 245px;
        width: 180px;
        justify-content: center;
    }
    .item img{
        height:130px;
        width:200px;
    }
    .badge{
        font-size: 8px;
    }

    .add-cart-button{
        position: absolute;
        top: 65%;
        padding-top: 10%;
        bottom: 0;
        left: 0;
        height:75px;
        right: 0;
        background: rgba(45,90,45,0.5);
        color: #fff;
        visibility: hidden;
        opacity: 0;
        /* transition effect. not necessary */
        transition: opacity .2s, visibility .2s;
    }
    .item:hover .add-cart-button{
        visibility: visible;
        opacity: 1;
    }
    @media(max-width:560px){
        .title a{
            font-size: 9px;
        }

        .brand{
            font-size: 8px;
            color: #3D3D3D;
        }
        /*.price-prev del{*/
        /*    font-size: 5px;*/
        /*    color: #3D3D3D;*/
        /*}*/
        /*.badge{*/
        /*    font-size: 4px;*/
        /*}*/
        /*.price-current{*/
        /*    font-size: 7px;*/
        /*}*/
        /*.le-button{*/
        /*    font-size: 5px;*/
        /*    padding:5px 5px;*/
        /*    line-height: 5px;*/
        /*}*/
        /*.item img{*/
        /*    height:50px;*/
        /*    width:70px;*/
        /*}*/
        /*.container-slider{*/
        /*    max-width:500px;*/
        /*    margin: 10px auto;*/
        /*}*/

    }
    .container-slider{
        max-width:1100px;
        margin: 100px auto -70px auto;
    }
    .imageBanner{
        position:relative;
        padding-top:20px;
        display:inline-block;
    }
    .notify-badge{
        position: absolute;
        right:20px;
        top:10px;
        background:red;
        text-align: center;
        border-radius: 30px 30px 30px 30px;
        color:white;
        padding:5px 10px;
        font-size:20px;
    }
    .discount-badge{
        position: absolute;
        right:15px;
        top:15px;
        background:red;
        text-align: center;
        color:white;
        padding:5px 5px;
        font-size:10px;
    }
    h1{
        font-size:20px;
        font-weight:500;
        text-align: center;
        position:relative;
        margin-bottom:20px;
    }
    h1:after{
        content:'';
        position:absolute;
        width:120px;
        height:2px;
        background-color: #ff8159;
        bottom:-10px;
        left:0;
        right:0;
        margin:0 auto;
    }
    .logo-slider .item{
        background-color: #fff;
        box-shadow:0 4px 5px #cacaca;
        border-radius:8px;
        padding:15px;
        border: 2px solid #111;

    }
    .logo-slider .slick-slide{
        margin:5px;

    }
    .slick-dots li.slick-active button:before{
        color:#ff5722;
    }
    .slick-next{
        right:-20px !important;
    }
    .slick-prev{
        left:-20px !important;
        z-index: 3;
    }
    .slick-dots li button.before{
        font-size:12px;
    }
    .slick-prev:before {
        font-family: "FontAwesome";
        content: '\f100';
    }
    .slick-next:before {
        font-family: "FontAwesome";
        content: '\f101';
        margin-right:-10px !important;
    }
    .slick-next:before,
    .slick-prev:before{
        color: rgba(0, 0, 0, 0.2);
        font-size: 24px;
    }



/*    .......categories..................*/

    .categories ul{
        list-style-type: none;
        margin: 0;
        justify-content: space-evenly;
        padding: 0;
        overflow: hidden;
        background-color: #ff7700;
    }
    @media (max-width:750px){
    .categories ul{
        font-size: 10px;
        justify-content: space-evenly;
    }}

    .categories li {
        float: left;
    }
    body
    {
        padding-right:0px !important;
        margin-right:0px !important;
    }

    .categories li a {
        display: block;
        color: white;
        text-align: center;
        padding: 16px;
        text-decoration: none;
    }

    .categories li a:hover {
        background-color: #111111;
    }
/* medium - display 2  */
@media (min-width: 768px) {

  .carousel-inner .carousel-item-right.active,
  .carousel-inner .carousel-item-next {
      transform: translateX(50%);
  }

  .carousel-inner .carousel-item-left.active,
  .carousel-inner .carousel-item-prev {
      transform: translateX(-50%);
  }
}

/* large - display 3 */
@media (min-width: 992px) {

  .carousel-inner .carousel-item-right.active,
  .carousel-inner .carousel-item-next {
      transform: translateX(33%);
  }

  .carousel-inner .carousel-item-left.active,
  .carousel-inner .carousel-item-prev {
      transform: translateX(-33%);
  }
}

@media (max-width: 768px) {
  .carousel-inner .carousel-item>div {
      display: none;
  }

  .carousel-inner .carousel-item>div:first-child {
      display: block;
  }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
  display: flex;
}

.carousel-inner .carousel-item-right,
.carousel-inner .carousel-item-left {
  transform: translateX(0);
}
.slider, #slides-shop{
    height:380px;
}


</style>
<!-- Start Slider -->

        <!-- ================================== TOP NAVIGATION ================================== -->

            <nav class="categories" role="navigation">
                <ul class="nav" id="departmentList">

                </ul><!-- /.nav -->
            </nav><!-- /.megamenu-horizontal -->

        <!-- ================================== TOP NAVIGATION : END ================================== -->

    <div class="row slider mx-5" style="margin-bottom: -50px">
        <div id="slides-shop" class="cover-slides col-md-12 mt-5">
            <ul class="slides-container">
                @foreach($frontEnd as $front)
                <li class="text-center">
                    <div class="image">
                       <img alt="" src="assets/images/blank.gif" data-echo="/storage/images/slider/{{$front->image}}"/>
                   </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="m-b-20" style="font-size: 25px;text-align: center"><strong>{{$front->heading}}</strong></h1>
                                <p class="m-b-40">{{$front->message}}</p>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="slides-navigation">
                <a href="#" class="next" style="margin-right:30px"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                <a href="#" class="prev" ><i class="fa fa-angle-left" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Slider -->

    </div>
    <div class="wrapper">
        <div id="top-banner-and-menu">
            <div class="container">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif


                    <!-- ========================================= SECTION – HERO : END ========================================= -->
                </div><!-- /.homebanner-holder -->
            </div><!-- /.container -->
        </div><!-- /#top-banner-and-menu -->



{{--        <div id="products-tab" class="wow fadeInUp">--}}
{{--            <div class="container">--}}
{{--                 <div class="row">--}}
{{--                    <div class="col-lg-12">--}}
{{--                        <div class="title-all text-center">--}}
{{--                            <h1>Shop Products</h1>--}}
{{--                            <p>Buy products with your own ease.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-holder">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-12">--}}
{{--                            <div class="special-menu text-center">--}}
{{--                                 <div class="button-group filter-button-group">--}}
{{--                                    <!-- Nav tabs -->--}}
{{--                                    <ul class="nav nav-tabs" >--}}
{{--                                        <li class="active"><a href="#featured" data-toggle="tab">featured</a></li>--}}
{{--                                    </ul>--}}
{{--                                 </div>--}}
{{--                            </div>--}}
{{--                         </div>--}}
{{--                    </div>--}}


{{--                    <div class="container-slider">--}}
{{--                        <div class="logo-slider">--}}
{{--                           @foreach ($featured as $f)--}}
{{--                           <div class="item">--}}
{{--                               <a href="#">--}}
{{--                                   <img alt="" src="assets/images/blank.gif" data-echo="/storage/images/products/{{$f->image}}" height="238" width="246"/>--}}
{{--                               </a>--}}
{{--                               <div class="body">--}}
{{--                                   <div class="title">--}}
{{--                                       <a href="/product/{{$f->id}}" style="color:black">{{$f->name}}</a>--}}
{{--                                   </div>--}}
{{--                                   <div class="brand">{{$f->brand}}</div>--}}
{{--                                   <span class="badge badge-success" style="background:green">{{$f->availability}}</span>--}}
{{--                               </div>--}}
{{--                               <div class="prices">--}}
{{--                                   <div class="price-prev"><del>Rs.{{$f->prev_price}}</del></div>--}}
{{--                                   <div class="price-current pull-right">Rs.{{$f->rate}}</div>--}}
{{--                               </div>--}}
{{--                               <div class="add-cart-button center inner-xxs">--}}
{{--                                   <a class="le-button" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" style="color:white">add to cart</a>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                           @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-holder" style="margin-top:20px">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-12">--}}
{{--                            <div class="special-menu text-center">--}}
{{--                                 <div class="button-group filter-button-group">--}}
{{--                                    <!-- Nav tabs -->--}}
{{--                                    <ul class="nav nav-tabs" >--}}
{{--                                        <li class="active"><a href="#new_arrival" data-toggle="tab">new arrival</a></li>--}}
{{--                                    </ul>--}}
{{--                                 </div>--}}
{{--                            </div>--}}
{{--                         </div>--}}
{{--                    </div>--}}
{{--                    <div id="newCarousel" class="carousel slide w-100" data-ride="carousel" style="margin-top:20px">--}}
{{--                         <div class="carousel-inner w-100" role="listbox">--}}
{{--                           <div class="carousel-item active">--}}
{{--                           </div>--}}
{{--                           @foreach ($new_arrival as $f)--}}
{{--                           <div class="carousel-item">--}}
{{--                               <div class="col-sm-4 col-md-3  no-margin product-item-holder">--}}
{{--                                   <div class="product-item">--}}
{{--                                       <div class="image">--}}
{{--                                           <img alt="" src="assets/images/blank.gif" data-echo="/storage/images/products/{{$f->image}}" height="238" width="246"/>--}}
{{--                                       </div>--}}
{{--                                       <div class="body">--}}
{{--                                           <div class="title">--}}
{{--                                               <a href="/product/{{$f->id}}" style="color:black">{{$f->name}}</a>--}}
{{--                                           </div>--}}
{{--                                           <div class="brand">{{$f->brand}}</div>--}}
{{--                                           <span class="badge badge-success" style="background:green">{{$f->availability}}</span>--}}
{{--                                       </div>--}}
{{--                                       <div class="prices">--}}
{{--                                           <div class="price-prev"><del>Rs.{{$f->prev_price}}</del></div>--}}
{{--                                           <div class="price-current pull-right">Rs.{{$f->rate}}</div>--}}
{{--                                       </div>--}}
{{--                                       <div class="add-cart-button center inner-xxs">--}}
{{--                                           <a class="le-button" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" style="color:white">add to cart</a>--}}
{{--                                       </div>--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                           @endforeach--}}
{{--                         </div>--}}
{{--                         <a class="carousel-control-prev bg-dark w-auto" href="#myCarousel" role="button" data-slide="prev">--}}
{{--                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                           <span class="sr-only">Previous</span>--}}
{{--                         </a>--}}
{{--                         <a class="carousel-control-next bg-dark w-auto" href="#myCarousel" role="button" data-slide="next">--}}
{{--                           <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                           <span class="sr-only">Next</span>--}}
{{--                         </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-holder" style="margin-top:20px">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-12">--}}
{{--                            <div class="special-menu text-center">--}}
{{--                                 <div class="button-group filter-button-group">--}}
{{--                                    <!-- Nav tabs -->--}}
{{--                                    <ul class="nav nav-tabs" >--}}
{{--                                        <li class="active"><a href="#top_sales" data-toggle="tab">Top Sales</a></li>--}}
{{--                                    </ul>--}}
{{--                                 </div>--}}
{{--                            </div>--}}
{{--                         </div>--}}
{{--                    </div>--}}
{{--                    <div id="salesCarousel" class="carousel slide w-100" data-ride="carousel" style="margin-top:20px">--}}
{{--                         <div class="carousel-inner w-100" role="listbox">--}}
{{--                           <div class="carousel-item active">--}}
{{--                           </div>--}}
{{--                           @foreach ($top_sales as $f)--}}
{{--                           <div class="carousel-item">--}}
{{--                               <div class="col-sm-4 col-md-3  no-margin product-item-holder">--}}
{{--                                   <div class="product-item">--}}
{{--                                       <div class="image">--}}
{{--                                           <img alt="" src="assets/images/blank.gif" data-echo="/storage/images/products/{{$f->image}}" height="238" width="246"/>--}}
{{--                                       </div>--}}
{{--                                       <div class="body">--}}
{{--                                           <div class="title">--}}
{{--                                               <a href="/product/{{$f->id}}" style="color:black">{{$f->name}}</a>--}}
{{--                                           </div>--}}
{{--                                           <div class="brand">{{$f->brand}}</div>--}}
{{--                                           <span class="badge badge-success" style="background:green">{{$f->availability}}</span>--}}
{{--                                       </div>--}}
{{--                                       <div class="prices">--}}
{{--                                           <div class="price-prev"><del>Rs.{{$f->prev_price}}</del></div>--}}
{{--                                           <div class="price-current pull-right">Rs.{{$f->rate}}</div>--}}
{{--                                       </div>--}}
{{--                                       <div class="add-cart-button center inner-xxs">--}}
{{--                                           <a class="le-button" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" style="color:white">add to cart</a>--}}
{{--                                       </div>--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                           @endforeach--}}
{{--                         </div>--}}
{{--                         <a class="carousel-control-prev bg-dark w-auto" href="#myCarousel" role="button" data-slide="prev">--}}
{{--                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                           <span class="sr-only">Previous</span>--}}
{{--                         </a>--}}
{{--                         <a class="carousel-control-next bg-dark w-auto" href="#myCarousel" role="button" data-slide="next">--}}
{{--                           <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                           <span class="sr-only">Next</span>--}}
{{--                         </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
    <div class="container-slider">
        <h1>Featured Products</h1>
        <div class="logo-slider">
            @foreach ($featured as $f)
            <div class="item">
                <a href="/product/{{$f->id}}"><img alt="" src="assets/images/blank.gif" data-echo="/storage/images/products/{{$f->image}}"/></a>
                @if($f->discount)
                    <span class="badge badge-danger discount-badge">{{$f->discount}}% Off</span>
                @endif
                <div class="body center">
                   <div class="title">
                       <a href="/product/{{$f->id}}" style="color:black">{{ Str::limit($f->name, 10) }}</a>
                   </div>
                   <div class="brand">{{$f->brand}}</div>
                   <span class="badge badge-success" style="background:green">{{$f->availability}}</span>
               </div>
               <div class="prices center">
                   <div class="price-prev"><del>Rs.{{$f->prev_price}}</del></div>
                   <div class="price-current" style="color:#ff8159">Rs.{{$f->rate}}</div>
               </div>
               <div class="add-cart-button center inner-xxs">
                   <a class="le-button" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" style="color:white">Add To Cart <i class="fas fa-shopping-cart"></i></a>
               </div>

            </div>
            @endforeach
        </div>
    </div>
    <div class="container-slider">
        <h1>New Arrivals</h1>
        <div class="logo-slider">
            @foreach ($new_arrival as $f)
                <div class="item">
                    <a href="/product/{{$f->id}}"><img alt="" src="assets/images/blank.gif" data-echo="/storage/images/products/{{$f->image}}"/></a>
                    @if($f->discount)
                        <span class="badge badge-danger discount-badge">{{$f->discount}}% Off</span>
                    @endif
                    <div class="body center">
                        <div class="title">
                            <a href="/product/{{$f->id}}" style="color:black">{{ Str::limit($f->name, 10) }}</a>
                        </div>
                        <div class="brand">{{$f->brand}}</div>
                        <span class="badge badge-success" style="background:green">{{$f->availability}}</span>
                    </div>
                    <div class="prices center">
                        <div class="price-prev"><del>Rs.{{$f->prev_price}}</del></div>
                        <div class="price-current" style="color:#ff8159">Rs.{{$f->rate}}</div>
                    </div>
                    <div class="add-cart-button center inner-xxs">
                        <a class="le-button" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" style="color:white">Add To Cart <i class="fas fa-shopping-cart"></i></a>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
    <div class="container-slider">
        <h1>Top Sales</h1>
        <div class="logo-slider">
            @foreach ($top_sales as $f)
                <div class="item">
                    <a href="/product/{{$f->id}}"><img alt="" src="assets/images/blank.gif" data-echo="/storage/images/products/{{$f->image}}"/></a>
                    @if($f->discount)
                        <span class="badge badge-danger discount-badge">{{$f->discount}}% Off</span>
                    @endif
                    <div class="body center">
                        <div class="title">
                            <a href="/product/{{$f->id}}" style="color:black">{{ Str::limit($f->name, 10) }}</a>
                        </div>
                        <div class="brand">{{$f->brand}}</div>
                        <span class="badge badge-success" style="background:green">{{$f->availability}}</span>
                    </div>
                    <div class="prices center">
                        <div class="price-prev"><del>Rs.{{$f->prev_price}}</del></div>
                        <div class="price-current" style="color:#ff8159">Rs.{{$f->rate}}</div>
                    </div>
                    <div class="add-cart-button center inner-xxs">
                        <a class="le-button" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" style="color:white">Add To Cart <i class="fas fa-shopping-cart"></i></a>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
    @if($dairy)
    <div class="container-slider">
        @if($dairy)
        <h1>Dairy</h1>
        @endif
        <div class="logo-slider">
            @foreach ($dairy as $f)
                <div class="item">
                    <a href="/product/{{$f->id}}"><img alt="" src="assets/images/blank.gif" data-echo="/storage/images/products/{{$f->image}}"/></a>
                    @if($f->discount)
                        <span class="badge badge-danger discount-badge">{{$f->discount}}% Off</span>
                    @endif
                    <div class="body center">
                        <div class="title">
                            <a href="/product/{{$f->id}}" style="color:black">{{ Str::limit($f->name, 10) }}</a>
                        </div>
                        <div class="brand">{{$f->brand}}</div>
                        <span class="badge badge-success" style="background:green">{{$f->availability}}</span>
                    </div>
                    <div class="prices center">
                        <div class="price-prev"><del>Rs.{{$f->prev_price}}</del></div>
                        <div class="price-current" style="color:#ff8159">Rs.{{$f->rate}}</div>
                    </div>
                    <div class="add-cart-button center inner-xxs">
                        <a class="le-button" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" style="color:white">Add To Cart <i class="fas fa-shopping-cart"></i></a>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
    @endif
@if($fruits)
    <div class="container-slider">
        @if($dairy)
            <h1>Fruits and Vegetables</h1>
        @endif
        <div class="logo-slider">
            @foreach ($fruits as $f)
                <div class="item">
                    <a href="/product/{{$f->id}}"><img alt="" src="assets/images/blank.gif" data-echo="/storage/images/products/{{$f->image}}"/></a>
                    @if($f->discount)
                        <span class="badge badge-danger discount-badge">{{$f->discount}}% Off</span>
                    @endif
                    <div class="body center">
                        <div class="title">
                            <a href="/product/{{$f->id}}" style="color:black">{{ Str::limit($f->name, 10) }}</a>
                        </div>
                        <div class="brand">{{$f->brand}}</div>
                        <span class="badge badge-success" style="background:green">{{$f->availability}}</span>
                    </div>
                    <div class="prices center">
                        <div class="price-prev"><del>Rs.{{$f->prev_price}}</del></div>
                        <div class="price-current" style="color:#ff8159">Rs.{{$f->rate}}</div>
                    </div>
                    <div class="add-cart-button center inner-xxs">
                        <a class="le-button" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" style="color:white">Add To Cart <i class="fas fa-shopping-cart"></i></a>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endif

@if($bakery)
    <div class="container-slider">
        @if($bakery)
            <h1>Bakery Items</h1>
        @endif
        <div class="logo-slider">
            @foreach ($bakery as $f)
                <div class="item">
                    <a href="/product/{{$f->id}}"><img alt="" src="assets/images/blank.gif" data-echo="/storage/images/products/{{$f->image}}"/></a>
                    @if($f->discount)
                        <span class="badge badge-danger discount-badge">{{$f->discount}}% Off</span>
                    @endif
                    <div class="body center">
                        <div class="title">
                            <a href="/product/{{$f->id}}" style="color:black">{{ Str::limit($f->name, 10) }}</a>
                        </div>
                        <div class="brand">{{$f->brand}}</div>
                        <span class="badge badge-success" style="background:green">{{$f->availability}}</span>
                    </div>
                    <div class="prices center">
                        <div class="price-prev"><del>Rs.{{$f->prev_price}}</del></div>
                        <div class="price-current" style="color:#ff8159">Rs.{{$f->rate}}</div>
                    </div>
                    <div class="add-cart-button center inner-xxs">
                        <a class="le-button" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" style="color:white">Add To Cart <i class="fas fa-shopping-cart"></i></a>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endif
@if($chips)
    <div class="container-slider">
        @if($chips)
            <h1>Chips</h1>
        @endif
        <div class="logo-slider">
            @foreach ($chips as $f)
                <div class="item">
                    <a href="/product/{{$f->id}}"><img alt="" src="assets/images/blank.gif" data-echo="/storage/images/products/{{$f->image}}"/></a>
                    @if($f->discount)
                        <span class="badge badge-danger discount-badge">{{$f->discount}}% Off</span>
                    @endif
                    <div class="body center">
                        <div class="title">
                            <a href="/product/{{$f->id}}" style="color:black">{{ Str::limit($f->name, 10) }}</a>
                        </div>
                        <div class="brand">{{$f->brand}}</div>
                        <span class="badge badge-success" style="background:green">{{$f->availability}}</span>
                    </div>
                    <div class="prices center">
                        <div class="price-prev"><del>Rs.{{$f->prev_price}}</del></div>
                        <div class="price-current" style="color:#ff8159">Rs.{{$f->rate}}</div>
                    </div>
                    <div class="add-cart-button center inner-xxs">
                        <a class="le-button" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" style="color:white">Add To Cart <i class="fas fa-shopping-cart"></i></a>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endif
<div class="container">

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog" >
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="border: 4px solid green">
                <div class="modal-header" style="background: red;color:white">
                    <h4>{{$popup->title}}</h4>
                    <button type="button" class="close" data-dismiss="modal" style="color:black">&times;</button>

                </div>
                <div class="modal-body">
                    <img alt="" src="assets/images/blank.gif" data-echo="/storage/images/bannerPopUp/{{$popup->banner}}"/>
                    <span class="badge badge-danger" style="background-color: red;font-size: 30px;display: inline-block">{{$popup->discount1}}</span>
                </div>
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
{{--                </div>--}}
            </div>

        </div>
    </div>

</div>
    <div class="row mx-2" style="margin-top: 100px;margin-bottom: -50px">
        <div class="imageBanner col-lg-9 col-12">
            <img style="height:200px;width:100%" alt="" src="assets/images/blank.gif" data-echo="/storage/images/banner/{{$banner->banner1}}"/>
            <span class="badge badge-danger notify-badge">{{$banner->discount1}}</span>
        </div>
        <div class="imageBanner col-lg-3 col-12">
            <img style="height:200px;width:100%" alt="" src="assets/images/blank.gif" data-echo="/storage/images/banner/{{$banner->banner2}}"/>
            <span class="badge badge-danger notify-badge">{{$banner->discount2}}</span>
        </div>
    </div>
    </div><!-- /.wrapper -->


@endsection

