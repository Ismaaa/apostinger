<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">
        <link rel="stylesheet" href="{{ URL::to('src/css/admin.css') }}">
    </head>
    
    <!------------------- HEADER ---------------------->
    <header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="welcome">Apostinger</a>
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#header">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>   
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="header">
                        
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-star"></span> Ranking</a>
                        </li>
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-user"></span> Perfil</a>
                        </li>
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
                        </li>
                    </ul>
                    
                </div> 
            </div>
        </nav>
    </header>
    
     <body>
         <!------------------- ADMIN ---------------------->
         <div class="admin">
            <h3>Llista d'usuaris</h3>
         
         <br>
        
         <h5>ORDRE</h5>
        
         <a href="#" class="btn btn-success">ascendent</a>
         <a href="#" class="btn btn-default">descendent</a>
        
         <br><br><br>
        
         <ul class="nav nav-tabs nav-justified">
            <li role="presentation" class="active"><a href="#">Nom</a></li>
            <li role="presentation"><a href="#">DNI</a></li>
            <li role="presentation"><a href="#">Població</a></li>
            <li role="presentation"><a href="#">PDF</a></li>
         </ul>
            
         <table class="table table-striped">
            <thead>
                <th>Nom</th>
                <th>Cogom</th>
                <th>DNI</th>
                <th>Correu electrònic</th>
                <th>Població</th>
                <th>Acció</th>
            </thead>

            <tbody>
                <tr>
                    <td>nom</td>
                    <td>cognom</td>
                    <td>dni</td>
                    <td>email</td>
                    <td>adreça</td>
                    <td>
                        <a href="#" class="btn btn-primary">Veure</a>

                        <a href="#" class="btn btn-warning">Editar</a>

                        <a href="#" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            </tbody>
         </table>
         <br>
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