<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_factura extends Model
{
    //
    protected $table = "detalle_factura";
    
    protected $fillable = [
        'metodo_pago',
        'banco',
        'no_cuenta',
        'cantidad',
        'nota'
    ];
    
    public function factura(){
        return $this->belongsTo(Factura::class, 'id_factura');
    }
}
