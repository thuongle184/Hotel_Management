@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.indexHeader',
    ['title' => "VIP Cards", 'route' => route('vipCards.create'), 'buttonLabel' => "Add a VIP Card"]
  )

@endsection


@section('content')

  <div class="row">
  
    @foreach($vipCards as $vipCard)

      <div class="col-md-6 col-lg-4 my-padding-bottom-19 my-filter-object my-vip-card">
        <div class="my-frame">
          <div class="my-padding-bottom-12">
            {!! $vipCard["number"] !!}
          </div>
          
          <div class="my-padding-bottom-12">
            {!! $vipCard["point"] !!} points
          </div>
          
          <div class="my-padding-bottom-12">
            <div class="d-flex align-items-center text-info">
              <div class="my-margin-right-19 my-vip-card-user-icon">
                <i class="fas fa-user"></i>
              </div>

              <div class="my-filter-target my-user-company-label">
                <i>
                  {!! $vipCard->user->title->label !!}
                  {!! $vipCard->user->first_name !!}
                  {!! $vipCard->user->middle_name !!}
                  {!! $vipCard->user->last_name !!}
                </i>
              </div>
            </div>
          </div>
          
          <div class="d-flex flex-wrap">

            <div class="my-padding-right-8 my-padding-bottom-8">
              <a href="{!! route('vipCards.show', $vipCard["id"]) !!}" class="btn btn-sm btn-outline-dark">
                <i class="fas fa-eye my-margin-right-12"></i>
                <span>Detail</span>
              </a>
            </div>
            
            <div class="my-padding-right-8 my-padding-bottom-8">
              <a href="{!! route('vipCards.edit', $vipCard["id"]) !!}" class="btn btn-sm btn-outline-primary">
                <i class="far fa-edit my-margin-right-12"></i>
                <span>Edit</span>
              </a>
            </div>

            <div class="my-padding-bottom-8">
              <button
                class="btn btn-sm btn-danger my-vipCard-delete"
                data-token="{!! csrf_token() !!}"
                data-url="{!! route('vipCards.destroy', $vipCard['id']) !!}"
              >
                <i class="far fa-trash-alt my-margin-right-12"></i>
                <span>Delete</span>
              </button>
            </div>

          </div>
        </div>
      </div>

    @endforeach

  </div>

@endsection