<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Gestion des résérvations</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link href='https://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{!! asset('css/style.css') !!}" >
	<link rel="stylesheet" href="{!! asset('css/custom-nav.css') !!}" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
@include('templates.partials.navigation')	
	<div class="container" style="margin-top:200px">

		@yield('content')

	</div>
@include('templates.partials.footer')	
</body>
</html>