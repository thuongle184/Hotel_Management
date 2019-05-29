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

            <div class="col-xl-6 my-padding-bottom-19 my-filter-object my-dish">
              <div class="my-frame d-flex flex-wrap flex-fill align-items-start justify-content-between">

                <div class="my-padding-bottom-8 my-padding-right-19">
                  <div class="my-padding-bottom-12 my-filter-target">
                    <strong>{!! $dish["name"] !!}</strong>
                  </div>
    
                  @if ($dish->description && strlen($dish->description))    
                    <div class="my-padding-bottom-12">
                      <p class="text-justify">
                        <em>{!! str_replace("\n","<br>", $dish->description) !!}</em>
                      </p>
                    </div>
                  @endif

                  <div class="my-padding-bottom-12">
                    @if (!$dish->is_available)    
                      <i class="text-danger">DISH IS NOT AVAILABLE</i>

                    @elseif ($dish->price)    
                      VNĐ {!! $dish->price !!}
                    
                    @else
                      <i class="text-info">Ask us for the price</i>
                    
                    @endif
                  </div>
                  
                  
                  @if (Auth::check() && Auth::user()->hasAdminRights())
                    <div class="d-flex flex-wrap">

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
                  
                    </div>
                  @endif

                </div>


                @isset($dish['image'])    
                  
                  <div class="my-padding-bottom-8 my-dish-image">
                    <img src="{!! Storage::url($dish->image) !!}">

                    @if (Auth::check() && Auth::user()->hasAdminRights())
                      <div class="my-padding-bottom-8 text-center">
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
                    @endif

                  </div>
                
                @endisset

              </div>
            </div>

          @endforeach

        </div>

      </div>

    @endif

  @endforeach

@endsection