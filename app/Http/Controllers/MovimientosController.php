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
		$ordenar  = $request->input('ordenar');  
		$ordenarTipo  = $request->input('ordenarTipo'); 
  	$negocio = Negocio::find($negocio_id);
   	$cuenta  = Cuenta::find($cuenta_id);
   	$total = null;
   	$comision = null;

	  if($tipo == "TRANSFERENCIA") {
	   	$movimientos = Movimiento::movimientosTrasnferencia(
	   		$desde,$hasta,$negocio_id,$cuenta_id,$ordenar,$ordenarTipo);
	   	$total = 0.0;
	   	foreach ($movimientos as $value) { $total += $value->saldo; }
	  	$view = View::make('pdf.movimientos_transferencia', 
    		compact('negocio', 'desde','hasta', 'movimientos','comision','total','cuenta'))->render();
    }
    else {
			$movimientos=Movimiento::movimientosEfectivo(
				$desde,$hasta,$negocio_id,$ordenar,$ordenarTipo);
   		$total = 0.0;
   		$comision = 0.0;
   		foreach ($movimientos as $value) {
   			$comision += $value->monto;
   			$total += $value->saldo;
   		}
	  	$view = View::make('pdf.movimientos_efectivo', 
    		compact('negocio', 'desde','hasta', 'movimientos','comision','total'))->render();
   	}
    // set margins
		TCPDF::SetFont('times', null, 9);
		TCPDF::SetMargins(10,10,10);
		TCPDF::AddPage('L', 'LETTER');
		TCPDF::writeHTML($view);
		TCPDF::Output('movimientos_efectivo.pdf');
  }
}