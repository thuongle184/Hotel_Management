@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.showHeader',
    ['title' => $booking["label"]]
  )

@endsection


@section('content')

  @include(
    'booking/_form',

    [
      'errors'              =>  $errors,
      'action'              =>  URL::action('BookingController@store'),
      'booking'             =>  $booking,
      'users'               =>  $users,
      'bookingTypes'        =>  $bookingTypes,
      'room'                =>  $room,
      'rooms'               =>  $rooms,
      'bookingPurposes'     =>  $bookingPurposes      
    ]
  )

@endsection