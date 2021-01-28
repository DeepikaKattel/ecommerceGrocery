<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Cart;
use App\CartItem;
use App\Product;
use App\Checkout;
Use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class CartController extends Controller
{
    public function getCart(Request $request){
        if (Auth::check()) {
            $cart = Cart::where([
                ['user_id', '=', Auth::id()],
                ['checkout', '=', 0]
            ])->get();
            if ($cart[0] ?? '') {
                $grand_total = $cart[0]->grand_total;
                $carts = CartItem::where('cart_id', $cart[0]->id)->get();
            } else {
                $grand_total = 0;
                return response()->json(array('view' => view('partial.cart_items', compact('grand_total'))->render()));
            }
            return response()->json(array('view' => view('partial.cart_items', compact('carts', 'grand_total'))->render()));
        }else {
            return response()->json(array('auth' => 0));
        }
    }

    public function addToCart(Request $request){
        if (Auth::check()) {
            $cart = Cart::where([
                ['user_id', '=', Auth::id()],
                ['checkout', '=', 0]
            ])->get();
            $product = Product::find($request->input('product'));
            if ($cart[0] ?? '') {
                $this->createCartItem($product->id, $cart[0]['id']);
                $houseNumber = User::where('id','=',Auth::id())->value('house_number');
                if($houseNumber){
                    $discount = 2 / 100;
                    $discountRate = $product->rate * $discount;
                }
                else{
                    $discountRate = 0;
                }
                $cart[0]->discount += $discountRate;
                $cart[0]->grand_total = $cart[0]->grand_total + $product->rate - $discountRate;
//                $cart[0]->grand_total += $product->rate;
                $cart[0]->save();
            } else {

                $cart = new Cart();
                $cart->user_id = Auth::id();
                $cart->save();
                $this->createCartItem($product->id, $cart->id);

//                $cart->grand_total += $product->rate;

                $houseNumber = User::where('id','=',Auth::id())->value('house_number');
                if($houseNumber){
                    $discount = 2 / 100;
                    $discountRate = $product->rate * $discount;
                }
                else{
                    $discountRate = 0;
                }
                $cart->discount = $discountRate;
                $cart->grand_total = $cart->grand_total + $product->rate - $discountRate;

                $cart->save();
            }
            return $this->getCart($request);
        }else {
            return response()->json(array("error" => "Unauthorized error"), 401);
        }
    }

    public function createCartItem($p_id, $id) {
        $cartItem = CartItem::where([
            ['cart_id', '=', $id],
            ['product_id', '=', $p_id],
        ])->get();
        if ($cartItem[0] ?? ''){
            $cartItem[0]->quantity += 1;
            $cartItem[0]->save();
        } else {
            $cartItem = new CartItem();
            $cartItem->cart_id = $id;
            $cartItem->product_id = $p_id;
            $cartItem->quantity = 1;
            $cartItem->save();
        }
    }

    public function getCartList(Request $request) {
        $cart = Cart::where([
            ['user_id', '=', Auth::id()],
            ['checkout', '=', 0]
        ])->get();
        $grand_total = $cart[0]->grand_total;

        $cartItems = CartItem::where('cart_id', '=', $cart[0]->id)->get();
        return response()->json(array(
            'view' => view('partial.checkout_list', compact('cartItems', 'grand_total'))->render(),
            'grand_total' => $grand_total
        ));
    }

    public function RemoveFromCart(Request $request){
        if (Auth::check()) {
            $item = CartItem::find($request->input('cartItem'));
            if ($item === null) {
                return response()->json(array("error" => "Cart not found"), 404);
            } else {
                if ($item->quantity == 1) {
                    $item->delete();
                } else {
                    $item->quantity -= 1;
                    $item->save();
                }
                $item->cart->grand_total -= $item->product->rate;
                if ($item->cart->discount){
                    $item->cart->discount -= $item->product->rate * 0.02;
                    $item->cart->grand_total += $item->product->rate * 0.02;
                }
                if ($item->cart->grand_total < 0){
                    $item->cart->grand_total = 0;
                }
                $item->cart->save();
            }
            return $this->getCart($request);
        } else {
            return response()->json(array("error" => "Unauthorized error"), 401);
        }
    }

    public function showProduct($id) {
        $product = Product::find($id);
        $departments = Department::all();
        return view('main.product_display', compact('product', 'departments'));
    }

    public function checkoutForm() {
        $cart = Cart::where([
            ['user_id', '=', Auth::id()],
            ['checkout', '=', 0]
        ])->get();

        return view('main.checkout', ['cart_id' => $cart[0]->id]);
    }

    public function checkout(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'phone_no' => 'required'
        ]);

        $checkout = new Checkout();
        $checkout->name = $request->input('name');
        $checkout->email = $request->input('email');
        $checkout->address = $request->input('address');
        $checkout->phone_no = $request->input('phone_no');
        $checkout->cart_id = $request->input('cart_id');

        $cart = Cart::find($request->input('cart_id'));
        $cart->checkout = 1;

        if ($cart->grand_total < 10) {
            return redirect('/checkout');
        } else {
            $checkout->save();
            $cart->save();
            Alert::success('Thank you', 'Your order is being processed');
            return redirect('/');
        }
    }
}
