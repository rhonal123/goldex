<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Database\QueryException;
 
use Illuminate\Http\Response;
 
use App\Negocio;
use Validator;

use Illuminate\Validation\Rule;

class NegociosController extends Controller
{


	public function show($id){
		$negocio = Negocio::findOrFail($id);///->first();
		return $negocio;
	}

	public function delete($id){
		$negocio = Negocio::findOrFail($id);///->first();
		try {
			$negocio->delete();
		}catch (QueryException $e){
			return response()->json(["mensaje"=> "Este Negocio esta siendo utilizado."],423);
		}
		return $negocio;
	}



	public function update(Request $request,$id){
		$negocio = Negocio::findOrFail($id);///->first();
  	$values = $request->all()['negocio']; 
		$validator = Negocio::validador($values);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$negocioRequest = $values;
			$negocio->nombre = $negocioRequest['nombre'];
			$negocio->rif = $negocioRequest['rif'];
			$negocio->descripcion = $negocioRequest['descripcion'];
			$negocio->direccion = $negocioRequest['direccion'];
			$negocio->encargado = $negocioRequest['encargado'];
			$negocio->telefono = $negocioRequest['telefono'];
			$negocio->save();
			return $negocio;//Negocio::create(['nombre' => $negocioRequest['nombre']]);
		}
	}

	public function create(Request $request){
  	$values = $request->all()['negocio']; 
		$validator = Negocio::validador($values);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$negocioRequest = $values;
			return Negocio::create([
					'nombre' => $negocioRequest['nombre'],
					'rif' => $negocioRequest['rif'],
					'descripcion' => $negocioRequest['descripcion'],
					'direccion' => $negocioRequest['direccion'],
					'encargado' => $negocioRequest['encargado'],
					'telefono' => $negocioRequest['telefono'],
					]);
		}
	}


	public function index(Request $request){
 		///$page = $request->input('page');
		$nombre = $request->input('search');
		$negocios = Negocio::buscar($nombre);
		return $negocios->toArray();
	}
}
