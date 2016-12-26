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

class PrestamosController extends Controller
{

	public function index(Request $request){
		$texto = $request->input('texto');
		$desde = $request->input('desde');
		$hasta = $request->input('hasta');
		$tipo = $request->input('tipo');
		$negocio_id = $request->input('negocio_id');
		$prestamos = Prestamo::buscar($texto,$desde,$hasta,$tipo,$negocio_id);
		return $prestamos->toArray();
	}

	public function show($id){
		return Prestamo::with('negocio','cuenta.banco','user')->findOrFail($id);;
	}


	public function delete($id){
		$prestamo = Prestamo::findOrFail($id);
		try {
			$prestamo->delete();
		}catch (QueryException $e){
			return response()->json(["prestamo"=> "Error al intentar eliminar este prestamo."],423);
		}
		return $prestamo;
	}

	public function update(Request $request,$id){
		$prestamo = Prestamo::findOrFail($id); 
  	$values = $request->all()['prestamo']; 
		$validator = Prestamo::validador($values);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$prestamo->update($values);
			$prestamo->negocio->nombre;
			$prestamo->cuenta->numero;
			$prestamo->user->id;
			return $prestamo; 
		}
	}

	public function create(Request $request){
		///echo json_encode($request->all());
		$user  = Auth::user(); 
  	$values = $request->all()['prestamo']; 
		//echo json_encode($values);
		$validator = Prestamo::validador($values);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$values['user_id'] = $user->id;
			$prestamo =Prestamo::create($values);
			$prestamo->negocio->nombre;
			$prestamo->cuenta->numero;
			$prestamo->user->id;
			return $prestamo;
		}
	}
}
