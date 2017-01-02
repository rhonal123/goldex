<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestamo;
use App\Http\Requests;

use Illuminate\Http\Response;
use Illuminate\Database\QueryException;
use Illuminate\Validation\Rule;
use App\User;
use Illuminate\Support\Facades\Auth;
/*
 *  'codigo' => 'D01' , 'accion' => 'PrestamosController@show'
 *  'codigo' => 'D02' , 'accion' => 'PrestamosController@delete'
 *  'codigo' => 'D03' , 'accion' => 'PrestamosController@update'
 *  'codigo' => 'D04' , 'accion' => 'PrestamosController@create'
 *  'codigo' => 'D05' , 'accion' => 'PrestamosController@index'
*/
class PrestamosController extends Controller
{

	public function index(Request $request){
		$this->authorize('D05');
		$texto = $request->input('texto');
		$desde = $request->input('desde');
		$hasta = $request->input('hasta');
		$tipo = $request->input('tipo');
		$negocio_id = $request->input('negocio_id');
		$prestamos = Prestamo::buscar($texto,$desde,$hasta,$tipo,$negocio_id);
		
		return $prestamos->toArray();
	}

	public function show($id){
		$this->authorize('D01');
		return Prestamo::with('negocio','cuenta.banco','user')->findOrFail($id);
	}


	public function delete($id){
		$this->authorize('D02');
		$prestamo = Prestamo::findOrFail($id);
		try {
			$prestamo->delete();
		}catch (QueryException $e){
			return response()->json(["prestamo"=> "Error al intentar eliminar este prestamo."],423);
		}
		return $prestamo;
	}

	public function update(Request $request,$id){
		$this->authorize('D03');
		$prestamo = Prestamo::findOrFail($id); 
  	$values = $request->all()['prestamo']; 
		$validator = Prestamo::validador($values);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$prestamo->update($values);
			return Prestamo::with('negocio','cuenta.banco','user')->findOrFail($prestamo->id);; 
		}
	}

	public function create(Request $request){
		$this->authorize('D04');		
		$user  = Auth::user(); 
  	$values = $request->all()['prestamo']; 
		$validator = Prestamo::validador($values);

		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$values['user_id'] = $user->id;
			$prestamo =Prestamo::create($values);
			return Prestamo::with('negocio','cuenta.banco','user')->findOrFail($prestamo->id);
		}
	}

	public function nocerrados(Request $request,$negocio_id){
		return Prestamo::nocerrados($negocio_id);;
	}

}
