@extends('layouts.app')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" rel="stylesheet">
<style>

    body{
        font-family: Roboto, sans-serif;
        background-color: #f7f7f7;
    }
    .brand{
        font-size: 9px;
        color: #3D3D3D;
    }
    .price-prev del{
        font-size: 11px;
        color: #3D3D3D;
    }
    .item img{
        height:150px;
        width:150px;
    }
    @media(max-width:560px){
        .title a{
            font-size: 10px;
        }
        .badge{
            font-size: 7px;
        }
        .price-current{
            font-size: 10px;
        }
        .le-button{
            font-size: 5px;
            padding:5px 5px;
            line-height: 5px;
        }
        .item img{
            height:80px;
            width:50px;
        }
    }
    .container-slider{
        max-width:1040px;
        margin: 100px auto;
    }
    h1{
        font-size:30px;
        font-weight:500;
        text-align: center;
        position:relative;
        margin-bottom:60px;
    }
    h1:after{
        content:'';
        position:absolute;
        width:100px;
        height:4px;
        background-color: #ff8159;
        bottom:-20px;
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
        margin:15px;
    }
    .slick-dots li.slick-active button:before{
        color:#ff5722;
    }
    .slick-dots li button.before{
        font-size:12px;
    }
    .slick-next:before,
    .slick-prev:before{
        color:#ff8159;
        font-size: 24px;
    }
    .item:hover{
        display:block;
        transition: all ease 0.3s;
        transform:scale(1.05) translateY(-0.5px);
    }

/*    .......categories..................*/

    .categories ul{
        list-style-type: none;
        margin: 0;
        justify-content: space-evenly;
        padding: 0;
        overflow: hidden;
        background-color: #547338;
    }
    @media (max-width:750px){
    .categories ul{
        font-size: 10px;
        justify-content: space-evenly;
    }}

    .categories li {
        float: left;
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
    height:300px;
}


</style>
<!-- Start Slider -->

        <!-- ================================== TOP NAVIGATION ================================== -->

            <nav class="categories" role="navigation">
                <ul class="nav" id="departmentList">

                </ul><!-- /.nav -->
            </nav><!-- /.megamenu-horizontal -->

        <!-- ================================== TOP NAVIGATION : END ================================== -->

    <div class="row slider mx-5">
        <div id="slides-shop" class="cover-slides col-md-12 mt-5" >
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
                <div class="col-lg-6">
                    <a href="#">
                        <img alt="" src="assets/images/blank.gif" data-echo="/storage/images/products/{{$f->image}}"/>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="body center">
                       <div class="title">
                           <a href="/product/{{$f->id}}" style="color:black">{{$f->name}}</a>
                       </div>
                       <div class="brand">{{$f->brand}}</div>
                       <span class="badge badge-success" style="background:green">{{$f->availability}}</span>
                   </div>
                   <div class="prices center">
                       <div class="price-prev"><del>Rs.{{$f->prev_price}}</del></div>
                       <div class="price-current" style="color:#ff8159">Rs.{{$f->rate}}</div>
                   </div>
                   <div class="add-cart-button center inner-xxs">
                       <a class="le-button" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" style="color:white">add to cart</a>
                   </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container-slider">
        <h1>New Arrival</h1>
        <div class="logo-slider">
            @foreach ($new_arrival as $f)
                <div class="item">
                    <div class="col-lg-6">
                        <a href="#">
                            <img alt="" src="assets/images/blank.gif" data-echo="/storage/images/products/{{$f->image}}"/>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <div class="body center">
                            <div class="title">
                                <a href="/product/{{$f->id}}" style="color:black">{{$f->name}}</a>
                            </div>
                            <div class="brand">{{$f->brand}}</div>
                            <span class="badge badge-success" style="background:green">{{$f->availability}}</span>
                        </div>
                        <div class="prices center">
                            <div class="price-prev"><del>Rs.{{$f->prev_price}}</del></div>
                            <div class="price-current" style="color:#ff8159">Rs.{{$f->rate}}</div>
                        </div>
                        <div class="add-cart-button center inner-xxs">
                            <a class="le-button" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" style="color:white">add to cart</a>
                        </div>
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
                    <div class="col-lg-6">
                        <a href="#">
                            <img alt="" src="assets/images/blank.gif" data-echo="/storage/images/products/{{$f->image}}"/>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <div class="body center">
                            <div class="title">
                                <a href="/product/{{$f->id}}" style="color:black">{{$f->name}}</a>
                            </div>
                            <div class="brand">{{$f->brand}}</div>
                            <span class="badge badge-success" style="background:green">{{$f->availability}}</span>
                        </div>
                        <div class="prices center">
                            <div class="price-prev"><del>Rs.{{$f->prev_price}}</del></div>
                            <div class="price-current" style="color:#ff8159">Rs.{{$f->rate}}</div>
                        </div>
                        <div class="add-cart-button center inner-xxs">
                            <a class="le-button" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" style="color:white">add to cart</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div><!-- /.wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $('.logo-slider').slick({
        slidesToShow:3,
        slidesToScroll:1,
        dots:true,
        arrows:true,
        autoplay:true,
        autoplaySpeed:2000,
        infinite: true
    });
</script>
@endsection

