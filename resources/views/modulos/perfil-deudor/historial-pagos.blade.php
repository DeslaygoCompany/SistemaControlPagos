@extends('main-deudor')

@section('botonNavHistorial')
{{ 'active' }}
@endsection


<!--Inicio el contenido de perfil deudor-->
@section('contenido')
    <div class="container contenido">
  <div class="card mt-2">
  <div class="card-header">
    <h3 id="title-info"><strong>Historial de pagos</strong></h3>
  </div>
  <div class="card-body">
    <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Folio</th>
                        <th scope="col">Nombre de la empresa</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Fecha de expedición</th>
                        <th scope="col">Número de pago</th>
                        <th scope="col">Fecha de pago</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Ver detalles</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>05689</td>
                        <td>Empresa X</td>
                        <td>5 sur</td>
                        <td>2225832819</td>
                        <td>10/02/1980</td>
                        <td>109037</td>
                        <td>10/02/1980</td>
                        <td><button class="btn btn-eliminar" data-toggle="modal" data-target="#modalEliminarDeudor"><i class="fa fa-trash-o"></i></button></td>
                        <td><button class="btn btn-detalles" ><i class="fa fa-info-circle"></i></button></td>
                    </tr>
                    <tr>
                        <td>05689</td>
                        <td>Empresa X</td>
                        <td>5 sur</td>
                        <td>2225832819</td>
                        <td>10/02/1980</td>
                        <td>109037</td>
                        <td>10/02/1980</td>
                        <td><button class="btn btn-eliminar" data-toggle="modal" data-target="#modalEliminarDeudor"><i class="fa fa-trash-o"></i></button></td>
                        <td><button class="btn btn-detalles"><i class="fa fa-info-circle"></i></button></td>
                    </tr>        
                </tbody>
            </table>
</div>
  </div>
    

@endsection
<!--fin del contenido de perfil deudor-->