<?php

namespace App\Http\Controllers;

use App\VipCard;
use App\UserType;
use App\User;
use App\Http\Requests\VipCardRequest;
use Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Session;

class VipCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::with(['vipCard' => function ($vipCard) { $vipCard->orderBy('user_id'); }])
        ->orderBy('id')
        ->get();

      return view('vipCard/index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $vipCard = new vipCard;
      $user = user::orderBy('id')->get();
      return view('vipCard/create', compact('vipCard'))->with('user', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VipCardRequest $request)
    {
      $vipCard = new VipCard($request->all());
      $vipCard->save();
      return redirect()->route('vipCards.index')->with('success','Add success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vipCard  $vipCard
     * @return \Illuminate\Http\Response
     */
    public function show(vipCard $vipCard)
    {
      return view('vipCard/show', compact('vipCard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vipCard  $vipCard
     * @return \Illuminate\Http\Response
     */
    public function edit(vipCard $vipCard)
    {
      $userTypes = userType::orderBy('id')->get();
      return view('vipCard/edit',compact('vipCard'))->with('userTypes', $userTypes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vipCard  $vipCard
     * @return \Illuminate\Http\Response
     */
    public function update(VipCardRequest $request, vipCard $vipCard)
    {
      if (!$request->is_available) {
        $request->merge(['is_available' => false]);
      }


      $vipCard->update($request->all());


      if ($request->hasFile('image')) {
        
        $image = $request->file('image');
        $validator = Validator::make($request->all(), $vipCard->rules, $vipCard->messages);

        if ($validator->fails()) {
          return redirect()->route('userTypes.edit', $vipCard->id)->withErrors($validator)->withInput();
        }

        elseif ($image->isValid()) {
          Storage::delete($vipCard->image);
          $vipCard->image = $image->store('public/images/vipCard');
          $vipCard->save();
        }

      }

      return redirect()->route('userTypes.index')->with('success','Edit is success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vipCard  $vipCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(vipCard $vipCard)
    {
      if ($vipCard->image != NULL)
      {
        Storage::delete($vipCard->image);
      }

      $vipCard->delete();
      return "ok";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vipCard  $vipCard
     * @return \Illuminate\Http\Response
     */
    public function discardPicture(vipCard $vipCard)
    {
      if ($vipCard->image != NULL)
      {
        Storage::delete($vipCard->image);
      }

      $vipCard->image = NULL;
      $vipCard->save();
      return "ok";
    }
}
