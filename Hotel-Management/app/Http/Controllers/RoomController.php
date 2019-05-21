<?php

namespace App\Http\Controllers;

use App\Room;
use App\RoomSize;
use App\Http\Requests\RoomRequest;
use App\Http\Requests\RoomSizeRequest;
use Validator;
use Illuminate\Support\Facades\Storage;
use Input,File;
use DB;     
use Session;     


class roomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $roomSizes = RoomSize::with(['rooms' => function ($room) { $room->orderBy('number'); }])
          ->orderBy('id')
          ->get();

      return view('room/index', compact('roomSizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $room = new Room;
      $roomSizes = RoomSize::orderBy('id')->get();
      return view('room/create', compact('room'))->with('roomSizes', $roomSizes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoomRequest $request)
    {
      $room = new Room($request->all());
      $room->save();
      return redirect()->route('rooms.index')->with('success','Add success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
      return view('room/show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
      $roomSizes = RoomSize::orderBy('id')->get();
      return view('room/edit',compact('room'))->with('roomSizes', $roomSizes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(RoomRequest $request, Room $room)
    {
      if (!$request->is_available) {
        $request->merge(['is_available' => false]);
      }

      if (!$request->is_smoking) {
        $request->merge(['is_smoking' => false]);
      }

      $room->update($request->all());
      return redirect()->route('rooms.index')->with('success','Edit is success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
      $room->delete();
      return "ok";
    }
}
