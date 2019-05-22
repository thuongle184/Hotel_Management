@extends('_layouts.app')

@section('header')

  <h2>
   <em>Edit {!! $user->title->label !!} {!! $user["first_name"] !!} {!! $user["last_name"] !!} {!! $user["middle_name"] !!}</em>
</h2>

@endsection


@section('content')
  @include(
    'user/_form',

    [
      'errors'              =>  $errors,
      'action'              =>  URL::action('UserController@update', $user->id),
      'user'                =>  $user,
      'userTypes'           =>  $userTypes,
      'titles'              =>  $titles,
      'countries'           =>  $countries,
      'identificationTypes' =>  $identificationTypes
    ]
  )
@endsection