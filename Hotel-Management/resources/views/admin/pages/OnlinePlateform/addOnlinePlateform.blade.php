<!DOCTYPE html>
<html>
<head>
    <title>ADD ONLINE PLATEFORM</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="{{route('postOnlinePlateform')}}" method="POST" enctype="multipart/form-data" align="center">
        <legend> &hearts; ADD ONLINE PLATEFORM &hearts;</legend>
        
            <div class="form-group" align="center">
                {{csrf_field()}}
                <label for="">Label: </label>
                <input type="text" class="form-control" name="txtlabel" style="width: 200px;" >
            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>