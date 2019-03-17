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
   <table class="table table-bordered" id="tablaFacturas">
                <thead>
                    <tr>
                        <th scope="col">Folio</th>
                        <th scope="col">Estado de la factura</th>
                        <th scope="col">Fecha de expedición</th>
                        <th scope="col">Número de pago</th>
                        <th scope="col">Fecha de pago</th>
                        <th scope="col">Método de pago</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Total</th>
                        <th scope="col">Descargar factura</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($facturas as $factura)
                   @if($factura->id_deudor == Auth::user()->id_deudor)
                   <tr>
                       <td>{{$factura->folio}}</td>
                       @if($factura->estado == "Realizado")
                       <td class="estado"><div class="estado-realizado">1</div></td>
                       @elseif($factura->estado == "Pendiente")
                       <td class="estado"><div class="estado-pendiente">0</div></td>
                       @endif
                       <td>{{$factura->fecha_expedicion}}</td>
                       <td>{{$factura->no_pago}}</td>
                       <td>{{$factura->fecha_pago}}</td>
                       <td>{{$factura->detalle_factura->metodo_pago}}</td>
                       <td>{{$factura->detalle_factura->cantidad}}</td>
                       <td>{{$factura->deudor->deuda->total}}</td>
                       <td><a href="/descargarFactura/{{$factura->id}}" class="btn btn-detalles" ><i class="fa fa-download"></i></a></td>
                   </tr>
                   @endif
                   @endforeach
                </tbody>
            </table>
  
  </div>
  </div>
    

@endsection
<!--fin del contenido de perfil deudor-->