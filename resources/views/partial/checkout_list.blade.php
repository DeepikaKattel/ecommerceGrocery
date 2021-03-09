<h1>Your Cart:</h1>
@if (count($cartItems) > 0)
    @php
        $c=0;
    @endphp
{{--<strong>Click to remove one quantity from the item:</strong>--}}
    <table>
        <thead>
            <tr>
                <th>SL No.</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Remove</th>
            </tr>
        </thead>
        @foreach ($cartItems as $cartItem)
        <tbody>
            <tr>
                @php
                    $c++;
                @endphp
                <td>{{$c}}</td>
                <td><img alt="" style="width:50px;height:50px" src="/storage/images/products/{{$cartItem->product->image}}" class="img-responsive"/></td>
                <td><div class="close1" onclick="removeItem({{$cartItem->id}}, '<?php echo csrf_token() ?>')"> <span> - </span> </div> {{$cartItem->quantity}} <div class="close1" onclick="addItem({{$cartItem->id}}, '<?php echo csrf_token() ?>')"> <span> + </span> </div></td>
                <td>{{$cartItem->product->name}}</td>
                <td> @php
                        echo $cartItem->quantity * $cartItem->product->rate;
                    @endphp
                </td>
                <td></td>
            </tr>
        </tbody>
        @endforeach
        <tfoot width="15rem">
            <td>
                Grand Total After Discount:
                <span class="amount">{{$grand_total}}</span>
            </td>
        </tfoot>
    </table>


@else
    <li class="list-group-item">
        Your cart is empty!!
    </li>
@endif

