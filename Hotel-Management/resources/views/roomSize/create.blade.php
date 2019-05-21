@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Add a new roomSize"]
  )

@endsection


@section('content')

  @include(
    'roomSize/_form',
    ['errors' => $errors, 'action' => URL::action('RoomSizeController@store'), 'roomSize' => $roomSize]
  )

@endsection