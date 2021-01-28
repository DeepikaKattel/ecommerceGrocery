@extends('layouts.app')

@section('content')
    <style>
        body
        {
            padding-right:0px !important;
            margin-right:0px !important;
        }
        .modal-body {
            display: flex !important;
            justify-content: center !important;
        }
    </style>
<div class="wrapper">
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
                                    <a href="/profile">{{Auth::user()->name}}</a>
                                </li>
                            </ul>
                        </li><!-- /.breadcrumb-nav-holder -->
                    </ul>
                </nav>
            </div><!-- /.container -->
        </div><!-- /#top-mega-nav -->
        <!-- ========================================= BREADCRUMB : END ========================================= -->
    </div>
    <!-- ========================================= MAIN ========================================= -->
    <main id="profile">
        <div class="container inner-bottom-sm">
            <div class="section">
                <h1 class="border">{{Auth::user()->name}}</h1>

                <h3 class="outer-top-xs">Your checkouts:</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Items</th>
                            <th>Quantity</th>
                            <th>Rate</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Checked Out On</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count = 1;
                        @endphp
                        @foreach ($profileCarts as $cart)
                            <tr>
                                <td>{{$count++}}</td>
                                <td>
                                    @foreach ($cart->cartItem as $cartItem)
                                        {{$cartItem->product->name}} <br>
                                    @endforeach
                                    Discount:<br>
                                    Grand Total:

                                </td>
                                <td>
                                    @foreach ($cart->cartItem as $cartItem)
                                        {{$cartItem->quantity}} <br>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($cart->cartItem as $cartItem)
                                        {{$cartItem->product->rate}} <br>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($cart->cartItem as $cartItem)
                                        {{$cartItem->product->rate * $cartItem->quantity}} <br>
                                    @endforeach
                                    {{$cart->discount}}<br>
                                    {{$cart->grand_total}}

                                </td>
                                @if ($cart->getCheckout == null)
                                    <td>In cart</td>
                                    <td>-</td>
                                @else
                                    <td>{{$cart->getCheckout->status}}</td>
                                    <td>{{$cart->getCheckout->created_at}}</td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="col-sm-6 ml-3 mb-2">
{{--                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>--}}
                    <a class="btn btn-info btn-md" data-toggle="modal" data-target="#paymentModal"><i class="fa fa-money" aria-hidden="true"></i> {{_('Make Payment')}}</a>
                </div>
                <div class="container">
                    <!-- Modal -->
                    <div class="modal fade in" id="paymentModal" role="dialog" >
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content" style="border: 1px solid green">
                                <div class="modal-header" style="background: black;color:white">
                                    <h4>{{$barcode->title}}</h4>
                                    <button type="button" class="close" data-dismiss="modal" style="color:black">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <img alt="" src="assets/images/blank.gif" data-echo="/storage/images/barcode/{{$barcode->image}}"/>
{{--                                    <span class="badge badge-danger" style="background-color: red;font-size: 30px;display: inline-block">{{$popup->discount1}}</span>--}}
                                </div>
                                {{--                <div class="modal-footer">--}}
                                {{--                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                                {{--                </div>--}}
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main><!-- /#aboutUs-us -->
    <!-- ========================================= MAIN : END ========================================= -->
</div><!-- /.wrapper -->
@endsection
