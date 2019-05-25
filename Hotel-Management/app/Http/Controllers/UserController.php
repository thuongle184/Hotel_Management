<?php

namespace App\Http\Controllers;

use App\User;
use App\UserType;
use App\Title;
use App\Country;
use App\Company;
use App\IdentificationType;
use App\UsersCompany;
use App\Http\Requests\UserRequest;


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
        $identificationTypes = IdentificationType::orderBy('id')->get();
        $countries = Country::orderBy('label')->get();
        $companies = Company::orderBy('label')->get();
        
        $userCompanyIds = $user->companies
            
            ->map(function($company, $key){
                return $company->id;
              })

            ->toArray();


        return view(
          'user/create',
          compact('user', 'userTypes', 'titles', 'countries', 'companies', 'userCompanyIds', 'identificationTypes')
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

      // saving companies linked to the user
      foreach ($request->input('company_id') as $companyId) {
        $usersCompany = new UsersCompany;
        $usersCompany->user_id = $user->id;
        $usersCompany->company_id = $companyId;
        $usersCompany->save();
      }

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
        $identificationTypes = IdentificationType::orderBy('id')->get();
        $countries = Country::orderBy('label')->get();
        $companies = Company::orderBy('label')->get();
        
        $userCompanyIds = $user->companies
            
            ->map(function($company, $key){
                return $company->id;
              })

            ->toArray();


        return view(
          'user/edit',
          compact('user', 'userTypes', 'titles', 'countries', 'companies', 'userCompanyIds', 'identificationTypes')
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
