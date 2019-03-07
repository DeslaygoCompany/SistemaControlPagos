<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //
    protected $table = "factura";
     
    protected $fillable=[
        'folio',
        'nombre_empresa',
        'direccion',
        'telefono',
        'fecha_expedicion',
        'estado',
        'no_pago',
        'fecha_pago'
    ];
    
    public function detalle_factura(){
        return $this->hasOne(Detalle_factura::class,'id_factura');
    }
}
