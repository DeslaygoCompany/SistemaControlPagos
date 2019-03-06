<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException; 
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

//Uso de los modelos
use App\Detalle_deudor;
use App\Deuda;
use App\Deudor;
use App\User;

//uso de la clase de exportacion
use App\Exports\DeudorExport;

class DeudorController extends Controller
{
    //Método para mostrar el perfil del deudor
    public function perfil(Deudor $deudor){
        return view('modulos.deudores.perfil',[
            'deudor' => $deudor,
        ]);
    }
    
    //Método para mostrar el historial de pagos del deudor
    public function historial(){
        return view('modulos.perfil-deudor.historial-pagos');
    }
    
    //Método para mostrar la información del deudor
    public function informacion(){
        return view('modulos.perfil-deudor.informacion');
    }
    //Método para agregar la información del deudor
    public function agregar_deudor(Request $request){
       
        //obtención de los datos para deudor
        $nombre= $request->input('nombre');
        $apellidos= $request->input('apellidos');
        $profesion= $request->input('profesion');
        $estado_republica= $request->input('estado');
        $fecha_nacimiento= $request->get('fecha_nacimiento');
        $estado_civil= $request->get('estado_civil');
        $telefono= $request->input('telefono');
        
        //obtención de los datos para detalle del deudor
        $celular= $request->input('celular');
        $skype= $request->input('skype');
        $pais= $request->input('pais');
        $nacionalidad= $request->input('nacionalidad');
        $rfc= $request->input('rfc');
        $razon_social= $request->input('razon_social');
        $direccion= $request->input('direccion');
        
        //obtención de los datos para deuda
        $banco_predilecto= $request->input('banco_predilecto');
        $total= $request->input('total');
        $concepto= $request->input('concepto');
        
        //obtención de los datos para usuario
        $username = $request->input('username');
        $email= $request->input('email');
        $password= $request->input('password');
        $rol ="Deudor";
        $exception= DB::beginTransaction();
        
        $verUser= User::where('username','user1')->first();
        if(is_null($verUser)){
            return response->json($verUser);
        }
        else{
            $sesion = Session::flash('status');
            return return response->json($verUser);
            
        }
        
        try{
        //Guardar datos de deudor
        $deudor = new Deudor();
        //Inica la transaccion en la base de datos
        
        $deudor->nombre= $nombre;
        $deudor->apellidos= $apellidos;
        $deudor->profesion= $profesion;
        $deudor->estado_republica= $estado_republica;
        $deudor->fecha_nacimiento= $fecha_nacimiento;
        $deudor->estado_civil= $estado_civil;
        $deudor->telefono= $telefono;
        $deudor->save();
        
        //Guardar datos de  detalle deudor
        $detalleDeudor = new Detalle_deudor();
        $detalleDeudor->celular= $celular;
        $detalleDeudor->skype= $skype;
        $detalleDeudor->pais= $pais;
        $detalleDeudor->nacionalidad= $nacionalidad;
        $detalleDeudor->rfc= $rfc;
        $detalleDeudor->razon_social= $razon_social;
        $detalleDeudor->direccion= $direccion;
        $deudor->detalle_deudor()->save($detalleDeudor);
        
        //Guardar datos para deuda
        $deuda= new Deuda();
        $deuda->banco_predilecto = $banco_predilecto;
        $deuda->total= $total;
        $deuda->concepto= $concepto;
        $deudor->deuda()->save($deuda);
        
        //Guardar datos para usuario
        $user = new User();
        $user->username= $username;
        $user->email= $email;
        $user->password= $password;
        $user->rol= $rol;
        
        $deudor->user()->save($user);
            
        DB::commit();
            alert()->success('¡Operación exitosa!','El deudor se ha guardado correctamente.')->persistent('Cerrar');
            return back();
            //return back()->with('success','El deudor se ha guardado correctamente.');
        }catch(QueryException $ex){
            dd($ex);
            DB::rollBack();
            alert()->error('¡Hubo un problema','Ocurrieron algunos problemas en el proceso, intentelo de nuevo.')->persistent('Cerrar');
            return back();
            //return back()->with('status','Ocurrieron algunos problemas en el proceso, intentelo de nuevo.');
        }

    }
    
