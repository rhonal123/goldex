<?php

namespace App\Http\Pdfs;

use App\MovimientoView;
use App\Negocio;
use View;
use Illuminate\Support\Facades\Log;
use PHPExcel_Style_NumberFormat;
use PHPExcel_Shared_Date;
use PHPExcel_Calculation;
class GeneralExcel{

  public $desde = null; 
  public $hasta = null; 
  public $negocio;

  public function header($sheet){
    
    $sheet->setCellValue('A1','Inversiones Goldex '); 
    $sheet->setCellValue('A2',"General"); 

    if(!empty($this->negocio)) {
      $sheet->setCellValue('C1','Socio o Negocio : '.$this->negocio->nombre .' '. $this->negocio->rif); 
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
    $movimientos = MovimientoView::afectabanco($desde,$hasta,$negocio_id,$cuenta_id,$ordenarTipo);
    $this->negocio = Negocio::find($negocio_id);
    $excel = \Excel::create('Filename', function($excel) use($movimientos) {
    $excel->setTitle('Reporte General ');
    $excel->setCreator('Goldex');
    $excel->setDescription('reporte general de movimientos asociados a cuenta');
    $self = $this;
    $excel->sheet('movimientos', function($sheet) use($movimientos,$self) {
        //$sheet->fromArray($movimientos);
        $i = 4;
        $self->header($sheet);
        $sheet->setCellValue('A3',"FECHA"); 
        $sheet->setCellValue('B3',"REFERENCIA");
        $sheet->setCellValue('C3',"DESCRIPCION");
        $sheet->setCellValue('D3',"NEGOCIO");
        $sheet->setCellValue('E3',"CUENTA");
        $sheet->setCellValue('F3',"DEBE");
        $sheet->setCellValue('G3',"HABER");

        $sheet->getStyle('A:A')->getNumberFormat()->setFormatCode('dd/mm/yyyy');
        $sheet->getStyle('F:F')->getNumberFormat()->setFormatCode('#,##0.00');
        $sheet->getStyle('G:G')->getNumberFormat()->setFormatCode('#,##0.00');

        foreach ($movimientos as $key => $value) {
          $celda = 'A' . (string)($i);
          $sheet->setCellValue($celda,PHPExcel_Shared_Date::PHPToExcel( $value->fecha));
          $celda = 'B' . (string)($i);
          $sheet->setCellValue($celda,$value->referencia);
          $celda = 'C' . (string)($i);
          $sheet->setCellValue($celda, $value->descripcion);

          $celda = 'D' . (string)($i);
          if($value->clasificacion == 3){
            $sheet->setCellValue($celda, "GASTO");
          }
          else{
            $sheet->setCellValue($celda,$value->negocio);
          }
          $celda = 'E' . (string)($i);
          $sheet->setCellValue($celda, $value->cuenta);

          $celda = 'F' . (string)($i);
          $_otraCelda = 'G' . (string)($i);
          if($value->clasificacion == 2){ 
            $sheet->setCellValue($celda, $value->saldo);
            $sheet->setCellValue($_otraCelda, 0);
          }
          else{
            $sheet->setCellValue($celda, 0);
            $sheet->setCellValue($_otraCelda, $value->saldo);
          }
          $i++;
        }
	    });
    })->download('xlsx');
	}
}
