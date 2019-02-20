<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException; 

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
    public function perfil(){
        return view('modulos.deudores.perfil');
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
        $user->username= 'user1';
        $user->email= $email;
        $user->password= 'user1';
        $user->rol= $rol;
        
        $deudor->user()->save($user);
            
        DB::commit();
            return back()->with('success','El deudor se ha guardado correctamente.');
        }catch(QueryException $ex){
            DB::rollBack();
            return back()->with('status','Ocurrieon algunos problemas en el proceso, intentelo de nuevo.');
        }

    }
    
    //Método para exportar a excel
    public function exportarDeudores(){
        //'detalle_deudor:celular,skype,pais,nacionalidad,rfc,razon_social,direccion',
        //    'user:username,email,rol',
        /*$deudores = Deudor::query()
            ->join('detalle_deudor','deudor.id','=','detalle_deudor.id_deudor')
            ->join('deuda','deudor.id','=','deuda.id_deudor')
            ->join('users','deudor.id','=','users.id_deudor')->select(
            'deudor.id',
            'deudor.nombre',
            'deudor.apellidos',
            'deudor.profesion',
            'deudor.estado_republica',
            'deudor.fecha_nacimiento',
            'deudor.estado_civil',
            'deudor.telefono',
            'detalle_deudor.celular',
            'detalle_deudor.skype',
            'detalle_deudor.pais',
            'detalle_deudor.nacionalidad',
            'detalle_deudor.rfc',
            'detalle_deudor.razon_social',
            'detalle_deudor.direccion',
            'deuda.banco_predilecto',
            'deuda.total',
            'deuda.concepto',
            'users.username',
            'users.email',
            'users.password',
            'users.rol',
            'deudor.created_at as creado',
            'deudor.updated_at as actualizado')->get();
        dd($deudores);*/
        return (new DeudorExport)->download('deudores.xlsx');
    }
    
}
