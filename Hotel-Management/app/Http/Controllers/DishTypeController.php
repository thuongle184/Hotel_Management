<?php

namespace App\Http\Controllers;

use App\DishType;
use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Http\Requests\DishTypeRequest;
use Input,File;
use DB;     
use Session;


class DishTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishType = DishType::select('id', 'label')->get()->toArray();
      return view('dishType/index', compact('dishType'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dishType/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DishTypeRequest $request)
    {
        DishType::create($request->all());
        return redirect()->route('dishTypes.index')->with('success','Add success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DishType  $dishType
     * @return \Illuminate\Http\Response
     */
    public function show(DishType $dishType)
    {
        return view('dishType/show',compact('dishType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DishType  $dishType
     * @return \Illuminate\Http\Response
     */
    public function edit(DishType $dishType)
    {
        return view('dishType/edit',compact('dishType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DishType  $dishType
     * @return \Illuminate\Http\Response
     */
    public function update(DishTypeRequest $request, DishType $dishType)
    {
        $dishType->update($request->all());
        return redirect()->route('dishTypes.index')->with('success','Sửa sản phẩm thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DishType  $dishType
     * @return \Illuminate\Http\Response
     */
    public function destroy(DishType $dishType)
    {
        $dishType->delete();
        return back()->with('success','Xóa sản phẩm thành công!');
    }
}
