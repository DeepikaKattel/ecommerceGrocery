<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use App\Vendor;
use App\UserRole;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('role:1');
    }

    public function userList() {
        $user = User::all();
        return view('admin.userList',['users' => $user]);
    }

    public function addUserPage(){
        $roles = UserRole::all();
        $vendors = Vendor::all();
        return view('admin.addUserPage', compact('vendors', 'roles'));
    }

    public function addUser(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|required_with:password_confirmation|same:password_confirmation'
        ]);
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->user_role = 2;
        $user->vendor_id = $request->input('vendor_id');
        $user->created_at = Carbon::now();
        $user->save();

        return redirect('/admin/userlist');
    }

    public function removeUser($userid) {
        $user = User::find($userid);
        $user->delete();
        return redirect('/admin/userlist');
    }
}
