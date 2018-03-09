<?php

namespace App\Http\Pdfs;

use App\MovimientoView;
use App\Negocio;
use View;
use Illuminate\Support\Facades\Log;
use PHPExcel_Style_NumberFormat;
use PHPExcel_Shared_Date;
use PHPExcel_Calculation;
use PHPExcel_Style_Alignment; 
class MovimientoExcel{


  public $desde = null; 
  public $hasta = null; 
  public $negocio;

   public function negocios_datos()
   {
      $elements =  array_map(function($element){ return $element['nombre']; },$this->negocio->toArray());
      return implode(",", $elements); 
   }


  public function header($sheet){
    
    $sheet->setCellValue('A1','Inversiones Goldex '); 
    $sheet->setCellValue('A2',"Transferencias"); 

    if(!empty($this->negocio)) {
      $sheet->setCellValue('C1','Socio o Negocio : '.$this->negocios_datos()); 
    }
    if(!empty($this->desde)) {
      $sheet->setCellValue('C1','DESDE :'. $this->desde); 
    }
    if(!empty($this->hasta)){
      $sheet->setCellValue('C2','HASTA :'. $this->hasta); 
    }
  }


  public function generar($desde,$hasta,$negocio_id,$cuenta_id,$ordenarTipo){

    $this->desde = $desde;
    $this->hasta = $hasta;
//    $movimientos = MovimientoView::movimientos($desde,$hasta,$negocio_id,$cuenta_id,$ordenarTipo);
    $movimientos = MovimientoView::movimientos($desde,$hasta,$negocio_id,$cuenta_id,$ordenarTipo,[1,2,3]);
    $this->negocio = Negocio::find($negocio_id);
    $excel = \Excel::create('Filename', function($excel) use($movimientos) {
    $excel->setTitle('Reporte transferencias ');
    $excel->setCreator('Goldex');
    $excel->setDescription('reporte general de movimientos asociados a cuenta');
    $self = $this;
    $excel->sheet('movimientos', function($sheet) use($movimientos,$self) {
        $i = 4;
        $self->header($sheet);
        $sheet->setCellValue('A3',"FECHA"); 
        $sheet->setCellValue('B3',"NEGOCIO");
        $sheet->setCellValue('C3',"DESCRIPCION");
        $sheet->setCellValue('D3',"REF o COMI");
        $sheet->setCellValue('E3',"CUENTA");
        $sheet->setCellValue('F3',"MONTO");

        $sheet->getStyle('A:A')->getNumberFormat()->setFormatCode('dd/mm/yyyy');
        $sheet->getStyle('E:E')->getNumberFormat()->setFormatCode('#,##0.00');
        $sheet->getStyle('F:F')->getNumberFormat()->setFormatCode('#,##0.00');

         $style = array(
          'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
          )
        );
        $sheet->getStyle("D:D")->applyFromArray($style);
 
         $style = array(
          'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
          )
        );
        $sheet->getStyle("E:E")->applyFromArray($style);
 

        foreach ($movimientos as $key => $value) {
          $celda = 'A' . (string)($i);
          $sheet->setCellValue($celda,PHPExcel_Shared_Date::PHPToExcel( $value->fecha));
          $celda = 'B' . (string)($i);
          $sheet->setCellValue($celda,$value->negocio);
          $celda = 'C' . (string)($i);
          $sheet->setCellValue($celda, $value->descripcion);
          
          if($value->tipo == "TRANSFERENCIA"){
            $celda = 'D' . (string)($i);
            $sheet->setCellValue($celda, $value->referencia);
            $celda = 'E' . (string)($i);
            $sheet->setCellValue($celda, $value->cuenta);
          }
          else{
            $celda = 'D' . (string)($i);
            $sheet->setCellValue($celda, 'EFECTIVO '.$value->comision.' %');
            $celda = 'E' . (string)($i);
            $sheet->setCellValue($celda, $value->monto * ($value->comision /100));
          }
          $celda = 'F' . (string)($i);
          $sheet->setCellValue($celda, $value->saldo);
          $i++;
        }
      });
    })->download('xlsx');
  }
}
