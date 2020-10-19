@extends('layouts.app')

@section('content')
<section id="category-grid">
    <div class="container">
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
                                    {{-- Department List renders here from navbar.js --}}
                                </ul>
                            </li>

                            <li class="breadcrumb-nav-holder">
                                <ul>
                                    <li class="breadcrumb-item">
                                        <a href="/">Home</a>
                                    </li>
                                    <li class="breadcrumb-item current gray">
                                        <a href="/department/{{$current_department->id}}">{{$current_department->department_name}}</a>
                                    </li>
                                </ul>
                            </li><!-- /.breadcrumb-nav-holder -->
                        </ul>
                    </nav>
                </div><!-- /.container -->
            </div><!-- /#top-mega-nav -->
            <!-- ========================================= BREADCRUMB : END ========================================= -->
        </div>

        <div class="col-xs-12 col-sm-12 ">

            <section id="gaming">
                <div class="grid-list-products">
                    <h2 class="section-title">{{$current_department->department_name}}</h2>

                    <div class="control-bar">

                        <div id="item-count" class="le-select">
                            <select id="countItems">
                                <?php
                                    $itemNumbers = [9, 18, 27];
                                    foreach ($itemNumbers as $i) {
                                        if ($i == $items) {
                                            echo "<option value='".$i."' selected>".$i." per page</option>";
                                        } else {
                                            echo "<option value='".$i."'>".$i." per page</option>";
                                        }
                                    }
                                    ?>
                            </select>
                        </div>

                        <div class="grid-list-buttons">
                            <ul>
                                <li class="grid-list-button-item active"><a data-toggle="tab" href="#grid-view"><i class="fa fa-th-large"></i> Grid</a></li>
                                <li class="grid-list-button-item "><a data-toggle="tab" href="#list-view"><i class="fa fa-th-list"></i> List</a></li>
                            </ul>
                        </div>
                    </div><!-- /.control-bar -->

                    <div class="tab-content">
                        <div id="grid-view" class="products-grid tab-pane in active">

                            <div class="product-grid-holder inner-bottom-sm">
                                <div class="row no-margin">

                                    @foreach ($products as $product)
                                    <div class="col-xs-12 col-sm-4 no-margin product-item-holder">
                                        <div class="product-item">
                                            <div class="image">
                                                <a href="/products">
                                                <img alt="" src="/assets/images/blank.gif" data-echo="/storage/images/products/{{$product->image}}" height="238" width="246"/>
                                                </a>
                                            </div>
                                            <div class="body">
                                                <div class="title">
                                                    <a href="/product/{{$product->id}}" style="color:black">{{$product->name}}</a>
                                                </div>
                                                <div class="brand">{{$product->brand}}</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev"><h4>Rs.{{$product->prev_price}}<h4></div>
                                                <div class="price-current pull-right">Rs.{{$product->rate}}</div>
                                            </div>
                                            <div class="add-cart-button center inner-xxs">
                                                <a class="le-button" onclick="addToCart({{$product->id}}, '<?php echo csrf_token() ?>')" style="color:white">add to cart</a>
                                            </div>
                                        </div><!-- /.product-item -->
                                    </div><!-- /.product-item-holder -->
                                    @endforeach
                                </div><!-- /.row -->
                            </div><!-- /.product-grid-holder -->

                            <div class="pagination-holder">
                                <div class="row">

                                    <div class="col-xs-12 col-sm-6 text-left">
                                        {{ $products->links() }}
                                    </div>

                                    <div class="col-xs-12 col-sm-6">
                                        <div class="result-counter">
                                        Showing <span>{{ $products->count() }}</span> of <span>{{ $products->total() }}</span> results
                                        </div>
                                    </div>

                                </div><!-- /.row -->
                            </div><!-- /.pagination-holder -->
                        </div><!-- /.products-grid #grid-view -->

                        <script>
                            elements = document.getElementsByClassName("page-number");
                            Array.prototype.forEach.call(elements, child => {
                                child.setAttribute('href', child.getAttribute('href') + "&items=" + document.getElementById("countItems").value);
                            });

                            document.getElementById("countItems").addEventListener("change", function () {
                                window.location.href = '/department/1?items=' + this.value;
                            });
                        </script>

                        <div id="list-view" class="products-grid fade tab-pane ">
                            <div class="products-list">

                                @foreach ($products as $product)
                                <div class="product-item product-item-holder">
                                    <div class="row">
                                        <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                            <div class="image">
                                                <img alt="" src="/assets/images/blank.gif" data-echo="/storage/images/products/{{$product->image}}" />
                                            </div>
                                        </div><!-- /.image-holder -->
                                        <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                            <div class="body">
                                                <div class="title">
                                                    <a href="/product/{{$product->id}}">{{$product->name}}</a>
                                                </div>
                                                <div class="brand">{{$product->brand}}</div>
                                                <div class="excerpt">
                                                    <p>{{$product->description}}</p>
                                                </div>
                                            </div>
                                        </div><!-- /.body-holder -->
                                        <div class="no-margin col-xs-12 col-sm-3 price-area">
                                            <div class="right-clmn">
                                                <div class="price-current">Rs.{{$product->rate}}</div>
                                                <div class="price-prev">Rs.{{$product->prev_price}}</div>
                                                <div class="availability">
                                                    <label>availability:</label>
                                                    @if ($product->quantity > 0)
                                                        <span class="available">  in stock</span>
                                                    @else
                                                        <span class="not-available">  Out of Stock</span>
                                                    @endif
                                                </div>
                                                <a class="le-button add-to-cart" onclick="addToCart({{$product->id}}, '<?php echo csrf_token() ?>')">add to cart</a>
                                            </div>
                                        </div><!-- /.price-area -->
                                    </div><!-- /.row -->
                                </div><!-- /.product-item -->
                                @endforeach

                            <div class="pagination-holder">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 text-left">
                                        {{ $products->links() }}
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="result-counter">
                                            Showing <span>{{ $products->count() }}</span> of <span>{{ $products->total() }}</span> results
                                        </div><!-- /.result-counter -->
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.pagination-holder -->

                        </div><!-- /.products-grid #list-view -->

                    </div><!-- /.tab-content -->
                </div><!-- /.grid-list-products -->

            </section><!-- /#gaming -->
        </div><!-- /.col -->
        <!-- ========================================= CONTENT : END ========================================= -->
    </div><!-- /.container -->
</section><!-- /#category-grid -->
@endsection
