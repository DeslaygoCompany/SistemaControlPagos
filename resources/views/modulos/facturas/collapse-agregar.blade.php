<!--Inicio de collapse para agregar pagos-->
<div class="collapse" id="collapseAgregar">
    <div class="card">
        <div class="card-header">
            <h3 id="title-info"><strong>Registrar un pago</strong></h3>
        </div>
        <div class="card card-body">
            <form id="formAgregarFactura" class="needs-validation" action="" novalidate>
               {{ csrf_field() }}
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="deudor">Nombre del deudor</label>
                    </div>
                    <div class="col-sm-10">
                       <select class="custom-select" name="deudor" id="deudor" required>
                            <option value="">Seleccione...</option>
                            @if(sizeOf($deudores) == 0)
                            <option value="">No hay deudores</option>
                            @else
                            @foreach($deudores as $deudor)
                            <option value="{{$deudor->id}}">{{$deudor->nombre}} {{$deudor->apellidos}}</option>
                            @endforeach
                            @endif
                        </select>
                        <div class="invalid-feedback">
                            Debe elegir el nombre de un deudor
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="folio">Folio</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="folio" id="folio" value="{{$folio}}" placeholder="" required readonly>
                         <div class="invalid-feedback">
                            El campo folio esta vacío
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="nombre_empresa">Nombre de la empresa</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" value="Consulting and Bussines Training" type="text" name="nombre_empresa" id="nombre_empresa" placeholder="El campo debe contener solo letras, máximo 50 caracteres" maxlength="50" v-bind:pattern="reglaLetras" required readonly>
                        <div class="invalid-feedback">
                            El campo nombre de la empresa esta vacío o el formato es incorrecto
                        </div>
                    </div>
                    
                </div>
               <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="direccion">Dirección</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" value="Colonia el Carmen. Puebla, Puebla. 15 Poniente No. 120, Despacho 103, 104" type="text" name="direccion" id="direccion" placeholder="El campo debe contener máximo 100 caracteres" maxlength="100" required readonly>
                        <div class="invalid-feedback">El campo dirección esta vacío</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="telefono">Teléfono</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="tel" name="telefono" id="telefono" placeholder="El campo debe contener solo números, obligatorio 10 dígitos" maxlength="10" pattern="[0-9]{10}" value="2227986359" required readonly>
                        <div class="invalid-feedback">El campo teléfono debe contener 10 dígitos o esta vacío</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Fecha de expedición</label>
                    </div>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="fecha_expedicion" name="fecha_expedicion" value="{{$fecha}}" readonly required>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="no_pago">Número de pago</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" min="0" name="no_pago" id="no_pago" placeholder="Se llenará cuando eliga un deudor" required readonly>
                         <div class="invalid-feedback">El campo número de pago esta vacío</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="fecha_pago">Fecha de pago</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="fecha_pago" name="fecha_pago" required>
                         <div class="invalid-feedback">El campo fecha de pago esta vacío</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Concepto</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" value="prueba" type="text" name="concepto" id="concepto" placeholder="Se llenará cuando eliga un deudor" required readonly>
                        <div class="invalid-feedback">El campo concepto esta vacío, se llena cuando elige un deudor</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="metodo_pago">Método de pago</label>
                    </div>
                    <div class="col-sm-10">
                        <select class="custom-select" name="metodo_pago" id="metodo_pago" required>
                            <option value="">Seleccione...</option>
                            <option value="Deposito">Deposito</option>
                            <option value="Transferencia">Transferencia</option>
                        </select>
                         <div class="invalid-feedback">Debe elegir un método de pago</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="banco">Banco donde se realizo el pago</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="banco" id="banco" placeholder="" maxlength="50" v-bind:pattern="reglaLetras" required>
                        <div class="invalid-feedback">El campo banco esta vacío o el formato es incorrecto</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="no_cuenta">Número de cuenta</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" min="0" name="no_cuenta" id="no_cuenta" placeholder="" value="Scotiabank" required readonly>
                        <div class="invalid-feedback">El campo número de cuenta esta vacío o el formato es incorrecto</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="estado_civil">Estado de la factura</label>
                    </div>
                    <div class="col-sm-10">
                        <select class="custom-select" name="estado_civil" id="estado_civil" required>
                            <option value="">Seleccione...</option>
                            <option value="Pendiente">Pendiente</option>
                            <option value="Realizado">Realizado</option>
                        </select>
                         <div class="invalid-feedback">Debe elegir un estado para la factura</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="cantidad">Cantidad</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" name="cantidad" id="cantidad" placeholder="Escriba la cantidad..." required min="0">
                        <div class="invalid-feedback">El campo cantidad esta vacío o el formato es incorrecto</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="nota">Nota</label>
                    </div>
                    <div class="col-sm-10">
                       <textarea class="form-control" name="nota" id="nota" readonly required>Este documento solo es válido siempre y cuando exista el original en las oficinas de Consulting & Business Training. La reproducción no autorizada de este comprobante constituye un delito en los términos de las disposiciones fiscales. 
                       </textarea>
                        <div class="invalid-feedback">El campo nota esta vacío o el formato es incorrecto</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="total">Total</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" min="0" name="total" id="total" placeholder="Se llenará cuando eliga un deudor" required readonly>
                         <div class="invalid-feedback">El campo total esta vacío, se llena cuando elige un deudor</div>
                    </div>
                </div>
                <button class="btn btn-detalles"><i class="fa fa-floppy-o"></i> Guardar</button>
            </form>
        </div>
    </div>
</div>
<!--Fin de collapse para agregar pagos-->
