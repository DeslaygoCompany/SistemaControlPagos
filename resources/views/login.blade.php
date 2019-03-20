<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mayra ruiz y Javier Delgado 2019">
    <link rel="icon" href="{{asset('images/logocbt.ico')}}">

    <title>Control de pagos</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome/css/font-awesome.css')}}">
    
     <!--estilos de la aplicación-->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
   <link rel="stylesheet" href="{{ asset('css/login_style.css') }}">

</head>

    
<body>
    <div class= "modal-dialog text-center">
       <div class= "col-sm-8 main-section">
           <div class= "modal-content">
           <div class="col-12 user-img">
               <img src="{{ asset('images/profile-user-color.png')}}" alt="">
           </div>
           <div class="col-12"><h2 id="titulo">Control de pagos</h2></div>
           <form clas="col-12" action="{{ route('login') }}" method="post">
            {{ csrf_field() }}
             <div class="form-group" id="user-group">
                <i class="fa fa-user fa-2x" ></i>
                 <input type="user" name="username" class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="Nombre de usuario" value="{{old('username')}}" autofocus>
                 @if ($errors->has('username'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                  </div> 
                 <div class="form-group" id="contrasena-group" >
                    <i class="fa fa-lock fa-2x"></i>
                     <input type="password" name="password"  class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}"  placeholder="Contraseña"  value="{{old('password')}}" autofocus>
                     @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                 </div>
             <button type="submit" class="btn btn-detalles"><i class="fa fa-sign-in"></i>  Ingresar</button>             
           </form>
       </div>
     </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--SCRIPT PARA SWEETALERT-->
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--/SCRIPT PARA SWEETALERT-->
    
    @include('sweet::alert')

    
</body>
</html>