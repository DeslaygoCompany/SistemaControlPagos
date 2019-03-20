@extends('main-deudor')

@section('botonNavInfo')
{{ 'active' }}
@endsection


<!--Inicio el contenido de perfil deudor-->
@section('contenido')
<div class="container contenido">
       <div class="card">
  <div class="card-header">
    <h3 id="title-info"><strong>Información</strong></h3>
  </div>
  <div class="card-body">
  <div class="row">
        <div class="col-md-4">
        <img class="img-circle img-perfil" src="{{asset('images/profile-user-color.png')}}" alt="Imagen perfil">
        </div>
        <div class="col-md-8">
            <h3 id="title-info"><strong>Perfil del deudor</strong></h3>
            <form action="">
                 <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Nombre</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control control-info" value="{{Auth::user()->deudor->nombre}}" type="text" name="" id="" placeholder="" readonly>
                    </div>
                </div>
                 <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Apellidos</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control control-info" value="{{Auth::user()->deudor->apellidos}}" type="text" name="" id="" placeholder="" disabled>
                    </div>
                </div>
                 <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Profesión</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control control-info" value="{{Auth::user()->deudor->profesion}}" type="text" name="" id="" placeholder="" readonly>
                    </div>
                </div>
                 <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Fecha de nacimiento</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control control-info" value="{{Auth::user()->deudor->fecha_nacimiento}}" type="text" name="" id="" placeholder="" readonly>
                    </div>
                </div>
                 <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Estado civil</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control control-info" value="{{Auth::user()->deudor->estado_civil}}" type="text" name="" id="" placeholder="" readonly>
                    </div>
                </div>
                 <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Teléfono</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control control-info" value="{{Auth::user()->deudor->telefono}}" type="text" name="" id="" placeholder="No cuenta con un teléfono en su registro" readonly>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Celular</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control control-info" value="{{Auth::user()->deudor->detalle_deudor->celular}}" type="text" name="" id="" placeholder="No cuenta con un celular en su registro" readonly>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Skype</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control control-info" value="{{Auth::user()->deudor->detalle_deudor->skype}}" type="text" name="" id="" placeholder="No cuenta con una cuenta de skype en su registro" readonly>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">País</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control control-info" value="{{Auth::user()->deudor->detalle_deudor->pais}}" type="text" name="" id="" placeholder="No cuenta con un país en su registro" readonly>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">nacionalidad</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control control-info" value="{{Auth::user()->deudor->detalle_deudor->nacionalidad}}" type="text" name="" id="" placeholder="No cuenta con una nacionalidad en su registro" readonly>
                    </div>
                </div>
                 <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Estado de la república</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control control-info" value="{{Auth::user()->deudor->estado_republica}}" type="text" name="" id="" placeholder="" readonly>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">RFC</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control control-info" value="{{Auth::user()->deudor->detalle_deudor->rfc}}" type="text" name="" id="" placeholder="" readonly>
                    </div>
                </div>
                <div class="form-group row mt-1">
                    <div class="col-sm-2">
                        <label for="">Dirección</label>
                    </div>
                    <div class="col-sm-10">
                        <input class="form-control control-info" value="{{Auth::user()->deudor->detalle_deudor->direccion}}" type="text" name="" id="" placeholder="" readonly>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    </div>
</div>

@endsection
<!--fin del contenido de perfil deudor-->