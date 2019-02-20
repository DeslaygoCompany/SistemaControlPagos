<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deuda extends Model
{
    protected $table = "deuda";
    
    protected $fillable = ["banco_predilecto","total","concepto"];
    
    public function deudor(){
       return $this->belongsTo(Deudor::class,'id_deudor');
    }
}
