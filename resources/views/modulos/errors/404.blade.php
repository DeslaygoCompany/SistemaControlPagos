
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
    <style>
        .container{
            margin-left:250px;
            margin-top:200px;
        }
        #message{
            color:#767676;
            padding-left:0;
        }
         #logo{
             width: 100px;
             height: 100px;
             margin:0;
             padding:0;
         }
    </style>
    
</head>

    
<body>
   <div class="container">
       <div class="row">
          <div class="col-2">
              <img id="logo" src="{{asset('images/logocbt.png')}}" alt="LOGO C&BT">
          </div>
           <div class="col-10">
               <h2 id="message">
                   La página que busca no ha sido encontrada
                   <a href="/" class="btn btn-info">Regesar</a>
               </h2>
           </div>
       </div>
   </div>

</body>
</html>
