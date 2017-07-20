<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Elibyy\TCPDF\Facades\TCPDF;

use App\Movimiento;
use App\Cuenta;
use App\Negocio;
use App\User;
 
use DB;
use App;
use View;

use App\Http\Pdfs\MovimientoPdf;


/*
  ['codigo' => 'I01' , 'accion' => 'MovimientosController@show'],
  ['codigo' => 'I02' , 'accion' => 'MovimientosController@delete'],
  ['codigo' => 'I03' , 'accion' => 'MovimientosController@update'],
  ['codigo' => 'I04' , 'accion' => 'MovimientosController@create'],
  ['codigo' => 'I05' , 'accion' => 'MovimientosController@index'],
  ['codigo' => 'I06' , 'accion' => 'MovimientosController@precio_puro'],

*/
class MovimientoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$this->authorize('I05');
		$desde = $request->input('desde');
		$hasta = $request->input('hasta');

		$referencia = $request->input('referencia');
		$descripcion = $request->input('descripcion');

		$tipo = $request->input('tipo');
		$negocio_id = $request->input('negocio_id');
		$movimiento_id = $request->input('movimiento_id');
		$movimientos = Movimiento::buscar($desde,$hasta,$tipo,$negocio_id,$referencia,$descripcion,$movimiento_id);
		return view('movimientos.index', compact('movimientos'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->authorize('I04');
		$negocios = Negocio::pluck('nombre', 'id')->toArray();
		$cuentas = Cuenta::pluck('numero', 'id')->toArray();
		$tipos = array('TRANSFERENCIA' => 'TRANSFERENCIA', 'EFECTIVO' => 'EFECTIVO' );
		return view('movimientos.create',compact('negocios','cuentas','tipos'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{ 
		$this->authorize('I04');
  	$values = $request->all(); 
		$validator = Movimiento::validador($values);
		if ($validator->fails()) {
		 Log::info($values);
			return redirect('movimientos/create')
          ->withErrors($validator)
          ->withInput();
    }
		else {
			$movimiento = Movimiento::crearMovimiento($values);
			return redirect()->route('movimientos.show',['id' => $movimiento->id ])->with('success', 'Movimiento correctamente creado.');			
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
		$this->authorize('I01');
		$movimiento = movimiento::findOrFail($id);
		return view('movimientos.show', compact('movimiento'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$this->authorize('I03');
		$movimiento = Movimiento::findOrFail($id);
		$negocios = Negocio::pluck('nombre', 'id')->toArray();
		$cuentas = Cuenta::pluck('numero', 'id')->toArray();
		$tipos = array('TRANSFERENCIA' => 'TRANSFERENCIA', 'EFECTIVO' => 'EFECTIVO' );
		return view('movimientos.edit', compact('movimiento','negocios','cuentas','tipos'));
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
		$this->authorize('I03');
		$movimiento = Movimiento::findOrFail($id); 
  	$values = $request->all(); 
		$validator = Movimiento::validador($values,$movimiento);
		if ($validator->fails()) {
 			return redirect()->route('movimientos.edit',['id' => $movimiento->id ])
          ->withErrors($validator)
          ->withInput();
		}
		else {
			$movimiento->actualizar($values);
			return redirect()->route('movimientos.show',['id' => $movimiento->id ])->with('success', 'Movimiento correctamente actualizado.');
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
		$this->authorize('I02');
		$movimiento = Movimiento::findOrFail($id);
		try {
			$movimiento->delete();
		}catch (QueryException $e){
			return redirect()->route('movimientos.show',['id' => $movimiento->id ])->with('danger', 'Este movimiento esta siendo utilizado.');
		}
		return redirect()->route('movimientos.index')->with('success', 'Movimiento Elminado.');

	}

	public function reporte_edit(Request $request){
		$negocios = Negocio::pluck('nombre', 'id')->toArray();
		$cuentas = Cuenta::pluck('numero', 'id')->toArray();
		$tipos = array('TRANSFERENCIA' => 'TRANSFERENCIA', 'EFECTIVO' => 'EFECTIVO' );
		return view('movimientos.reporte',compact('negocios','cuentas','tipos'));
	}

  public function reporte(Request $request) 
  {
		$this->authorize('I07');
		$pdf = new MovimientoPdf();
		$desde = $request->input('desde');
		$hasta = $request->input('hasta');
		$negocio_id = empty($request->input('negocio_id')) ? null: $request->input('negocio_id');
		$cuenta_id = empty($request->input('cuenta_id')) ? null: $request->input('cuenta_id');
		$ordenar  = $request->input('ordenar');  
		$ordenarTipo  = $request->input('ordenarTipo'); 
   	$pdf->generar($desde,$hasta,$negocio_id,$cuenta_id,$ordenar,$ordenarTipo);

  }
  
}
