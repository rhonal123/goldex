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

use Illuminate\Validation\Rule;



class CierresController extends Controller
{

	public function show($id){
		$this->authorize('H01');
		return Cierre::findOrFail($id);
	}

	public function delete($id){
		$this->authorize('H02');
		$cierre = Cierre::findOrFail($id);
		try {
					$cierre->delete();
		}catch (QueryException $e){
			return response()->json(["cierre"=> "Este Cierre esta siendo utilizado."],423);
		}
		return $cierre;
	}

	public function update(Request $request,$id){
		$this->authorize('H03');
		$cierre = Cierre::findOrFail($id); 
  	$values = $request->all()['cierre']; 
		$validator = Cierre::validador($values,$cierre);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$cierreRequest = $values;
			$cierre->nombre = $cierreRequest['nombre'];
			$cierre->save();
			return $cierre;
		}
	}

	public function create(Request $request){
		$this->authorize('H04');
  	$values = $request->all()['cierre']; 
		$validator = Cierre::validador($values);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$cierreRequest = $values;
			return Cierre::createCierre($values);
		}
	}

	public function index(Request $request){
		$this->authorize('H05');
		$estado = $request->input('estado');
		$negocio_id = $request->input('negocio_id');
		$cierres = Cierre::buscar($negocio_id,$estado);
		return $cierres;
	}

	
}
