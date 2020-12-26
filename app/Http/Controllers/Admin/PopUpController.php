<?php

namespace App\Http\Controllers\Admin;

use App\PopUp;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PopUpController extends Controller
{
    public function __construct() {
        $this->middleware('role:1');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popup = PopUp::all();
        return view('popup.index', compact('popup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $count = PopUp::all()->count();
        return view('popup.create',compact('count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'discount1' => 'required',
            'banner' => 'image|nullable|max:1999',
        ]);
        if($request->hasFile('banner')){
            $filenameWithExt = $request->file('banner')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('banner')->getClientOriginalExtension();
            $fileNameToStore1 = $filename.'_'.time().".".$extension;
            $path = $request->file('banner')->storeAs('public/images/bannerPopUp', $fileNameToStore1);
        } else {
            $fileNameToStore1 = 'no-image.jpg';
        }

        $popup = new PopUp();
        $popup->title = $request->input('title');
        $popup->discount1 = $request->input('discount1');
        $popup->banner = $fileNameToStore1;
        $popup->save();
        return redirect('/popup');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $popup= PopUp::find($id);
        return view('popup.edit', compact('popup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $popup = PopUp::find($id);
        if($request->hasFile('banner')){
            $filenameWithExt = $request->file('banner')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('banner')->getClientOriginalExtension();
            $fileNameToStore1 = $filename.'_'.time().".".$extension;
            $path = $request->file('banner')->storeAs('public/images/bannerPopUp', $fileNameToStore1);
        } else {
            $fileNameToStore1 = 'no-image.jpg';
        }
        $popup->title = $request->input('title');
        $popup->discount1 = $request->input('discount1');
        $popup->banner = $fileNameToStore1;

        $popup->save();
        return redirect('/popup');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $popup= PopUp::find($id)->delete();
        return redirect('/popup');
    }
}
