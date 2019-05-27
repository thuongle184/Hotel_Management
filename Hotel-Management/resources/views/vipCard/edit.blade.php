@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Edit {$vipCard['name']}"]
  )

@endsection


@section('content')

  @include(
    'vipCard/_form',

    [
      'errors'      =>  $errors,
      'action'      =>  URL::action('VipCardController@update', $vipCard->id),
      'vipCard'     =>  $vipCard,
      'users'       =>  $users
    ]
  )

@endsection