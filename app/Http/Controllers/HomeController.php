<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Log;
use Carbon\Carbon;
use Hash;

use App\Movimiento;
use App\Cuenta;
use App\Negocio;
use App\User;
use App\Configuration;

use App\Http\Pdfs\GeneralPdf;
use App\Http\Pdfs\CuentaPdf;
use App\Http\Pdfs\CuentaExcel;
use App\Http\Pdfs\GeneralExcel;

use App\Http\Pdfs\NegocioPdf;
use App\Http\Pdfs\NegocioExcel;

class HomeController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('home');
  }

  public function password_edit()
  {
    return view('auth.passwords.password');
  }

  public function password(Request $request)
  {
    $user  =Auth::user();
    $values = $request->all(); 
    $validator = User::validadorPassword($values,$user);
    if ($validator->fails()) {
      Log::info($validator->errors()->all());
        return redirect('password')
          ->withErrors($validator)
          ->withInput();
    }
    else {
      $values['password'] = Hash::make($values['password']);
        $user->update($values);
        return redirect()->route('root')->with('success', 'Contraseña Cambiada correctamente');
      } 
  }

  public function reporte_edit(Request $request){
    $negocios = Negocio::pluck('nombre', 'id')->toArray();
    $cuentas = Cuenta::pluck('numero', 'id')->toArray();
    $tipos = array('TRANSFERENCIA' => 'TRANSFERENCIA', 'EFECTIVO' => 'EFECTIVO' );
    return view('home.reporte',compact('negocios','cuentas','tipos'));
  }

  public function reporte(Request $request) 
  {
    $this->authorize('I07');
    $desde = $request->input('desde');
    $hasta = $request->input('hasta');
    $tipo = $request->input('tipo');
    $negocio_id = empty($request->input('negocio_id')) ? null: $request->input('negocio_id');
    $cuenta_id = explode(",",empty($request->input('cuenta_id')) ? null: $request->input('cuenta_id'));
    $ordenarTipo  = $request->input('ordenarTipo'); 
    if($tipo === "pdf"){
      $pdf = new GeneralPdf();
      $pdf->generar($desde,$hasta,$negocio_id,$cuenta_id,$ordenarTipo);
    }
    else{
      $excel = new GeneralExcel();
      $excel->generar($desde,$hasta,$negocio_id,$cuenta_id,$ordenarTipo);
    }
  }

  public function reporte_cuenta_edit(Request $request){
    return view('home.reporte_cuentas');
  }


  public function reporte_cuenta(Request $request) 
  {
    $this->authorize('I07');
    $desde = $request->input('desde');
    $hasta = $request->input('hasta');
    $tipo = $request->input('tipo');
    if($tipo === "pdf"){
      $pdf = new CuentaPdf();
      $pdf->generar($desde,$hasta);
    }
    else{
      $excel = new CuentaExcel();
      $excel->generar($desde,$hasta);
    }
  }

  public function reporte_negocio_edit(Request $request){
    return view('home.reporte_negocios');
  }

  public function reporte_negocio(Request $request) 
  {
    $this->authorize('I07');
    $desde = $request->input('desde');
    $hasta = $request->input('hasta');
    $tipo = $request->input('tipo');
    if($tipo === "pdf"){
      $pdf = new NegocioPdf();
      $pdf->generar($desde,$hasta);
    }
    else{
      $excel = new NegocioExcel();
      $excel->generar($desde,$hasta);
    }
  }
 
  public function configuracion_edit()
  {
    $configuracion = Configuration::find(1);
    return view('home.configuracion',compact('configuracion'));
  }

  public function configuracion(Request $request)
  {
    $configuracion = Configuration::find(1);
    $operacion = $configuracion->update([
     'anoTransito' => Carbon::createFromFormat("yy/m/d",$request->anoTransito)
    ]);
    return view('home.configuracion',compact('configuracion','operacion'));
  }

}
