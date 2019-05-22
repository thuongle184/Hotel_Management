@extends('_layouts.app')

@section('header')
<h2>
   <em> {!! $user->title->label !!} {!! $user["first_name"] !!} {!! $user["last_name"] !!} {!! $user["middle_name"] !!}</em>
</h2>



@endsection


@section('content')

<div class="d-none my-margin-top-40 my-margin-bottom-19" id="my-user-discard-picture-status"></div>

<div class="my-margin-top-40 my-frame">
  <div class="my-padding-bottom-12">
    Id: {!! $user["id"] !!}
  </div>

  <div class="my-padding-bottom-12">
    User type: {!! $user->userType->label !!}
  </div>
  
  <div class="my-padding-bottom-12">
    User name: {!! $user["user_name"] !!}
  </div>
  <div class="my-padding-bottom-12">
    Day of Birth: {!! $user["DOB"] !!}
  </div> 
  <div class="my-padding-bottom-12">
    Password: {!! $user["password"] !!}
  </div>
  <div class="my-padding-bottom-12">
    Address: {!! $user["address"] !!}
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
    Identification:  {!! $user->identificationType->label !!} 
  </div>
  <div class="my-padding-bottom-12">
    Information: {!! $user["information"] !!}
  </div>
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