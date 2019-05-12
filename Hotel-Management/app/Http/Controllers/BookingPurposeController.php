<?php

namespace App\Http\Controllers;

use App\BookingPurpose;
use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Http\Requests\TableRequest;
use Input,File;
use DB;     
use Session;

class BookingPurposeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookingPurpose = BookingPurpose::select('id', 'label')->get()->toArray();
        return view('bookingPurpose/index', compact('bookingPurpose'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookingPurpose/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TableRequest $request)
    {
         $bookingPurpose = new BookingPurpose; // ten model
        $bookingPurpose->label = $request->label;
        $bookingPurpose->save();
        return redirect()->route('bookingPurposes.index')->with('success','Thêm sản phẩm thành công!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BookingPurpose  $bookingPurpose
     * @return \Illuminate\Http\Response
     */
    public function show(BookingPurpose $bookingPurpose)
    {
        return view('bookingPurpose/show',compact('bookingPurpose'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BookingPurpose  $bookingPurpose
     * @return \Illuminate\Http\Response
     */
    public function edit(BookingPurpose $bookingPurpose)
    {
        return view('bookingPurpose/edit',compact('bookingPurpose'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BookingPurpose  $bookingPurpose
     * @return \Illuminate\Http\Response
     */
    public function update(TableRequest $request, BookingPurpose $bookingPurpose)
    {
        $bookingPurpose->label = $request->label;
        $bookingPurpose->save();
        return redirect()->route('bookingPurposes.index')->with('success','Sửa sản phẩm thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BookingPurpose  $bookingPurpose
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookingPurpose $bookingPurpose)
    {
        $bookingPurpose->delete();
        return back()->with('success','Xóa sản phẩm thành công!');
    }
}
