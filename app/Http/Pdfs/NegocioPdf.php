<?php

namespace App\Http\Pdfs;
 
use Elibyy\TCPDF\Facades\TCPDF;

use App\MovimientoView;
use App\Negocio;
use App\Cuenta;
use View;
use Illuminate\Support\Facades\Log;

class NegocioPdf extends \TCPDF {

  public $desde = null; 
  public $hasta = null; 

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
        $this->Cell(0,0, '', 0, false, 'C', 0, '', 0, false, 'M', 'M');
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
	public function generar($desde,$hasta) {
		$negocios = Negocio::all();
   	$this->desde = $desde;
   	$this->hasta = $hasta;
		$this->SetFont('times', null, 12);
		$this->SetMargins(PDF_MARGIN_LEFT, 40, PDF_MARGIN_RIGHT);
		$this->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
		$this->setImageScale(PDF_IMAGE_SCALE_RATIO);
		$this->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		$this->SetFooterMargin(PDF_MARGIN_FOOTER);
		$this->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$this->SetHeaderMargin(PDF_MARGIN_HEADER);
		$this->AddPage('L', 'LETTER');
    $header= true;
		foreach ($negocios as $negocio) {
			$transferencia = $negocio->totalTransferencia($desde,$hasta);
			$abonos =  $negocio->totalAbono($desde,$hasta);
			$gastos =  $negocio->totalGasto($desde,$hasta);
      $balance = $abonos - $transferencia - $gastos;
			if($header){
				$this->Ln();
				$this->SetFont('times', null, 9);
				$this->SetFillColor(243, 255, 166);
		 		$this->Cell(90,7,"Negocio", 1, 0, 'C', 1);
		 		$this->Cell(40,7,"Total transferencias", 1, 0, 'C', 1);
		 		$this->Cell(40,7,"Total abonos", 1, 0, 'C', 1);
		 		$this->Cell(40,7,"Total gastos", 1, 0, 'C', 1);
		 		$this->Cell(40,7,"Balance", 1, 0, 'C', 1);
		    $this->Ln();
		    $header = false;
		  }
      $this->Cell(90,7,$negocio->nombre, 1, 0, 'C');
      $this->Cell(40,7,number_format($transferencia,2), 1, 0, 'C');
      $this->Cell(40,7,number_format($abonos,2), 1, 0, 'C');
      $this->Cell(40,7,number_format($gastos,2), 1, 0, 'C');
      $this->Cell(40,7,number_format($balance,2), 1, 0, 'C');
		  $this->ln();
      if($this->checkPageBreak($this->lasth)){
      	$header = true;
      }
		}
    $this->Output();
	}


}
