<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Http\Requests;
use App\Tipo;

class TiposController extends Controller
{

	public function show($id){
		$this->authorize('G01');
		return Tipo::findOrFail($id);
	}

	public function delete($id){
		$this->authorize('G02');
		$tipo = Tipo::findOrFail($id);
		try {
			$tipo->delete();
		}catch (QueryException $e){
			return response()->json(["tipos"=> "Este Tipo esta siendo utilizado."],423);
		}
		return $tipo;
	}
 

	public function update(Request $request,$id){
		$this->authorize('G03');
		$tipo = Tipo::findOrFail($id); 
  	$values = $request->all()['tipo']; 
		$validator = Tipo::validador($values,$tipo);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$tipo->update($values);
			return $tipo;
		}
	}

	public function create(Request $request){
		$this->authorize('G04');
  	$values = $request->all()['tipo']; 
		$validator = Tipo::validador($values);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			return Tipo::create($values);
		}
	}

	public function index(Request $request){
		$this->authorize('G05');
		$nombre = $request->input('search');
		$tipos = Tipo::buscar($nombre);
		return $tipos;
	}
}