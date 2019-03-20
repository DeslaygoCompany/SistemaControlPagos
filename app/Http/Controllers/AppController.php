<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Uso de los modelos
use App\Detalle_deudor;
use App\Deuda;
use App\Factura;
use App\Deudor;
use App\User;
use Carbon\Carbon;


class AppController extends Controller
{
    //ruta para la página de inicio
    public function mainDeudo(){
        return view('modulos.perfil-deudor.historial-pagos');
    }
    //ruta para la página de inicio
    public function mainAdmin(){
        return view('main-admin');
    }
    //ruta para la página de deudores
    public function deudores(){
        $deudores= Deudor::all();
        
        return view('modulos.deudores.main',[
                   'deudores' =>  $deudores,
                   ]);
    }
    //ruta para la página de pagos
    public function pagos(){
        $deudores= Deudor::all();
        //se genera un folio para la factura
         $facturas= Factura::all();
        $ultimaFact = $facturas->last();
        if(is_null($ultimaFact)){
            $folio= 1;
            
        }else{
         $numFact = $ultimaFact->folio;
         $folio = $numFact + 1;
        }
        
        $fe = Carbon::now('America/Chicago');
        $fecha = $fe->format('d/m/Y h:i');
        
        
        return view('modulos.facturas.main',[
            'deudores' => $deudores,
            'fecha'=> $fecha,
            'folio' => $folio,
            'facturas' => $facturas
        ]);
    }
    //ruta para la página de usuarios
    public function usuarios(){
		$users=User::all();
        return view('modulos.usuarios.main', [
			'users'=>$users,
		]);
    }
    
    //ruta que muestra la informacionen el perfil del deudor
    public function informacion(){
        return view('modulos.perfil-deudor.informacion');
    }
    
    //En caso de no encontrar la ruta
    public function notFound(){
        return view('modulos.errors.404');
    }
}
