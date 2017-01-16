<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Http\Requests;
use Illuminate\Support\Facades\Log;
use App\Tipo;

use App\Movimiento;
use App\Negocio;
use App\Cuenta;
use App\Banco;
use App\Abono;

class ServiciosController extends Controller
{
	public function tipos(Request $request){
		$serach = $request->input('serach');
		$tipos = Tipo::buscar($serach);
		return $tipos->toArray();
	}

	public function movimientos(Request $request){
		$desde = $request->input('desde');
		$hasta = $request->input('hasta');
		$referencia = $request->input('referencia');
		$descripcion = $request->input('descripcion');
		$tipo = $request->input('tipo');
		$negocio_id = $request->input('negocio_id');
		$cuenta_id =  $request->input('cuenta_id');
		$movimientos = Movimiento::buscar($desde,$hasta,"TRANSFERENCIA",$negocio_id,$referencia,$descripcion,$cuenta_id);
		return $movimientos;
	}

	public function negocios(Request $request){
		$nombre = $request->input('search');
		$negocios = Negocio::buscar($nombre);
		return $negocios->toArray();
	}

	public function cuentas(Request $request){
		$nombre = $request->input('search');
		$cuentas = Cuenta::buscar($nombre);
		return $cuentas;
	}

	public function bancos(Request $request){
		$nombre = $request->input('search');
		$bancos = Banco::buscar($nombre);
		return $bancos;
	}

 	public function abonospendientes(Request $request, $id) {
		return Abono::abonosDisponible($id);//with('cuenta.banco','tipo')->where("negocio_id",$id)->get();
     /// Negocio::movimientos($id,"CREADO");
	}

	public function movimientospendites(Request $request, $id) {
		return Movimiento::movimientosDisponible($id); // Negocio::abonos($id,"CREADO");
	}




}

