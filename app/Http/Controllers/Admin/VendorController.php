<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vendor;

class VendorController extends Controller
{
    public function __construct() {
        $this->middleware('role:1');
    }
    public function vendorList(){
        $vendors = Vendor::all();
        return view('admin.vendor', compact('vendors'));
    }

    public function addVendor(Request $request){
        $this->validate($request, [
            'name' => 'required',
        ]);

        $vendor = new Vendor();
        $vendor->name = $request->input('name');
        $vendor->save();

        return $this->vendorList();
    }

    public function deleteVendor($vendorId){
        $vendor = Vendor::find($vendorId);
        $vendor->delete();
        return redirect('/admin/vendor');
    }
}
