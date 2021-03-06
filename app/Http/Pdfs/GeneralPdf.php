<?php

namespace App\Http\Pdfs;
 
use Elibyy\TCPDF\Facades\TCPDF;

use App\MovimientoView;
use App\Negocio;
use App\Cuenta;
use View;
use Illuminate\Support\Facades\Log;
class GeneralPdf extends \TCPDF {

    public $desde = null; 
    public $hasta = null; 
    public $rowPerPage = 23.0;
    public $cuenta;

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
        $this->Cell(0,0, 'Movimientos', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        $this->Ln();

       	$texto = "";
       	if($this->cuenta != null){
	       	foreach ($this->cuenta as $cuenta) {
	       		$texto = $texto ." ".$cuenta->numero;
	       	}
	       	$this->Cell( 0, 0,
	     			' Cuenta : '. $texto,
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
	public function generar($desde,$hasta,$negocio_id,$cuenta_id,$ordenarTipo,$caja) {
   	$this->desde = $desde;
   	$this->hasta = $hasta;
   	if(is_null($caja))
   	{
   		$movimientos = MovimientoView::afectabanco($desde,$hasta,$negocio_id,$cuenta_id,$ordenarTipo);
    }
    else
    {
    	$movimientos = MovimientoView::cajaChica($desde,$hasta,$ordenarTipo);
    }
    
   	$this->cuenta = Cuenta::find($cuenta_id);
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
    $balance = 0.0;
		foreach ($movimientos as $key => $value) {
			if($header){
				$this->Ln();
				$this->SetFont('times', null, 9);
				$this->SetFillColor(243, 255, 166);
		 		$this->Cell(20,7,"Fecha", 1, 0, 'C', 1);
		 		$this->Cell(30,7,"REFERENCIA", 1, 0, 'C', 1);
		 		$this->Cell(40,7,"Negocio", 1, 0, 'C', 1);
		 		$this->Cell(70,7,"Descripcion", 1, 0, 'C', 1);
		 		$this->Cell(30,7,"Debe", 1, 0, 'C', 1);
		 		$this->Cell(30,7,"Haber", 1, 0, 'C', 1);
		 		$this->Cell(30,7,"Balance", 1, 0, 'C', 1);
		    $this->Ln();
		    $header = false;
		  }
		  $height =ceil(strlen($value->descripcion) / 50.0) * 6;
      $this->Cell(20, $height,$value->fecha->format('d/m/Y'), 1, 0, 'C');
	    $this->Cell(30, $height,$value->referencia, 1, 0, 'C');

      if($value->clasificacion == 3){
  	    $this->Cell(40, $height,"GASTO", 1, 0, 'C');
      }
      else{
  	    $this->Cell(40, $height,$value->negocio, 1, 0, 'C');
      }

 	    $descripcion = str_replace("/\r\n|\r|\n/"," ",$value->descripcion);
	 		$this->MultiCell(70, $height,$descripcion, 1, '', 0, 0, '', '', true, 0, false, true);


		  if($value->clasificacion == 2){ // abono 
		  	$balance += $value->saldo;
			  $this->Cell(30, $height,number_format($value->saldo, 2) , 1, 0, 'C');
			  $this->Cell(30,$height,"0",1, 0, 'C');
		  }
		  else{
		  	$balance -= $value->saldo;
			  $this->Cell(30, $height,"0", 1, 0, 'C');
			  $this->Cell(30, $height,number_format($value->saldo, 2), 1, 0, 'C');
			}

		  $this->Cell(30, $height,number_format($balance, 2), 1, 0, 'C');

   	  $this->ln();
      if($this->checkPageBreak($this->lasth)){
      	$header = true;
      }

		}

    $totaldebe= $this->totaldebe($movimientos);
		$totalhaber=$this->totalhaber($movimientos);
		$balance = number_format($totaldebe-$totalhaber, 2);

    $this->SetFont('helvetica', 'N', 11);
    $this->Ln();
		$this->Cell(0, 0, 'TOTAL DEBE : '.number_format($totaldebe,2).' Bs', 0, 0, 'R');
    $this->Ln();
		$this->Cell(0, 0, 'TOTAL HABER : '.number_format($totalhaber,2).' Bs', 0, 0, 'R');
	  $this->Ln();
		$this->Cell(0, 0, 'BALANCE: '.$balance.' Bs', 0, 0, 'R');
    $this->Output();
    ///exit;
	}

	private function initPage($i){
		return $i*$this->rowPerPage;
	}


	private function untilPage($i){
		return $i*$this->rowPerPage+$this->rowPerPage;
	}

	private function totaldebe($movimientos){
		$total= 0.0;
		foreach ($movimientos as $key => $value) {
			if($value->clasificacion == 2){
				$total += $value->saldo;
			}
		}
		return $total;
	}


	private function totalhaber($movimientos){
		$total= 0.0;
		foreach ($movimientos as $key => $value) {
			if($value->clasificacion != 2){
				$total += $value->saldo;
			}
		}
		return $total;
	}
 
}
