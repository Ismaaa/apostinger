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
        <link rel="stylesheet" href="{{ URL::to('css/main.css') }}">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style>
            .botoeditarperfil{
                margin-left: 150px;
            }
        </style>
        
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
                                        <button type="button" class="btn btn-warning">Recarrega coins</button>
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
        
        <br><br><br>
        
        <!------------------ Contingut de la pagina ------------------>
        <div class="container-fluid text-center">    
            <div class="row content">
                <div class="col-sm-1">
                    <!-- null -->
                </div>
                <div class="col-sm-8" style="text-align: left;">
                    <h1>Opcions de pagament</h1>
                    <h5>Pots gestionar els mètodes de pagament en el joc i online amb les següents opcions de pagament.</h5>
                    <h5>Has de configurar els mètodes de pagament per defecte o disposar de saldo d'Apostinger per realitzar compres en Apostinger.</h5>
                </div>
            </div>
            
            <br><br><br>
            
            <div class="row content">
                
                <div class="col-sm-1">
                    <!-- null -->
                </div>
                
                <div class="col-sm-5">
                    <h2>Mètode de pagament</h2>
                    
                    <div class="form-group"style="text-align: left;">
                        <label for="sel1">Selecciona el mètode de pagament:</label>
                        <select class="form-control" id="sel1">
                            <option>Visa</option>
                            <option>MasterCard</option>
                            <option>Paypal</option>
                            <option>Altre</option>
                        </select>
                    </div>
                    
                    <div style="text-align: left; font-style: oblique;">
                        <h5>Accepten les següents formes de pagament, les dades estan protegides per la tecnologia Secure Socket Layer (SSL), dotat d'un certificat digital.</h5>
                    </div>
                    <button class="btn btn-success navbar-btn">Continuar</button>
                </div>                
                
                <div class="col-sm-5">
                    <h2>Saldo del compte</h2>
                    <br>
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="0" style="text-align:center">
                        <span class="input-group-addon">euros</span>
                    </div>
                    
                    <br>
                    
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="0" style="text-align:center">
                        <span class="input-group-addon">coins</span>
                    </div>
                </div>
            </div>
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