    //Método para eliminar la información de un deudor
    public function eliminar_deudor(Request $request){
        $id = $request->input('id');
        try{
            $deudor = Deudor::where('id',$id)->first();
            $deudor->delete();
            return back()->with('success','El deudor se elimino con exito.');
        }catch(QueryException $ex){
            return back()->with('status','Ocurrieron algunos problemas en el proceso, intentelo de nuevo.');
             
        }
        
        
        
    }
    
    //Método para actualizar la información del deudor
    public function actualizar_deudor(Request $request){
         //obtención de los datos para deudor
        $id= $request->input('id');
        $nombre= $request->input('nombre');
        $apellidos= $request->input('apellidos');
        $profesion= $request->input('profesion');
        $estado_republica= $request->input('estado');
        $fecha_nacimiento= $request->get('fecha_nacimiento');
        $estado_civil= $request->get('estado_civil');
        $telefono= $request->input('telefono');
        
        //obtención de los datos para detalle del deudor
        $celular= $request->input('celular');
        $skype= $request->input('skype');
        $pais= $request->input('pais');
        $nacionalidad= $request->input('nacionalidad');
        $rfc= $request->input('rfc');
        $razon_social= $request->input('razon_social');
        $direccion= $request->input('direccion');
        
        //obtención de los datos para deuda
        $banco_predilecto= $request->input('banco_predilecto');
        $total= $request->input('total');
        $concepto= $request->input('concepto');
        
        //obtención de los datos para usuario
        $username = $request->input('username');
        $email= $request->input('email');
        $password= $request->input('password');
        $rol ="Deudor";
        $exception= DB::beginTransaction();
        try{
        //Guardar datos de deudor
        $deudor = Deudor::find($id);
        //Inica la transaccion en la base de datos
        
        $deudor->nombre= $nombre;
        $deudor->apellidos= $apellidos;
        $deudor->profesion= $profesion;
        $deudor->estado_republica= $estado_republica;
        $deudor->fecha_nacimiento= $fecha_nacimiento;
        $deudor->estado_civil= $estado_civil;
        $deudor->telefono= $telefono;
        $deudor->save();
        
        //Guardar datos de  detalle deudor
        $detalleDeudor = Detalle_deudor::where('id_deudor',$id)->first();
        $detalleDeudor->celular= $celular;
        $detalleDeudor->skype= $skype;
        $detalleDeudor->pais= $pais;
        $detalleDeudor->nacionalidad= $nacionalidad;
        $detalleDeudor->rfc= $rfc;
        $detalleDeudor->razon_social= $razon_social;
        $detalleDeudor->direccion= $direccion;
        $detalleDeudor->save();
        
        //Guardar datos para deuda
        $deuda=Deuda::where('id_deudor',$id)->first();
        $deuda->banco_predilecto = $banco_predilecto;
        $deuda->total= $total;
        $deuda->concepto= $concepto;
        $deuda->save();
        
        //Guardar datos para usuario
        $user = User::where('id_deudor',$id)->first();
        $user->username= $username;
        $user->email= $email;
        $user->password= $password;
        $user->rol= $rol;
        
        $user->save();
            
        DB::commit();
            return back()->with('success','El deudor se ha actualizado correctamente.');
        }catch(QueryException $ex){
            dd($ex);
            DB::rollBack();
            return back()->with('status','Ocurrieron algunos problemas en el proceso, intentelo de nuevo.');
        }
    }
    //Método para exportar a excel
    public function exportarDeudores(){        
     return (new DeudorExport)->download('deudores.xlsx');
    }
    
}
