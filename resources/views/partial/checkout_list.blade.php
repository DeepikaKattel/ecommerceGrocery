<h1>Your Cart:</h1>
@if (count($cartItems) > 0)
<strong>Click to remove one quantity from the item:</strong>
<ul class="list-group" id="">
    @foreach ($cartItems as $cartItem)
    <li class="list-group-item cart-item" onclick="removeItem({{$cartItem->id}}, '<?php echo csrf_token() ?>')">
        {{$cartItem->product->name}} x{{$cartItem->quantity}}
        <span class="amount right">
            @php
                echo $cartItem->quantity * $cartItem->product->rate;
            @endphp
        </span>
    </li>
    @endforeach
    <li class="list-group-item">
        Grand Total After Discount:
        <span class="amount">{{$grand_total}}</span>
    </li>
@else
    <li class="list-group-item">
        Your cart is empty!!
    </li>
@endif
</ul>
