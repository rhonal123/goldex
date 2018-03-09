<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Validator;
use App\Configuration;
class MovimientoView extends Model
{

  protected $casts = [
    'id' 							=> 'integer',
    'negocio_id' 			=> 'integer',
    'cuenta_id' 			=> 'integer',
    'clasificacion'   => 'integer',
    'fecha' 					=> 'date',
    'comision' 				=> 'double',
    'monto' 					=> 'double',
    'saldo'           => 'double',
    'referencia' 			=> 'string',
    'descripcion' 		=> 'string',
    'negocio'				  => 'string',
    'cuenta' 				  => 'string',
    'tipo'            => 'string',
  ];

  public static function afectabanco($desde,$hasta,$negocio_id,$cuenta_id,$ordenarTipo){
    $query = MovimientoView::where('tipo', 'TRANSFERENCIA');
    if($desde){
      $query->where('fecha', '>=',$desde);
    }
    if($hasta){
      $query->where('fecha', '<=',$hasta);
    }
    if($negocio_id){
      $query->whereIn('negocio_id',$negocio_id);
    }
    if($cuenta_id){
      $query->whereIn('cuenta_id',$cuenta_id);
    }
    if($ordenarTipo =="desc"){
      $query->orderBy('fecha','desc')->orderBy('descripcion','desc');
    }
    else{
      $query->orderBy('fecha','asc')->orderBy('descripcion','desc');
    }
    return $query->get();
  }

  public static function cajaChica($desde,$hasta,$ordenarTipo)
  {
    $query = MovimientoView::where('tipo', 'EFECTIVO')->where('cuenta_id',32);
    if($desde){
      $query->where('fecha', '>=',$desde);
    }
    if($hasta){
      $query->where('fecha', '<=',$hasta);
    }
    
    if($ordenarTipo =="desc"){
      $query->orderBy('fecha','desc')->orderBy('descripcion','desc');
    }
    else{
      $query->orderBy('fecha','asc')->orderBy('descripcion','desc');
    }
    return $query->get();
  }

  public static function abonoCaja($hasta)
  {
    $configuracion = Configuration::find(1);
    $query = Movimiento::where('tipo', 'EFECTIVO')->where('cuenta_id',32)->where('clasificacion',2);
    $query->where('fecha', '>=',$configuracion->anoTransito);
    if($hasta){
      $query->where('fecha', '<=',$hasta);
    }
    $resultado = $query->sum('monto');
    return $resultado == null ? 0: $resultado;
  }

  public static function salidaEfectivo($hasta)
  {
    $configuracion = Configuration::find(1);
    $query = Movimiento::where('tipo', 'EFECTIVO')->where('cuenta_id',32)->where('clasificacion',1); /// salida o gasto de efectivo 
    $query->where('fecha', '>=',$configuracion->anoTransito);
    if($hasta){
      $query->where('fecha', '<=',$hasta);
    }
    $resultado = $query->sum('monto');
    return $resultado == null ? 0: $resultado;
  }

  public static function abonoCajaDiaAnterior($hasta)
  {
    $configuracion = Configuration::find(1);
    $query = Movimiento::where('tipo', 'EFECTIVO')->where('cuenta_id',32)->where('clasificacion',2);
    $query->where('fecha', '>=',$configuracion->anoTransito);
    if($hasta){
      $query->where('fecha', '<',$hasta);
    }
    $resultado = $query->sum('monto');
    return $resultado == null ? 0: $resultado;
  }

  public static function salidaEfectivoDiaAnterior($hasta)
  {
    $configuracion = Configuration::find(1);
    $query = Movimiento::where('tipo', 'EFECTIVO')->where('cuenta_id',32)->where('clasificacion',1); /// salida o gasto de efectivo 
    $query->where('fecha', '>=',$configuracion->anoTransito);
    if($hasta){
      $query->where('fecha', '<',$hasta);
    }
    $resultado = $query->sum('monto');
    return $resultado == null ? 0: $resultado;
  }


  public static function movimientos($desde,$hasta,$negocio_id,$cuenta_id,$ordenarTipo,$clasificacion = 1 ){
    $query =  MovimientoView::select();
    if($clasificacion){
      if(is_array($clasificacion)) {
        $query->whereIn('clasificacion',$clasificacion);
      }
      else{
        $query->where('clasificacion', '=',$clasificacion);
      }
    }
    if($desde){
      $query->where('fecha', '>=',$desde);
    }
    if($hasta){
      $query->where('fecha', '<=',$hasta);
    }
    if($negocio_id){
      $query->whereIn('negocio_id',$negocio_id);
    }
    if($cuenta_id){
      $query->where('cuenta_id', '=',$cuenta_id);
    }
    if($ordenarTipo =="desc"){
      $query->orderBy('fecha','desc')->orderBy('descripcion','desc');
    }
    else{
      $query->orderBy('fecha','asc')->orderBy('descripcion','desc');;
    }
    return $query->get();
  }

 public static function gastos($desde,$hasta,$cuenta_id,$negocio_id,$ordenarTipo){
    $query =  MovimientoView::where('clasificacion',3);
    if($desde){
      $query->where('fecha', '>=',$desde);
    }
    if($hasta){
      $query->where('fecha', '<=',$hasta);
    }
    if($negocio_id){
      $query->where('negocio_id', '=',$negocio_id);
    }
    if($cuenta_id){
      $query->where('cuenta_id', '=',$cuenta_id);
    }
    if($ordenarTipo =="desc"){
      $query->orderBy('fecha','desc')->orderBy('descripcion','desc');
    }
    else{
      $query->orderBy('fecha','asc')->orderBy('descripcion','desc');;
    }
    return $query->get();
  }

  public static function buscar($desde,$hasta,$negocio_id,$cuenta_id,$descripcion,$clasificacion=1) {
    $query =  MovimientoView::orderBy('id','desc');
    if($desde){
      $query->where('fecha', '>=',$desde);
    }
    if($hasta){
      $query->where('fecha', '<=',$hasta);
    }
    if($negocio_id){
      $query->where('negocio_id',$negocio_id);
    }
    if($cuenta_id){
      $query->where('cuenta_id',$cuenta_id);
    }
    if($descripcion) {
      $query->where('descripcion','like',"%".$descripcion."%")
            ->orWhere('referencia','like',"%".$descripcion."%");
    }
    if($clasificacion) {
      $query->where('clasificacion',$clasificacion);
    }

    return $query->paginate(15);
  }


}
