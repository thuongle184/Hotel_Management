<?php

namespace App\Http\Controllers;

use App\BookingType;
use App\OnlinePlateform;
use Illuminate\Http\BookingTypeRequest;
use Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class BookingTypeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $onlinePlateforms = OnlinePlateform::with(['bookingTypes' => function ($bookingType) { $bookingType->orderBy('label'); }])
          ->orderBy('id')
          ->get();

      return view('bookingType/index', compact('onlinePlateforms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $bookingType = new BookingType;
      $onlinePlateforms = OnlinePlateform::orderBy('id')->get();
      return view('bookingType/create', compact('bookingType'))->with('onlinePlateforms', $onlinePlateforms);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingTypeRequest $request)
    {
      $bookingType = new BookingType($request->all());

      $bookingType->save();
      return redirect()->route('bookingTypes.index')->with('success','Add success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(BookingType $bookingType)
    {
      return view('bookingType/show', compact('bookingType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(BookingType $bookingType)
    {
      $bookingTypes = BookingType::orderBy('id')->get();
      return view('bookingType/edit',compact('bookingType'))->with('bookingTypes', $bookingTypes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(BookingTypeRequest $request, BookingType $bookingType)
    {
      if (!$request->is_available) {
        $request->merge(['is_available' => false]);
      }


      $bookingType->update($request->all());

      return redirect()->route('bookingTypes.index')->with('success','Update success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookingType $bookingType)
    {
     $bookingType->delete();
      return "ok";
    }

}
