<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Department;
use App\Vendor;
use Auth;

class ProductController extends Controller
{
    public function __construct() {
        $this->middleware('role:1,2');
    }

    public function itemsList() {
        if (Auth::user()->isAdmin()) {
            $items = Product::all();
        } else {
            $items = Product::where('vendor_id', Auth::user()->vendor_id)->get();
        }
        return view('admin.itemList',['items' => $items]);
    }

    public function addItemPage(){
        $departments = Department::all();
        $vendors = Vendor::all();
        return view('admin.addItemPage', compact('departments', 'vendors'));
    }

    public function additem(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'brand' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'availability' => 'required',
            'rate' => 'required',
            'prev_price' => 'required',
            'sku' => 'required',
            'image' => 'image|nullable|max:1999',
            'tags' => 'required',
            'dept_id' => 'required'
        ]);

        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().".".$extension;
            $path = $request->file('image')->storeAs('public/images/products', $fileNameToStore);
        } else {
            $fileNameToStore = 'no-image.jpg';
        }

        $product = new Product();
        $product->name = $request->input('name');
        $product->brand = $request->input('brand');
        if (Auth::user()->isAdmin()) {
            $product->vendor_id = $request->input('vendor_id');
        } else {
            $product->vendor_id = Auth::user()->vendor_id;
        }
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');
        $product->rate = $request->input('rate');
        $product->prev_price = $request->input('prev_price');
        $product->availability = $request->input('availability');
        $product->image = $fileNameToStore;
        $product->sku = $request->input('sku');
        $product->tags = $request->input('tags');
        $product->featured = ($request->featured == "on") ? 1 : 0;
        $product->new_arrival = ($request->arrival == "on") ? 1 : 0;
        $product->top_sales = ($request->sales == "on") ? 1 : 0;
        $product->dept_id = $request->input('dept_id');
        $product->save();
        return redirect('/admin/itemlist');
    }
}
