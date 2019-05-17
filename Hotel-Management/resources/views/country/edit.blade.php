@extends('_layouts.app')


@section('content')

  <div id="page-wrapper">

    <div class="container">
    
      <center>
        <h1 style="margin-top: 60px; color: #33fcb8;">
          Update country
        </h1>
      </center>


      <!-- Display error -->
      @if($errors->any())
        <div class="alert alert-danger">
          @foreach ($errors->all() as $error)
            <div>{!! $error !!}</div>
          @endforeach
        </div>
      @endif
  

      <form
        action="{!! URL::action('CountryController@update', $country->id) !!}"
        method="post"
        enctype="multipart/form-data"
      >
        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
        <input type="hidden" name="_method" value="PATCH" />
        
        <div class="row">
          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
          
          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <h4>Country name:</h4>
          </div>
          
          <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
            <input
              id="cach"
              type="text"
              class="form-control"
              name="label"
              value="{!! old ('label',isset($country)?$country['label']:NULL) !!}"
            >
          </div>
        </div>
  

        <!-- button Save -->
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-success" style="margin-left: 15px">Save</button>
          </div>
        </div>

      </form>

    </div>
    <!-- /.container -->

  </div>

@endsection


<div id="morris-area-chart" style="display: none;"></div>
<div id="morris-bar-chart" style="display: none;"></div>
<div id="morris-donut-chart" style="display: none;"></div>

<style type="text/css">
    #cach{
        margin-top: 25px;
    }
    .row h4{
        color: red;
        margin-top: 35px;
    }
</style>