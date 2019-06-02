<!--Modal eliminar deudor-->
    <div class="modal fade" id="modalModificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar pago</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form  action="{{ route('modificarFactura')}}" method="post">
                  {{ csrf_field() }}
                   <input type="hidden" id="id" name="id">
                   <input type="hidden" id="idfact" name="idfact">
                   <div class="form-group row mt-1">
                    <div class="col-sm-5">
                        <label for="fecha_pago">Fecha de pago</label>
                    </div>
                    <div class="col-sm-7">
                         <input type="date" class="form-control" id="fecha_pago" name="fecha_pago" required value="">
                         <div class="invalid-feedback">El campo fecha de pago esta vacío</div>
                    </div>
                </div>
                   <div class="form-group row mt-1">
                    <div class="col-sm-5">
                        <label for="metodo_pago">Método de pago</label>
                    </div>
                    <div class="col-sm-7">
                        <select class="custom-select" name="metodo_pago" id="metodo_pago" required>
                            <option value="">Seleccione...</option>
                            <option value="Deposito">Deposito</option>
                            <option value="Transferencia">Transferencia</option>
                        </select>
                         <div class="invalid-feedback">Debe elegir un método de pago</div>
                    </div>
                </div>
                   <div class="form-group row mt-1">
                    <div class="col-sm-5">
                        <label for="banco">Banco donde se realizo el pago</label>
                    </div>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" name="banco" id="banco" placeholder="" maxlength="50" v-bind:pattern="reglaLetras" required>
                        <div class="invalid-feedback">El campo banco esta vacío o el formato es incorrecto</div>
                    </div>
                </div>
                    <div class="form-group row mt-1">
                    <div class="col-sm-5">
                        <label for="estado">Estado de la factura</label>
                    </div>
                    <div class="col-sm-7">
                        <select class="custom-select" name="estado" id="estado" required>
                            <option value="">Seleccione...</option>
                            <option value="Pendiente">Pendiente</option>
                            <option value="Realizado">Realizado</option>
                        </select>
                         <div class="invalid-feedback">Debe elegir un estado para la factura</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-5">
                        <label for="cantidad">Cantidad</label>
                    </div>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" name="cantidad" id="cantidad" placeholder="Escriba la cantidad..." required min="0">
                        <div class="invalid-feedback">El campo cantidad esta vacío o el formato es incorrecto</div>
                    </div>
                </div>
                <div class="modal-footer mt-2">
                    <button class="btn btn-eliminar">Confirmar</button>
                    <button type="button" class="btn btn-eliminar" data-dismiss="modal">Cancelar</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!--/Modal eliminar deudor-->