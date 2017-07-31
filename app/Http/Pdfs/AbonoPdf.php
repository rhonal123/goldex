<?php

namespace App\Http\Pdfs;
 
use Elibyy\TCPDF\Facades\TCPDF;

use App\MovimientoView;
use App\Negocio;
use View;
use Illuminate\Support\Facades\Log;
class AbonoPdf extends \TCPDF {

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
        $this->Cell(0,0, 'Lista de Abonos', 0, false, 'C', 0, '', 0, false, 'M', 'M');
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
	public function generar($desde,$hasta,$negocio_id,$cuenta_id,$ordenarTipo) {
   	$this->desde = $desde;
   	$this->hasta = $hasta;
   	$movimientos = MovimientoView::movimientos($desde,$hasta,$negocio_id,$cuenta_id,$ordenarTipo,2);
   	$this->negocio = Negocio::find($negocio_id);
		$this->SetFont('times', null, 12);
		$this->SetMargins(PDF_MARGIN_LEFT, 40, PDF_MARGIN_RIGHT);
		$this->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
		//$this->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		$this->setImageScale(PDF_IMAGE_SCALE_RATIO);

	
		$this->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		$this->SetFooterMargin(PDF_MARGIN_FOOTER);

		$this->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$this->SetHeaderMargin(PDF_MARGIN_HEADER);

		$this->AddPage('L', 'LETTER');

		///$this->Image(public_path('assets/images/goldex310x310.jpg'),25,10,35,35);
    $total = floatval(count($movimientos));
    $totalPage = ceil($total / $this->rowPerPage );
	 	///$view = View::make('pdf.movimientos_table',compact('movimientos'))->render();
	 	//$this->setFontSubsetting(false) ;

		//$this->writeHTML($view);
    $header= true;
		foreach ($movimientos as $key => $value) {
			if($header){
				$this->Ln();
				$this->SetFont('times', null, 9);
				$this->SetFillColor(243, 255, 166);
		 		$this->Cell(120,7,"Descripcion", 1, 0, 'C', 1);
		 		//$this->Cell(40,7,"Negocio", 1, 0, 'C', 1);
		 		$this->Cell(20,7,"Fecha", 1, 0, 'C', 1);
		 		$this->Cell(40,7,"Cuenta", 1, 0, 'C', 1);
		 		$this->Cell(30,7,"REF ó COMI", 1, 0, 'C', 1);
		 		$this->Cell(40,7,"Monto", 1, 0, 'C', 1);
		    $this->Ln();
		    $header = false;
		  }
		  $height =ceil(strlen($value->descripcion) / 76.0) * 6;
 	    $descripcion = str_replace("/\r\n|\r|\n/"," ",$value->descripcion);
	 		$this->MultiCell(120, $height,$descripcion, 1, '', 0, 0, '', '', true, 0, false, true);
      ///$this->Cell(40, $height,$value->negocio, 1, 0, 'C');
      $this->Cell(20, $height,$value->fecha->format('d/m/Y'), 1, 0, 'C');
		  if($value->tipo == "TRANSFERENCIA"){
		    $this->Cell(40, $height,$value->cuenta, 1, 0, 'C');
		    $this->Cell(30, $height,$value->referencia, 1, 0, 'C');
		  }
		  else{
		    $this->Cell(40, $height,'EFECTIVO '.$value->comision.' %', 1, 0, 'C');
		    $this->Cell(30, $height,number_format($value->monto * ($value->comision /100),2), 1, 0, 'C');
		  }
		  $this->Cell(40, $height,number_format($value->saldo, 2) , 1, 0, 'C');
		  $this->ln();
      //Log::info("ID ".$value->id." X-->".$this->GetX()." Y-->".$this->GetY());
      if($this->checkPageBreak($this->lasth)){
      	$header = true;
      }
		}
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
