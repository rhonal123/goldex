<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

use DB;
use Validator;

class Prestamo extends Model
{

  /**
  * @var array
  */
  protected $fillable = [
   'negocio_id','cuenta_id','comision','user_id',
   'precio_material','referencia','descripcion','fecha','tipo','monto'
   ];

  protected $hidden = ['created_at','updated_at'];
 /// protected $appends = ['user','negocio','cuenta'];



	public function negocio() {
    return $this->belongsTo('App\Negocio');
  }

	public function cuenta() {
    return $this->belongsTo('App\Cuenta');
  }
	public function user() {
    return $this->belongsTo('App\User');
  }
 


  public static function nocerrados($negocio_id) {
    return Prestamo::with('negocio','cuenta.banco','user')
    		->where('negocio_id', '=',$negocio_id)
    		->whereNull('cierre_id')
    		->get();
  }

  public static function nocerrados_total_saldo($negocio_id){
    return Prestamo::where('negocio_id', '=',$negocio_id)
        ->whereNull('cierre_id')
        ->sum('monto');
  }



	/**************************  Buscar *******************************************/

 	public static function buscar($texto,$desde,$hasta,$tipo,$negocio_id)
	{
		$query =  Prestamo::with('negocio','cuenta.banco','user');
		
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
		
		if($negocio_id){
	    $query->where('negocio_id', '=',$negocio_id);
		}
    return $query->paginate(15);
  }


  /**************************  Validate *******************************************/

  public static function validador($values){

	  $validator = [
			'negocio_id' =>  'required',      
			'monto' => 'required|numeric|min:1',
			'cuenta_id' =>  'required_if:tipo,transferencia,cheque',    
			'tipo' => 'required|in:transferencia,efectivo,cheque',   
			'precio_material'  =>'required|numeric|min:0' ,  
			'fecha' => 	'required',		
			'referencia' =>  'required_if:tipo,transferencia,cheque', 
			'comision'=>  'required_if:tipo,efectivo|numeric|min:0', 
		];

  	$message = [
	    'negocio_id.required' => 'Seleccione un Negocio.',
	    'monto.required' => 'Ingrese el Monto.',
	    'monto.min' => 'Ingrese un valor mayor a 0',
			'cuenta_id.required_if' => 'Seleccione la Cuenta',
			'tipo.required' => 'Ingrese el tipo de operacion',
			'tipo.in' => 'el valor del tipo no pertenece [transferencia, efectivo, cheque]',
			'precio_material.required' => 'Ingrese el valor del material',
	    'precio_material.min' => 'Ingrese un valor mayor a 0',
			'fecha.required' => 'Ingrese la Fecha ',
			'referencia.required_if' => 'Ingrese el numero de referencia',
			'comision.required_if' => 'Ingrese la comision aplicada al efectivo',
	    'comision.min' => 'Ingrese solo numeros moyores o iguales a 0 ',
  	];

  	return Validator::make($values,$validator,$message);
  }

  public function getFechaAttribute()
  {
		return (new Carbon($this->attributes['fecha']))->format("Y/m/d");
  }
}
