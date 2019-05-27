@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.indexHeader',
    ['title' => "Dishes", 'route' => route('dishes.create'), 'buttonLabel' => "Add a dish"]
  )

@endsection


@section('content')

  @foreach($dishTypes as $dishType)

    @if (count($dishType->dishes) > 0)

      <div class="my-dish-type">

        <h4 class="my-margin-bottom-19 my-margin-top-40 my-border-bottom">
          <strong>
            <em>{!! $dishType->label !!}</em>
          </strong>
        </h4>


        <div class="row">
        
          @foreach($dishType->dishes as $dish)

            <div class="col-md-6 col-lg-4 my-padding-bottom-19 my-filter-object my-dish">
              <div class="my-frame">
                <div class="my-padding-bottom-12 my-filter-target">
                  {!! $dish["name"] !!}
                </div>
                
                <div class="d-flex flex-wrap">

                  <div class="my-padding-right-8 my-padding-bottom-8">
                    <a href="{!! route('dishes.show', $dish["id"]) !!}" class="btn btn-sm btn-outline-dark">
                      <i class="fas fa-eye my-margin-right-12"></i>
                      <span>Detail</span>
                    </a>
                  </div>
                  
                  @if (Auth::check() && Auth::user()->hasAdminRights())
                    <div class="my-padding-right-8 my-padding-bottom-8">
                      <a href="{!! route('dishes.edit', $dish["id"]) !!}" class="btn btn-sm btn-outline-primary">
                        <i class="far fa-edit my-margin-right-12"></i>
                        <span>Edit</span>
                      </a>
                    </div>

                    <div class="my-padding-bottom-8">
                      <button
                        class="btn btn-sm btn-danger my-dish-delete"
                        data-token="{!! csrf_token() !!}"
                        data-url="{!! route('dishes.destroy', $dish['id']) !!}"
                      >
                        <i class="far fa-trash-alt my-margin-right-12"></i>
                        <span>Delete</span>
                      </button>
                    </div>
                  @endif

                </div>
              </div>
            </div>

          @endforeach

        </div>

      </div>

    @endif

  @endforeach

@endsection