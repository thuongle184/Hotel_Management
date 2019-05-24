@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Add a company"]
  )

@endsection


@section('content')

  @include(
    'company/_form',

    [
      'errors'      =>  $errors,
      'action'      =>  URL::action('CompanyController@store'),
      'company'        =>  $company,
      'users'   =>  $users
    ]
  )

@endsection