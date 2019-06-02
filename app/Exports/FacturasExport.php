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

use App\Factura;

class FacturasExport implements FromQuery,ShouldAutoSize,WithHeadings, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;
    
    public function query()
    {
        return Factura::query()
               ->join('detalle_factura','factura.id','=','detalle_factura.id_factura')
               ->join('deudor','deudor.id','=','factura.id_deudor')
               ->join('deuda','deudor.id','=','deuda.id_deudor')
               ->select(
               'factura.id',
               'factura.folio',
               'deudor.nombre',
               'deudor.apellidos',
               'factura.nombre_empresa',
               'factura.direccion',
               'factura.telefono',
               'factura.fecha_expedicion',
               'factura.estado',
               'factura.no_pago',
               'factura.fecha_pago',
               'detalle_factura.metodo_pago',
               'detalle_factura.banco',
               'detalle_factura.no_cuenta',
               'deuda.concepto',
               'deuda.total',
               'detalle_factura.cantidad',
               'detalle_factura.created_at',
               'detalle_factura.updated_at'
               );   
   }
    
    public function headings():array
    {
        return [
            '#',
            'folio',
            'nombre',
            'apellidos',
            'nombre de la empresa',
            'dirección',
            'teléfono',
            'fecha de expedición',
            'estado',
            'número de pago',
            'fecha de pago',
            'método de pago',
            'banco',
            'número de cuenta',
            'concepto',
            'total',
            'cantidad',
            'creado el ',
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
                $cellRange = 'A1:S1'; // All headers
                //titulo para la hoja de trabajo
                $event->sheet->setTitle('Pagos');
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
