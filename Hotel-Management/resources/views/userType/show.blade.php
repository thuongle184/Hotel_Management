 
@extends('admin.layouts.masterAdmin')

@section('content')
<div class="wrapper">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>Show detail </h1>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <label>ID</label>
                    </div>
                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                        <p class="form-control-static">{{$userType["label"]}}</p>
                    </div>
                </div>
            </div>
            <p><a href="select.php" class="btn btn-primary">Back</a></p>
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