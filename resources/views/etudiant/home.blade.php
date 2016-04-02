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
	<style type="text/css">
		.title{
			font-size: 50px;
			color: #52224f;
		}
	</style>
</head>
<body>
	<div class="container" style="margin-top:250px;">
		 <h2 class="text-center">Espace Etudiant</h2>
         <hr>
         <br>

         <ul class="nav nav-tabs">
		  <li class="active"><a href="#ps" data-toggle="tab">Planning salles</a></li>
		  <li><a href="#pm" data-toggle="tab">Planning matériels</a></li>
		</ul>

	<div class="tab-content">
		<div class="tab-pane active" id="ps">
			<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Enseignant(e)</th>
					<th>Salle </th>
					<th>Date</th>
					<th>Séance</th>
				</tr>
			</thead>
			<tbody>
			@foreach($resSalles as $r)
				<tr>
					<td>{{ App\User::findOrFail($r->user_id)->getNomComplet() }}</td>
					<td>{{ App\Salle::findOrFail($r->salle_id)->libelle }}</td>
					<td>{{ $r->dateReser }}</td>
					<td>{{ $r->dbtReser}} -> {{ $r->finReser }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
		<div class="text-center">
			{!! str_replace('/?', '?', $resSalles->render()) !!}
		</div>
		</div>
		<div class="tab-pane" id="pm">
			<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Enseignant(e)</th>
					<th>Matériel </th>
					<th>Date</th>
					<th>Séance</th>
				</tr>
			</thead>
			<tbody>
			@foreach($resMateriels as $r)
				<tr>
					<td>{{ App\User::findOrFail($r->user_id)->getNomComplet() }}</td>
					<td>{{ App\Materiel::findOrFail($r->materiel_id)->libelle }}</td>
					<td>{{ $r->dateReser }}</td>
					<td>{{ $r->dbtReser }} -> {{ $r->finReser }}</td>
				</tr>
			@endforeach
	
			</tbody>
		</table>
		<div class="text-center">
			{!! str_replace('/?', '?', $resMateriels->render()) !!}
		</div>
		</div>
	</div>	
	</div>
	@include('templates.partials.footer')	
	</body>
	</html>