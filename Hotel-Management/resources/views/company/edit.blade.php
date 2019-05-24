@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Edit company {$company['name']}"]
  )

@endsection


@section('content')

  @include(
    'company/_form',

    [
      'errors'      =>  $errors,
      'action'      =>  URL::action('CompanyController@update', $company->id),
      'company'        =>  $company,
      'users'   =>  $users
    ]
  )

@endsection