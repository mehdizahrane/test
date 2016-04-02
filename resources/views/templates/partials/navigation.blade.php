<nav class="navbar navbar-custom" role="navigation">
        <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="{!! asset('img/ensem.png') !!}" class="brand" alt=""></a>
                        <span class="slogon hidden-xs">École Nationale Supérieure de l'Électricité et Mécanique</span>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav navbar-right">
                                <!--@if(Auth::check()) -->
                                <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{ Auth::user()->getNomComplet() }} <b class="caret"></b></a><!-- {{Auth::user()->nomEns }}  -->
                                        <ul class="dropdown-menu">
                                                <li><a href="{{ route('ensHome')}}"><i class="fa fa-eye"> Consultation </i></a></li>
                                                <li><a href="{{ route('ensRes') }}"><i class="fa fa-ticket">  Réserver </i></a></li>
                                                @if(Auth::user()->estResponsable ==1)
                                                 <li><a href="{{ route('respEdit') }}"><i class="fa fa-pencil"> Editer </i></a></li>
                                                @endif
                                                <li role="separator" class="divider"></li>
                                                <li><a href="{{ route('deconnexion') }}"><i class="fa fa-power-off"> Déconnexion</i></a></li>
                                        </ul>
                                </li>
                                
                                <!-- @else -->
                                <li><a class="active" href="{{ route('home') }}"><i class="fa fa-home"></i> Accueil</a></li>
                                <li><a href="{{ route('getLogin') }}"><i class="fa fa-sign-in"></i> Connexion</a></li>
                                <!-- @endif -->
                        </ul>
                </div><!-- /.navbar-collapse -->
        </div>
</nav>


