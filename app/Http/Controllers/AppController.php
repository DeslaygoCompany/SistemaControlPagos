<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Uso de los modelos
use App\Detalle_deudor;
use App\Deuda;
use App\Deudor;
use App\User;
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
        $deudores= Deudor::paginate(15);
        return view('modulos.deudores.main',[
                   'deudores' =>  $deudores,
                   ]);
    }
    //ruta para la página de pagos
    public function pagos(){
        return view('modulos.facturas.main');
    }
    //ruta para la página de usuarios
    public function usuarios(){
        return view('modulos.usuarios.main');
    }
}
