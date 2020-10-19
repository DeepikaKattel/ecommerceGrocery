<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\User;
use App\Product;
use App\Department;
use App\Checkout;
use App\Vendor;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('role:1,2');
    }

    public function index() {
        $users = User::all();
        $products = Product::all();
        $department = Product::all();
        return view('admin.dashboard',['users'=>$users, 'products'=>$products,'department'=>$department]);
    }
}
