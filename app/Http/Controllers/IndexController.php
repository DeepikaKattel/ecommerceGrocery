<?php

namespace App\Http\Controllers;

use App\AboutUs;
use App\Banner;
use App\Frontend;
use App\PopUp;
use Illuminate\Http\Request;
use App\Department;
use App\Product;
use App\Cart;
use App\CartItem;
use Auth;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index() {
        $featured_products = Product::where('featured', '=', 1)
                ->orderBy('created_at', 'desc')
                ->take(10)
                ->get();
        $new_arrival = Product::where('new_arrival', '=', 1)
                ->orderBy('created_at', 'desc')
                ->take(10)
                ->get();
        $top_sales = Product::where('top_sales', '=', 1)
                ->orderBy('created_at', 'desc')
                ->take(10)
                ->get();

        $dairyDepartment = Department::where('department_name', '=', 'Dairy')->value('id');
        $dairy= Product::select()->where('dept_id', $dairyDepartment)->get();

        $frontEnd = Frontend::orderBy('created_at', 'desc')->get();
        $banner = Banner::first();
        $popup = PopUp::first();
        $products = Product::get();
        return view('main.index', [
            'featured' => $featured_products,
            'new_arrival' => $new_arrival,
            'top_sales' => $top_sales,
            'frontEnd' => $frontEnd,
            'banner' => $banner,
            'products' => $products,
            'popup' => $popup,
            'dairy' => $dairy
        ]);
    }
    public function home() {
        $featured_products = Product::where('featured', '=', 1)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        $new_arrival = Product::where('new_arrival', '=', 1)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        $top_sales = Product::where('top_sales', '=', 1)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
//        $products = Product::get();
        return view('main.home', [
            'featured' => $featured_products,
            'new_arrival' => $new_arrival,
            'top_sales' => $top_sales
        ]);
    }

    public function about() {
        $about = AboutUs::first();
        return view('main.about', compact('about'));
    }

    public function blog() {
        return view('main.blog');
    }

    public function contact() {
        return view('main.contact');
    }

    public function faq() {
        return view('main.faq');
    }
    public function carousel() {
        $featured_products = Product::where('featured', '=', 1)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        $new_arrival = Product::where('new_arrival', '=', 1)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        $top_sales = Product::where('top_sales', '=', 1)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        $products = Product::get();
        return view('carousel', [
            'featured' => $featured_products,
            'new_arrival' => $new_arrival,
            'top_sales' => $top_sales,
            'products' => $products
        ]);
    }
}
