<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
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
        $banner = Banner::all();
        return view('banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $count = Banner::all()->count();
        return view('banner.create',compact('count'));
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
            'banner1' => 'image|nullable|max:1999',
            'discount1' => 'required',
            'banner2' => 'image|nullable|max:1999',
            'discount2' => 'required',
        ]);
        if($request->hasFile('banner1')){
            $filenameWithExt = $request->file('banner1')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('banner1')->getClientOriginalExtension();
            $fileNameToStore1 = $filename.'_'.time().".".$extension;
            $path = $request->file('banner1')->storeAs('public/images/banner', $fileNameToStore1);
        } else {
            $fileNameToStore1 = 'no-image.jpg';
        }
        if($request->hasFile('banner2')){
            $filenameWithExt = $request->file('banner2')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('banner2')->getClientOriginalExtension();
            $fileNameToStore2 = $filename.'_'.time().".".$extension;
            $path = $request->file('banner2')->storeAs('public/images/banner', $fileNameToStore2);
        } else {
            $fileNameToStore2 = 'no-image.jpg';
        }


        $banner = new Banner();
        $banner->banner1 = $fileNameToStore1;
        $banner->discount1 = $request->input('discount1');
        $banner->banner2 = $fileNameToStore2;
        $banner->discount2 = $request->input('discount2');
        $banner->save();
        return redirect('/banner');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner= Banner::find($id);
        return view('banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $banner = Banner::find($id);
        if($request->hasFile('banner1')){
            $filenameWithExt = $request->file('banner1')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('banner1')->getClientOriginalExtension();
            $fileNameToStore1 = $filename.'_'.time().".".$extension;
            $path = $request->file('banner1')->storeAs('public/images/banner', $fileNameToStore1);
        } else {
            $fileNameToStore1 = 'no-image.jpg';
        }
        if($request->hasFile('banner2')){
            $filenameWithExt = $request->file('banner2')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('banner2')->getClientOriginalExtension();
            $fileNameToStore2 = $filename.'_'.time().".".$extension;
            $path = $request->file('banner2')->storeAs('public/images/banner', $fileNameToStore2);
        } else {
            $fileNameToStore2 = 'no-image.jpg';
        }

        $banner->banner1 = $fileNameToStore1;
        $banner->discount1 = $request->input('discount1');
        $banner->banner2 = $fileNameToStore2;
        $banner->discount2 = $request->input('discount2');
        $banner->save();
        return redirect('/banner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner= Banner::find($id)->delete();
        return redirect('/banner');
    }
}
