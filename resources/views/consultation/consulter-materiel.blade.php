@extends('templates.default')

@section('content')
	<div class="container">
		<h2 class="text-center">Planning des réservations</h2>
        <hr>
        <br>
		@if(Session::has('rsSuccess'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>{{ Session::get('rsSuccess') }}!</strong> 
			</div>
        @endif
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
@endsection

<script type="text/javascript">
   window.setTimeout(function() {
    $(".alert-danger").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
    $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 3000);
</script>