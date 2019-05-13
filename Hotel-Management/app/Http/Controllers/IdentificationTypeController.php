<?php

namespace App\Http\Controllers;

use App\identificationType;
use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Http\Requests\TableRequest;
use Input,File;
use DB;     
use Session;

class IdentificationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $identificationType = IdentificationType::select('id', 'label')->get()->toArray();
        return view('identificationType/index', compact('identificationType'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('identificationType/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $identificationType = new IdentificationType; // ten model
        $identificationType->label = $request->label;
        $identificationType->save();
        return redirect()->route('identificationTypes.index')->with('success','Add success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\identificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function show(identificationType $identificationType)
    {
        return view('identificationType/show',compact('identificationType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\identificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function edit(identificationType $identificationType)
    {
         return view('identificationType/edit',compact('identificationType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\identificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, identificationType $identificationType)
    {
        $identificationType->label = $request->label;
        $identificationType->save();
        return redirect()->route('identificationTypes.index')->with('success','Edit success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\identificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function destroy(identificationType $identificationType)
    {
        $identificationType->delete();
        return back()->with('success','Delete success!');
    }
}
