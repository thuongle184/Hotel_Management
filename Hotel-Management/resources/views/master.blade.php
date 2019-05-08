<!doctype html>
<html lang="en">
<head>
    <base href="{{asset('')}}">

    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>The Palatin - Hotel &amp; Resort Template</title>

    <!-- Favicon -->
    <link rel="icon" href="public/thepalatin/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="public/thepalatin/style.css">

</head>
<body>
	@include('header')
	@yield('content')	
	@include('footer')
	@include('script')
</body>
</html>
