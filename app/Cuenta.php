<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;
 

class Cuenta extends Model
{

  protected $fillable = ['numero','banco_id'];
  protected $guarded = ['id'];

  public static $val = [
  		"numero" => 'required|max:70|unique:cuentas',
  		"banco_id" => 'required'
  	];

  public static $message = [
    	'numero.required' => 'Introduzca una numero valido !',
    	'numero.max' => 'El valor maximo son 70 caracteres !',
    	'numero.unique' => 'Este numero ah sido utilizado!',
    	'banco_id' => "Seleccione un Banco "
	];

  private $banco; 

 	public static function buscar($numero) {
  	if($numero) {
			/*Log::info("<--------");
			Log::info($numero);
			Log::info(Cuenta::where('numero','like',$numero)->toSql());*/
	    $bancos = Cuenta::with('banco')->where('numero', 'ilike',"%".$numero."%")->paginate(15);
		}
		else{
	    $bancos = Cuenta::with('banco')->paginate(15);
		}
    return $bancos;
  }


  public static function validador($values){
   	return Validator::make($values,self::$val,self::$message);
  }


	public function banco() {
    return $this->belongsTo('App\Banco');
  }




}
