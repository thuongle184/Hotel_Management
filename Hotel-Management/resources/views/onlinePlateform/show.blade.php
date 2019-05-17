@extends('_layouts.app')

@section('content')
<div id="page-wrapper">

    <div class="container">

      <center>
        <h1 style="margin-top: 60px; color: #33fcb8;">
          Show Online Plateform
      </h1>
  </center>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>

      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <h4>Online Plateform id: </h4> 
      </div>

     <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
          <h4 style="color: black;">{{$onlinePlateform["id"]}}</h4>
     </div>
    </div>

    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>

      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <h4>Online Plateform name: </h4> 
      </div>

     <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
          <h4 style="color: black;">{{$onlinePlateform["label"]}}</h4>
     </div>
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