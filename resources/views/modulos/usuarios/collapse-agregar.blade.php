<!--Inicio de collapse para agregar pagos--> 
<div class="collapse" id="collapseAgregar">
                    <div class="card card-body">
                        <form action="{{route('agregarUser')}}" method="post">
                           {{csrf_field() }}
                            <div class="form-group row mt-1">
                                <div class="col-sm-2">
                                    <label for="username">Nombre de usuario</label>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="username" id="username" placeholder="Escriba el nombre de usuario..." v- model="username" reqired v- bind:pattern="reglaLetras" title="Formato incorrecto" maxlength="50" value="{{old('username')}}">
                                    <div class="invalid-feedback">
                                    	El campo del usuario esta vacio o el formato es incorrecto.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-1">
                                <div class="col-sm-2">
                                    <label for="email">Email</label>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="email" id="email" placeholder="Escriba el email..." v-bind:pattern="reglaEmail">
                                    <div class="invalid-feedback">Debe agregar un formato de email valido</div>
                                </div>
                            </div>
                            <div class="form-group row mt-1">
                                <div class="col-sm-2">
                                    <label for="password">Contraseña</label>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="password" id="password" placeholder="Escriba la contraseña...">
                                </div>
                            </div>
                            <div class="form-group row mt-1">
                                <div class="col-sm-2">
                                    <label for="rol">Rol</label>
                                </div>
                                <div class="col-sm-10">
                                     <select class="form-control" id="rol" name="rol">
                                        <option value="0">Seleccione...</option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Deudor</option>
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-detalles"><i class="fa fa-floppy-o"></i> Guardar Usuario</button>
                        </form>
                    </div>
                </div>
<!--Fin de collapse para agregar pagos--> 