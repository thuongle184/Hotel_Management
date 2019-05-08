<!DOCTYPE html>
<html>
<head>
	<title>BOOKING PURPOSE</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	<marquee direction="left">LIST</marquee>
	<div>
		@foreach($booking_purpose as $value)
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p>{!! $value["id"] !!}</p>
				<p>{!! $value["label"] !!}</p>
			</div>
		</div>
		@endforeach
		<br>
		<div style="margin-left: 450px;">
			<button type="button" class="btn btn-danger"><a href=""><i class="fa fa-plus-circle"></i>&nbsp;Thêm</a></button>
			<button type="button" class="btn btn-danger"><a href=""><i class="fa fa-pencil"></i>&nbsp;Sửa</a></button>
		</div>                       	
	</div>
</body>
</html>