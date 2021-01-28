<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Checkout;
use App\Cart;
use App\CartItem;

use Auth;

class CheckoutController extends Controller
{
    public function __construct() {
        $this->middleware('role:1,2');
    }

    public function getCheckouts() {
        $carts = Cart::where('checkout','=', 1)->orderBy('created_at', 'desc')->get();
        $carts = $carts->map(function ($item) {
            $cartItems = array();
            $cartItemFlag = false;
            if (Auth::user()->user_role == 1) {
                foreach ($item->cartItem as $cartItem) {
                    $cartItems[] = $cartItem;
                    $cartItemFlag = true;
                }
            } else {
                foreach ($item->cartItem as $cartItem) {
                    if ($cartItem->product->vendor_id == Auth::user()->vendor_id) {
                        $cartItems[] = $cartItem;
                        $cartItemFlag = true;
                    }
                }
            }
            if($cartItemFlag){
                $item->cartItems = $cartItems;
                return $item;
            }
        });
        return view('admin.checkout', compact('carts'));
    }
    public function status(Request $request, $id){
        $data = Checkout::find($id);

        if($data->status == "pending"){
            $data->status="complete";
        }else{
            $data->status="pending";
        }
        $data->save();
        return redirect()->back()->with('message', 'Payment status of'.' '.$data->name.' '.'has been changed successfully');
    }
}
