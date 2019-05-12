<?php

namespace App\Http\Controllers;

use App\Equipment;
use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Http\Requests\TableRequest;
use Input,File;
use DB;     
use Session;


class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipment = Equipment::select('id', 'label')->get()->toArray();
        return view('Equipment/index', compact('equipment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Equipment/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TableRequest $request)
    {
        $equipment = new Equipment; // ten model
        $equipment->label = $request->label;
        $equipment->save();
        return redirect()->route('equipments.index')->with('success','Thêm sản phẩm thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function show(Equipment $equipment)
    {
        return view('Equipment/show',compact('equipment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipment $equipment)
    {
        return view('Equipment/edit',compact('equipment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(TableRequest $request, Equipment $equipment)
    {
        $equipment->label = $request->label;
        $equipment->save();
        return redirect()->route('equipments.index')->with('success','Sửa sản phẩm thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipment $equipment)
    {
        $equipment->delete();
        return back()->with('success','Xóa sản phẩm thành công!');
    }
}
