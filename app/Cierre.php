<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;
use DB;
use Exception;
use App\Abono;
use App\Cierre;
use App\Movimiento;
use Validator;

/*
  operaciones : guardarcerrar, guardar
*/
class Cierre extends Model
{

  protected $fillable = ['negocio_id','fecha'];
  protected $hidden = ['created_at','updated_at'];

  protected $casts = [
    'id' => 'integer',
    'negocio_id' => 'integer',
    'abono' => 'double',
    'prestamo' => 'double',
    'saldo' => 'double',
    'estado' => 'string',
  ];


	public function negocio() {
    return $this->belongsTo('App\Negocio');
  }

  public function movimientos() {
     return $this->hasMany('App\Movimiento');
  }

  public function abonos() {
    return $this->hasMany('App\Abono');
  }

  /*
  public function totalAbono() {
    $suma = $this->abonos()->sum('saldo');
    return (double) ($suma? $suma : 0.0);
  }

  public function totalPrestamo(){
    $suma =  $this->prestamos()->sum('monto');
    return (double) ($suma? $suma : 0.0);
  }
*/

  public static function buscar($desde,$hasta,$negocio_id,$estado) {
    $query =  Cierre::with('negocio')->orderBy('id','desc');;
    if($desde){
      $query->where('fecha', '>=',$desde);
    }
    if($hasta){
      $query->where('fecha', '<=',$hasta);
    }
    if($estado){
      $query->where('estado', 'ilike',"%".$estado."%");
    }
    if($negocio_id){
      $query->where('negocio_id', '=',$negocio_id);
    }
    return $query->paginate(15);
  }

  /*
  public function agregarPrestamo($prestamo){
    $estado = $this->attributes['estado'];
    if($estado != 'cerrado' && $prestamo->cierre_id == null) {
      try {
        DB::beginTransaction();
        $prestamo->cierre_id =  $this->attributes['id'];
        $prestamo->save();
        $totalPrestamo = $this->totalPrestamo(); 
        $totalAbono = $this->totalAbono();
        $saldo = $totalAbono -  $totalPrestamo;
        if($saldo != 0) {
          $estado = 'activo';
        }
        $this->attributes['saldo'] = $saldo;
        $this->attributes['estado'] = $estado;
        $this->attributes['abono'] = $totalAbono;
        $this->attributes['prestamo'] = $totalPrestamo;
        $this->save();
        DB::commit();
      } 
      catch (QueryException $e) {
        DB::rollBack();
        throw new Exception('Error al Intentar Agregar un Prestamo al cierre.', 500,$e);
      }
    }
    else{
      if($estado == 'cerrado')
        throw new Exception("No Puedes Agregar un Prestamo al cierre, debido que se encuentra cerrado.");
      else
        throw new Exception("El Prestamo pertenece a algun cierre.");
    }
  }
  */
  /*
  public function quitarPrestamo($prestamo){
    $estado = $this->attributes['estado'];
    $id = $this->attributes['id'];
    if($estado != 'cerrado' && $prestamo->cierre_id == $id) {
      try {
        DB::beginTransaction();
        $prestamo->cierre_id = null;
        $prestamo->save();
        $totalPrestamo = $this->totalPrestamo(); 
        $totalAbono = $this->totalAbono();
        $saldo = $totalAbono -  $totalPrestamo;
        if($saldo != 0.0) {
          $estado = 'activo';
        }
        $this->update([
          'saldo' => $saldo,
          'estado' => $estado,
          'abono' => $totalAbono,
          'prestamo' => $totalPrestamo
        ]);
        DB::commit();
      } 
      catch (QueryException $e) {
        DB::rollBack();
        throw new Exception('Error al Intentar Quitar un Prestamo al cierre.', 500,$e);
      }
    }
    else{
      if($estado == 'cerrado')
        throw new Exception("No Puedes Quitar un Prestamo al cierre, debido que se encuentra cerrado.");
      else
        throw new Exception("El Prestamo pertenece a algun cierre.");
    }
  }
  */
  /*
  public function quitarAbono($abono){
    $estado = $this->attributes['estado'];
    $id = $this->attributes['id'];
    if($estado != 'cerrado' && $abono->cierre_id == $id) {
      try {
        DB::beginTransaction();
        $abono->cierre_id =  null;
        $abono->save();
        $totalPrestamo = $this->totalPrestamo(); 
        $totalAbono = $this->totalAbono();
        $saldo = $totalAbono -  $totalPrestamo;

        if($saldo != 0.0) {
          $estado = 'activo';
        }
        $this->update([
          'saldo' => $saldo,
          'estado' => $estado,
          'abono' => $totalAbono,
          'prestamo' => $totalPrestamo
        ]);
        DB::commit();
      } 
      catch (QueryException $e) {
        DB::rollBack();
        throw new Exception('Error al Intentar Quitar un Abono al cierre.', 500,$e);
      }
    }
    else{
      if($estado == 'cerrado')
        throw new Exception("No Puedes Quitar un Abono al cierre, debido que se encuentra cerrado.");
      else
        throw new Exception("El Abono pertenece a algun cierre.");
    }
  }
  */
  /*
  public function agregarAbono($abono){
    $estado = $this->attributes['estado'];
    if($estado != 'cerrado' && $abono->cierre_id == null) {
      try {
        DB::beginTransaction();
        $abono->cierre_id =  $this->attributes['id'];
        $abono->save();
        $totalPrestamo = $this->totalPrestamo(); 
        $totalAbono = $this->totalAbono();
        $saldo = $totalAbono -  $totalPrestamo;

        if($saldo != 0.0) {
          $estado = 'activo';
        }
        $this->attributes['saldo'] = $saldo;
        $this->attributes['estado'] = $estado;
        $this->attributes['abono'] = $totalAbono;
        $this->attributes['prestamo'] = $totalPrestamo;
        $this->save();
        DB::commit();
      } 
      catch (QueryException $e) {
        DB::rollBack();
        throw new Exception('Error al Intentar Agregar un Abono al cierre', 500,$e);
      }
    }
    else{
      if($estado == 'cerrado')
        throw new Exception("No Puedes Agregar un Abono al cierre, debido que se encuentra cerrado.");
      else
        throw new Exception("El Abono pertenece a algun cierre.");
    }
  }
  */


