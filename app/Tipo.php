<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


use Validator;

class Tipo extends Model
{
	protected $fillable = ['tipo','simbolo','tasa','divisa'];



	public function actualizarTasa($tasa){
		$this->tasa = $tasa;
		$this->save();
	}


 	public static function buscar($nombre)
	{
  	if($nombre) {
	    return  Tipo::where('tipo', 'ilike',"%".$nombre."%")->orderBy('id','desc')->paginate(15);
		}
    return Tipo::paginate(15);
  }

  public static function validador($values,$tipo=null){
    if($tipo){
       $val = [
       	"tipo"=> 'required|max:120|unique:tipos,tipo,'.$tipo->id,
       	"simbolo"=> 'required|max:60',
       	"tasa"=> 'required|numeric',
       	"divisa"=> 'required|boolean'
       	];
    }
    else {
      $val = [
      	"tipo"=> 'required|max:120|unique:tipos',
       	"simbolo"=> 'required|max:60',
       	"tasa"=> 'required|numeric',
       	"divisa"=> 'required|boolean'
      ];
    }
    $message = [
        'tipo.required' => 'Introduzca una nombre valido !',
        'tipo.max' => 'El valor maximo son 120 caracteres !',
        'tipo.unique' => 'Este nombre ah sido utilizado!',
        'simbolo.required' => 'Introduzca una nombre valido !',
        'simbolo.max' => 'El valor maximo son 60 caracteres !',
        'tasa.required' => 'Ingrese la tasa',
        'tasa.number' => 'Ingrese un valor numerico',
        'divisa.required' => 'seleccione si es o no divisa',
    ];
  	return Validator::make($values,$val,$message);
  }




}
