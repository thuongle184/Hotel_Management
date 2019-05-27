@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Add a new vipcard"]
  )

@endsection


@section('content')

  @include(
    'vipcard/_form',

    [
      'errors'      =>  $errors,
      'action'      =>  URL::action('VipCardController@store'),
      'vipCard'        =>  $vipCard,
      'user'   =>  $user
    ]
  )

@endsection