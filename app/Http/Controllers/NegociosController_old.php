<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Database\QueryException;

use App\Http\Requests;

 
use App\Negocio;
use Validator;

use Illuminate\Validation\Rule;
/*
 *  'codigo' => 'C01' , 'accion' => 'NegociosController@show,movimientos,abonos'
 *  'codigo' => 'C02' , 'accion' => 'NegociosController@delete'
 *  'codigo' => 'C03' , 'accion' => 'NegociosController@update'
 *  'codigo' => 'C04' , 'accion' => 'NegociosController@create'
 *  'codigo' => 'C05' , 'accion' => 'NegociosController@index'
 */
class NegociosController extends Controller
{

	public function show($id) {
		$this->authorize('C01');
		$negocio = Negocio::findOrFail($id);
		return $negocio;
	}

	public function movimientos(Request $request, $id) {
		$this->authorize('C01');
		$estado = $request->input('estado');
		return Negocio::movimientos($id,$estado);
	}

	public function abonos(Request $request, $id) {
		$this->authorize('C01');
		$estado = $request->input('estado');
		return Negocio::abonos($id,$estado);
	}

	public function delete($id){
		$this->authorize('C02');
		$negocio = Negocio::findOrFail($id);///->first();
		try {
			$negocio->delete();
		}catch (QueryException $e){
			return response()->json(["mensaje"=> "Este Negocio esta siendo utilizado."],423);
		}
		return $negocio;
	}

	public function update(Request $request,$id){
		$this->authorize('C03');
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
		$this->authorize('C04');
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
		$this->authorize('C05');
		$nombre = $request->input('search');
		$negocios = Negocio::buscar($nombre);
		return $negocios->toArray();
	}
}
