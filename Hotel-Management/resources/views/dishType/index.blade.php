@extends('_layouts.app')

@section('header')

  @include(
    '_layouts.indexHeader',
    ['title' => "Dish categories", 'route' => route('dishTypes.create'), 'buttonLabel' => "Add a dish category"]
  )

@endsection


@section('content')

  <div class="row">

    @foreach($dishTypes as $dishType)

      <div class="col-md-6 col-lg-4 my-padding-bottom-19 my-filter-object">
        <div class="my-frame">
          <div class="my-padding-bottom-12 my-filter-target">
            {!! $dishType["label"] !!}
          </div>
          
          <div class="d-flex flex-wrap">

            <div class="my-padding-right-8 my-padding-bottom-8">
              <a href="{!! route('dishTypes.show', $dishType["id"]) !!}" class="btn btn-sm btn-outline-dark">
                <i class="fas fa-eye my-margin-right-12"></i>
                <span>Detail</span>
              </a>
            </div>
            
            <div class="my-padding-right-8 my-padding-bottom-8">
              <a href="{!! route('dishTypes.edit', $dishType["id"]) !!}" class="btn btn-sm btn-outline-primary">
                <i class="far fa-edit my-margin-right-12"></i>
                <span>Edit</span>
              </a>
            </div>

            <div class="my-padding-bottom-8">
              <form
                action="{!! URL::action('DishTypeController@destroy', $dishType["id"]) !!}"
                method="POST"
              >
                @method('DELETE')
                @csrf

                <button type="submit" class="btn btn-sm btn-danger">
                  <i class="far fa-trash-alt my-margin-right-12"></i>
                  <span>Delete</span>
                </button>
              </form>
            </div>

          </div>
        </div>
      </div>

    @endforeach

  </div>

@endsection