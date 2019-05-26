@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => "Add a new user"]
  )

@endsection


@section('content')

  @include(
    'user/_form',

    [
      'errors'              =>  $errors,
      'action'              =>  URL::action('UserController@store'),
      'user'                =>  $user,
      'userTypes'           =>  $userTypes,
      'titles'              =>  $titles,
      'countries'           =>  $countries,
      'companies'           =>  $companies,
      'userCompanyIds'      =>  $userCompanyIds,
      'identificationTypes' =>  $identificationTypes
    ]
  )

@endsection