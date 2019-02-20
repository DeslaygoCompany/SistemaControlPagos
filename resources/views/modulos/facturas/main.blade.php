@extends('main-admin')


@section('botonNavPagos')
{{ 'active' }}
@endsection

<!--Inicio el contenido de deudores-->
@section('contenido')
    <div class="container contenido">
       <div class="row">
           <div class="col-12 encabezado">
               <h3>SECCIÓN DE PAGOS</h3>
           </div>
       </div>
        <div class="row">
            <div class="col-md-4">
                <button class="btn btn-agregar" type="button" data-toggle="collapse" data-target="#collapseAgregar" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-plus-circle"></i> Agregar Pago</button>
                <button class="btn btn-agregar ml-2"><i class="fa fa-file-excel-o"></i> Exportar</button>
            </div>
        </div>
        <div class="row mt-2 mb-2">
            <div class="col-md-12">
               @include('modulos.facturas.collapse-agregar')
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Folio</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Nombre de la empresa</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Fecha de expedición</th>
                        <th scope="col">Número de pago</th>
                        <th scope="col">Fecha de pago</th>
                        <th scope="col">Cambiar estado</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Ver detalles</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>05689</td>
                        <td class="estado"><div class="estado-realizado"></div></td>
                        <td>Empresa X</td>
                        <td>5 sur</td>
                        <td>2225832819</td>
                        <td>10/02/1980</td>
                        <td>109037</td>
                        <td>10/02/1980</td>
                        <td><button class="btn btn-cambiar" data-toggle="modal" data-target="#modalCambiar"><i class="fa fa-toggle-on"></i></button></td>
                        <td><button class="btn btn-eliminar" data-toggle="modal" data-target="#modalEliminarDeudor"><i class="fa fa-trash-o"></i></button></td>
                        <td><button class="btn btn-detalles" ><i class="fa fa-info-circle"></i></button></td>
                    </tr>
                    <tr>
                        <td>05689</td>
                        <td class="estado"><div class="estado-pendiente"></div></td>
                        <td>Empresa X</td>
                        <td>5 sur</td>
                        <td>2225832819</td>
                        <td>10/02/1980</td>
                        <td>109037</td>
                        <td>10/02/1980</td>
                        <td><button class="btn btn-cambiar" data-toggle="modal" data-target="#modalCambiar"><i class="fa fa-toggle-on"></i></button></td>
                        <td><button class="btn btn-eliminar" data-toggle="modal" data-target="#modalEliminarDeudor"><i class="fa fa-trash-o"></i></button></td>
                        <td><button class="btn btn-detalles"><i class="fa fa-info-circle"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row mt-2 mb-2">
            
        </div>
        
    </div>
<!--Inicio de modales-->
@include('modulos.facturas.modal-eliminar')
@include('modulos.facturas.modal-cambiar')
<!--Fin de modales-->
@endsection
<!--fin del contenido de deudores-->