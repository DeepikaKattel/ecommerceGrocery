@extends('layouts.app')

@section('content')
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
            </div>
        </div>
    </main><!-- /#aboutUs-us -->
    <!-- ========================================= MAIN : END ========================================= -->
</div><!-- /.wrapper -->
@endsection
