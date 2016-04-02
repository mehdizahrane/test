@extends('templates.default')

@section('content')
	<div class="container">
		 <h2 class="text-center">Espace Enseignant</h2>
         <hr>
         <br>
            @if(Session::has('rsError'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>{{ Session::get('rsError') }}</strong> Veuillez contacter le responsable pour plus d'informations 
                </div>
            @endif
			    <div class="row">
               		 <div class="col-md-8 col-md-offset-2">
               		   @if(Session::has('messageErr'))
                             <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>Erreur</strong> Vérifier votre e-mail ou votre mot de passe.
                            </div>                      
                        @endif
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
               		 </div>
               	</div>
    
    <ul class="nav nav-tabs">
	  <li class="active"><a href="#ps" data-toggle="tab">Salles</a></li>
	  <li><a href="#pm" data-toggle="tab">Matériels</a></li>
	</ul>

	<div class="tab-content">
		<div class="tab-pane active" id="ps">
		<br>
         {!! Form::open(['action' => 'UserController@Reserver']) !!}
         		<div class="row form-group">
         			<div class="col-md-12">
         				{!! Form::label('salles','Salles :') !!}
         				{!! Form::select('salles',$salles,null,['class' => 'form-control']) !!}
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-md-12">
         				{!! Form::label('date','Date :') !!}
			 			{!! Form::input('date','date',date('Y-m-d'),['class' => 'form-control']) !!}
         			</div>
         		</div><br>
				<div class="row">
         			<div class="col-md-6 ">
         				{!! Form::label('de','De :') !!}
         				{!! Form::input('time','de',time('h-m'),['class' => 'form-control']) !!}
         			</div>
         			<div class="col-md-6 ">
         				{!! Form::label('a','À :') !!}
         				{!! Form::input('time','a',time('h-m'),['class' => 'form-control']) !!}
         			</div>
         		</div><br>
         		<div class="row">
         			<div class="col-md-6 ">
         				{!! Form::submit('Valider',['class' => 'form-control btn btn-primary']) !!}
         			</div>
         			<div class="col-md-6 ">
         				{!! Form::reset('Annuler',['class' => 'form-control btn btn-warning']) !!}
         			</div>
         		</div>
		 {!! Form::close() !!}
		</div>
		<div class="tab-pane" id="pm">
			<br>
         {!! Form::open(['action' => 'UserController@reserverMateriel']) !!}
         		<div class="row form-group">
         			<div class="col-md-12">
         				{!! Form::label('materiels','Materiels :') !!}
         				{!! Form::select('materiels',$materiels,null,['class' => 'form-control']) !!}
         			</div>
         		</div>
         		<div class="row">
         			<div class="col-md-12">
         				{!! Form::label('date','Date :') !!}
			 			{!! Form::input('date','date',date('Y-m-d'),['class' => 'form-control']) !!}
         			</div>
         		</div><br>
				<div class="row">
         			<div class="col-md-6 ">
         				{!! Form::label('de','De :') !!}
         				{!! Form::input('time','de',time('h-m'),['class' => 'form-control']) !!}
         			</div>
         			<div class="col-md-6 ">
         				{!! Form::label('a','À :') !!}
         				{!! Form::input('time','a',time('h-m'),['class' => 'form-control']) !!}
         			</div>
         		</div><br>
         		<div class="row">
         			<div class="col-md-6 ">
         				{!! Form::submit('Valider',['class' => 'form-control btn btn-primary']) !!}
         			</div>
         			<div class="col-md-6 ">
         				{!! Form::reset('Annuler',['class' => 'form-control btn btn-warning']) !!}
         			</div>
         		</div>
		 {!! Form::close() !!}
		</div>
	</div>	
	</div>
		 {!! Form::open() !!}
         {!! Form::close() !!}
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