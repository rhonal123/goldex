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

class AbonoExcel {


  public $desde = null; 
  public $hasta = null; 
  public $negocio;

  public function header($sheet){
    
    $sheet->setCellValue('A1','Inversiones Goldex '); 
    $sheet->setCellValue('A2',"Abonos"); 

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
    $movimientos = MovimientoView::movimientos($desde,$hasta,$negocio_id,$cuenta_id,$ordenarTipo,2);
    $this->negocio = Negocio::find($negocio_id);
    $excel = \Excel::create('Filename', function($excel) use($movimientos) {
    $excel->setTitle('Reporte Abonos ');
    $excel->setCreator('Goldex');
    $excel->setDescription('reporte general de movimientos asociados a cuenta');
    $self = $this;
    $excel->sheet('movimientos', function($sheet) use($movimientos,$self) {
        //$sheet->fromArray($movimientos);
        $i = 4;
        $self->header($sheet);
        $sheet->setCellValue('A3',"FECHA"); 
        $sheet->setCellValue('B3',"DESCRIPCION");
        $sheet->setCellValue('C3',"REF o COMI");
        $sheet->setCellValue('D3',"CUENTA");
        $sheet->setCellValue('E3',"MONTO");

        $sheet->getStyle('A:A')->getNumberFormat()->setFormatCode('dd/mm/yyyy');
        $sheet->getStyle('D:D')->getNumberFormat()->setFormatCode('#,##0.00');
        $sheet->getStyle('E:E')->getNumberFormat()->setFormatCode('#,##0.00');

         $style = array(
          'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
          )
        );
        $sheet->getStyle("D:D")->applyFromArray($style);
 
 
        foreach ($movimientos as $key => $value) {
          $celda = 'A' . (string)($i);
          $sheet->setCellValue($celda,PHPExcel_Shared_Date::PHPToExcel( $value->fecha));
          $celda = 'B' . (string)($i);
          $sheet->setCellValue($celda, $value->descripcion);
          
          if($value->tipo == "TRANSFERENCIA"){
            $celda = 'C' . (string)($i);
            $sheet->setCellValue($celda, $value->referencia);
            $celda = 'D' . (string)($i);
            $sheet->setCellValue($celda, $value->cuenta);
          }
          else{
            $celda = 'C' . (string)($i);
            $sheet->setCellValue($celda, 'EFECTIVO '.$value->comision.' %');
            $celda = 'D' . (string)($i);
            $sheet->setCellValue($celda, $value->monto * ($value->comision /100));
          }
          $celda = 'E' . (string)($i);
          $sheet->setCellValue($celda, $value->saldo);
          $i++;
        }
      });
    })->download('xlsx');
  }
}
