<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Illuminate\Database\QueryException;
use App\Movimiento;
use App\Banco;
use App\Cuenta;
use App\Negocio;
use App\User;


use Illuminate\Support\Facades\Auth;


class MovimientosController extends Controller
{
	public function show($id){
		$movimiento = Movimiento::findOrFail($id);///->first();
		return $movimiento;
	}

	public function delete($id){
		$movimiento = Movimiento::findOrFail($id);///->first();
		try {
			$movimiento->delete();
		}catch (QueryException $e){
			return response()->json(["mensaje"=> "Este Movimiento esta siendo utilizado."],423);
		}

		return $movimiento;
	}



	public function update(Request $request,$id){
		$movimiento = Movimiento::findOrFail($id); 
  	$values = $request->all()['movimiento']; 
		$validator = Movimiento::validador($values);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$data = $validator->getData();
			$banco_destino = null;
  		$negocio = Negocio::findOrFail($data['negocio_id']);
			$cuenta  = Cuenta::with('banco')->findOrFail($data['cuenta_id']); 
			$tipo  = $data['tipo'];
			if($tipo == "transferencia")
			{
				$banco_destino =  Banco::findOrFail($data['banco_destino_id']);
			}
			$movimiento->negocio_id = $data['negocio_id'];
			$movimiento->cuenta_id = $data['cuenta_id'];
			$movimiento->monto = $data['monto'];
			$movimiento->cuenta_destino =  $data['cuenta_destino'];
			$movimiento->fecha = $data['fecha'];
			$movimiento->descripcion = $data['descripcion'];
			$movimiento->tipo = $data['tipo'];
			$movimiento->clasificacion = $data['clasificacion'];
			$movimiento->puro = $data['puro'];
			$movimiento->banco_destino_id =  $data['banco_destino_id'];
			$movimiento->save();
			$movimiento->banco_destino = $banco_destino;
			$movimiento->negocio = $negocio;
			$movimiento->cuenta = $cuenta;

			return $movimiento;
		}
	}

	public function create(Request $request){
  	$values = $request->all()['movimiento']; 
		$validator = Movimiento::validador($values);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			///echo get_class($validator);
			$data = $validator->getData();
			///echo json_encode($data);
			$bancoDestino = null;
  		$negocio = Negocio::findOrFail($data['negocio_id']);
			$cuenta  = Cuenta::with('banco')->findOrFail($data['cuenta_id']); 
			$user  = Auth::user(); 
			$tipo  = $data['tipo'];
			if($tipo == "transferencia")
			{
				$banco_destino =  Banco::findOrFail($data['banco_destino_id']);
			}
			$movimiento =  Movimiento::create([
				'negocio_id' 		 		=> $data['negocio_id'],
				'cuenta_id' 			 	=> $data['cuenta_id'],
				'user_id' 				 	=> $user->id,
				'monto'  			 			=> $data['monto'],
				'cuenta_destino'		=> $data['cuenta_destino'],
				'fecha'  			 			=> $data['fecha'],
				'descripcion'  			=> $data['descripcion'],
				'tipo'  			 			=> $data['tipo'],
				'clasificacion'			=> $data['clasificacion'],
				'puro' 				 			=> $data['puro'],
				'banco_destino_id'	=> $data['banco_destino_id']
			]);
			$movimiento->banco_destino = $banco_destino;
			$movimiento->negocio = $negocio;
			$movimiento->cuenta = $cuenta;
			$movimiento->user = $user;
			return $movimiento;
		}
	}

	public function index(Request $request){
 		///$page = $request->input('page');
		$texto = $request->input('texto');
		$desde = $request->input('desde');
		$hasta = $request->input('hasta');
		$tipo = $request->input('tipo');
		$clasificacion = $request->input('clasificacion');
		$negocio_id = $request->input('negocio_id');
    //DB::enableQueryLog();
		$negocios = Movimiento::buscar($texto,$desde,$hasta,$tipo,$clasificacion,$negocio_id);
    //$query = DB::getQueryLog();
    //print_r($query);
		return $negocios->toArray();
	}

}
