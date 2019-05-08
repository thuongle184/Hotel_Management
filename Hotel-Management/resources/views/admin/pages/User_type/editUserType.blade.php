@extends('admin.layouts.masterAdmin')

@section('content')
<div id="page-wrapper">
    <div class="container">
        <center><h1  style="    margin-top: 60px;
    color: #33fcb8;">Update User Type</h1></center>
        <!-- Display error -->
        @if($errors->any())
        <div class="alert alert-danger">

            @foreach ($errors->all() as $error)
        {!! $error !!}</br>
        @endforeach

    </div>
    @endif
    <!-- //Display error -->
    <form method="post" action="{{URL::action('UserTypeController@getEditUserType',$user_type->id)}}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
        <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <h4>User type name:</h4>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
             <input  id="cach" type="text" class="form-control" name="label" value="{!! old ('label',isset($user_type)?$user_type['label']:NULL) !!}">
         </div>
     </div>
  
<!-- button add -->
<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group">
        <button type="submit"    class="btn btn-success" style="margin-left: 15px">Save</button>
    </div>
</div>
<!-- /butto add -->
</form>
</div>
</div><!-- /.container -->
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