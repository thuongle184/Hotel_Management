@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Add a new dish category"]
  )

@endsection


@section('content')

  @include(
    'dishType/_form',
    ['errors' => $errors, 'action' => URL::action('DishTypeController@store'), 'dishType' => $dishType]
  )

@endsection