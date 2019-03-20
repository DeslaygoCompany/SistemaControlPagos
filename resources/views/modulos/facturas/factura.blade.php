<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Control de pagos</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ public_path('css/factura_style.css')}}">

</head>

    
<body>

   <div class="container-fluid" id="conteindo">
               <div id="informacionEmpresa"> 
                  <img id="logoEmpresa" src="{{ public_path('images/logocbt.png')}}" alt="">
                   <h3>Recibo de pago</h3>
                   <p>CONSULTING AND BUSSINES TRAINIG</p>
                   <p id="dir"><strong>Dirección: </strong>Colonia el Carmen, 15 Pte. #120 Int. 103, 104</p>
                   <p> Puebla Pue.</p>
                   <p><strong>Teléfono: </strong>(222) 7-98-63-59</p>
                   <p><strong>Folio: </strong>{{$factura->folio}}  <strong>Fecha de expedicion:  </strong> {{$factura->fecha_expedicion}}</p>
                   <br>
                   <p><strong>Pago de Servicio de Capacitación y Gestión Empresarial</strong></p>
                    
               </div>
               <hr class="style3">
               <table>
       <thead>
           <tr>
               <th scope="col">Nombre: </th>
               <th class="data">{{$factura->deudor->nombre}} {{$factura->deudor->apellidos}}</th>
           </tr>
       </thead>
       <tbody>
           <tr>
               <td> <strong>Número de pago:</strong></td>
               <td class="data">{{$factura->no_pago}}</td>
           </tr>
           <tr>
               <td> <strong>Banco:</strong></td>
               <td class="data">{{$factura->detalle_factura->banco}}</td>
           </tr>
           <tr>
               <td><strong>Método de pago:</strong></td>
               <td class="data">{{$factura->detalle_factura->metodo_pago}}</td>
           </tr>
           <tr>
               <td><strong>Fecha de pago:</strong></td>
               <td class="data">{{$factura->fecha_pago}}</td>
           </tr>
           <tr>
               <td><strong>Cantidad:</strong> </td>
               <td class="data">{{$factura->detalle_factura->cantidad}}</td>
           </tr>
           <tr>
               <td><strong>Total: </strong></td>
               <td class="data">{{$factura->detalle_factura->cantidad}}</td>
           </tr>
       </tbody>
   </table>
           <hr class="style3">
           <div id="nota">
               <p><strong>Nota: </strong> Este documento solo es válido siempre y cuando exista el original en las oficinas</p>
               <p>de Consulting & Business Training. La reproducción no autorizada de este comprobante</p>
               <p>constituye un delito en los términos de las disposiciones fiscales.</p>
           </div>
 
   </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>