<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Department;

class ProductsController extends Controller
{

    public function getDepartments() {
        $departments = Department::all();
        return response()->json(array('view' => view('partial.department_list', compact('departments'))->render()));

    }

    public function showProduct($id) {
        $product = Product::find($id);
        $departments = Department::all();
        $products = Product::get();
        return view('main.product_display', compact('product', 'departments','products'));
    }

    public function showProducts(Request $request, $id) {
        $items = $request->input('items');
        if ($items == null) {
            $items = 9;
        }
        $products = Product::where('dept_id', $id)->paginate($items);
        $departments = Department::all();
        $current_department = Department::find($id);
//        $productsDisplay = Product::get();
        return view('main.products_department', compact('products', 'departments', 'current_department', 'items'));
    }

    public function searchProducts(Request $request) {
        $products = Product::where('name', 'LIKE', '%'.$request->input('query').'%')
                    ->orWhere('brand', 'LIKE', '%'.$request->input('query').'%')
                    ->orWhere('tags', 'LIKE', '%'.$request->input('query').'%')->get();
        $departments = Department::all();
        return view('main.products_search', compact('products', 'departments'));
    }
    public function livesearch(Request $request) {
        $search = $request->get('query');
        $data = Product::where('name', 'LIKE', '%'.$search.'%')
            ->orWhere('brand', 'LIKE', '%'.$search.'%')
            ->orWhere('tags', 'LIKE', '%'.$search.'%')->get();
        return response()->json($data);

    }

    public function searchProductsByTag(Request $request){
        $tag = $request->input('tag');
        $products = Product::where('brand', 'LIKE', '%'.$tag.'%')
                    ->orWhere('tags', 'LIKE', '%'.$tag.'%')->get();
        $departments = Department::all();
        return view('main.products_search', compact('products', 'departments'));
    }
}
