<!DOCTYPE html>
<html>
    <head>
        <!-- titol i imatge pestanya -->
        <title>APOSTINGER</title>
        <link rel="icon" href="../public/images/cartes.ico" type="image/ico" sizes="16x16">
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- link css -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>
    
    <body>
        <!------------------- HEADER ---------------------->
        <header>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <img class="cartes" src="../public/images/cartes.png">
                        <a class="apostingertitol"  href="welcome">Apostinger</a>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#header">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>   
                            </button>
                    </div>

                    <div class="collapse navbar-collapse" id="header">
                        <ul class="nav navbar-nav">
                            <li>
                                <button class="btn btn-warning navbar-btn"><span class="glyphicon glyphicon-gift"></span> Aconegueix coins gratis!</button>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            @if (Auth::guest())
                                <li><a href="principal"><span class="glyphicon glyphicon-eye-open"></span> Visita</a></li>
                                <li><a href="admin"><span class="glyphicon glyphicon-user"></span> Contacta</a></li>
                                <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-log-out"></span> Registra't</a></li>
                            @else
                                <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="ranking"><span class="glyphicon glyphicon-star"></span> Ranking</a></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-in"></span> Logout</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div> 
            </div>
        </nav>
    </header>
        
    <!--------- Modal Perfil Usuari -------------->
        
    <!-- Trigger the modal with a button -->

    <!-- Modal -->
    <div class="modal fade" id="usuari" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">El teu perfil</h4>
                </div>
                <!-- Modal body-->
                <div class="modal-body">
                        
                    <!--------- Imatge -------------->
                    <div class="row content">
                        <div class="col-sm-4">
                            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" alt="Generic placeholder image" height="100" width="100" style="margin-left: 30px; margin-top: 20px;">
                        </div>
                        
                        <!--------- Informacio personal -------------->
                        <div class="col-sm-8">

                            <h2>Nom de l'usuari</h2>

                            <div class="infouser">
                                <h5>Nom: Pepito</h5>
                                <h5>Cognom Pepito</h5>
                                <h5>Data de naixement: 19/03/1990</h5>
                                <h5>Correu: pepito@gmail.com</h5>
                                <h5>DNI: 12345678-A</h5>
                            </div>
                        </div>
                    </div>
                        
                    <!--------- Separacio -------------->
                    <hr>
                    
                    <!--------- Dades diners -------------->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-1">
                                <!-- null -->
                            </div>
                            <div class="col-sm-6">
                                <h4>Estadístiques Usuari</h4>
                                
                                <br>
                                    
                                <p>Coins: <span class="label label-primary">1234</span></p>
                                <p>Apostes en curs: <span class="label label-primary">1234</span></p>
                                <p>Coins en joc: <span class="label label-primary">1234</span></p>
                                    
                                <div class="buttonrecarregar">
                                    <a href="recarrega"><button type="button" class="btn btn-warning">Recarrega coins</button></a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                    
                                <br><br><br>                                   
                                    
                                <p>Guanys: <span class="label label-primary">1234</span></p>
                                <p>Pèrdues: <span class="label label-primary">1234</span></p>
                                <p>Victòries: <span class="label label-primary">1234</span></p>
                            </div>
                        </div>
                    </div>
                        
                    <br>
                    
                    <!--------- Modal footer -------------->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <div class="container-fluid text-center">    
        <div class="row content">
                
        <!------------------- MENU LATERAL ---------------------->
            <div class="col-sm-2 sidenav">

                <nav class="navbar navbar-inverse" style="background-color: #314761;">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menulateral">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                     
                    </button>

                    <div class="titolresta" class="collapse navbar-collapse" id="menulateral">
                        <div class="botoeditarperfil"> <!-- boto editar perfil -->
                            <a href="#" data-toggle="modal" data-target="#usuari"><span class="glyphicon glyphicon-edit"></span></a>
                        </div>
                        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" alt="Generic placeholder image" height="100" width="100">
                        <div class="infouser">
                            <h5>Nom Usuari</h5>
                            <p><a href="#">Coins: <span class="label label-primary">1234</span></a></p>
                            <p><a href="#">Apostes en curs: <span class="label label-primary">1234</span></a></p>
                            <p><a href="#">Coins en joc: <span class="label label-primary">1234</span></a></p>
                        </div>
                        <div class="buttonrecarregar">
                            <a href="recarrega"><button type="button" class="btn btn-warning">Recarrega coins</button></a>
                        </div>

                        <!---------- SEPARACIO ----------->
                        <hr class="divider">    

                        <nav id="sidebar-wrapper">
                            <ul class="sidebar-nav">
                                <li class="sidebar-brand">
                                    <h4>Categories</h4>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Tots <span class="badge">5</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Informàtica <span class="badge">5</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Fotografia <span class="badge">5</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Consoles i jocs <span class="badge">5</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Telefonia <span class="badge">5</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Grans electro. <span class="badge">5</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Petits electro. <span class="badge">5</span></a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </nav>

            </div>
    <!------------------- CONTINGUT ---------------------->
            <div class="col-sm-8 text-left"> 
                @include('includes.contingut')
            </div>
    <!------------------- ANUNCIS ---------------------->
            <div class="col-sm-2 sidenav" style="background-color: #fff">

                <div class="well">
                    <img src="../public/images/git3.gif" class="gif">
                </div>

                <div class="well">
                    <img src="../public/images/urgente.gif" class="gif">
                </div>

                <div class="well">
                    <img src="../public/images/pymeralia.gif" class="gif">
                </div>

                </div>
            </div>
        </div>
    </body>
    
    <!------------------- FOOTER ---------------------->
    <footer class="container-fluid text-right">
        
        <ul class="nav navbar-nav navbar-right">
            <li>
                <p class="navbar-brand" href="#">Apostinger@Copyright2017</p>
            </li>
            <li>
                <a class="navbar-brand" href="#">Contacta</a>
            </li>                
        </ul>
        
    </footer>
</html>