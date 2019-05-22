@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => "Add a new booking purpose"]
  )

@endsection


@section('content')

  @include(
    'bookingPurpose/_form',
    ['errors' => $errors, 'action' => URL::action('BookingPurposeController@store'), 'bookingPurpose' => $bookingPurpose]
  )

@endsection