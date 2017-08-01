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

use App\Http\Pdfs\AbonoPdf;
use App\Http\Pdfs\AbonoExcel;
/*
  ['codigo' => 'F01' , 'accion' => 'AbonoController@show'],
  ['codigo' => 'F02' , 'accion' => 'AbonoController@delete'],
  ['codigo' => 'F03' , 'accion' => 'AbonoController@update'],
  ['codigo' => 'F04' , 'accion' => 'AbonoController@create'],
  ['codigo' => 'F05' , 'accion' => 'AbonoController@index'],
*/

class AbonosController extends Controller {

	public static $TRANSFERENCIA_ENTRADA = 2;
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$this->authorize('F05');
		$descripcion = $request->input('descripcion');
		$abonos = MovimientoView::buscar($descripcion,self::$TRANSFERENCIA_ENTRADA);
		return view('abonos.index', compact('abonos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->authorize('F04');
		$negocios = Negocio::pluck('nombre', 'id')->toArray();
		$cuentas = Cuenta::pluck('numero', 'id')->toArray();
		$tipos = array('TRANSFERENCIA' => 'TRANSFERENCIA', 'EFECTIVO' => 'EFECTIVO' );
		return view('abonos.create',compact('negocios','cuentas','tipos'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{ 
		$this->authorize('F04');
  	$values = $request->all(); 
		$validator = Movimiento::validador($values,self::$TRANSFERENCIA_ENTRADA);
		if ($validator->fails()) {
		 Log::info($values);
			return redirect('abonos/create')
          ->withErrors($validator)
          ->withInput();
    }
		else {
			$abono = Movimiento::crearMovimiento($values,self::$TRANSFERENCIA_ENTRADA);
			return redirect()->route('abonos.show',['id' => $abono->id ])->with('success', 'Abono correctamente creado.');			
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
		$this->authorize('F01');
		$abono = Movimiento::findOrFail($id);
		return view('abonos.show', compact('abono'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$this->authorize('F03');
		$abono = Movimiento::findOrFail($id);
		$negocios = Negocio::pluck('nombre', 'id')->toArray();
		$cuentas = Cuenta::pluck('numero', 'id')->toArray();
		$tipos = array('TRANSFERENCIA' => 'TRANSFERENCIA', 'EFECTIVO' => 'EFECTIVO' );
		return view('abonos.edit', compact('abono','negocios','cuentas','tipos'));
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
		$this->authorize('F03');
		$abono = Movimiento::findOrFail($id); 
  	$values = $request->all(); 
		$validator = Movimiento::validador($values,self::$TRANSFERENCIA_ENTRADA,$abono);
		if ($validator->fails()) {
 			return redirect()->route('abonos.edit',['id' => $abono->id ])
          ->withErrors($validator)
          ->withInput();
		}
		else {
			$abono->actualizar($values);
			return redirect()->route('abonos.show',['id' => $abono->id ])->with('success', 'Abono correctamente actualizado.');
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
		$this->authorize('F02');
		$abono = Movimiento::findOrFail($id);
		try {
			$abono->delete();
		}catch (QueryException $e){
			return redirect()->route('abonos.show',['id' => $abono->id ])->with('danger', 'Este abono esta siendo utilizado.');
		}
		return redirect()->route('abonos.index')->with('success', 'Abono Elminado.');
	}



	public function reporte_edit(Request $request){
		$negocios = Negocio::pluck('nombre', 'id')->toArray();
		$cuentas = Cuenta::pluck('numero', 'id')->toArray();
		$tipos = array('TRANSFERENCIA' => 'TRANSFERENCIA', 'EFECTIVO' => 'EFECTIVO' );
		return view('abonos.reporte',compact('negocios','cuentas','tipos'));
	}

  public function reporte(Request $request) 
  {
		$this->authorize('I07');
		$desde = $request->input('desde');
		$hasta = $request->input('hasta');
		$negocio_id = empty($request->input('negocio_id')) ? null: $request->input('negocio_id');
		$cuenta_id = empty($request->input('cuenta_id')) ? null: $request->input('cuenta_id');
		$ordenarTipo  = $request->input('ordenarTipo'); 
		$tipo = $request->input('tipo');
    if($tipo === "pdf"){
			$pdf = new AbonoPdf();
	   	$pdf->generar($desde,$hasta,$negocio_id,$cuenta_id,$ordenarTipo);
    }
    else{
      $excel = new AbonoExcel();
      $excel->generar($desde,$hasta,$negocio_id,$cuenta_id,$ordenarTipo);
    }

  }
  


}
