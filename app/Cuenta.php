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
    $query =  Cuenta::with('banco');
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




}
