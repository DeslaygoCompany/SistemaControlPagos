<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException; 

use App\Factura;
use App\Detalle_factura;

use App\Exports\FacturasExport;

class FacturasController extends Controller
{
    //Método para agregar una factura
    public function agregar_factura(Request $request){
        
        //obtencion de datos para factura
        $folio = $request->input('folio');
        $nombre_empresa = $request->input('nombre_empresa');
        $direccion = $request->input('direccion');
        $telefono = $request->input('telefono');
        $fecha_expedicion = $request->input('fecha_expedicion');
        $estado = $request->get('estado');
        $no_pago = $request->input('no_pago');
        $fecha_pago = $request->get('fecha_pago');
        $idDeudor = $request->get('deudor');
        
        //obtencion de datos para detalle_factura
        
        $metodo_pago = $request->get('metodo_pago');
        $banco = $request->input('banco');
        $no_cuenta = $request->input('no_cuenta');
        $cantidad = $request->input('cantidad');
        $nota = $request->input('nota');
        
        $concepto = $request->input('concepto');
        $total = $request->input('total');
        
        $exception= DB::beginTransaction();
        try{
        
        //se guardan los datos para factura
        $factura = new Factura();
        $factura->folio= $folio;
        $factura->nombre_empresa = $nombre_empresa;
        $factura->direccion = $direccion;
        $factura->telefono = $telefono;
        $factura->fecha_expedicion = $fecha_expedicion;
        $factura->estado= $estado;
        $factura->no_pago = $no_pago;
        $factura->fecha_pago = $fecha_pago;
        $factura->id_deudor = $idDeudor;
        $factura->save();
        
        //se guardan los datos para factura
        $detalle_factura = new Detalle_factura();
        $detalle_factura->metodo_pago = $metodo_pago;
        $detalle_factura->banco = $banco;
        $detalle_factura->no_cuenta = $no_cuenta;
        $detalle_factura->cantidad = $cantidad;
        $detalle_factura->nota = $nota;
        $factura->detalle_factura()->save($detalle_factura);
        
        DB::commit();
        alert()->success('¡Operación exitosa!','La factura de pago se ha guardado correctamente.')->persistent('Cerrar');
        return back();
            
        }catch(QueryException $ex){
            DB::rollBack();
            alert()->error('¡Hubo un problema','Ocurrieron algunos problemas en el proceso, intentelo de nuevo.')->persistent('Cerrar');
            return back();
            
        }
        
    }
    
    //Método para cambiar el estado de una factura
    public function cambiarEstado(Request $request){
        $idFactura = $request->input('id');
        $estado = $request->get('estado');
        
        
        $exception= DB::beginTransaction();
        try{
            
            $factura= Factura::where('id',$idFactura)->first();
            $factura->estado = $estado;
            $factura->save();
            
            DB::commit();
            alert()->success('¡Operación exitosa!','El estado de la factura se ha guardado correctamente.')->persistent('Cerrar');
        return back();
        }catch(QueryException $ex){
            DB::rollBack();
            alert()->error('¡Hubo un problema','Ocurrieron algunos problemas en el proceso, intentelo de nuevo.')->persistent('Cerrar');
            return back();
        }
        
        
        
        
        
    }
    
    //Método para eliminar una factura
    public function eliminarFactura(Request $request){
        $idFactura = $request->input('id');
        try{
         $factura = Factura::where('id',$idFactura)->first();
         $factura->delete();
         alert()->success('¡Operación exitosa!','La factura de pago se ha eliminado correctamente.')->persistent('Cerrar');
         return back();
            
        }catch(QueryException $ex){
            alert()->error('¡Hubo un problema','Ocurrieron algunos problemas en el proceso, intentelo de nuevo.')->persistent('Cerrar');
            return back();
        }
        
    }
    
    //Método para exportar a excel
    public function exportarFacturas(){        
     return (new FacturasExport)->download('Pagos.xlsx');
    }
    
}
