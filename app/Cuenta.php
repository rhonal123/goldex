<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;
 

class Cuenta extends Model
{

  protected $fillable = ['numero','banco_id'];
  protected $guarded = ['id'];
  protected $hidden = ['created_at','updated_at'];


  private $banco; 

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
    return $this->hasMany('App\Movimiento')->where('clasificacion',1);
  }

  public function abonos(){
    return $this->hasMany('App\Movimiento')->where('clasificacion',2);
  }

  public function gastos(){
    return $this->hasMany('App\Movimiento')->where('clasificacion',3);
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


  public function saldo() {
    return  $this->abonos_saldo() - ($this->transferencias_saldo() + $this->gastos_saldo());
  }

  

}
