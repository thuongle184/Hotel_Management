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
>
  @csrf

  @if($onlinePlateform['id'] != NULL)
    @method('PATCH')
    <input type="hidden" name="id" value="{!! $onlinePlateform['id'] !!}">
  @endif 
  
  <div class="row my-padding-bottom-19">
    <div class="col-md-3 col-lg-4 my-padding-bottom-8">
      <label for="online_plateform_label">Plateform name:<label>
    </div>
    
    <div class="col-md-9 col-lg-8 my-padding-bottom-8">
      
      <input
        id="online_plateform_label"
        type="text"
        class="form-control"
        name="label"
        value="{!! old ('label',isset($onlinePlateform)?$onlinePlateform['label']:NULL) !!}"
      >
    </div>
  </div>


  <!-- button Save -->
  <div class="row">
    <div class="col-md-3 col-lg-4"></div>

    <div class="col-md-9 col-lg-8">
      <a href="{!! route('onlinePlateforms.index') !!}" class="btn btn-sm btn-outline-dark my-padding-right-8">
        <i class="far fa-arrow-alt-circle-left my-margin-right-12"></i>
        <span>Back to list of online booking plateforms</span>
      </a>

      <button type="submit" class="btn btn-sm btn-success">
        <i class="fas fa-check-circle my-margin-right-12"></i>
        <span>Save</span>
      </button>
    </div>
  </div>

</form>