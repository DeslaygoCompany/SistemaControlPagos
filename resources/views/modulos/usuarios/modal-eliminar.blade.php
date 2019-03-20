<!--Modal eliminar deudor-->
    <div class="modal fade" id="modalEliminarUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar deudor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{ route('eliminar_user')}}">
                {{ csrf_field() }}
                <div class="modal-body">
                   <input type="hidden" id="id" name="id">
                    <div class="row">
                       <div class="col-12">
                        <h3>¿Desea eliminar a el usuario?</h3>
                        </div>                        
                    </div>
                    <div class="row">
                       <div class="col-2">
                           <label for="username">Username</label>
                       </div>
                       <div class="col-10">
                        <input type="text" class="form-control" id="username" name="username" readonly>
                        </div>
                    </div>
                <div class="modal-footer mt-2">
                    <button type="submit" class="btn btn-eliminar">Confirmar</button>
                    <button type="button" class="btn btn-eliminar" data-dismiss="modal">Cancelar</button>
                </div>
                 </div>
                 </form>
            </div>
        </div>
    </div>
    <!--/Modal eliminar deudor-->