@extends('admin.layouts.masterAdmin')

@section('content')
<div id="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="bang">
                    <div class="hoc">
                    </br>
                    <h2> List of user type</h2> 
                     </br></br>
                </div>
                
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                            <tr>
                                <th>Id</th>
                                <th>User type's name</th>
                                <th >Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user_type as $value)
                            <tr>
                                <td> {!! $value["id"] !!} </td>
                                <td>{!! $value["label"] !!}</td>
                                <td>    
                                    <a href="{!! url('backend/addUserType') !!}"><i class="fa fa-plus-circle"></i>&nbsp;Thêm</a>&nbsp;&nbsp; <!-- Goi dia chi trong route -->
                                    <a href="{!! url('backend/editUserType',$value["id"]) !!}"><i class="fa fa-pencil"></i>&nbsp;Sửa</a>&nbsp;&nbsp;
                                    <a href="{!! url('backend/deleteUsertype',$value["id"]) !!}"><i class="fa fa-trash"></i>&nbsp;Xóa</a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    
                </table>
            </div><!-- /.bang -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container -->
</div>
@endsection
<div id="morris-area-chart" style="display: none;"></div>
<div id="morris-bar-chart" style="display: none;"></div>
<div id="morris-donut-chart" style="display: none;"></div>