<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Database\QueryException;
use App\Http\Requests;

use App\Banco;
use App\Cuenta;
use Validator;

use Illuminate\Validation\Rule;
/*
 *  'codigo' => 'B01' , 'accion' => 'CuentasController@show'
 *  'codigo' => 'B02' , 'accion' => 'CuentasController@delete'
 *  'codigo' => 'B03' , 'accion' => 'CuentasController@update'
 *  'codigo' => 'B04' , 'accion' => 'CuentasController@create'
 *  'codigo' => 'B05' , 'accion' => 'CuentasController@index'
*/
class CuentasController extends Controller
{
	public function show($id){
		$this->authorize('B01');
		$cuenta = Cuenta::with('banco')->findOrFail($id);///->first();
		return $cuenta;
	}

	public function delete($id){
		$this->authorize('B02');
		$cuenta = Cuenta::with('banco')->findOrFail($id);///->first();
		try {
			$cuenta->delete();
		}catch (QueryException $e){
			return response()->json(["mensaje"=> "Este Cuenta esta siendo utilizada."],423);
		}
		return $cuenta;
	}



	public function update(Request $request,$id){
		$this->authorize('B03');
		$cuenta = Cuenta::findOrFail($id);///->first();
  	$values = $request->all()['cuenta']; 
		$validator = Cuenta::validador($values,$cuenta);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$cuenta->update($values);
			return Cuenta::with('banco')->findOrFail($cuenta->id);
		}
	}

	public function create(Request $request){
		$this->authorize('B04');
  	$values = $request->all()['cuenta']; 
		$validator = Cuenta::validador($values);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$cuentaRequest = $values;
			$banco  = Banco::findOrFail($cuentaRequest['banco_id']);
			$cuenta = Cuenta::create(
						['numero' => $cuentaRequest['numero'],
						'banco_id' => $cuentaRequest['banco_id']]);
			$cuenta->banco = $banco;
			return  $cuenta; 
		}
	}


	public function index(Request $request){
		$this->authorize('B05');
		$nombre = $request->input('search');
		$cuentas = Cuenta::buscar($nombre);
		return $cuentas;
	}

}
