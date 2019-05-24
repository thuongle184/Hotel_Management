@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.header',
    ['title' => $company["label"]]
  )

@endsection


@section('content')

  <div class="d-none my-margin-top-40 my-margin-bottom-19" id="my-room-discard-picture-status"></div>

  <div class="my-margin-top-40 my-frame">
    <div class="my-padding-bottom-12">
      Id: {!! $company["id"] !!}
    </div>

    <div class="d-flex flex-wrap">

      <div class="my-padding-right-8 my-padding-bottom-8">
        <a href="{!! route('companies.index') !!}" class="btn btn-sm btn-outline-dark">
          <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
          <span>Back to list of companies</span>
        </a>
      </div>
      
      <div class="my-padding-bottom-8">
        <a href="{!! route('companies.edit', $company["id"]) !!}" class="btn btn-sm btn-outline-primary">
          <i class="far fa-edit my-margin-right-12"></i>
          <span>Edit</span>
        </a>
      </div>

    </div>
  </div>

@endsection