<?php

namespace App\Http\Pdfs;

use App\MovimientoView;
use App\Negocio;
use View;
use Illuminate\Support\Facades\Log;
use PHPExcel_Style_NumberFormat;
use PHPExcel_Shared_Date;
use PHPExcel_Calculation;
use App\Cuenta;

class CuentaExcel{

  public $desde = null; 
  public $hasta = null; 

  public function header($sheet){

    $sheet->setCellValue('A1','Inversiones Goldex '); 
    if(!empty($this->desde)) {
      $sheet->setCellValue('C1','DESDE :'. $this->desde); 
    }
    if(!empty($this->hasta)){
      $sheet->setCellValue('C2','HASTA :'. $this->hasta); 
    }
  }


	public function generar($desde,$hasta){

    $this->desde = $desde;
    $this->hasta = $hasta;
    $cuentas = Cuenta::all();
    $excel = \Excel::create('Filename', function($excel) use($cuentas) {
    $excel->setTitle('Reporte');
    $excel->setCreator('Goldex');
    $excel->setDescription('Reporte');
    $self = $this;
    $excel->sheet('cuentas', function($sheet) use($cuentas,$self) {
        $i = 4;
        $self->header($sheet);
        $sheet->setCellValue('A3',"Cuenta"); 
        $sheet->setCellValue('B3',"Total Transferencias");
        $sheet->setCellValue('C3',"Total Abonos");
        $sheet->setCellValue('D3',"Total Gastos");
        $sheet->setCellValue('E3',"Balance");

        $sheet->getStyle('B:B')->getNumberFormat()->setFormatCode('#,##0.00');
        $sheet->getStyle('C:C')->getNumberFormat()->setFormatCode('#,##0.00');
        $sheet->getStyle('D:D')->getNumberFormat()->setFormatCode('#,##0.00');
        $sheet->getStyle('E:E')->getNumberFormat()->setFormatCode('#,##0.00');
 
        foreach ($cuentas as $key => $cuenta) {
          $transferencia = $cuenta->totalTransferencia($self->desde,$self->hasta);
          $abonos =  $cuenta->totalAbono($self->desde,$self->hasta);
          $gastos =  $cuenta->totalGasto($self->desde,$self->hasta);
          $balance = $abonos - $transferencia - $gastos;
          
          $celda = 'A' . (string)($i);
          $sheet->setCellValue($celda,$cuenta->numero);
          
          $celda = 'B' . (string)($i);
          $sheet->setCellValue($celda,$transferencia);
          
          $celda = 'C' . (string)($i);
          $sheet->setCellValue($celda, $abonos);
          
          $celda = 'D' . (string)($i);
          $sheet->setCellValue($celda,$gastos);
          
          $celda = 'E' . (string)($i);
          $sheet->setCellValue($celda,$balance);
          
          $i++;
        }
	    });
    })->download('xlsx');
	}
}
