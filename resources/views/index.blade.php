<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ENSEM</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link href='https://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{!! asset('css/style.css') !!}" >
	<link rel="stylesheet" href="{!! asset('css/custom-nav.css') !!}" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style>
		.title{
			font-size: 50px;
			color: #52224f;
		}
		.btn.outline {
  		  background: none;
    	  padding: 12px 22px;
    	  font-size: 18px;
		}

		.btn-primary.outline {
		    border: 3px solid #c51c7b;
		    color: #c51c7b;
		}
		.btn-primary.outline:hover, .btn-primary.outline:focus, .btn-primary.outline:active, .btn-primary.outline.active, .open > .dropdown-toggle.btn-primary {
		    color: #4e1548;
		    border-color: #4e1548;
		}
		.btn-primary.outline:active, .btn-primary.outline.active {
		    border-color: #007299;
		    color: #007299;
		    box-shadow: none;
		}
		.separate{
			margin-left: 150px;
		}
	</style>
</head>
<body>

	<div class="container" style="margin-top:250px;">
			<center> <img  src="{!! asset('img/ensem.png') !!}" class="img-responsive" style="height:150px;margin-left:30px;" alt="ENSEM"></center>
			<center class='title hidden-xs'>Ecole Nationale Supérieure <br>d'Électricté et de Mécanique</center>
			<br>
			<br><br>
			<center>
				<div class="row hidden-xs">
						<a  href="{{ Auth::check() ? route('ensHome') : route('getLogin') }}" class="btn btn-primary outline"><i class="fa fa-male"></i> Espace Enseignant</a>
						<span class="separate"></span>
						<a  href="{{ route('etuHome') }}" class="btn btn-primary outline"><i class="fa fa-graduation-cap"></i> Espace Etudiant</a>
				</div>
				<br><br><br><br>
				<div class="row visible-xs">
					<div class="col-md-12">
							<a  href="{{ Auth::check() ? route('ensHome') : route('getLogin') }}" class="btn btn-primary outline"><i class="fa fa-male"></i> Espace Enseignant</a>
					</div><br><br>
					<div class="col-md-12">
							<a  href="{{ route('etuHome') }}" class="btn btn-primary outline"><i class="fa fa-graduation-cap"></i> Espace Etudiant</a>
					</div>
				</div>
			</center>
	</div>
	@include('templates.partials.footer')	
</body>
</html>