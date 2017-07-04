<?php

namespace App\Http\Pdfs;
 
use Elibyy\TCPDF\Facades\TCPDF;

use App\Movimiento;
use App\Negocio;

class MovimientoPdf extends \TCPDF {

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
        $this->Cell(0,0, 'Lista de Movimientos', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        $this->Ln();

        if(!empty($this->negocio)) {
	       	$this->Cell( 0, 0,
	       			' Socio o Negocio : '. $this->negocio->nombre .' '. $this->negocio->rif,
	       			0, false, 'C', 0, '', 0, false, 'M', 'M');
      	}

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
	public function generar($desde,$hasta,$negocio_id,$cuenta_id,$ordenar,$ordenarTipo) {
   	$this->desde = $desde;
   	$this->hasta = $hasta;
   	$movimientos = Movimiento::movimientos($desde,$hasta,$negocio_id,$cuenta_id,$ordenar,$ordenarTipo);
   	$this->negocio = Negocio::find($negocio_id);
		$this->SetFont('times', null, 12);
		$this->SetMargins(PDF_MARGIN_LEFT, 40, PDF_MARGIN_RIGHT);
		$this->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
		$this->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
		$this->setImageScale(PDF_IMAGE_SCALE_RATIO);

	
		$this->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		$this->SetFooterMargin(PDF_MARGIN_FOOTER);

		$this->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$this->SetHeaderMargin(PDF_MARGIN_HEADER);

		$this->AddPage('L', 'LETTER');

		///$this->Image(public_path('assets/images/goldex310x310.jpg'),25,10,35,35);
    $total = floatval(count($movimientos));
    $totalPage = ceil($total / $this->rowPerPage );

    for($i = 0; $i < $totalPage; $i++) {
		  $this->Ln();
			$this->SetFont('times', null, 9);
			$this->SetFillColor(243, 255, 166);
	 		$this->Cell(10,7,"Id", 1, 0, 'C', 1);
	 		$this->Cell(70,7,"Descripcion", 1, 0, 'C', 1);
	 		$this->Cell(50,7,"Negocio", 1, 0, 'C', 1);
	 		$this->Cell(40,7,"Cuenta", 1, 0, 'C', 1);
	 		$this->Cell(40,7,"Referencia o Comision", 1, 0, 'C', 1);
	 		$this->Cell(40,7,"Monto", 1, 0, 'C', 1);
	    $this->Ln();

	    for($j = $this->initPage($i); $j < $this->untilPage($i); $j++){
	    	if($j < $total){
		    	$row = $movimientos[$j];
		      $this->Cell(10, 6,$row->id, 1, 0, 'C');
		      $this->Cell(70, 6,$row->descripcion, 1, 0, 'C');
		      $this->Cell(50, 6,$row->negocio->nombre, 1, 0, 'C');
		      if($row->tipo == "TRANSFERENCIA"){
		    	  $this->Cell(40, 6,$row->cuenta->numero, 1, 0, 'C');
		    	  $this->Cell(40, 6,$row->referencia, 1, 0, 'C');
		    	}
		    	else{
		    	  $this->Cell(40, 6,'EFECTIVO '.$row->comision.' %', 1, 0, 'C');
		    	  $this->Cell(40, 6,number_format($row->monto * ($row->comision /100),2), 1, 0, 'C');
		    	}
		  	  $this->Cell(40, 6,number_format($row->saldo, 2) , 1, 0, 'C');
		      $this->Ln();
		    }
	    }
    } /// end  table 

    $totalEfectivo= number_format($this->totalEfectivo($movimientos), 2);
		$totalTransferencia= number_format($this->totalTransferencia($movimientos), 2);
		$totalComision = number_format($this->totalComision($movimientos), 2);
    $this->SetFont('helvetica', 'N', 11);
    $this->Ln();
		$this->Cell(0, 0, 'TOTAL EFECTIVO : '.$totalEfectivo.' Bs', 0, 0, 'R');
    $this->Ln();
		$this->Cell(0, 0, 'TOTAL COMISION : '.$totalComision.' Bs', 0, 0, 'R');
	  $this->Ln();
		$this->Cell(0, 0, 'TOTAL TRANSFERENCIA : '.$totalTransferencia.' Bs', 0, 0, 'R');
    $this->Output();
    ///exit;
	}

	private function initPage($i){
		return $i*$this->rowPerPage;
	}


	private function untilPage($i){
		return $i*$this->rowPerPage+$this->rowPerPage;
	}

	private function totalEfectivo($movimientos){
		$total= 0.0;
		foreach ($movimientos as $key => $value) {
			if($value->tipo == "EFECTIVO"){
				$total += $value->saldo;
			}
		}
		return $total;
	}


	private function totalComision($movimientos){
		$total= 0.0;
		foreach ($movimientos as $key => $value) {
			if($value->tipo == "EFECTIVO"){
				$total += $value->monto * ($value->comision / 100);
			}
		}
		return $total;
	}

	private function totalTransferencia($movimientos){
		$total= 0.0;
		foreach ($movimientos as $key => $value) {
			if($value->tipo == "TRANSFERENCIA"){
				$total += $value->saldo;
			}
		}
		return $total;
	}

}
