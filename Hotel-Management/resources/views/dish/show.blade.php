@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => $dish["name"]]
  )

@endsection


@section('content')

  <div class="d-none my-margin-top-40 my-margin-bottom-19" id="my-dish-discard-picture-status"></div>

  <div class="my-margin-top-40 my-frame">
    <div class="my-padding-bottom-12">
      Id: {!! $dish["id"] !!}
    </div>
    
    <div class="my-padding-bottom-12">
      Dish category: {!! $dish->dishType->label !!}
    </div>
    
    @if ($dish->description && strlen($dish->description))    
      <div class="my-padding-bottom-12">
        <p class="text-justify">
          <em>{!! str_replace("\n","<br>", $dish->description) !!}</em>
        </p>
      </div>
    @endif

    <div class="my-padding-bottom-12">
      @if ($dish->price)    
        <b>VNĐ {!! $dish->price !!}</b>
      
      @else
        <i>Ask us for the price</i>
      
      @endif
    </div>

    @isset($dish['image'])    
      <div class="my-padding-bottom-12 my-dish-image">
        <img src="{!! Storage::url($dish->image) !!}">
      </div>
    @endisset
    
    <div class="d-flex flex-wrap">

      <div class="my-padding-right-8 my-padding-bottom-8">
        <a href="{!! route('dishes.index') !!}" class="btn btn-sm btn-outline-dark">
          <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
          <span>Back to list of dishes</span>
        </a>
      </div>
      
      <div class="{!! isset($dish['image']) ? 'my-padding-right-8 ' : '' !!}my-padding-bottom-8">
        <a href="{!! route('dishes.edit', $dish["id"]) !!}" class="btn btn-sm btn-outline-primary">
          <i class="far fa-edit my-margin-right-12"></i>
          <span>Edit</span>
        </a>
      </div>

      @isset($dish['image'])    
        <div class="my-padding-bottom-8">
          <button
            class="btn btn-sm btn-danger my-dish-discard-picture"
            data-token="{!! csrf_token() !!}"
            data-url="{!! route('dishes.discardPicture', $dish['id']) !!}"
          >
            <i class="far fa-trash-alt"></i>
            <i class="far fa-image my-margin-right-12"></i>
            <span>Discard picture</span>
          </button>
        </div>
      @endisset

    </div>
  </div>

@endsection