  public function perteneceMovimiento($id){
    return $this->movimientos()->where('id',$id)->exists();
  }
  
  public function perteneceAbono($id){
    return $this->abonos()->where('id',$id)->exists();
  }
  

  public function actualizarCierre($values){
    $idMovimientos = array();
    $idAbonos      = array();
    $totalAbono    = 0.0;
    $totalPrestamo = 0.0;
    $saldo         = 0.0;
    $estado        = 'ACTIVO';
    $operacion     = $values['operacion'];

    foreach ($values['movimientos'] as $key => $value) {
      array_push($idMovimientos,$value['id']);
    }

    foreach ($values['abonos'] as $key => $value) {
      array_push($idAbonos,$value['id']);
    }

    try {
      DB::beginTransaction();
      if($this->attributes['estado'] != 'ACTIVO'){
        throw new Exception('No Puede Modificar este Cierre, no se encuentra activado.', 500,$e);
      }

      Movimiento::where('cierre_id', '=',$this->attributes['id'])->update(['estado' => 'CREADO','cierre_id' => null]);
      Abono::where('cierre_id', '=',$this->attributes['id'])->update(['estado' => 'CREADO','cierre_id' => null]);

      $movimientos = Movimiento::whereIn('id', $idMovimientos)->get();
      $abonos = Abono::whereIn('id', $idAbonos)->get();

      foreach ($movimientos as $movimiento) {
        $totalPrestamo += $movimiento->saldo;
        $movimiento->estado = 'ASOCIADO';
        $movimiento->cierre_id = $this->attributes['id'];
        $movimiento->save();
      }

      foreach ($abonos as $abono) {
        $totalAbono += $abono->saldo;
        $abono->estado = 'ASOCIADO';
        $abono->cierre_id = $this->attributes['id'];
        $abono->save();
      }

      $this->attributes['abono']     = $totalAbono;
      $this->attributes['prestamo']  = $totalPrestamo;
      $this->attributes['saldo']     = $totalAbono - $totalPrestamo;
      $this->attributes['fecha']     =  $values['fecha'];
      if($this->attributes['saldo'] == 0 || $operacion == 'guardarcerrar') {
        $this->attributes['estado'] = 'CERRADO';
      }
      $this->save();
      DB::commit();
    } 
    catch (QueryException $e) {
      DB::rollBack();
      throw new Exception('Error al Intentar Actualizar un cierre diario', 500,$e);
    }
  }

