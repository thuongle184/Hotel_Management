<?php

namespace App\Http\Controllers;

use App\User;
use App\UserType;
use App\Title;
use App\Country;
use App\Company;
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
          return view('user/index', compact('userTypes'));
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
        $countries = Country::orderBy('label')->get();
        $companies = Company::orderBy('label')->get();
        $identificationTypes = IdentificationType::orderBy('id')->get();

        return view(
          'user/create',
          compact('user', 'userTypes', 'titles', 'countries', 'companies', 'identificationTypes')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User($request->all());
        $user->save();
        return redirect()->route('users.index')->with('success','Add success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user/show', compact('user'));
        return redirect()->route('users.index')->with('success','Add success!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $userTypes = UserType::orderBy('id')->get();
        $titles = Title::orderBy('id')->get();
        $countries = Country::orderBy('label')->get();
        $companies = Company::orderBy('label')->get();
        $identificationTypes = IdentificationType::orderBy('id')->get();

        return view(
          'user/edit',
          compact('user', 'userTypes', 'titles', 'countries', 'companies', 'identificationTypes')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
      $user->update($request->all());
      return redirect()->route('users.index')->with('success','Edit is success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return "ok";
    }
}
