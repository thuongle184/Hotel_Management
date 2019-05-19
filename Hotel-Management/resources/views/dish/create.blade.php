@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Add a new dish"]
  )

@endsection


@section('content')

  @include(
    'dish/_form',

    [
      'errors'      =>  $errors,
      'action'      =>  URL::action('DishController@store'),
      'dish'        =>  $dish,
      'dishTypes'   =>  $dishTypes
    ]
  )

@endsection