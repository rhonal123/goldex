<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Database\QueryException;

use App\Negocio; 

/*
 *  'codigo' => 'C01' , 'accion' => 'NegociosController@show,movimientos,abonos'
 *  'codigo' => 'C02' , 'accion' => 'NegociosController@delete'
 *  'codigo' => 'C03' , 'accion' => 'NegociosController@update'
 *  'codigo' => 'C04' , 'accion' => 'NegociosController@create'
 *  'codigo' => 'C05' , 'accion' => 'NegociosController@index'
 */
class NegociosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$this->authorize('C05');
		$nombre = $request->input('search');
		$negocios = Negocio::buscar($nombre);
		return view('negocios.index', compact('negocios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->authorize('C04');
		return view('negocios.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->authorize('C04');
  	$values = $request->all(); 
		$validator = Negocio::validador($values);
		if ($validator->fails()) {
			return redirect()->route('negocios.show',['id' => $negocio->id ])
          ->withErrors($validator)
          ->withInput();
		}
		else {
			$negocio=  Negocio::create([
				'nombre' => $values['nombre'],
				'rif' => $values['rif'],
				'descripcion' => $values['descripcion'],
				'direccion' => $values['direccion'],
				'encargado' => $values['encargado'],
				'telefono' => $values['telefono'],
			]);
			return redirect()->route('negocios.show',['id' => $negocio->id ])->with('success', 'Movimiento correctamente creado.');
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
		$this->authorize('C01');
		$negocio = Negocio::findOrFail($id);
		return view('negocios.show', compact('negocio'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$this->authorize('C03');
		$negocio = Negocio::findOrFail($id);
		return view('negocios.edit', compact('negocio'));
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
		$this->authorize('C03');
		$negocio = Negocio::findOrFail($id);///->first();
  	$values = $request->all(); 
		$validator = Negocio::validador($values);
		if ($validator->fails()) {
 			return redirect()->route('negocios.edit',['id' => $negocio->id ])
          ->withErrors($validator)
          ->withInput();
		}
		else {
			$negocio->nombre = $values['nombre'];
			$negocio->rif = $values['rif'];
			$negocio->descripcion = $values['descripcion'];
			$negocio->direccion = $values['direccion'];
			$negocio->encargado = $values['encargado'];
			$negocio->telefono = $values['telefono'];
			$negocio->save();
			return redirect()->route('negocios.show',['id' => $negocio->id ])->with('success', 'Movimiento correctamente creado.');
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
		$this->authorize('C02');
		$negocio = Negocio::findOrFail($id); 
		try {
			$negocio->delete();
		}catch (QueryException $e){
			return redirect()->route('negocios.show',['id' => $negocio->id ])->with('danger', 'Este Negocio esta siendo utilizado.');
		}
		return redirect()->route('negocios.index')->with('success', 'Negocio Eliminado.');
	}

}
