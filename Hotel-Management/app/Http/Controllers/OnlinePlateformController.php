<?php

namespace App\Http\Controllers;

use App\OnlinePlateform;
use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Http\Requests\TableRequest;
use Input,File;
use DB;     
use Session;

class OnlinePlateformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $onlinePlateform = OnlinePlateform::select('id', 'label')->get()->toArray();
        return view('onlinePlateform/index', compact('onlinePlateform'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('onlinePlateform/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $onlinePlateform = new OnlinePlateform; // ten model
        $onlinePlateform->label = $request->label;
        $onlinePlateform->save();
        return redirect()->route('onlinePlateforms.index')->with('success','Add success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OnlinePlateform  $onlinePlateform
     * @return \Illuminate\Http\Response
     */
    public function show(OnlinePlateform $onlinePlateform)
    {
        return view('onlinePlateform/show',compact('onlinePlateform'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OnlinePlateform  $onlinePlateform
     * @return \Illuminate\Http\Response
     */
    public function edit(OnlinePlateform $onlinePlateform)
    {
        return view('onlinePlateform/edit',compact('onlinePlateform'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OnlinePlateform  $onlinePlateform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OnlinePlateform $onlinePlateform)
    {
        $onlinePlateform->label = $request->label;
        $onlinePlateform->save();
        return redirect()->route('onlinePlateforms.index')->with('success','Edit success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OnlinePlateform  $onlinePlateform
     * @return \Illuminate\Http\Response
     */
    public function destroy(OnlinePlateform $onlinePlateform)
    {
        $onlinePlateform->delete();
        return back()->with('success','Delete success!');
    }
}
