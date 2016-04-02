@extends('templates.default')

@section('content')
    <div class="container">
         <h2 class="text-center">Gestion de réservation des salles et matériels</h2>
         <hr>
         <br>


         {!! Form::open(['action' => 'UserController@login']) !!}
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
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                     <div class="form-group">
                         {!! Form::label('email','Email :') !!} 
                         {!! Form::text('email',null,['class' => "form-control"]) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                     <div class="form-group">
                         {!! Form::label('password','Mot de passe :') !!} 
                         {!! Form::password('password',['class' => "form-control"]) !!}
                    </div>
                </div>
            </div>
           <div class="row">
                <div class="col-md-8 col-md-offset-2">
                     <div class="form-group">
                         {!! Form::submit('Connexion',['class' =>'btn btn-primary form-control']) !!}
                    </div>
                </div>
            </div>
         {!! Form::close() !!}
    </div>
@endsection

<script type="text/javascript">
   window.setTimeout(function() {
    $(".alert-danger").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 3000);
</script>