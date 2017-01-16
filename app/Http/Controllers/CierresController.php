<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Database\QueryException;
use App\Http\Requests;
use App\Cierre;
use Validator;
use DB;
use Gate;
use View;
use Illuminate\Support\Facades\Log;
use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Validation\Rule;

class CierresController extends Controller
{

	public function show($id){
		$this->authorize('D01');
		return Cierre::with('negocio','abonos','abonos.tipo','abonos.cuenta.banco','movimientos','movimientos.cuenta.banco')->findOrFail($id);
	}

	public function delete($id){ // anular cierre
		$this->authorize('D02');
		$cierre = Cierre::findOrFail($id);
		try {
					$cierre->delete();
		}catch (QueryException $e){
			return response()->json(["cierre"=> "Este Cierre esta siendo utilizado."],423);
		}
		return $cierre;
	}

	public function update(Request $request,$id){
		$this->authorize('D03');
		$cierre = Cierre::findOrFail($id); 
  	$values = $request->all()['cierre']; 
		$validator = Cierre::validador($values,$cierre);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$cierre->actualizarCierre($values);
			return Cierre::with('negocio')->findOrFail($cierre->id);
		}
	}

	public function create(Request $request){
		$this->authorize('D04');
  	$values = $request->all()['cierre']; 
		$validator = Cierre::validador($values);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$cierre = Cierre::createCierre($values);
			return Cierre::with('negocio')->findOrFail($cierre->id);
		}
	}

	public function index(Request $request){
		$this->authorize('D05');
		$estado = $request->input('estado');
		$desde  = $request->input('desde');
		$hasta  = $request->input('hasta');
		$negocio_id = $request->input('negocio_id');
		$cierres = Cierre::buscar($desde,$hasta,$negocio_id,$estado); 
		return $cierres;
	}




	public function imprimir($id){
		$this->authorize('D06');
		$cierre = Cierre::with('negocio','abonos','abonos.tipo','abonos.cuenta.banco','movimientos','movimientos.cuenta.banco')->findOrFail($id);
		$totalAbono = 0.0;
		foreach ($cierre->abonos as $abono) {
			$totalAbono += $abono->monto;
		}
  	$view = View::make('pdf.cierre',compact('cierre','totalAbono'))->render();
		TCPDF::SetFont('times', null, 9);
		TCPDF::SetMargins(10,10,10);
		TCPDF::AddPage('L', 'LETTER');
		TCPDF::writeHTML($view);
		TCPDF::Output('cierre_'.$cierre->negocio.'.pdf');
	}


}