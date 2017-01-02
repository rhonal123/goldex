<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Http\Requests;

use App\Abono;

class AbonosController extends Controller
{

	public function show($id){
		$this->authorize('F01');
		return Abono::with('tipo','negocio','cuenta.banco','user')->findOrFail($id);
	}

	public function delete($id){
		$this->authorize('F02');
		$abono = Abono::findOrFail($id);
		try {
			$abono->delete();
		} 
		catch (QueryException $e) {
			return response()->json(["cuentas"=> "Este Abono esta siendo utilizado."],423);
		}
		return $abono;
	}

	public function update(Request $request,$id){
		$this->authorize('F03');
		$abono = Abono::findOrFail($id); 
  	$values = $request->all()['abono']; 
		$validator = Abono::validador($values,$abono);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$abono->update($values);
			return Abono::with('tipo','negocio','cuenta.banco','user')->findOrFail($abono->id);
		}
	}

	public function create(Request $request){
		$this->authorize('F04');
  	$values = $request->all()['abono']; 
		$validator = Abono::validador($values);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			return Abono::createToUser($values);
		}
	}

	public function index(Request $request){
		$this->authorize('F05');
		$desde = $request->input('desde');
		$hasta = $request->input('hasta');
		$tipo = $request->input('tipo');
		$negocio_id = $request->input('negocio_id');
		$abonos = Abono::buscar($desde,$hasta,$tipo,$negocio_id);
		return $abonos;
	}

	public function nocerrados(Request $request,$negocio_id){
		return Abono::nocerrados($negocio_id);;
	}

}
