<!--Modal eliminar deudor-->
    <div class="modal fade" id="modalCambiar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cambiar estado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form  action="{{ route('cambiarEstado')}}" method="post">
                  {{ csrf_field() }}
                   <input type="hidden" id="id" name="id">
                    <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="estado">Estado de la factura</label>
                    </div>
                    <div class="col-sm-10">
                        <select class="custom-select" name="estado" id="estado" required>
                            <option value="">Seleccione...</option>
                            <option value="Pendiente">Pendiente</option>
                            <option value="Realizado">Realizado</option>
                        </select>
                         <div class="invalid-feedback">Debe elegir un estado para la factura</div>
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