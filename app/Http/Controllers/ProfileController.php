<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Checkout;
use App\Cart;
use Auth;

class ProfileController extends Controller
{
    public function showProfile() {
        $profileCarts = Cart::where('user_id', Auth::id())->get();
        return view('main.profile', compact('profileCarts'));
    }
}
