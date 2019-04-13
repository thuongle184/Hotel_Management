<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laravel Project </title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script language="javascript"></script> 
	<base href="{{asset('')}}"></base>
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.0.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.toggle').click(function(){
				$('ul').toggleClass('active');
			})
		})
	</script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<style type="text/css">
		@keyframes slide {
			0%{
				background-image: url(public/images/Slides/logo1.jpg);
			}
			20%{
				background-image: url(public/images/Slides/logo1.jpg);

			}
			20.01%{
				background-image: url(public/images/Slides/logo2.jpg);
			}
			40%{
				background-image: url(public/images/Slides/logo2.jpg);

			}
			40.01%{
				background-image: url(public/images/Slides/logo3.jpg);
			}
			60%{
				background-image: url(public/images/Slides/logo3.jpg);

			}
			60.01%{
				background-image: url(public/images/Slides/logo4.jpg);
			}
			80%{
				background-image: url(public/images/Slides/logo4.jpg);

			}
			80.01%{
				background-image: url(public/images/Slides/logo5.jpg);
			}
			100%{
				background-image: url(public/images/Slides/logo5.jpg);

			}


		}

	</style>


	<link rel="stylesheet" href="public/css/style1.css">
	<!-- <link rel="stylesheet" href="public/source/assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="style" href="public/source/assets/dest/css/style.css">
	<link rel="stylesheet" href="public/source/assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="public/source/assets/dest/css/huong-style.css"> -->
</head>
<body>
	@include('layout.header')
	<div class="rev-slider">
		@yield('noidung')
	</div>
	@include('layout.footer')
	@include('layout.script')
</body>
</html>
