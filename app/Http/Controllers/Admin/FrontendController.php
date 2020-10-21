<?php

namespace App\Http\Controllers\Admin;

use App\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
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
        $frontEnd = Frontend::all();
        return view('frontend.index', compact('frontEnd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.create');
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
            'heading' => 'required',
            'message' => 'required',
            'image' => 'image|nullable|max:1999',
        ]);

        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().".".$extension;
            $path = $request->file('image')->storeAs('public/images/slider', $fileNameToStore);
        } else {
            $fileNameToStore = 'no-image.jpg';
        }


        $frontEnd = new Frontend();
        $frontEnd->heading = $request->input('heading');
        $frontEnd->message = $request->input('message');
        $frontEnd->image = $fileNameToStore;
        $frontEnd->save();
        return redirect('/frontend');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $frontEnd= Frontend::find($id);
        return view('frontend.edit', compact('frontEnd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $frontEnd = Frontend::find($id);
        $this->validate($request, [
            'heading' => 'required',
            'message' => 'required',
            'image' => 'image|nullable|max:1999',
        ]);

        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().".".$extension;
            $path = $request->file('image')->storeAs('public/images/slider', $fileNameToStore);
        } else {
            $fileNameToStore = 'no-image.jpg';
        }
        $frontEnd->heading = $request->input('heading');
        $frontEnd->message = $request->input('message');
        $frontEnd->image = $fileNameToStore;
        $frontEnd->save();
        return redirect('/frontend');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $frontEnd= Frontend::find($id)->delete();
        return redirect('/frontend');
    }
}
