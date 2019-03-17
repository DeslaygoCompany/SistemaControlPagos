<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mayra ruiz y Javier Delgado 2019">
    <link rel="icon" href="{{asset('images/logocbt.ico')}}">

    <title>Control de pagos</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--estilos de la aplicación-->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">


    <!--Libreria de fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
     <style>
         #logo{
             width: 100px;
             height: 50px;
             margin:0;
             padding:0;
         }
    </style>
    </head>
   

<body>
   
    <div class="container">
        <nav class="navbar navbar-expand-md fixed-top">
            <a class="navbar-brand ml-5" href="/historial-pagos"><img id="logo" src="{{asset('images/logocbt.png')}}" alt="LOGO C&BT"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link ml-2 @yield('botonNavHistorial','')" href="historial-pagos">Historial de pagos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-2 @yield('botonNavInfo','')" href="informacion-personal">Información personal</a>
                    </li>
                </ul>
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-5" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>{{Auth::user()->username}}</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="/informacion-personal"><i class="fa fa-address-book" aria-hidden="true"></i> Información</a>
                          <form method="post" action="{{ route('logout') }}">
                               @csrf
                                <button class="dropdown-item"><i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar sesión</button>
                            </form>
                            <a class="dropdown-item" href="#"></a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    
    <!--Inicio contenido-->
    <div class="container contenido">
    @yield('contenido')
    </div>
    <!--/Fin contenido-->

    <footer class="footer mt-2 py-3">
    <div class="container">
        <h6>&copy; 2018 Consulting &amp; Business Training, todos los derecho reservados</h6>
    </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
