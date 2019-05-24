@extends('_layouts.app')

@section('header')

@include(
    '_layouts.header',
    ['title' => $user["title"]["label"].' '. $user["first_name"].' '.$user["last_name"].' '.$user["middle_name"] ]
  )

@endsection


@section('content')

<div class="d-none my-margin-top-40 my-margin-bottom-19" id="my-user-discard-picture-status"></div>

<div class="my-margin-top-40 my-frame">
  <div class="my-padding-bottom-12">
    Id: {!! $user["id"] !!}
  </div>

  <div class="my-padding-bottom-12">
    User type: {!! strtolower($user->userType->label) !!}
  </div>
  
  <div class="my-padding-bottom-12">
    User name: {!! $user["user_name"] !!}
  </div>
  <div class="my-padding-bottom-12">
    Date of birth: {!! $user["date_of_birth"] !!}
  </div> 
  <div class="my-padding-bottom-12">
    Address: {!! str_replace("\n","<br>", $user->address) !!}
  </div>
  <div class="my-padding-bottom-12">
    Email: {!! $user["email"] !!}
  </div>
  <div class="my-padding-bottom-12">
    Phone number: {!! $user["phone"] !!}
  </div>
  <div class="my-padding-bottom-12">
    Country:  {!! $user->country->label !!} 
  </div>
  <div class="my-padding-bottom-12">
    Identification type:  {!! $user->identificationType->label !!} 
  </div>
  <div class="my-padding-bottom-12">
    Identification number:  {!! $user["identification_number"] !!} 
  </div>
  
  @isset($user['information'])    
    <div class="my-padding-bottom-12">
      Information: {!! str_replace("\n","<br>", $user->information) !!}
    </div>
  @endisset
  
  <div class="d-flex flex-wrap">

    <div class="my-padding-right-8 my-padding-bottom-8">
      <a href="{!! route('users.index') !!}" class="btn btn-sm btn-outline-dark">
        <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
        <span>Back to list of users</span>
      </a>
    </div>

    <div class="my-padding-right-8 my-padding-bottom-8">
      <a href="{!! route('users.edit', $user["id"]) !!}" class="btn btn-sm btn-outline-primary">
        <i class="far fa-edit my-margin-right-12"></i>
        <span>Edit</span>
      </a>
    </div>

  </div>
</div>

@endsection