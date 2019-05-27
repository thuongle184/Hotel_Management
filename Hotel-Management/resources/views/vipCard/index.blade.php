@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.indexHeader',
    ['title' => "Vip Card", 'route' => route('vipCards.create'), 'buttonLabel' => "Add a Vip Card"]
  )

@endsection


@section('content')

  @foreach($users as $user)

    @if (count($users->vipCard) > 0)

      <div class="my-vipCard-type">

        <h4 class="my-margin-bottom-19 my-margin-top-40 my-border-bottom">
          <strong>
            <em>{!! $vipCards->user_id !!}</em>
          </strong>
        </h4>


        <div class="row">
        
          @foreach($vipCards->vipCards as $vipCard)

            <div class="col-md-6 col-lg-4 my-padding-bottom-19 my-filter-object my-vipCard">
              <div class="my-frame">
                <div class="my-padding-bottom-12 my-filter-target">
                  {!! $vipCard["label"] !!}
                </div>
                
                <div class="d-flex flex-wrap">

                  <div class="my-padding-right-8 my-padding-bottom-8">
                    <a href="{!! route('vipCards.show', $vipCard["id"]) !!}" class="btn btn-sm btn-outline-dark">
                      <i class="fas fa-eye my-margin-right-12"></i>
                      <span>Detail</span>
                    </a>
                  </div>
                  
                  <div class="my-padding-right-8 my-padding-bottom-8">
                    <a href="{!! route('vipCardes.edit', $vipCard["id"]) !!}" class="btn btn-sm btn-outline-primary">
                      <i class="far fa-edit my-margin-right-12"></i>
                      <span>Edit</span>
                    </a>
                  </div>

                  <div class="my-padding-bottom-8">
                    <button
                      class="btn btn-sm btn-danger my-vipCard-delete"
                      data-token="{!! csrf_token() !!}"
                      data-url="{!! route('vipCardes.destroy', $vipCard['id']) !!}"
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

      </div>

    @endif

  @endforeach

@endsection