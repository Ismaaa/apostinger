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
        <link rel="stylesheet" href="{{ URL::to('src/css/welcome.css') }}">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        <!------------------- HEADER ---------------------->
        <header class="header">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    
                    <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#headerinici">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                    </div>

                    <div class="collapse navbar-collapse" id="headerinici">

                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="admin"><span class="glyphicon glyphicon-user"></span> Contacta</a>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="principal"><span class="glyphicon glyphicon-eye-open"></span> Visita</a>
                            </li>
                            <li>
                                <a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                            </li>
                        </ul>
                    </div> 
                </div>
            </nav>
        </header>
        <!------------------- CENTRE ---------------------->
        <div class="centre">
            <div class="registrar">
                <button type="button" class="btn btn-warning"><a href="#" class="boto">Crea un compte</a></button>
            </div>

            <div class="inciarsessio">
                <h4>Tens un compte? <a href="#"> Inicia sessió aquí </a></h4>
            </div>
            <img src="../public/images/portada.png">
        </div>
    </body>
    
    <footer class="container-fluid text-right">
        <!-- null -->
    </footer>
</html>