<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Border;

use App\Deudor;

class DeudorExport implements FromQuery,ShouldAutoSize,WithHeadings, WithEvents
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
    
    //Método que da el encabezado de cada columna
     public function headings():array
    {
        return [
            '#',
            'nombre',
            'apellidos',
            'profesión',
            'estado de la república',
            'fecha de nacimiento',
            'estado civil',
            'teléfono',
            'celular',
            'skype',
            'país',
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
    
     public function registerEvents(): array
    {
         $styleArray = [
            'borders' => [
                'allBorders' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                'color' => ['argb' => '25283D'],
            ],
            ],
        ];
         return [
            AfterSheet::class    => function(AfterSheet $event) use ($styleArray) {
                $cellRange = 'A1:X1'; // All headers
                //titulo para la hoja de trabajo
                $event->sheet->setTitle('Deudores');
                //tamaño de fuente para los encabezados
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
                //estilo de los bordes para el encabezado
                $event->sheet->getStyle($cellRange)->applyFromArray($styleArray);
                //color de letra para los encabezados de las columnas
                $event->sheet->getStyle($cellRange)->getFont()->getColor()->setARGB('FFFFFF');
                //llenado de color de los encabezados
                $event->sheet->getStyle($cellRange)
                ->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
                $event->sheet->getStyle($cellRange)
                ->getFill()->getStartColor()->setARGB('25283D');
            }
        ];
    }
}
