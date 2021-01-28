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

    <div id="cart-page">
        <div class="container">
            <div class="alert alert-warning" id="form-message" hidden>
                <strong>Warning!</strong> Cart is empty!! <br>
                Add to cart to checkout
            </div>
            <div class="section col-xs-12 col-sm-6 col-md-8">
                <h1 class="border">Checkout Form</h1>

                <form action="" method="POST">
                    @csrf
                    <div class="field-row">
                        <label>Name:</label>
                        <input type="text" class="le-input" name="name" required autofocus>
                    </div><!-- /.field-row -->

                    <div class="field-row">
                        <label>Email(Optional):</label>
                        <input type="email" class="le-input" name="email">
                    </div><!-- /.field-row -->


                    <div class="field-row">
                        <label>Address:</label>
                        <input type="text" class="le-input" name="address" required>
                    </div><!-- /.field-row -->

                    <div class="field-row">
                        <label>Phone No:</label>
                        <input type="number" class="le-input" name="phone_no" required>
                    </div><!-- /.field-row -->

                    <input type="hidden" name="cart_id" value="{{$cart_id}}">

                    {{-- <fieldset disabled> --}}
                        <div class="buttons-holder outer-top-xs">
                            <button type="submit" class="le-button" id="checkout-button">Checkout</button>
                        </div><!-- /.buttons-holder -->
                    {{-- </fieldset> --}}
                </form>
            </div>
            <div class="section col-xs-12 col-sm-6 col-md-4" id="cart-list">

            </div>
        </div>
    </div>
@endsection
