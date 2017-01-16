<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Illuminate\Database\QueryException;
use App\Movimiento;
use App\Cuenta;
use App\Negocio;
use App\User;
use App;
use View;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Log;
use Elibyy\TCPDF\Facades\TCPDF; // at the top of the file

/*
  ['codigo' => 'I01' , 'accion' => 'MovimientosController@show'],
  ['codigo' => 'I02' , 'accion' => 'MovimientosController@delete'],
  ['codigo' => 'I03' , 'accion' => 'MovimientosController@update'],
  ['codigo' => 'I04' , 'accion' => 'MovimientosController@create'],
  ['codigo' => 'I05' , 'accion' => 'MovimientosController@index'],
  ['codigo' => 'I06' , 'accion' => 'MovimientosController@precio_puro'],

*/
class MovimientosController extends Controller
{
	public function show($id){
		$this->authorize('I01');
		return Movimiento::findOrFail($id);
	}
	public function delete($id){
		$this->authorize('I02');
		$movimiento = Movimiento::findOrFail($id);
		try {
					$movimiento->delete();
		}catch (QueryException $e){
			return response()->json(["mensaje"=> "Este Movimiento esta siendo utilizado."],423);
		}
		return $movimiento;
	}

	public function update(Request $request,$id){
		$this->authorize('I03');
		$movimiento = Movimiento::findOrFail($id); 
  	$values = $request->all()['movimiento']; 
		$validator = Movimiento::validador($values,$movimiento);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$movimiento->actualizar($values);
			return Movimiento::with('negocio','cuenta.banco')->findOrFail($movimiento->id);;
		}
	}

	public function create(Request $request){
		$this->authorize('I04');
  	$values = $request->all()['movimiento']; 
		$validator = Movimiento::validador($values);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$movimiento = Movimiento::crearMovimiento($values);
			return Movimiento::with('negocio','cuenta.banco')->findOrFail($movimiento->id);
		}
	}

	/// mejorar y optimizar con una vista :-D
	public function index(Request $request){
		$this->authorize('I05');
		$desde = $request->input('desde');
		$hasta = $request->input('hasta');

		$referencia = $request->input('referencia');
		$descripcion = $request->input('descripcion');

		$tipo = $request->input('tipo');
		$negocio_id = $request->input('negocio_id');
		$cuenta_id = $request->input('cuenta_id');
		$movimientos = Movimiento::buscar($desde,$hasta,$tipo,$negocio_id,$referencia,$descripcion,$cuenta_id);
		return $movimientos;
	}


	public function precio_puro(Request $request,$id){
		$this->authorize('I06');
		$movimiento = Movimiento::findOrFail($id); 
  	$values = $request->all()['movimiento']; 
		$validator = Movimiento::validadorPrecioPuro($values,$movimiento);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$movimiento->actualizarPrcioPuro($values);
			return Movimiento::with('negocio','cuenta.banco')->findOrFail($movimiento->id);;
		}
	}
 

   public function reporte(Request $request) 
  {
		$this->authorize('I07');
    $tipo = ($request->input('tipo')? $request->input('tipo'):"EFECTIVO");
		$desde = $request->input('desde');
		$hasta = $request->input('hasta');
		$negocio_id = $request->input('negocio_id');
		$cuenta_id = $request->input('cuenta_id');
  	$negocio = Negocio::find($negocio_id);
   	$cuenta  = Cuenta::find($cuenta_id);
   	$total = null;
   	$comision = null;

	  if($tipo == "TRANSFERENCIA") {
	   	$movimientos = Movimiento::movimientosTrasnferencia($desde,$hasta,$negocio_id,$cuenta_id);
	   	$total = 0.0;
	   	foreach ($movimientos as $value) { $total += $value->saldo; }
	  	$view = View::make('pdf.movimientos_transferencia', 
    		compact('negocio', 'desde','hasta', 'movimientos','comision','total','cuenta'))->render();
    }
    else {
			$movimientos=Movimiento::movimientosEfectivo($desde,$hasta,$negocio_id);
   		$total = 0.0;
   		$comision = 0.0;
   		foreach ($movimientos as $value) {
   			$comision += $value->monto;
   			$total += $value->saldo;
   		}
	  	$view = View::make('pdf.movimientos_efectivo', 
    		compact('negocio', 'desde','hasta', 'movimientos','comision','total'))->render();
			///TCPDF::SetTitle('Hello World');
   	}
  	///return $view;
// set margins
		TCPDF::SetFont('times', null, 9);
		TCPDF::SetMargins(10,10,10);
		TCPDF::AddPage('L', 'LETTER');
		TCPDF::writeHTML($view);
		TCPDF::Output('movimientos_efectivo.pdf');
  }
		/*
		TCPDF::SetTitle('Hello World');
		TCPDF::AddPage();
		TCPDF::writeHTML($view);
		TCPDF::Output('hello_world.pdf');
	*/
	/*
  public function reporte(Request $request) 
  {
    $tipo = ($request->input('tipo')? $request->input('tipo'):"EFECTIVO");
		$desde = $request->input('desde');
		$hasta = $request->input('hasta');
		$negocio_id = $request->input('negocio_id');
		$cuenta_id = $request->input('cuenta_id');
		///////
  	$negocio = Negocio::find($negocio_id);
   	$cuenta  = Cuenta::find($cuenta_id);
   	$total = null;
   	$comision = null;
	  Log::info('incio');
    $fpdf = new Fpdf('P','mm','LETTER');
	  Log::info('incio 1.1');
    $fpdf->SetFont('Arial',null,10);
	  ///$fpdf::SetMargins(20,20); 
	  Log::info('incio 1.2');
    $fpdf::AddPage('L','LETTER');
	  Log::info('incio 1.3');
	  Log::info('incio 1.4');
    $fpdf::Cell(40,10,'Movimientos '.$tipo);
	  Log::info('incio 1.5');
    $fpdf::setX(200);
	  Log::info('incio 1.6');
    $fpdf::Cell(15,10,'Fecha :');
	  Log::info('incio 1.7');
    $fpdf::Cell(40,10,$desde.'--'.$hasta);
	  Log::info('incio 1.8');
 		$fpdf::Ln();
	  Log::info('incio2');

		if($negocio){
      $fpdf::Cell(40,10,'Negocio o socio :'.$negocio->nombre.' '.$negocio->rif);
			$fpdf::Ln();
    }

  	if($cuenta && $tipo === "TRANSFERENCIA"){
      $fpdf::Cell(40,10,' Cuenta :'.$cuenta->numero.' '.$cuenta->banco->nombre);
			$fpdf::Ln();
    }
	  Log::info('incio3');
	  
	  if($tipo == "TRANSFERENCIA") {
	   	$movimientos = Movimiento::movimientosTrasnferencia($desde,$hasta,$negocio_id,$cuenta_id);
	   	$total = 0.0;
	   	foreach ($movimientos as $value) { $total += $value->saldo; }
      $fpdf::Cell(20,6,'Id',1,0,'C');

      $fpdf::Cell(50,6,'Negocio',1,0,'C');
      $fpdf::Cell(60,6,'Cuenta',1,0,'C');

      $fpdf::Cell(40,6,'Referencia',1,0,'C');
      $fpdf::Cell(30,6,'Fecha',1,0,'C');
      $fpdf::Cell(40,6,'Total',1,0,'C');
	    $fpdf::Ln();
	    foreach($movimientos as $movimiento)
	    {
        $fpdf::Cell(20,6,$movimiento->id,1,0,'C');
        $fpdf::Cell(50,6,$movimiento->negocio->nombre,1,0,'C');
      	$fpdf::Cell(60,6,$movimiento->cuenta->numero,1,0,'C');
        $fpdf::Cell(40,6,$movimiento->referencia,1,0,'C');
        $fpdf::Cell(30,6,$movimiento->fecha,1,0,'C');
        $fpdf::Cell(40,6,$this->formateadorMoneda($movimiento->saldo),1,0,'C');
        $fpdf::Ln();
	    }
		  Log::info('incio4');
    }
    else {
			$movimientos=Movimiento::movimientosEfectivo($desde,$hasta,$negocio_id);
   		$total = 0.0;
   		$comision = 0.0;
   		foreach ($movimientos as $value) {
   			$comision += $value->monto;
   			$total += $value->saldo;
   		}
      $fpdf::Cell(20,6,'Id',1,0,'C');
      $fpdf::Cell(70,6,'Negocio',1,0,'C');
      $fpdf::Cell(30,6,'Fecha',1,0,'C');
      $fpdf::Cell(40,6,'Comision',1,0,'C');
      $fpdf::Cell(40,6,'Monto',1,0,'C');
      $fpdf::Cell(40,6,'Total',1,0,'C');
	    $fpdf::Ln();
	    foreach($movimientos as $movimiento)
	    {
        $fpdf::Cell(20,6,$movimiento->id,1,0,'C');
        $fpdf::Cell(70,6,$movimiento->negocio->nombre,1,0,'C');
        $fpdf::Cell(30,6,$movimiento->fecha,1,0,'C');
        $fpdf::Cell(40,6,$this->formateadorMoneda($movimiento->comision),1,0,'C');
        $fpdf::Cell(40,6,$this->formateadorMoneda($movimiento->monto),1,0,'C');
        $fpdf::Cell(40,6,$this->formateadorMoneda($movimiento->saldo),1,0,'C');
        $fpdf::Ln();
			  Log::info('incio4');
	    }
   	}
   	if($comision){
	    $fpdf::setX(180);
	    $fpdf::Cell(40,10,'Comision :',1,0,'C');
	    $fpdf::Cell(40,10,$this->formateadorMoneda($comision),1,0,'C');
			$fpdf::Ln();
		}
	  Log::info('casi listo ');
    $fpdf::setX(180);
    $fpdf::Cell(40,10,'Total :',1,0,'C');
    $fpdf::Cell(40,10,$this->formateadorMoneda($total),1,0,'C');
	  Log::info('befofe to call out put ');
	  $fpdf::Output('movimientos.pdf',"I",true);
    Log::info('incio6');
    exit;
    //$fpdf::Output('movimientos.pdf',"I",true);
	}

	*/ 
}