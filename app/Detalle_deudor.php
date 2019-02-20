<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_deudor extends Model
{
     protected $table = "detalle_deudor";
    
    protected $fillable = ['celular',
                          'skype',
                          'pais',
                          'nacionalidad',
                          'rfc',
                          'razon social',
                          'direccion'];
     public function deudor(){
       return $this->belongsTo(Deudor::class,'id_deudor');
    }
}
