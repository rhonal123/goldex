<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Validator;

class Movimiento extends Model
{
  // tipo = EFECTIVO,TRANSFERENCIA 

	protected $fillable = [ 
		'negocio_id',
		'monto',
		'fecha',
		'descripcion',
		'tipo',
		'clasificacion',
		'cuenta_id',
		'user_id',
		'puro',
		'cuenta_destino',
		'banco_destino_id'
		];

  protected $guarded = ['id'];

  public static $val = [
  	"negocio_id"=> 'required',
  	"monto"=> 'required',
  	"fecha"=> 'required',
  	"tipo"=> 'required|max:25',
  	"clasificacion"=> 'required|max:25',
  	"descripcion"=> 'required'];

  public static $message = [
    'nombre.required' => 'Introduzca una nombre valido !',
		'negocio_id.required' => 'Introduzca una nombre valido !',
		'monto.required' => 'Introduzca una monto valido !',
		'fecha.required' => 'Introduzca la fecha del movimiento !',
		'tipo.required' => 'Seleccione !',
		'clasificacion.required' => 'Seleccione !',
		'descripcion.required' => 'Introduzca una nombre valido !',
	];

 	public static function buscar($texto,$desde,$hasta,$tipo,$clasificacion,$negocio_id)
	{
		$query =  Movimiento::with('negocio','cuenta.banco','user','banco_destino');
		
		if($texto) {
	    $query->where('descripcion', 'ilike',"%".$texto."%");
		}

		if($desde){
	    $query->where('fecha', '>=',$desde);
		}

		if($hasta){
	    $query->where('fecha', '<=',$hasta);
		}

		if($tipo){
	    $query->where('tipo', '=',$tipo);
		}

		if($clasificacion){
	    $query->where('clasificacion', '=',$clasificacion);
		}
    return $query->paginate(15);
  }
 

	public function negocio() {
    return $this->belongsTo('App\Negocio');
  }

	public function cuenta() {
    return $this->belongsTo('App\Cuenta');
  }


	public function user() {
    return $this->belongsTo('App\User');
  }


	public function banco_destino() {
    return $this->belongsTo('App\Banco','banco_destino_id');
  }

  public static function validador($values){
		/*$validator->after(function ($validator) {
    if ($this->somethingElseIsInvalid()) {
        $validator->errors()->add('field', 'Something is wrong with this field!');
    	}
		});*/
  	return Validator::make($values,self::$val,self::$message);
  }

}
