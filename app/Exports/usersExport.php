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

use App\User;

class usersExport implements FromQuery,ShouldAutoSize,WithHeadings, WithEvents
{
   /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;
    
    public function query()
    {
        return User::query('users.id','users.username','users.email','users.rol','user.created-at')->select();   
   }
    
    public function headings():array
    {
        return [
            '#',
            'Nombre de usuario',
            'Correo electrónico',
            'Rol',
            'Creado el',
            'Actualizado el'
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
                $cellRange = 'A1:G1'; // All headers
                //titulo para la hoja de trabajo
                $event->sheet->setTitle('Usuarios');
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
