<?php

namespace App\Http\Controllers;

use App\BarCode;
use Illuminate\Http\Request;

class BarCodeController extends Controller
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
        $barcode = BarCode::all();
        return view('barcode.index', compact('barcode'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $count = BarCode::all()->count();
        return view('barcode.create',compact('count'));
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
            'image' => 'image|nullable|max:1999',
        ]);
        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore1 = $filename.'_'.time().".".$extension;
            $path = $request->file('image')->storeAs('public/images/barcode', $fileNameToStore1);
        } else {
            $fileNameToStore1 = 'no-image.jpg';
        }

        $barcode = new BarCode();
        $barcode->title = $request->input('title');
        $barcode->image = $fileNameToStore1;
        $barcode->save();
        return redirect('/barcode');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BarCode  $barCode
     * @return \Illuminate\Http\Response
     */
    public function show(BarCode $barCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BarCode  $barCode
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barcode = BarCode::find($id);
        return view('barcode.edit', compact('barcode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BarCode  $barCode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barcode = BarCode::find($id);
        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore1 = $filename.'_'.time().".".$extension;
            $path = $request->file('image')->storeAs('public/images/barcode', $fileNameToStore1);
        } else {
            $fileNameToStore1 = 'no-image.jpg';
        }
        $barcode->title = $request->input('title');
        $barcode->image = $fileNameToStore1;

        $barcode->save();
        return redirect('/barcode');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BarCode  $barCode
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barcode= BarCode::find($id)->delete();
        return redirect('/barcode');
    }
}
