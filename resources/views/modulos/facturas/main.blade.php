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
                <a href="/exportarFacturas" class="btn btn-agregar ml-2"><i class="fa fa-file-excel-o"></i> Exportar</a>
            </div>
        </div>
        <div class="row mt-2 mb-2">
            <div class="col-md-12">
               @include('modulos.facturas.collapse-agregar')
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered" id="tablaFacturas">
                <thead>
                    <tr>
                        <th scope="col">Folio</th>
                        <th scope="col">Estado de la factura</th>
                        <th scope="col">Nombre del deudor</th>
                        <th scope="col">Fecha de expedición</th>
                        <th scope="col">Número de pago</th>
                        <th scope="col">Fecha de pago</th>
                        <th scope="col">Método de pago</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Total</th>
                        <th scope="col">Cambiar estado</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Ver detalles</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($facturas as $factura)
                   <tr>
                       <td>{{$factura->folio}}</td>
                       @if($factura->estado == "Realizado")
                       <td class="estado"><div class="estado-realizado">1</div></td>
                       @elseif($factura->estado == "Pendiente")
                       <td class="estado"><div class="estado-pendiente">0</div></td>
                       @endif
                       <td>{{$factura->deudor->nombre}} {{$factura->deudor->apellidos}}</td>
                       <td>{{$factura->fecha_expedicion}}</td>
                       <td>{{$factura->no_pago}}</td>
                       <td>{{$factura->fecha_pago}}</td>
                       <td>{{$factura->detalle_factura->metodo_pago}}</td>
                       <td>{{$factura->detalle_factura->cantidad}}</td>
                       <td>{{$factura->deudor->deuda->total}}</td>
                       <td><button class="btn btn-cambiar" data-toggle="modal" data-target="#modalCambiar" data-id="{{$factura->id}}" data-estado="{{$factura->estado}}"><i class="fa fa-toggle-on"></i></button></td>
                       <td><button class="btn btn-eliminar" data-toggle="modal" data-target="#modalEliminarFactura" data-id="{{$factura->id}}" data-folio="{{$factura->folio}}"><i class="fa fa-trash-o"></i></button></td>
                       <td><button class="btn btn-detalles" ><i class="fa fa-info-circle"></i></button></td>
                   </tr>
                   @endforeach
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