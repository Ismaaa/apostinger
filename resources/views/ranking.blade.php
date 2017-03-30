<!DOCTYPE html>
<html>
    <head>
        <!-- titol i imatge pestanya -->
        <title>APOSTINGER</title>
        <link rel="icon" href="images/cartes.ico" type="image/ico" sizes="16x16">
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- link css -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>
    
    <body style="background-color: #bae0f2;">
        <!------------------- HEADER ---------------------->
        <header>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <img class="cartes" src="images/cartes.png">
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
                            <li>
                                <a href="#"><span class="glyphicon glyphicon-star"></span> Ranking</a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#usuari"><span class="glyphicon glyphicon-user"></span> Perfil</a>
                            </li>
                            <li>
                                <a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
                            </li>
                        </ul>
                        
                    </div> 
                </div>
            </nav>
        </header>
        
        <!--------- Contingut -------------->
        
        <div>
            <h2>Contingut</h2>
        </div>
    </body>
    
    <br><br><br><br><br><br>
    
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