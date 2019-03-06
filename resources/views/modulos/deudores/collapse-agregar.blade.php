<div class="collapse" id="collapseAgregar">
    <div class="card">
        <div class="card-header">
            <h3 id="title-info"><strong>Registrar un deudor</strong></h3>
        </div>
        <div class="card card-body">
            <form class="needs-validation" action="{{ route('agregar_deudor') }}" method="post"  novalidate>
                {{ csrf_field() }}
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="El campo debe contener solo letras, máximo 50 caracteres" v-model="nombre" required v-bind:pattern="reglaLetras" title="Formato incorrecto" maxlength="50" value="{{ old('nombre')}}">
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
                        <input class="form-control" type="text" name="apellidos" id="apellidos" placeholder="El campo debe contener solo letras, máximo 100 caracteres" v-model="apellidos" v-bind:pattern="reglaLetras" maxlength="100" required value="{{ old('apellidos')}}">
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
                        <input class="form-control" type="text" name="profesion" id="profesion" placeholder="El campo debe contener solo letras, máximo 50 caracteres" v-bind:pattern="reglaLetras" maxlength="50" required value="{{ old('profesion')}}">
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
                        <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" required>
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
                            <option value="">Seleccione...</option>
                            <option value="Soltero">Soltero</option>
                            <option value="Casado">Casado</option>
                            <option value="Viudo">Viudo</option>
                            <option value="Divorciado">Divorciado</option>
                        </select>
                         <div class="invalid-feedback">Debe elegir un estado civil</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="telefono">Teléfono <small> (opcional)</small></label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="tel" name="telefono" id="telefono" placeholder="El campo debe contener solo números, obligatorio 10 dígitos" maxlength="10" pattern="[0-9]{10}">
                        <div class="invalid-feedback">El campo teléfono debe contener 10 dígitos</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="celular">Celular<small> (opcional)</small></label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="tel" name="celular" id="celular" placeholder="El campo debe contener solo números, obligatorio 10 dígitos" maxlength="10" pattern="[0-9]{10}">
                        <div class="invalid-feedback">El campo celular debe contener 10 dígitos</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="skype">Skype<small> (opcional)</small></label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="skype" id="skype" placeholder="El campo debe contener máximo 35 caracteres" maxlength="35">
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="pais">País<small> (opcional)</small></label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="pais" id="pais" placeholder="El campo debe contener solo letras, máximo 50 caracteres" maxlength="50" v-bind:pattern="reglaLetras">
                         <div class="invalid-feedback">El formato del campo país es incorrecto </div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="nacionalidad">Nacionalidad<small> (opcional)</small></label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="nacionalidad" id="nacionalidad" placeholder="El campo debe contener solo letras, máximo 30 caracteres" v-bind:pattern="reglaLetras" maxlength="30">
                        <div class="invalid-feedback">El formato del campo nacionalidad es incorrecto</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="rfc">RFC</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="rfc" id="rfc" placeholder="El campo debe contener entre 12 y 13 caracteres, solo letras mayúsculas" required maxlength="13" pattern="[A-Z0-9]{12,13}">
                        <div class="invalid-feedback">El campo RFC esta vacío o debe contener entre 12 y 13 caracteres</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="razon_social">Razón social</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="razon_social" id="razon_social" placeholder="El campo debe contener solo letras, máximo 30 caracteres" v-bind:pattern="reglaLetras" maxlength="30" required>
                        <div class="invalid-feedback">El campo RFC esta vacío o el formato es incorrecto</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="direccion">Dirección</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="direccion" id="direccion" placeholder="El campo debe contener máximo 100 caracteres" maxlength="100" required>
                        <div class="invalid-feedback">El campo dirección esta vacío</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="estado">Estado de la república</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="estado" id="estado" placeholder="El campo debe contener solo letras, máximo 50 caracteres" maxlength="50" v-bind:pattern="reglaLetras" required>
                        <div class="invalid-feedback">El campo estado de la república esta vacío o el formato es incorrecto</div>
                    </div>
                </div>
                 <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="banco_predilecto">Banco predilecto</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="banco_predilecto" id="banco_predilecto" placeholder="El campo debe contener solo letras, máximo 100 caracteres" maxlength="100" v-bind:pattern="reglaLetras" required>
                        <div class="invalid-feedback">El campo banco predilecto esta vacío o el formato es incorrecto</div>
                    </div>
                </div>
                 <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="total">Total a pagar</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" name="total" id="total" min="0" placeholder="El campo debe contener solo números" maxlength="8" required>
                        <div class="invalid-feedback">El campo total a pagar esta vacío o el formato es incorrecto</div>
                    </div>
                </div>
                 <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="concepto">Concepto</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="concepto" id="concepto" placeholder="El campo debe contener solo letras, máximo 50 caracteres" maxlength="50" v-bind:pattern="reglaLetras" required>
                        <div class="invalid-feedback">El campo concepto esta vacío o el formato es incorrecto</div>
                    </div>
                </div>
                <div id="generar">
                   <div class="row">
                    <div class="col-8 content-separator">
                       <h4 id="titulo-separator">Crear usuario para deudor</h4>
                    </div>
                    <div class="col-4">
                        <button id="btnGenerarUser" type="button" v-on:click="generar" class="btn btn-detalles"><i class="fa fa-gear"></i> Generar usuario</button>
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
                        <input class="form-control" type="text" name="username" id="username" placeholder="" v-model="user" readonly required>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="email">Email<small> (opcional)</small></label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="email" name="email" id="email" placeholder="El campo debe contener un @ y un formato de email valido" v-bind:pattern="reglaEmail">
                        <div class="invalid-feedback">Debe agregar un formato de email valido</div>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="contraseña">Contraseña</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control" type="password" name="password" id="password" placeholder="" v-model="user" readonly required>
                    </div>
                </div>
                </div>
                <button type="submit" id="btnGuardarDeudor" class="btn btn-detalles"><i class="fa fa-floppy-o"></i> Guardar</button>
            </form>
        </div>
    </div>
</div>
