<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Database\QueryException;
use App\Http\Requests;
use App\Banco;
use Validator;
use DB;

use Illuminate\Validation\Rule;

class BancosController extends Controller
{

	public function show($id){
 
		return Banco::findOrFail($id);

	}

	public function delete($id){
		$banco = Banco::findOrFail($id);
		try {
					$banco->delete();
		}catch (QueryException $e){
			return response()->json(["cuentas"=> "Este Banco esta siendo utilizado."],423);
		}
		return $banco;
	}

			/*$nro = $banco->cuentas->count();
		$errors = $banco->eliminar();
		if(count($errors) != 0 ){
			return response()->json($errors,423);
		}*/


	public function update(Request $request,$id){
		$banco = Banco::findOrFail($id);///->first();
  	$values = $request->all()['banco']; 
		$validator = Banco::validador($values,$banco);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$bancoRequest = $values;
			$banco->nombre = $bancoRequest['nombre'];
			$banco->save();
			return $banco;//Banco::create(['nombre' => $bancoRequest['nombre']]);
		}
	}

	public function create(Request $request){
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
 		///$page = $request->input('page');
    ///DB::enableQueryLog();
		$nombre = $request->input('search');
		$bancos = Banco::buscar($nombre);
    ///$query2 = DB::getQueryLog();
    ///print_r($query2);
		return $bancos;
	}

}

/*
	$values = $request->json()->all(); 
  $validator = Validator::make( );
*/