@extends('main-admin')


@section('botonNavUsuarios')
{{ 'active' }}
@endsection


<!--Inicio el contenido de deudores-->
@section('contenido')
    <div class="container contenido">
        <div class="row">
           <div class="col-12 encabezado">
               <h3>SECCIÓN DE USUARIOS</h3>
           </div>
       </div>
        <div class="row">
            <div class="col-md-4">
                <button class="btn btn-agregar" type="button" data-toggle="collapse" data-target="#collapseAgregar" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-plus-circle"></i> Agregar Pago</button>
                <button class="btn btn-agregar ml-2"><i class="fa fa-file-excel-o"></i> Exportar</button>
            </div>
        </div>
        <div class="row mt-2 mb-2">
            <div class="col-md-12">
               @include('modulos.usuarios.collapse-agregar')
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nombre de usuario</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Rol</th>
                        <th escope="col">Eliminar</th>
                        <th escope="col">Ver detalles</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>User1</td>
                        <td>user@mail.com</td>
                        <td>user12344</td>
                        <td>Administrador</td>
                        <td><button class="btn btn-eliminar" data-toggle="modal" data-target="#modalEliminarDeudor"><i class="fa fa-trash-o"></i></button></td>
                        <td><button class="btn btn-detalles" ><i class="fa fa-info-circle"></i></button></td>
                    </tr>
                    <tr>
                        <td>User1</td>
                        <td>user@mail.com</td>
                        <td>user12344</td>
                        <td>Administrador</td>
                        <td><button class="btn btn-eliminar" data-toggle="modal" data-target="#modalEliminarDeudor"><i class="fa fa-trash-o"></i></button></td>
                        <td><button class="btn btn-detalles"><i class="fa fa-info-circle"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row mt-2 mb-2">
            
        </div>
        
    </div>
    
@include('modulos.usuarios.modal-eliminar')
@endsection
<!--fin del contenido de deudores-->