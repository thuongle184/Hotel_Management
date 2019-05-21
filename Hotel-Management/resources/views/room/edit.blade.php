@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Edit room {$room['number']}"]
  )

@endsection


@section('content')

  @include(
    'room/_form',

    [
      'errors'      =>  $errors,
      'action'      =>  URL::action('RoomController@update', $room->id),
      'room'        =>  $room,
      'roomSizes'   =>  $roomSizes
    ]
  )

@endsection