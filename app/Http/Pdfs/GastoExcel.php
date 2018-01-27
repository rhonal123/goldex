<?php

namespace App\Http\Pdfs;

use App\MovimientoView;
use App\Negocio;
use View;
use Illuminate\Support\Facades\Log;
use PHPExcel_Style_NumberFormat;
use PHPExcel_Shared_Date;
use PHPExcel_Calculation;

class GastoExcel{

  public $desde = null; 
  public $hasta = null; 

  public function header($sheet){
    
    $sheet->setCellValue('A1','Inversiones Goldex '); 
    $sheet->setCellValue('A2',"Gastos"); 

    if(!empty($this->desde)) {
      $sheet->setCellValue('C1','DESDE :'. $this->desde); 
    }
    if(!empty($this->hasta)){
      $sheet->setCellValue('C2','HASTA :'. $this->hasta); 
    }
  }


	public function generar($desde,$hasta,$cuenta_id,$negocio_id,$ordenarTipo){

    $this->desde = $desde;
    $this->hasta = $hasta;
    $movimientos = MovimientoView::gastos($desde,$hasta,$cuenta_id,$negocio_id,$ordenarTipo);
    $excel = \Excel::create('Filename', function($excel) use($movimientos) {
    $excel->setTitle('Reporte Gastos ');
    $excel->setCreator('Goldex');
    $excel->setDescription('reporte de gastos');
    $self = $this;
    $excel->sheet('movimientos', function($sheet) use($movimientos,$self) {
        //$sheet->fromArray($movimientos);
        $i = 4;
        $self->header($sheet);
        $sheet->setCellValue('A3',"FECHA"); 
        $sheet->setCellValue('B3',"REFERENCIA");
        $sheet->setCellValue('C3',"DESCRIPCION");
        $sheet->setCellValue('D3',"CUENTA");
        $sheet->setCellValue('E3',"NEGOCIO");
        $sheet->setCellValue('F3',"MONTO");

        $sheet->getStyle('A:A')->getNumberFormat()->setFormatCode('dd/mm/yyyy');
        $sheet->getStyle('F:F')->getNumberFormat()->setFormatCode('#,##0.00');
 
        foreach ($movimientos as $key => $value) {
          $celda = 'A' . (string)($i);
          $sheet->setCellValue($celda,PHPExcel_Shared_Date::PHPToExcel( $value->fecha));
          $celda = 'B' . (string)($i);
          $sheet->setCellValue($celda,$value->referencia);
          $celda = 'C' . (string)($i);
          $sheet->setCellValue($celda, $value->descripcion);
          $celda = 'D' . (string)($i);
          $sheet->setCellValue($celda,$value->cuenta);
          $celda = 'E' . (string)($i);
          $sheet->setCellValue($celda, $value->negocio);
          $celda = 'F' . (string)($i);
          $sheet->setCellValue($celda, $value->saldo);
          $i++;
        }
	    });
    })->download('xlsx');
	}
}
