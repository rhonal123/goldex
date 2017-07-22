<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Log;
use Hash;

use App\Movimiento;
use App\Cuenta;
use App\Negocio;
use App\User;

use App\Http\Pdfs\GeneralPdf;

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
    $pdf = new GeneralPdf();
    $desde = $request->input('desde');
    $hasta = $request->input('hasta');
    $negocio_id = empty($request->input('negocio_id')) ? null: $request->input('negocio_id');
    $cuenta_id = empty($request->input('cuenta_id')) ? null: $request->input('cuenta_id');
    $ordenar  = $request->input('ordenar');  
    $ordenarTipo  = $request->input('ordenarTipo'); 
    $pdf->generar($desde,$hasta,$negocio_id,$cuenta_id,$ordenar,$ordenarTipo);
  }

}
