<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deudor extends Model
{
    //
    protected $table = "deudor";
    
    protected $fillable = [
                          'nombre',
                          'apellidos',
                          'profesion',
                          'estado_republica',
                          'fecha_nacimiento',
                          'estado_civil',
                          'telefono'];
    
    public function detalle_deudor(){
       return  $this->hasOne(Detalle_deudor::class,'id_deudor');
    }
    
    public function deuda(){
       return  $this->hasOne(Deuda::class,'id_deudor');
    }
    
     public function user(){
        return $this->hasOne(User::class,'id_deudor');
    }
}
