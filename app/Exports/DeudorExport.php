<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

use App\Deudor;

class DeudorExport implements FromQuery,ShouldAutoSize,WithHeadings
{
    /**
    * @return \Illuminate\Database\Query\Builder
    */
    use Exportable;
    
    public function query()
    {
        //
        return Deudor::query()
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
            'deudor.updated_at as actualizado');
    }
    
     public function headings():array
    {
        //return User::select('id','name','email')->get();
        return [
            '#',
            'Nombre',
            'apellidos',
            'profesión',
            'estado de la republica',
            'fecha de nacimiento',
            'estado civil',
            'telefono',
            'celular',
            'skype',
            'pais',
            'nacionalidad',
            'rfc',
            'razon social',
            'dirección',
            'banco predilecto',
            'total',
            'concepto',
            'nombre de usuario',
            'correo electrónico',
            'contraseña',
            'rol',
            'creado el',
            'actualizado el',
        ];
    }
}
