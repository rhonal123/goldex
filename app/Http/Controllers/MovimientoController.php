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
use App\MovimientoView;
use App\Cuenta;
use App\Negocio;
use App\User;
 
use DB;
use App;
use View;

use App\Http\Pdfs\MovimientoPdf;
use App\Http\Pdfs\MovimientoExcel;


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
		$descripcion = $request->input('descripcion');
		$desde = $request->input('desde');
		$hasta = $request->input('hasta');
		$negocio_id = $request->input('negocio_id');
		$cuenta_id =  $request->input('cuenta_id');
		$movimientos = MovimientoView::buscar($desde,$hasta,$negocio_id,$cuenta_id,$descripcion);
		$negocios = Negocio::pluck('nombre', 'id')->toArray();
		$cuentas = Cuenta::pluck('numero', 'id')->toArray();
		return view('movimientos.index', compact('movimientos','negocios','cuentas','desde','hasta','negocio_id','cuenta_id','descripcion'));
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
		$detalles = $movimiento->detalles()->get();
		$total = count($detalles);
		echo count($detalles);
		return view('movimientos.show', compact('movimiento','detalles','total'));
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
		$validator = Movimiento::validador($values,1,$movimiento);
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
		$desde = $request->input('desde');
		$hasta = $request->input('hasta');
    $negocio_id = explode(",",$request->input('negocio_id'));
		$cuenta_id = empty($request->input('cuenta_id')) ? null: $request->input('cuenta_id');
		$ordenarTipo  = $request->input('ordenarTipo'); 
    $tipo = $request->input('tipo');
    if($tipo === "pdf"){
			$pdf = new MovimientoPdf();
	   	$pdf->generar($desde,$hasta,$negocio_id,$cuenta_id,$ordenarTipo);
    }
    else{
      $excel = new MovimientoExcel();
      $excel->generar($desde,$hasta,$negocio_id,$cuenta_id,$ordenarTipo);
    }		

  }
  
}
