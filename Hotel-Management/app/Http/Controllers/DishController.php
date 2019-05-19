<?php

namespace App\Http\Controllers;

use App\Dish;
use App\DishType;
use App\Http\Requests\DishRequest;
use Validator;


class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $dishes = Dish::orderBy('dish_type_id')->orderBy('name')->get();
      return view('dish/index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $dish = new Dish;
      $dishTypes = DishType::orderBy('id')->get();
      return view('dish/create', compact('dish'))->with('dishTypes', $dishTypes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DishRequest $request)
    {
      $dish = new Dish($request->all());


      if ($request->hasFile('image')) {
        
        $image = $request->file('image');
        $validator = Validator::make($request->all(), $dish->rules, $dish->messages);

        if ($validator->fails()) {
          return redirect()->route('countries.create')->withErrors($validator)->withInput();
        }

        elseif ($image->isValid()) {
          $dish->image = $request->file('image')->storeAs('images/dish', $image->getClientOriginalName());
        }

      }


      $dish->save();
      return redirect()->route('dishes.index')->with('success','Add success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
      $dishTypes = DishType::orderBy('id')->get();
      return view('dish/edit',compact('dish'))->with('dishTypes', $dishTypes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(DishRequest $request, Dish $dish)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
      $dish->delete();
      return "ok";
    }
}
