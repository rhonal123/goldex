<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Database\QueryException;
use App\Http\Requests;
use App\Banco;
use Validator;
use DB;
use Gate;

use Illuminate\Validation\Rule;

/*
 * 'codigo' => 'A01' , 'accion' => 'BancoController@show'
 * 'codigo' => 'A02' , 'accion' => 'BancoController@delete'
 * 'codigo' => 'A03' , 'accion' => 'BancoController@update'
 * 'codigo' => 'A04' , 'accion' => 'BancoController@create'
 * 'codigo' => 'A05' , 'accion' => 'BancoController@index'
*/
class BancosController extends Controller
{

	public function show($id){
		$this->authorize('A01');
		return Banco::findOrFail($id);
	}

	public function delete($id){
		$this->authorize('A02');
		$banco = Banco::findOrFail($id);
		try {
					$banco->delete();
		}catch (QueryException $e){
			return response()->json(["cuentas"=> "Este Banco esta siendo utilizado."],423);
		}
		return $banco;
	}

	public function update(Request $request,$id){
		$this->authorize('A03');
		$banco = Banco::findOrFail($id); 
  	$values = $request->all()['banco']; 
		$validator = Banco::validador($values,$banco);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$bancoRequest = $values;
			$banco->nombre = $bancoRequest['nombre'];
			$banco->save();
			return $banco;
		}
	}

	public function create(Request $request){
		$this->authorize('A04');
  	$values = $request->all()['banco']; 
		$validator = Banco::validador($values);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$bancoRequest = $values;
			return Banco::create(['nombre' => $bancoRequest['nombre']]);
		}
	}

	public function index(Request $request){
		$this->authorize('A05');
		$nombre = $request->input('search');
		$bancos = Banco::buscar($nombre);
		return $bancos;
	}

	
}
