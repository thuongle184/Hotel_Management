@extends('_layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="color: #7a09ff;" class="page-header">Add User Type</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        @if($errors->any())
        <div class="alert alert-danger">

            @foreach ($errors->all() as $error)
        {!! $error !!} </br>
        @endforeach

    </div>
    @endif
    <form   action="{!! url('/onlinePlateforms') !!}" enctype="multipart/form-data" method="POST" role="form" class="form-horizontal registration-form" >
        {{ csrf_field() }}
        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />


        <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <h4>Online Plateform name:</h4>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
             <input  id="cach" value="{{old('label')}}" type="text" class="form-control" name="label" placeholder="Enter user type name">
         </div>
     </div>
     <center>
        <button type="submit" class="btn btn-primary">OK</button>
        <button type="Reset" class="btn btn-danger">Reset</button>
    </center>
</form>

</div>

</div>

</div>

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