<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Validator;

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
      $query->where('negocio_id', '=',$negocio_id);
    }
    if($cuenta_id){
      $query->where('cuenta_id', '=',$cuenta_id);
    }
    if($ordenarTipo =="desc"){
      $query->orderBy('fecha','desc')->orderBy('descripcion','desc');
    }
    else{
      $query->orderBy('fecha','asc')->orderBy('descripcion','desc');
    }
    return $query->get();
  }

  public static function movimientos($desde,$hasta,$negocio_id,$cuenta_id,$ordenarTipo,$clasificacion = 1 ){
    $query =  MovimientoView::select();
    if($clasificacion){
      $query->where('clasificacion', '=',$clasificacion);
    }
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

 public static function gastos($desde,$hasta,$cuenta_id,$ordenarTipo){
    $query =  MovimientoView::where('clasificacion',3);
    if($desde){
      $query->where('fecha', '>=',$desde);
    }
    if($hasta){
      $query->where('fecha', '<=',$hasta);
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


}
