<!--Modal eliminar deudor-->
    <div class="modal fade" id="modalEliminarFactura" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Pago</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form method="post" action="{{ route('eliminarFactura') }}">
                {{csrf_field()}}
                <input type="hidden" id="id" name="id">
                    <div class="form-group row mt-1">
                    <div class="col-sm-6">
                        <h3>¿Desea eliminar el pago con folio?</h3>
                    </div>
                    <div class="col-sm-6">
                    <input class="form-control" type="text" id="folio" name="folio" readonly>
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