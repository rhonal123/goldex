<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Elibyy\TCPDF\Facades\TCPDF;

use App\MovimientoView;
use App\Movimiento;
use App\Cuenta;
use App\Negocio;
use App\User;
 
use DB;
use App;
use View;

use App\Http\Pdfs\GastoPdf;
use App\Http\Pdfs\GastoExcel;

/*
  ['codigo' => 'J01' , 'accion' => 'gastoController@show'],
  ['codigo' => 'J02' , 'accion' => 'gastoController@delete'],
  ['codigo' => 'J03' , 'accion' => 'gastoController@update'],
  ['codigo' => 'J04' , 'accion' => 'gastoController@create'],
  ['codigo' => 'J05' , 'accion' => 'gastoController@index'],
  ['codigo' => 'J07' , 'accion' => 'gastoController@index'],

*/

class GastosController extends Controller {

	public static $GASTO_PERSONAL = 3;
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$this->authorize('J05');
		$descripcion = $request->input('descripcion');
		$desde = $request->input('desde');
		$hasta = $request->input('hasta');
		$negocio_id = $request->input('negocio_id');
		$cuenta_id =  $request->input('cuenta_id');
		$gastos = MovimientoView::buscar($desde,$hasta,$negocio_id,$cuenta_id,$descripcion,self::$GASTO_PERSONAL);
		$cuentas = Cuenta::pluck('numero', 'id')->toArray();
		$negocios = Negocio::pluck('nombre', 'id')->toArray();
		return view('gastos.index', compact('gastos','cuentas','desde','hasta','negocio_id','cuenta_id','descripcion','negocios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->authorize('J04');
		$cuentas = Cuenta::pluck('numero', 'id')->toArray();
		$negocios = Negocio::pluck('nombre', 'id')->toArray();
		return view('gastos.create',compact('cuentas','tipos','negocios'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{ 
		$this->authorize('J04');
  	$values = $request->all(); 
		$validator = Movimiento::validador($values,self::$GASTO_PERSONAL);
		if ($validator->fails()) {
		 Log::info($values);
			return redirect('gastos/create')
          ->withErrors($validator)
          ->withInput();
    }
		else {
			$gasto = Movimiento::crearMovimiento($values,self::$GASTO_PERSONAL);
			return redirect()->route('gastos.show',['id' => $gasto->id ])->with('success', 'Gasto correctamente creado.');			
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
		$this->authorize('J01');
		$gasto = Movimiento::findOrFail($id);
		return view('gastos.show', compact('gasto'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$this->authorize('J03');
		$gasto = Movimiento::findOrFail($id);
		$negocios = Negocio::pluck('nombre', 'id')->toArray();
		$cuentas = Cuenta::pluck('numero', 'id')->toArray();
		$tipos = array('TRANSFERENCIA' => 'TRANSFERENCIA', 'EFECTIVO' => 'EFECTIVO' );
		return view('gastos.edit', compact('gasto','negocios','cuentas','tipos'));
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
		$this->authorize('J03');
		$gasto = Movimiento::findOrFail($id); 
  	$values = $request->all(); 
		$validator = Movimiento::validador($values,self::$GASTO_PERSONAL,$gasto);
		if ($validator->fails()) {
 			return redirect()->route('gastos.edit',['id' => $gasto->id ])
          ->withErrors($validator)
          ->withInput();
		}
		else {
			$gasto->actualizar($values);
			return redirect()->route('gastos.show',['id' => $gasto->id ])->with('success', 'Gasto correctamente actualizado.');
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
		$this->authorize('J02');
		$gasto = Movimiento::findOrFail($id);
		try {
			$gasto->delete();
		}catch (QueryException $e){
			return redirect()->route('gastos.show',['id' => $gasto->id ])->with('danger', 'Este gasto esta siendo utilizado.');
		}
		return redirect()->route('gastos.index')->with('success', 'Gasto Elminado.');

	}

	public function reporte_edit(Request $request){
		$this->authorize('J07');
		$cuentas = Cuenta::pluck('numero', 'id')->toArray();
		$negocios = Negocio::pluck('nombre', 'id')->toArray();
		return view('gastos.reporte',compact('cuentas','negocios'));
	}

  public function reporte(Request $request) 
  {
		$this->authorize('J07');
		$desde = $request->input('desde');
		$hasta = $request->input('hasta');
		$cuenta_id = empty($request->input('cuenta_id')) ? null: $request->input('cuenta_id');
		$negocio_id = empty($request->input('negocio_id')) ? null: $request->input('negocio_id');
		$ordenarTipo  = $request->input('ordenarTipo'); 
    $tipo = $request->input('tipo');

    if($tipo === "pdf"){
			$pdf = new GastoPdf();
	   	$pdf->generar($desde,$hasta,$cuenta_id,$negocio_id,$ordenarTipo);
    }
    else{
      $excel = new GastoExcel();
      $excel->generar($desde,$hasta,$cuenta_id,$negocio_id,$ordenarTipo);
    }

  }
}
