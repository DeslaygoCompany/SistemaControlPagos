<!--Inicio de collapse para agregar pagos-->
<div class="collapse" id="collapseAgregar">
    <div class="card">
        <div class="card-header">
            <h3 id="title-info"><strong>Registrar un pago</strong></h3>
        </div>
        <div class="card card-body">
            <form action="">
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="deudor">Nombre del deudor</label>
                    </div>
                    <div class="col-sm-10">
                       <select class="custom-select" name="deudor" id="deudor" required>
                            <option value="">Seleccione...</option>
                            @if(isset($deudores))
                            @foreach($deudores as $deudor)
                            <option value="{{$deudor->id}}">{{$deudor->nombre}} {{$deudor->apellidos}}</option>
                            @endforeach
                            @else
                            <option value="">No hay deudores</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Folio</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="" id="" placeholder="Escriba el folio...">
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Nombre de la empresa</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="" id="" placeholder="Escriba el nombre de la empresa...">
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Dirección</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="" id="" placeholder="Escriba la dirección...">
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Telefono</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" name="" id="" placeholder="Escriba el número telefónico...">
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
                        <label for="">Número de pago</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" min="0" name="" id="" placeholder="Escriba el número de pago...">
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Fecha de pago</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="date" class="form-control">
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Concepto</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" name="" id="" placeholder="Escriba el concepto...">
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Método de pago</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="" id="" placeholder="Escriba el método de pago...">
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Banco</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="" id="" placeholder="Escriba el banco...">
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Número de cuenta</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" min="0" name="" id="" placeholder="Escriba el número de cuenta...">
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
                         <div class="invalid-feedback">Debe elegir un estado civil</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Cantidad</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" name="" id="" placeholder="Escriba la cantidad...">
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Nota</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="" id="" placeholder="Escriba la nota...">
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Total</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" min="0" name="" id="" placeholder="Escriba el total...">
                    </div>
                </div>
                <button class="btn btn-detalles"><i class="fa fa-floppy-o"></i> Guardar</button>
            </form>
        </div>
    </div>
</div>
<!--Fin de collapse para agregar pagos-->
