<?php

namespace App\Http\Controllers;

use App\BarCode;
use Illuminate\Http\Request;
use App\Checkout;
use App\Cart;
use Auth;

class ProfileController extends Controller
{
    public function showProfile() {
        $profileCarts = Cart::where('user_id', Auth::id())->get();
        $barcode = BarCode::first();
        return view('main.profile', compact('profileCarts','barcode'));
    }
}
