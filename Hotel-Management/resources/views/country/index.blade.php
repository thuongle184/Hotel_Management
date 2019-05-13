@extends('admin.layouts.masterAdmin')

@section('content')
<div id="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="bang">
                    <div class="hoc">
                    </br>
                    <h2> List of country</h2> 
                </br></br>
            </div>
            <input class="form-control" id="myInput" type="text" placeholder="Search.."></br>
            <table  class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th >Tools</th>
                    </tr>
                </thead>

                <tbody id="myTable">
                  @foreach($country as $value)
                    <tr>
                      <td>{!! $value["id"] !!}</td>
                      <td>{!! $value["label"] !!}</td>
                      
                      <td>    
                        <a href="{!! route('countries.show', $value["id"]) !!}">
                          <i class="fa fa-plus-circle"></i>&nbsp;Detail
                        </a>&nbsp;&nbsp; <!-- Goi dia chi trong route -->
                        
                        <a href="{!! route('countries.edit', $value["id"]) !!}">
                          <i class="fa fa-pencil"></i>&nbsp;Edit
                        </a>&nbsp;&nbsp;
                        
                        <form
                          action="{!! URL::action('CountryController@destroy', $value["id"]) !!}"
                          method="POST"
                        >
                          @method('DELETE')
                          @csrf

                          <button type="submit" class="btn btn-xs btn-danger">
                            <i class="fa fa-trash"></i>&nbsp;Delete
                          </button>
                        </form>
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
<script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>
@endsection
<div id="morris-area-chart" style="display: none;"></div>
<div id="morris-bar-chart" style="display: none;"></div>
<div id="morris-donut-chart" style="display: none;"></div>