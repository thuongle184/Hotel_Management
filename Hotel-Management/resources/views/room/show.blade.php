@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => $room["number"]]
  )

@endsection


@section('content')

  <div class="d-none my-margin-top-40 my-margin-bottom-19" id="my-room-discard-picture-status"></div>

  <div class="my-margin-top-40 my-frame">
    <div class="my-padding-bottom-12">
      Id: {!! $room["id"] !!}
    </div>
    
    <div class="my-padding-bottom-12">
      Room size: {!! strtolower($room->roomSize->label) !!}
    </div>

    <div class="my-padding-bottom-12">
      Room-N°: {!! $room["number"] !!}
    </div>

    <div class="my-padding-bottom-12">
      Smoking is allowed: {!! $room["is_smoking"] ? 'yes' : 'no' !!}
    </div>

    <div class="my-padding-bottom-12">
      @if ($room->price)    
        <b>VNĐ {!! $room->price !!}</b>
      
      @else
        <i>Ask us for the price</i>
      
      @endif
    </div>

    <div class="my-padding-bottom-12">
      Room is available: {!! $room["is_available"] ? 'yes' : 'no' !!}
    </div>

    <div class="my-padding-bottom-12">
      Bed number: {!! $room["beds"] !!}
    </div>
    
    <div class="d-flex flex-wrap">

      <div class="my-padding-right-8 my-padding-bottom-8">
        <a href="{!! route('rooms.index') !!}" class="btn btn-sm btn-outline-dark">
          <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
          <span>Back to list of rooms</span>
        </a>
      </div>
      
      <div class="my-padding-bottom-8">
        <a href="{!! route('rooms.edit', $room["id"]) !!}" class="btn btn-sm btn-outline-primary">
          <i class="far fa-edit my-margin-right-12"></i>
          <span>Edit</span>
        </a>
      </div>

    </div>
  </div>

@endsection