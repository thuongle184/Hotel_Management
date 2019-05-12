<?php

namespace App\Http\Controllers;

use App\RoomSize;
use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Http\Requests\TableRequest;
use Input,File;
use DB;     
use Session;

class RoomSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomSize = RoomSize::select('id', 'label')->get()->toArray();
        return view('roomSize/index', compact('roomSize'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roomSize/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TableRequest $request)
    {
        $roomSize = new RoomSize; // ten model
        $roomSize->label = $request->label;
        $roomSize->save();
        return redirect()->route('roomSizes.index')->with('success','Thêm sản phẩm thành công!'); // Lay dia chi cua phan as ben route
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RoomSize  $roomSize
     * @return \Illuminate\Http\Response
     */
    public function show(RoomSize $roomSize)
    {
        return view('roomSize/show',compact('roomSize'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RoomSize  $roomSize
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomSize $roomSize)
    {
        return view('roomSize/edit',compact('roomSize'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RoomSize  $roomSize
     * @return \Illuminate\Http\Response
     */
    public function update(TableRequest $request, RoomSize $roomSize)
    {
        $roomSize->label = $request->label;
        $roomSize->save();
        return redirect()->route('roomSizes.index')->with('success','Thêm sản phẩm thành công!'); // Lay dia chi cua phan as ben route
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RoomSize  $roomSize
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomSize $roomSize)
    {
        $roomSize->delete();
        return back()->with('success','Xóa sản phẩm thành công!');
    }
}