  public static function createCierre($values){
    $idMovimientos = array();
    $idAbonos      = array();
    $totalAbono    = 0.0;
    $totalPrestamo = 0.0;
    $saldo         = 0.0;
    $estado        = 'activo';
    $negocio_id    = $values['negocio_id'];
    $negocio       = Negocio::findOrFail($negocio_id);
    $operacion     = $values['operacion'];

     
    foreach ($values['movimientos'] as $key => $value) {
      array_push($idMovimientos,$value['id']);
    }

    foreach ($values['abonos'] as $key => $value) {
      array_push($idAbonos,$value['id']);
    }

    try {
      DB::beginTransaction();
      $cierre = Cierre::create([
        'negocio_id' =>$negocio_id,
        'fecha' => $values['fecha']
      ]);

      $movimientos = Movimiento::whereIn('id', $idMovimientos)->get();
      $abonos = Abono::whereIn('id', $idAbonos)->get();

      foreach ($movimientos as $movimiento) {
        $totalPrestamo += $movimiento->saldo;
        $movimiento->estado = 'ASOCIADO';
        $movimiento->cierre_id = $cierre->id;
        $movimiento->save();
      }
      foreach ($abonos as $abono) {
        $totalAbono += $abono->saldo;
        $abono->estado = 'ASOCIADO';
        $abono->cierre_id = $cierre->id;
        $abono->save();
      }
      $cierre->abono    = $totalAbono;
      $cierre->prestamo = $totalPrestamo;
      $cierre->saldo    = $totalAbono - $totalPrestamo;

      if($cierre->saldo == 0 || $operacion == 'guardarcerrar') {
        $cierre->estado = 'CERRADO';
      }
      else{
        $cierre->estado = 'ACTIVO';
      }
      $cierre->save();
      DB::commit();
      return $cierre;
    } 
    catch (QueryException $e) {
      DB::rollBack();
      throw new Exception('Error al Intentar Crear un cierre diario', 500,$e);
    }
  }


  public static function validador($values,$cierre = null){
    $validator = [
      'negocio_id' =>  'required',      
      'movimientos' => 'required',
      'movimientos.*.id' => 'required',
      'abonos' => 'required',
      'abonos.*.id' => 'required',
      'fecha' => 'required'
    ];

    $message = [
      'negocio_id.required' => 'Seleccione un Negocio.',
      'fecha.required' => 'Ingrese la fecha.',
      'movimientos.required' => 'Ingrese los movimientos requeridos',
      'movimientos.*.id.required' => 'Ingrese el id del movimiento',
      'abonos.required' => 'Ingrese los abonos requeridos',
      'abonos.*.id.required' => 'Ingrese el id de abono'
    ];
    $v = Validator::make($values,$validator,$message);
    $v->after(function ($validator) use($cierre) {

      if($validator->getData()['movimientos']){
        $ids = array_get($validator->getData(),'movimientos');
        foreach ($ids as $posicion => $id) {
          $pertenece = false;
          if($cierre != null){
            $pertenece = $cierre->perteneceMovimiento($id['id']);
          }
          if(!$pertenece){
            if(!Movimiento::movimientoDisponible($id['id'])) {
              $validator->errors()->add('movimientos.'.$posicion.'.id', 'Este Id no se encuentra disponible');
            }
          } 
        }
      }

      if($validator->getData()['abonos']){
        $ids = array_get($validator->getData(),'abonos');
        foreach ($ids as $posicion => $id) {
          $pertenece = false;
          if($cierre != null){
            $pertenece = $cierre->perteneceAbono($id['id']);
          }
          if(!$pertenece){
            if(!Abono::abonoDisponible($id['id'])) {
              $validator->errors()->add('abonos.'.$posicion.'.id', 'Este Id no se encuentra disponible');
            }
          }
        }
      }

    });
    return $v;
  }


}