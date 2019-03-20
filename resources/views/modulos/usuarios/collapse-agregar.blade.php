<!--Inicio de collapse para agregar pagos--> 
<div class="collapse" id="collapseAgregar">
                    <div class="card card-body">
                        <form class="needs-validation" action="{{route('agregarUser')}}" method="post" novalidate>
                           {{csrf_field() }}
                            <div class="form-group row mt-1">
                                <div class="col-sm-2">
                                    <label for="username">Nombre de usuario</label>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="username" id="username" placeholder="Escriba el nombre de usuario..." title="Formato incorrecto" maxlength="50" value="" required>
                                    <div class="invalid-feedback">
                                    	El campo del usuario esta vacío o el formato es incorrecto.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-1">
                                <div class="col-sm-2">
                                    <label for="email">Email <small>(opcional)</small></label>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="email" id="email" placeholder="Ejemplo: usuario@gmail.com" v-bind:pattern="reglaEmail">
                                    <div class="invalid-feedback">Debe agregar un formato de email valido</div>
                                </div>
                            </div>
                            <div class="form-group row mt-1">
                                <div class="col-sm-2">
                                    <label for="password">Contraseña</label>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="password" id="password" placeholder="El campo debe contener 8 o más caracteres" pattern=".{8,}" required>
                                    <div class="invalid-feedback">El campo de la contraseña esta vacío o debe contener 8  o más caracteres</div>
                                </div>
                            </div>
                            <div class="form-group row mt-1">
                                <div class="col-sm-2">
                                    <label for="rol">Rol</label>
                                </div>
                                <div class="col-sm-10">
                                     <input type="text" class="form-control" id="rol" name="rol" value="Administrador" required readonly>
                                    <div class="invalid-feedback">El campo rol esta vacío</div>
                                </div>
                            </div>
                            <button class="btn btn-detalles"><i class="fa fa-floppy-o"></i> Guardar Usuario</button>
                        </form>
                    </div>
                </div>
<!--Fin de collapse para agregar pagos--> 