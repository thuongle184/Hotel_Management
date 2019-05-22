@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Add a new room"]
  )

@endsection


@section('content')

  @include(
    'room/_form',

    [
      'errors'      =>  $errors,
      'action'      =>  URL::action('RoomController@store'),
      'room'        =>  $room,
      'roomSizes'   =>  $roomSizes
    ]
  )

@endsection