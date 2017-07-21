<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Database\QueryException;

use App\Banco;
use App\Cuenta;
use Validator;
/*
 *  'codigo' => 'B01' , 'accion' => 'CuentasController@show'
 *  'codigo' => 'B02' , 'accion' => 'CuentasController@delete'
 *  'codigo' => 'B03' , 'accion' => 'CuentasController@update'
 *  'codigo' => 'B04' , 'accion' => 'CuentasController@create'
 *  'codigo' => 'B05' , 'accion' => 'CuentasController@index'
*/
class CuentasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
 		$this->authorize('B05');
		$numero = $request->input('search');
		$cuentas = Cuenta::buscar($numero);
		return view('cuentas.index', compact('cuentas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->authorize('B04');
		$items= Banco::pluck('nombre', 'id')->toArray();
		return view('cuentas.create', compact('items'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->authorize('B04');
  	$values = $request->all(); 
		$validator = Cuenta::validador($values);
		if ($validator->fails()) {
			return redirect('cuentas/create')
          ->withErrors($validator)
          ->withInput();
		}
		else {
			$banco  = Banco::findOrFail($values['banco_id']);
			$cuenta = Cuenta::create(
						['numero' => $values['numero'],
						'banco_id' => $values['banco_id']]);
			$cuenta->banco = $banco;
			return redirect()->route('cuentas.show',['id' => $cuenta->id ])->with('success', 'Cuenta correctamente creada.');
		}

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->authorize('B01');
		$cuenta = Cuenta::findOrFail($id);
		$movimientos = $cuenta->movimientos()->paginate(15);
		return view('cuentas.show', compact('cuenta','movimientos'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$this->authorize('B03');
		$cuenta = Cuenta::findOrFail($id);
		$items= Banco::pluck('nombre', 'id')->toArray();
		return view('cuentas.edit', compact('cuenta','items'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$this->authorize('B03');
		$cuenta = Cuenta::findOrFail($id);
  	$values = $request->all(); 
		$validator = Cuenta::validador($values,$cuenta);
		if ($validator->fails()) {
 			return redirect()->route('cuentas.edit',['id' => $cuenta->id ])
          ->withErrors($validator)
          ->withInput();
		}
		else {
			$cuenta->update($values);
			return redirect()->route('cuentas.show',['id' => $cuenta->id ])->with('success', 'Cuenta correctamente actualizada.');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->authorize('B02');
		$cuenta = Cuenta::with('banco')->findOrFail($id);
		try {
			$cuenta->delete();
		}catch (QueryException $e){
			return redirect()->route('cuentas.show',['id' => $cuenta->id ])->with('danger', 'Este Cuenta esta siendo utilizada.');
		}
		return redirect()->route('cuentas.index')->with('success', 'Cuenta Elminada.');
	}

}
