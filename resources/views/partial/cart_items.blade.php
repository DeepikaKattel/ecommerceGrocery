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
                                <img alt="" src="/storage/images/products/{{$cart->product->image}}" />
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-8">
                            <strong>{{$cart->product->name}}</strong>
                            <div><strong>Rate:</strong> <span class="price"> Rs.{{$cart->product->rate}}</span></div>
                            <div><strong>Quantity: </strong>{{$cart->quantity}}</div>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
        
        <li class="checkout">
            <div class="basket-item">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <a href="/checkout" class="le-button">Checkout</a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
@endif