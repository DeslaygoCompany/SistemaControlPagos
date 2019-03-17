@extends('main-admin')


@section('botonNavDeudores')
{{ 'active' }}
@endsection


<!--Inicio el contenido de perfil deudor-->
@section('contenido')

  <div class="row">
        <div class="col-md-8">
                 @if(session('success'))
                         <div class="alert alert-success alert-dismissable" role="alert">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                             {{session('success')}}
                         </div>
                        @elseif(session('status'))
                        <div class="alert alert-warning alert-dismissable" role="alert">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                             {{session('status')}}
                         </div>
                         @endif
            </div>
    </div>
    
  <div class="card">
  <div class="card-header">
    <h3 id="title-info"><strong>Información</strong></h3>
  </div>
  <div class="card-body">
  <div class="row">
        <div class="col-md-4">
        <img class="img-circle img-perfil" src="{{asset('images/profile-user-color.png')}}" alt="Imagen perfil">
        </div>
        <div class="col-md-8">
            <h3 id="title-info"><strong>Perfil del deudor</strong></h3>
            <form class="needs-validation" action="{{route('actualizar_deudor')}}" method="post" novalidate>
                {{csrf_field()}}
                <input type="hidden" id="id" name="id" value="{{$deudor->id}}">
                 <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" value="{{$deudor->nombre}}" type="text" name="nombre" id="nombre" placeholder="El campo debe contener solo letras, máximo 50 caracteres" required pattern="[a-zA-ZáéíóúÁÉÍÓÚñ ]{1,100}" maxlength="50">
                        <div class="invalid-feedback">
                            El campo nombre esta vacío o el formato es incorrecto
                        </div>
                    </div>
                </div>
                 <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="apellidos">Apellidos</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" value="{{$deudor->apellidos}}" type="text" name="apellidos" id="apellidos" placeholder="El campo debe contener solo letras, máximo 100 caracteres" pattern="[a-zA-ZáéíóúÁÉÍÓÚñ ]{1,100}" maxlength="100" required>
                        <div class="invalid-feedback">
                            El campo apellidos esta vacío o el formato es incorrecto
                        </div>
                    </div>
                </div>
                 <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="profesion">Profesión</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" value="{{$deudor->profesion}}" type="text" name="profesion" id="profesion" placeholder="El campo debe contener solo letras, máximo 50 caracteres" pattern="[a-zA-ZáéíóúÁÉÍÓÚñ ]{1,100}" maxlength="50" required>
                        <div class="invalid-feedback">
                            El campo profesión esta vacío o el formato es incorrecto
                        </div>
                    </div>
                </div>
                 <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="fecha_nacimiento">Fecha de nacimiento</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="date" name="fecha_nacimiento" id="fecha_nacimiento" placeholder=""  value="{{date('Y-m-d', strtotime($deudor->fecha_nacimiento))}}" required>
                        <div class="invalid-feedback">
                            El campo fecha de nacimiento esta vacío
                        </div>
                    </div>
                </div>
                 <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="estado_civil">Estado civil</label>
                    </div>
                    <div class="col-sm-10">
                        <select class="custom-select" name="estado_civil" id="estado_civil" required>
                            
                            @if($deudor->estado_civil == "Soltero")
                            <option value="">Seleccione...</option>
                            <option selected value="Soltero">Soltero</option>
                            <option value="Casado">Casado</option>
                            <option value="Viudo">Viudo</option>
                            <option value="Divorciado">Divorciado</option>
                            @elseif($deudor->estado_civil == "Casado")
                            <option value="">Seleccione...</option>
                            <option value="Soltero">Soltero</option>
                            <option selected value="Casado">Casado</option>
                            <option value="Viudo">Viudo</option>
                            <option value="Divorciado">Divorciado</option>
                            @elseif($deudor->estado_civil == "Viudo")
                            <option value="">Seleccione...</option>
                            <option value="Soltero">Soltero</option>
                            <option value="Casado">Casado</option>
                            <option selected value="Viudo">Viudo</option>
                            <option value="Divorciado">Divorciado</option>
                            @elseif($deudor->estado_civil == "Divorciado")
                            <option value="">Seleccione...</option>
                            <option value="Soltero">Soltero</option>
                            <option value="Casado">Casado</option>
                            <option value="Viudo">Viudo</option>
                            <option selected value="Divorciado">Divorciado</option>
                            @endif
                        </select>
                         <div class="invalid-feedback">Debe elegir un estado civil</div>
                    </div>
                </div>
                 <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="telefono">Teléfono <small> (opcional)</small></label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="tel" name="telefono" id="telefono" placeholder="El campo debe contener solo números, obligatorio 10 dígitos" maxlength="10" pattern="[0-9]{10}" value="{{$deudor->telefono}}">
                        <div class="invalid-feedback">El campo teléfono debe contener 10 dígitos</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="celular">Celular<small> (opcional)</small></label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="tel" name="celular" id="celular" placeholder="El campo debe contener solo números, obligatorio 10 dígitos" maxlength="10" pattern="[0-9]{10}" value="{{$deudor->detalle_deudor->celular}}">
                        <div class="invalid-feedback">El campo celular debe contener 10 dígitos</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="skype">Skype<small> (opcional)</small></label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="skype" id="skype" placeholder="El campo debe contener máximo 35 caracteres" maxlength="35" value="{{$deudor->detalle_deudor->skype}}">
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="pais">País<small> (opcional)</small></label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="pais" id="pais" placeholder="El campo debe contener solo letras, máximo 50 caracteres" maxlength="50" pattern="[a-zA-ZáéíóúÁÉÍÓÚñ ]{1,100}" value="{{$deudor->detalle_deudor->pais}}">
                         <div class="invalid-feedback">El formato del campo país es incorrecto </div>
                    </div>
                </div>
                 <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="nacionalidad">Nacionalidad<small> (opcional)</small></label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="nacionalidad" id="nacionalidad" placeholder="El campo debe contener solo letras, máximo 30 caracteres" pattern="[a-zA-ZáéíóúÁÉÍÓÚñ ]{1,100}" maxlength="30" value="{{$deudor->detalle_deudor->nacionalidad}}">
                        <div class="invalid-feedback">El formato del campo nacionalidad es incorrecto</div>
                    </div>
                </div>
                 <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="estado">Estado de la república</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="estado" id="estado" placeholder="El campo debe contener solo letras, máximo 50 caracteres" maxlength="50" pattern="[a-zA-ZáéíóúÁÉÍÓÚñ ]{1,100}" required value="{{$deudor->estado_republica}}">
                        <div class="invalid-feedback">El campo estado de la república esta vacío o el formato es incorrecto</div>
                    </div>
                </div>
               <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="rfc">RFC</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="rfc" id="rfc" placeholder="El campo debe contener entre 12 y 13 caracteres, solo letras mayúsculas" required maxlength="13" pattern="[A-Z0-9]{12,13}" value="{{$deudor->detalle_deudor->rfc}}">
                        <div class="invalid-feedback">El campo RFC esta vacío o debe contener entre 12 y 13 caracteres</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="razon_social">Razón social</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="razon_social" id="razon_social" placeholder="El campo debe contener solo letras, máximo 30 caracteres" pattern="[a-zA-ZáéíóúÁÉÍÓÚñ ]{1,100}" maxlength="30" required value="{{$deudor->detalle_deudor->razon_social}}">
                        <div class="invalid-feedback">El campo RFC esta vacío o el formato es incorrecto</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="direccion">Dirección</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="direccion" id="direccion" placeholder="El campo debe contener máximo 100 caracteres" maxlength="100" required value="{{$deudor->detalle_deudor->direccion}}">
                        <div class="invalid-feedback">El campo dirección esta vacío</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="banco_predilecto">Banco predilecto</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="banco_predilecto" id="banco_predilecto" placeholder="El campo debe contener solo letras, máximo 100 caracteres" maxlength="100" pattern="[a-zA-ZáéíóúÁÉÍÓÚñ ]{1,100}" required value="{{$deudor->deuda->banco_predilecto}}">
                        <div class="invalid-feedback">El campo banco predilecto esta vacío o el formato es incorrecto</div>
                    </div>
                </div>
                 <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="total">Total a pagar</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="total" id="total" min="0" placeholder="El campo debe contener solo números" maxlength="8" required value="{{$deudor->deuda->total}}">
                        <div class="invalid-feedback">El campo total a pagar esta vacío o el formato es incorrecto</div>
                    </div>
                </div>
                 <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="concepto">Concepto</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="concepto" id="concepto" placeholder="El campo debe contener solo letras, máximo 50 caracteres" maxlength="50" pattern="[a-zA-ZáéíóúÁÉÍÓÚñ ]{1,100}" required value="{{$deudor->deuda->concepto}}">
                        <div class="invalid-feedback">El campo concepto esta vacío o el formato es incorrecto</div>
                    </div>
                </div>
                <div id="generar">
                   <div class="row">
                    <div class="col-8 content-separator">
                       <h4 id="titulo-separator">Crear usuario para deudor</h4>
                    </div>
                    <div class="col-4">
                        <button type="button" v-on:click="generar" class="btn btn-detalles"><i class="fa fa-gear"></i> Generar usuario</button>
                    </div>
                    <div class="col-12">
                         <hr class="separator">
                         <h5 id="notaGeneraUser">Nota: La contraseña es igual al nombre de usuario</h5>
                    </div>
                    </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="username">Nombre de usuario</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="username" id="username" placeholder="" value="{{$deudor->user->username}}" readonly required>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="email">Email<small> (opcional)</small></label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="email" name="email" id="email" placeholder="El campo debe contener un @ y un formato de email valido" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" value="{{$deudor->user->email}}">
                        <div class="invalid-feedback">Debe agregar un formato de email valido</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="contraseña">Contraseña</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="password" name="password" id="password" placeholder="" readonly required value="{{$deudor->user->password}}">
                    </div>
                </div>
                </div>
                <button class="btn btn-detalles">Guardar</button>
            </form>
        </div>
    </div>
