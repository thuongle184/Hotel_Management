<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>EDIT DISH TYPE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 class="page-header"> DISH TYPE <small>&hearts; Edit &hearts;</small> </h2>
        <form method="post" action="{{URL::action('DishTypeController@postEditDishType',$dish_type->id)}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="row">
                <div class="col-md-6"></div>
                <div class="form-group col-md-4">
                    <label for="name">Label:</label>
                    <input type="text" class="form-control" name="txtlabel" value="{!! old ('txtlabel',isset($dish_type)?$dish_type['label']:NULL) !!}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" style="margin-left: 15px">Save</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>