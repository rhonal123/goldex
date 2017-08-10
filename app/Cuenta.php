<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;
 

class Cuenta extends Model
{

  protected $fillable = ['numero','banco_id','saldo'];
  protected $guarded = ['id'];
  protected $hidden = ['created_at','updated_at'];
  protected $casts = ['saldo' => 'double'];

 	public static function buscar($numero) {
    $query =  Cuenta::with('banco')->orderBy('cuentas.id','desc');;
    if($numero){
      $query->join('bancos', 'bancos.id', '=', 'banco_id')->where('numero', 'ilike',"%".$numero."%")->orWhere('bancos.nombre', 'ilike',"%".$numero."%");
    }
    return $query->paginate(15);
  }

  public static function validador($values,$cuenta=null){
    if($cuenta) {
      $val = [
        "numero" => 'required|max:70|unique:cuentas,numero,'.$cuenta->id,
        "banco_id" => 'required'];
    }
    else {
      $val = [
        "numero" => 'required|max:70|unique:cuentas',
        "banco_id" => 'required'];
    }
    $message = [
      'numero.required' => 'Introduzca una numero valido !',
      'numero.max' => 'El valor maximo son 70 caracteres !',
      'numero.unique' => 'Este numero ah sido utilizado!',
      'banco_id' => "Seleccione un Banco "
    ];
    return Validator::make($values,$val,$message);
  }



	public function banco() {
    return $this->belongsTo('App\Banco');
  }

  public function movimientos(){
    return $this->hasMany('App\Movimiento');
  }


  public function transferencias(){
    return $this->hasMany('App\Movimiento')->where('clasificacion',1)->where('estado','CREADO');
  }

  public function abonos(){
    return $this->hasMany('App\Movimiento')->where('clasificacion',2)->where('estado','CREADO');
  }

  public function gastos(){
    return $this->hasMany('App\Movimiento')->where('clasificacion',3)->where('estado','CREADO');
  }

  public function transferencias_saldo() {
    return $this->transferencias()->sum("saldo");
  }


  public function abonos_saldo() {
    return $this->abonos()->sum("saldo");
  }

  public function gastos_saldo() {
    return $this->gastos()->sum("saldo");
  }

  public function procesarMovimiento(&$movimiento){
      if($movimiento->clasificacion == 2){
        $this->saldo += $movimiento->saldo;
      }
      else {
        $this->saldo -= $movimiento->saldo;
      }
  }


  public function totalAbono($desde = null, $hasta=null){
    $query =  $this->abonos();
    if($desde){
      $query->where('fecha', '>=',$desde);
    }
    if($hasta){
      $query->where('fecha', '<=',$hasta);
    }
    return $query->sum('saldo');
  }

  public function totalTransferencia($desde = null, $hasta=null){
     $query =  $this->transferencias();
    if($desde){
      $query->where('fecha', '>=',$desde);
    }
    if($hasta){
      $query->where('fecha', '<=',$hasta);
    }
    return $query->sum('saldo');
     
  }

  public function totalGasto($desde = null, $hasta=null){
    $query =  $this->gastos();
    if($desde){
      $query->where('fecha', '>=',$desde);
    }
    if($hasta){
      $query->where('fecha', '<=',$hasta);
    }
    return $query->sum('saldo');
  
  }

  public function balance(){
    $totalAbono = $this->totalAbono(null,null);
    $totalTransferencia = $this->totalTransferencia(null,null);
    $totalGasto= $this->totalGasto(null,null);
    return $totalAbono - $totalTransferencia - $totalGasto;
  }


}
