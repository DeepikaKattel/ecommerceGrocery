@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0 text-dark pl-2">Checkout list</h3>
            </div>
        </div>
        </div>
    </div>

    <div class="col-sm-6 ml-3 mb-2">
        <a href="/admin/userlist" class="btn btn-info btn-sm "><i class="fa fa-arrow-left" aria-hidden="true"></i> {{_('Back')}}</a>
    </div>

    <div class="col-md-10 offset-md-1 col-sm-12">
        @if($carts ?? '')
            <table class="table table-bordered table-hover">
                @php
                    $c=1;
                @endphp
                <tr class="text-center">
                    <th>Sn</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone No.</th>
                    <th>Items</th>
                    <th>Quantity</th>
                    <th>Rate</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                    @foreach ($carts as $cart)
                        @if ($cart != null)
                        <tr  class="text-center">
                            <td>{{$c++}}</td>
                            <td>{{$cart->getCheckout->name}}</td>
                            <td>{{$cart->getCheckout->email}}</td>
                            <td>{{$cart->getCheckout->address}}</td>
                            <td>{{$cart->getCheckout->phone_no}}</td>
                            <td class="text-left">
                                @foreach ($cart->cartItems as $cartItem)
                                {{$cartItem->product->name}} <br>
                                @endforeach
                                Grand Total:
                            </td>
                            <td>
                                @foreach ($cart->cartItems as $cartItem)
                                    {{$cartItem->quantity}} <br>
                                @endforeach
                            </td>
                            <td class="text-right">
                                @foreach ($cart->cartItems as $cartItem)
                                    {{$cartItem->product->rate}} <br>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($cart->cartItems as $cartItem)
                                {{$cartItem->product->rate * $cartItem->quantity}} <br>
                                @endforeach
                                {{$cart->grand_total}}
                            </td>
                            <td>
                                {{$cart->getCheckout->status}}
                            </td>
                            @if($cart->getCheckout->status == "pending")
                                <td style="width: 1.5rem;">
                                    <a href="/checkout/{{$cart->getCheckout->id}}/status" class="btn btn-sm btn-outline-success"> Complete </a>
                                </td>
                            @else
                                <td style="width: 1.5rem;">
                                    <a href="/checkout/{{$cart->getCheckout->id}}/status" class="btn btn-sm btn-outline-danger"> Pending </a>
                                </td>
                            @endif
                        </tr>
                        @endif
                    @endforeach
            </table>
        @endif
    </div>
@endsection
