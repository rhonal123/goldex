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

class CuentasController extends Controller
{
    

	public function show($id){
		$cuenta = Cuenta::with('banco')->findOrFail($id);///->first();
		return $cuenta;
	}

	public function delete($id){
		$cuenta = Cuenta::with('banco')->findOrFail($id);///->first();
		try {
			$cuenta->delete();
		}catch (QueryException $e){
			return response()->json(["mensaje"=> "Este Cuenta esta siendo utilizada."],423);
		}
		return $cuenta;
	}



	public function update(Request $request,$id){
		$cuenta = Cuenta::findOrFail($id);///->first();
  	$values = $request->all()['cuenta']; 
		$validator = Cuenta::validador($values);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$cuentaRequest = $values;
			$banco  = Banco::findOrFail($cuentaRequest['banco_id']);
			$cuenta->numero = $cuentaRequest['numero'];
			$cuenta->banco_id = $cuentaRequest['banco_id'];
			$cuenta->save();
			$cuenta->banco = $banco;
			return $cuenta;//Banco::create(['nombre' => $bancoRequest['nombre']]);
		}
	}

	public function create(Request $request){
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
 		///$page = $request->input('page');
		$nombre = $request->input('search');
		$cuentas = Cuenta::buscar($nombre);
		return $cuentas;
	}

}