</div>
    </div>
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
                        <th scope="col">Número de pago</th>
                        <th scope="col">Fecha de pago</th>
                        <th scope="col">Método de pago</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Total</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Cambiar estado</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Descargar factura</th>
                        <th scope="col">Ver factura</th>
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
                       <td>{{$factura->no_pago}}</td>
                       <td>{{$factura->fecha_pago}}</td>
                       <td>{{$factura->detalle_factura->metodo_pago}}</td>
                       <td>{{$factura->detalle_factura->cantidad}}</td>
                       <td>{{$factura->deudor->deuda->total}}</td>
                       <td><button class="btn btn-cambiar" data-toggle="modal" data-target="#modalModificar" data-id="{{$factura->id}}" data-estado="{{$factura->estado}}" data-fecha="{{$factura->fecha_pago}}" data-metodo="{{$factura->detalle_factura->metodo_pago}}" data-banco="{{$factura->detalle_factura->banco}}" data-cantidad="{{$factura->detalle_factura->cantidad}}" data-idfact="{{$factura->detalle_factura->id}}"><i class="fa fa-pencil-square-o"></i></button></td>
                       <td><button class="btn btn-cambiar" data-toggle="modal" data-target="#modalCambiar" data-id="{{$factura->id}}" data-estado="{{$factura->estado}}"><i class="fa fa-toggle-on"></i></button></td>
                       <td><button class="btn btn-eliminar" data-toggle="modal" data-target="#modalEliminarFactura" data-id="{{$factura->id}}" data-folio="{{$factura->folio}}"><i class="fa fa-trash-o"></i></button></td>
                       <td><a href="descargarFactura/{{$factura->id}}" class="btn btn-detalles" ><i class="fa fa-download"></i></a></td>
                        <td><a href="verFactura/{{$factura->id}}" class="btn btn-detalles" ><i class="fa fa-file-pdf-o"></i></a></td>
                   </tr>
                   @endforeach
                </tbody>
            </table>
</div>
  </div>
  <!--Inicio de modales-->
  @include('modulos.facturas.modal-eliminar')
@include('modulos.facturas.modal-cambiar')
@include('modulos.facturas.modal-modificar')
<!--Fin de modales-->

@endsection
<!--fin del contenido de perfil deudor-->