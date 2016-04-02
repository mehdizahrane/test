@extends('templates.default')

@section('content')
	<div class="container">
		 <h2 class="text-center">Espace Enseignant</h2>
         <hr>
         <br>
		@if(Session::has('messageSuc'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Bienvenue!</strong> Vous êtes bien connecté à votre espace de travail.
		</div>
		@endif
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
					<td>{{ $r->dbtReser}} -> {{ $r->finReser }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
		<div class="text-center">
			{!! str_replace('/?', '?', $resSalles->render()) !!}
		</div>
	</div>	
	</div>
@endsection

<script type="text/javascript">
   window.setTimeout(function() {
    $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 3000);
</script>