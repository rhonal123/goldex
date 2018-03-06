<?php

namespace App\Http\Pdfs;
 
use Elibyy\TCPDF\Facades\TCPDF;

use App\MovimientoView;
use App\Negocio;
use View;
use Illuminate\Support\Facades\Log;

class EfectivoPdf extends \TCPDF {

  public $desde = null; 
  public $hasta = null; 
  public $rowPerPage = 23.0;
  public $negocio;

  public function Header() {
        // Logo
        $image_file = public_path('assets/images/goldex310x310.jpg');
        $this->Image($image_file,25, 10, 30, '', 'JPG');
        // Set font
        $this->SetFont('helvetica', 'B', 20);
				$this->SetXY(0,20);
        $this->Cell(0, 0, 'Inversiones Goldex ', 0,0 , 'C', 0, '', 0, false, 'C', 'C');
        $this->Ln();
        $this->SetFont('helvetica', 'B', 11);
        $this->Cell(0,0, 'Caja Chica ', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        $this->Ln();

        if(!empty($this->desde)) {
	        $this->Ln();
					$this->SetXY(220,20);
	       	$this->Cell(0,0,'DESDE :'. $this->desde , 0, false, 'C', 0, '', 0, false, 'M', 'M');
      	}
        if(!empty($this->hasta)){
	        $this->Ln();	       	
					$this->SetXY(220,25);
	       	$this->Cell(0,0,'HASTA :'. $this->hasta , 0, false, 'C', 0, '', 0, false, 'M', 'M');
      	}
    }

	// Colored table
	public function generar($desde,$hasta,$ordenarTipo) {
   	$this->desde = $desde;
   	$this->hasta = $hasta;

   	$movimientos = MovimientoView::cajachica($desde,$hasta,$ordenarTipo);
		//dinero con el cual abrio la caja ese dia 
		$balanceInicio = MovimientoView::abonoCajaDiaAnterior($desde) - MovimientoView::salidaEfectivoDiaAnterior($desde); 

		//dinero con el cual finalizo la caja ese dia 
		$balanceFin = MovimientoView::abonoCaja($hasta) - MovimientoView::salidaEfectivo($hasta); 


		$this->SetFont('times', null, 12);
		$this->SetMargins(PDF_MARGIN_LEFT, 40, PDF_MARGIN_RIGHT);
		$this->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		$this->setImageScale(PDF_IMAGE_SCALE_RATIO);

		$this->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		$this->SetFooterMargin(PDF_MARGIN_FOOTER);

		$this->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$this->SetHeaderMargin(PDF_MARGIN_HEADER);

		$this->AddPage('L', 'LETTER');

    $total = floatval(count($movimientos));
    $totalPage = ceil($total / $this->rowPerPage );

    $header= true;
		foreach ($movimientos as $key => $value) {
			if($header){
				$this->Ln();
				$this->SetFont('times', null, 9);
				$this->SetFillColor(243, 255, 166);
		 		$this->Cell(15,7,"Fecha", 1, 0, 'C', 1);
		 		$this->Cell(40,7,"Negocio", 1, 0, 'C', 1);
		 		$this->Cell(100,7,"Descripcion", 1, 0, 'C', 1);
		 		$this->Cell(10,7,"%", 1, 0, 'C', 1);
		 		$this->Cell(30,7,"Comi", 1, 0, 'C', 1);
		 		$this->Cell(30,7,"Monto", 1, 0, 'C', 1);
		 		$this->Cell(30,7,"Total", 1, 0, 'C', 1);
		    $this->Ln();
		    $header = false;
		  }
		  $height =ceil(strlen($value->descripcion) / 76.0) * 6;
		  $heightNegocio =ceil(strlen($value->negocio) / 20.0) * 6;

		  if($height <  $heightNegocio){
				$height = $heightNegocio;		  	
		  }
 	    $descripcion = str_replace("/\r\n|\r|\n/"," ",$value->descripcion);
      $this->Cell(15, $height,$value->fecha->format('d/m/Y'), 1, 0, 'C');
	 		$this->MultiCell(40, $height,$value->negocio, 1, '', 0, 0, '', '', true, 0, false, true);
	 		$this->MultiCell(100, $height,$descripcion, 1, '', 0, 0, '', '', true, 0, false, true);
	    $this->Cell(10, $height,$value->comision.' %', 1, 0, 'C');
	    $this->Cell(30, $height,number_format($value->monto * ($value->comision /100),2), 1, 0, 'C');
		  $this->Cell(30, $height,number_format($value->monto, 2), 1, 0, 'C');
		  if($value->clasificacion == 1){
		  	$this->Cell(30, $height,number_format(-$value->saldo, 2) , 1, 0, 'C');
			}
			else
			{
			  $this->Cell(30, $height,number_format($value->saldo, 2) , 1, 0, 'C');
			}
		  $this->ln();
      if($this->checkPageBreak($this->lasth)){
      	$header = true;
      }
		}

    $this->SetFont('helvetica', 'N', 11);
    $this->Ln();
		$this->Cell(0, 0, 'BALANCE INICIAL: '. number_format($balanceInicio, 2) .' Bs', 0, 0, 'R');
    $this->Ln();
		$this->Cell(0, 0, 'BALANCE FINAL : '. number_format($balanceFin, 2) .' Bs', 0, 0, 'R');
    $this->Ln();
    $this->Output();
	}

	private function initPage($i){
		return $i*$this->rowPerPage;
	}


	private function untilPage($i){
		return $i*$this->rowPerPage+$this->rowPerPage;
	}


}
