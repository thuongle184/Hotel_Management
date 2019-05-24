@if($errors->any())
  <div class="alert alert-danger">
    @foreach ($errors->all() as $error)
      <div>{!! $error !!}</div>
    @endforeach
  </div>
@endif


<form
  action="{!! $action !!}"
  method="post"
  enctype="multipart/form-data"
  class="my-margin-top-40"
>
  @csrf

  @if($company['id'] != NULL)
    @method('PATCH')
    <input type="hidden" name="id" value="{!! $company['id'] !!}">
  @endif 
  
  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="room_room_size_id">User id:<label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <select name="user_id" class="form-control" id="user_user_id">
        
        @foreach ($users as $user)
          <option
            value="{!! $user['id'] !!}"
            {!!
                old (
                  'user_id',
                  isset($company) && $company['user_id'] == $user['id'] ? 'selected' : NULL )
            !!}
          >
            {!! $user["first_name"] !!} {!! $user["last_name"] !!} {!! $user["middle_name"] !!}
          </option>
        @endforeach

      </select>
    </div>
  </div>

  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="number">Company name:<label>

    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      <input
        id="name"
        type="text"
        class="form-control"
        name="name"
        value="{!! old ('name',isset($company)?$company['name']:NULL) !!}"
      >
    </div>
  </div>

  <!-- button Save -->
  <div class="row">
    <div class="col-md-3 col-lg-4"></div>

    <div class="col-md-9 col-lg-8">
      <a
        href="{!! route('companies.index') !!}"
        class="btn btn-sm btn-outline-dark my-margin-right-8 my-margin-bottom-8"
      >
        <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
        <span>Back to list of companies</span>
      </a>
      <button type="submit" class="btn btn-sm btn-success my-margin-bottom-8">
        <i class="fas fa-check-circle my-margin-right-12"></i>
        <span>Save</span>
      </button>

    </div>
  </div>

</form>