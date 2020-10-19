@extends('layouts.app')

@section('content')
    <div class="animate-dropdown">
        <!-- ========================================= BREADCRUMB ========================================= -->
        <div id="top-mega-nav">
            <div class="container">
                <nav>
                    <ul class="inline">
                        <li class="dropdown le-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-list"></i> shop by department
                            </a>
                            <ul class="dropdown-menu" id="departmentList">

                            </ul>
                        </li>

                        <li class="breadcrumb-nav-holder">
                            <ul>
                                <li class="breadcrumb-item">
                                    <a href="/">Home</a>
                                </li>
                                <li class="breadcrumb-item current gray">
                                    <a href="#">Product</a>
                                </li>
                            </ul>
                        </li><!-- /.breadcrumb-nav-holder -->
                    </ul>
                </nav>
            </div><!-- /.container -->
        </div><!-- /#top-mega-nav -->
        <!-- ========================================= BREADCRUMB : END ========================================= -->
    </div>

    <div id="single-product">
        <div class="container">

            <div class="no-margin col-xs-12 col-sm-6 col-md-5 gallery-holder">
                <div class="product-item-holder size-big single-product-gallery small-gallery">

                    <div id="owl-single-product" class="owl-carousel">
                        <div class="single-product-gallery-item" id="slide1">
                            <a data-rel="prettyphoto" href="/assets/images/products/product-gallery-01.jpg">
                                <img class="img-responsive" alt="" src="/assets/images/blank.gif" data-echo="/storage/images/products/{{$product->image}}" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->
                    </div><!-- /.single-product-slider -->
                
                </div><!-- /.single-product-gallery -->
            </div><!-- /.gallery-holder -->

            <div class="no-margin col-xs-12 col-sm-7 body-holder">
                <div class="body">
                    {{-- <div class="star-holder inline"><div class="star" data-score="4"></div></div> --}}
                    <div class="availability"><label>Availability:</label>
                        @if ($product->quantity>0)
                            <span class="available">  in stock</span>
                        @else
                            <span class="not-available">  Out of Stock</span>
                        @endif
                    </div>

                    <div class="title"><a>{{$product->name}}</a></div>
                    <div class="brand">{{$product->brand}}</div>

                    <div class="prices">
                        <div class="price-current">Rs.{{$product->rate}}</div>
                        <div class="price-prev">Rs.{{$product->prev_price}}</div>
                    </div>

                    <div class="qnt-holder">
                        {{-- <div class="le-quantity">
                            <form>
                                <a class="minus" href="#reduce"></a>
                                <input name="quantity" readonly="readonly" type="text" value="1" />
                                <a class="plus" href="#add"></a>
                            </form>
                        </div> --}}
                        <a onclick="addToCart({{$product->id}}, '<?php echo csrf_token() ?>')" class="le-button huge">add to cart</a>
                    </div><!-- /.qnt-holder -->
                </div><!-- /.body -->
            </div><!-- /.body-holder -->
        </div><!-- /.container -->
    </div><!-- /.single-product -->

    <!-- ========================================= SINGLE PRODUCT TAB ========================================= -->
    <section id="single-product-tab">
        <div class="container">
            <div class="tab-holder">

                <ul class="nav nav-tabs simple" >
                    <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
                </ul><!-- /.nav-tabs -->

                <div class="tab-content">
                    <div class="tab-pane active" id="description">
                        <p>{{$product->description}}</p>

                        <div class="meta-row">
                            <div class="inline">
                                <label>SKU:</label>
                                <span>{{$product->sku}}</span>
                            </div><!-- /.inline -->

                            <span class="seperator">/</span>

                            <div class="inline">
                                <?php 
                                    $tags = explode(',', $product->tags);    
                                ?>
                                <label>tag:</label>
                                <span><a href="/products/tag_search?tag={{$product->brand}}">{{$product->brand}}</a>,</span>
                                @foreach ($tags as $tag)
                                    <span><a href="/products/tag_search?tag={{$tag}}">{{$tag}}</a>,</span>
                                @endforeach
                            </div><!-- /.inline -->
                        </div><!-- /.meta-row -->
                    </div><!-- /.tab-pane #description -->
            </div><!-- /.tab-holder -->
        </div><!-- /.container -->
    </section><!-- /#single-product-tab -->
    <!-- ========================================= SINGLE PRODUCT TAB : END ========================================= -->
@endsection