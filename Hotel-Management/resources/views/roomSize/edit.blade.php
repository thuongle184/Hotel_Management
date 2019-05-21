@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Edit {$roomSize['label']}"]
  )

@endsection


@section('content')

  @include(
    'roomSize/_form',
    
    [
      'errors' => $errors,
      'action' => URL::action('RoomSizeController@update', $roomSize->id),
      'roomSize' => $roomSize
    ]
  )

@endsection