@extends('main-admin')

@section('botonNavDeudores')
{{ 'active' }}
@endsection

<!--Inicio el contenido de deudores-->
@section('contenido')
    <div class="container contenido">
        <div class="row">
           <div class="col-12 encabezado">
               <h3>SECCIÓN DE DEUDORES</h3>
           </div>
       </div>
        <div class="row">
            <div class="col-md-4">
                <button class="btn btn-agregar" type="button" data-toggle="collapse" data-target="#collapseAgregar" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-plus-circle"></i> Agregar deudor</button>
                <a href="{{ route('exportarDeudores') }}" class="btn btn-agregar ml-2"><i class="fa fa-file-excel-o"></i> Exportar</a>
            </div>
            <div class="col-md-8">
                 @if(session('success'))
                         <div class="alert alert-success alert-dismissable" role="alert">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                             {{session('success')}}
                         </div>
                        @elseif(session('status'))
                        <div class="alert alert-warning alert-dismissable" role="alert">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                             {{session('status')}}
                         </div>
                         @endif
            </div>
        </div>
        <div class="row mt-2 mb-2">
            <div class="col-md-12">
               @include('modulos.deudores.collapse-agregar')
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Profesión</th>
                        <th scope="col">Estado de la república</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Deuda</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Ver detalles</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($deudores as $deudor)
                   <tr>
                       <td>{{$deudor->nombre}}</td>
                       <td>{{$deudor->apellidos}}</td>
                       <td>{{$deudor->profesion}}</td>
                       <td>{{$deudor->estado_republica}}</td>
                       <td>{{date('d-m-y',strtotime($deudor->fecha_nacimiento))}}</td>
                       <td>{{$deudor->deuda->total}}</td>
                       <td><button class="btn btn-eliminar" data-toggle="modal" data-target="#modalEliminarDeudor"><i class="fa fa-trash-o"></i></button></td>
                        <td><a href="/perfil" class="btn btn-detalles" ><i class="fa fa-info-circle"></i></a></td>
                   </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    @include('modulos.deudores.modal-eliminar')
@endsection
<!--fin del contenido de deudores-->