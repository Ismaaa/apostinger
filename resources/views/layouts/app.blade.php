<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'APOSTINGER') }}</title>

        <!-- Styles -->
        <link rel="icon" href="../public/images/cartes.ico" type="image/ico" sizes="16x16">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- link css -->
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </script>
    </head>
    
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <img class="cartes" src="../public/images/cartes.png">
                    <a class="apostingertitol"  href="welcome">Apostinger</a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerinici">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                </div>

                <div class="collapse navbar-collapse" id="headerinici">
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
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

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
            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}"></script>
            @yield('content')
        </nav>
    </body>
</html>