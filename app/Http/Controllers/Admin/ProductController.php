<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\ProductsImport;
use Illuminate\Http\Request;
//use Illuminate\Support\Str;
use App\Product;
use App\Department;
use App\Vendor;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function __construct() {
        $this->middleware('role:1,2');
    }

    public function itemsList() {
        if (Auth::user()->isAdmin()) {
            $items = Product::latest()->Paginate(10);
            $catList = DB::table('departments')->pluck('id', 'department_name');
        } else {
            $items = Product::where('vendor_id', Auth::user()->vendor_id)->get();
        }
        return view('admin.itemList',['items' => $items,'catList' => $catList]);
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
        $product->discount = $request->input('discount');

//        if (Auth::user()->isAdmin()) {
//            $product->vendor_id = $request->input('vendor_id');
//        } else {
//            $product->vendor_id = Auth::user()->vendor_id;
//        }
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
    public function edit($id)
    {
        $departments = Department::all();
        $vendors = Vendor::all();
        $items = Product::find($id);

        return view('admin.itemEdit', compact('items','departments','vendors'));
    }

    public function update(Request $request, $id)
    {
        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().".".$extension;
            $path = $request->file('image')->storeAs('public/images/products', $fileNameToStore);
        } else {
            $fileNameToStore = 'no-image.jpg';
        }
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->brand = $request->input('brand');

        $product->discount = $request->input('discount');

//        if (Auth::user()->isAdmin()) {
//            $product->vendor_id = $request->input('vendor_id');
//        } else {
//            $product->vendor_id = Auth::user()->vendor_id;
//        }
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

    public function destroy($id)
    {
        $items= Product::find($id)->delete();
        return redirect('/admin/itemlist');
    }

    public function fileImportExport()
    {
        return view('file-import');
    }


    public function fileImport(Request $request)
    {
        Excel::import(new ProductsImport, $request->file('file')->store('temp'));
        Alert::success('Thank you', 'Products have been imported');
        return view('admin.itemList');
    }


    public function fileExport()
    {
        return Excel::download(new ProductsExport, 'products-collection.xlsx');
    }
    public  function sort(Request $request){
        $sort = $request->get('sort');
        $items = Product::with('department')->where('dept_id', 'like', '%'.$sort.'%')->Paginate(10);
        $catList = DB::table('departments')->pluck('id', 'department_name');
        return view('admin.itemList',['items' => $items])->with('catList', $catList);
    }

    public  function search(Request $request){
        $search = $request->get('search');
        $items = Product::with('department')->where('name', 'like', '%'.$search.'%')->Paginate(5);
        $catList = DB::table('departments')->pluck('id', 'department_name');
        return view('admin.itemList',['items' => $items])->with('catList', $catList);
    }
}
