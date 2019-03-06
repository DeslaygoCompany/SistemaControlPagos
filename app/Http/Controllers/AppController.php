<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Uso de los modelos
use App\Detalle_deudor;
use App\Deuda;
use App\;
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
        
        
        $fe = Carbon::now('America/Chicago');
        $fecha = $fe->format('d/m/Y h:i');
        
        
        return view('modulos.facturas.main',[
            'deudores' => $deudores,
            'fecha'=> $fecha
        ]);
    }
    //ruta para la página de usuarios
    public function usuarios(){
        return view('modulos.usuarios.main');
    }
    
    public function actual_date ()  
{  
    $week_days = array ("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");  
    $months = array ("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");  
    $year_now = date ("Y");  
    $month_now = date ("n");  
    $day_now = date ("j");  
    $week_day_now = date ("w");  
    $date = $week_days[$week_day_now] . ", " . $day_now . " de " . $months[$month_now] . " de " . $year_now;   
    return $date;    
}
}
