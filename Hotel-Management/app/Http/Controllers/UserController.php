<?php

namespace App\Http\Controllers;

use App\User;
use App\UserType;
use App\Title;
use App\Country;
use App\IdentificationType;
use App\Http\Requests\UserRequest;
use Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userTypes = UserType::with(['users' => function ($user) { $user->orderBy('first_name'); }])
          ->orderBy('id')
          ->get();

          $titles = Title::with(['titles' => function ($title) { $title->orderBy('first_name'); }])
          ->orderBy('id')
          ->get();

          $countries = Country::with(['countries' => function ($country) { $country->orderBy('first_name'); }])
          ->orderBy('id')
          ->get();

          $identificationTypes = IdentificationType::with(['identificationTypes' => function ($identificationType) { $identificationType->orderBy('first_name'); }])
          ->orderBy('id')
          ->get();

        return view('user/index', compact('userTypes','titles','countries','identificationTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User;
        $userTypes = UserType::orderBy('id')->get();
        $titles = Title::orderBy('id')->get();
        $countries = Country::orderBy('id')->get();
        $identificationTypes = IdentificationType::orderBy('id')->get();
        return view('user/create', compact('user','userTypes','titles','countries','identificationTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
