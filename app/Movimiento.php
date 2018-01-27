<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Validator;

/*
	Estados -> CREADO, ANOPASADO
  Tipo -> 
    TRANSFERENCIA 
    EFECTIVO 
  Clasificacion ->
    TRASNFERENCIA SALIDA  -> 1 
    TRASNFERENCIA ENTRADA -> 2 
    GASTO PERSONAL        -> 3  
*/
class Movimiento extends Model
{

	protected $fillable = [ 'monto','comision','fecha','descripcion','tipo','negocio_id','cuenta_id','referencia','clasificacion'];
  protected $casts = [
    'id' 							=> 'integer',
    'negocio_id' 			=> 'integer',
    'cuenta_id' 			=> 'integer',
    'clasificacion'   => 'integer',
    'fecha' 					=> 'string',
    'comision' 				=> 'double',
    'monto' 					=> 'double',
    'precio_puro'     => 'double',
    'saldo'           => 'double',
    'referencia' 			=> 'string',
    'descripcion' 		=> 'string',
    'tipo' 						=> 'string'
  ];

  public static $CLASIFICACION_TYPE = array(
      'TRANSFERENCIA_SALIDA' => 1,
      'TRANSFERENCIA_ENTRADA' => 2,
      'GASTO_PERSONAL' => 3);

  public static function crearMovimiento($values,$clasificacion= 1){
  	$movimiento = new Movimiento($values);
    if($clasificacion == 3){
      $movimiento->tipo = 'TRANSFERENCIA';
    }
    if($movimiento->tipo == "TRANSFERENCIA"){
      $movimiento->comision = 0;
    }
    else{
      $movimiento->cuenta_id = 31;
    }
    $movimiento->clasificacion = $clasificacion;
  	$movimiento->estado = "CREADO";
    $movimiento->saldo = (1 + ($movimiento->comision/100)) * $movimiento->monto;
    DB::transaction(function () use($values,$movimiento) {
      $cuenta = Cuenta::lockForUpdate()->findOrFail($values['cuenta_id']);
      $cuenta->procesarMovimiento($movimiento);
      $cuenta->save();
      $movimiento->save();
    });
  	return $movimiento;
  }


  public function actualizar($values){
  	if($this->attributes['estado'] == 'CREADO') {
    	$this->update($values);
      $this->attributes['saldo'] = (1 + ($this->attributes['comision']/100)) * $this->attributes['monto'];
      $this->save();
  	}
  	else
  	{
  		throw new Exception("No Puedes actualizar este Movimiento", 1);
  	}
  }


  public function anular($values){
  	if($this->attributes['estado'] == 'CREADO') {
  		$this->attributes['estado'] = 'ANULADO';
      $this->attributes['saldo'] = 0;
  		$this->save();
  	}
  	else {
  		throw new Exception("No Puedes anular este Movimiento", 1);
  	}
  }

	public function negocio() {
    return $this->belongsTo('App\Negocio');
  }

	public function cuenta() {
    return $this->belongsTo('App\Cuenta');
  }

  public function transferencia(){ // si es una devolucion
    return $this->hasOne('App\DetalleTransferencia','abono_id');
  }

  public function detalles(){
    return $this->hasMany('App\DetalleTransferencia', 'transferencia_id');
  }

  public function devoluciones(){
    return $this->detalles()->join('movimientos','detalle_movimiento.abono_id','=','movimientos.id');
  }

  public static function validador($values,$clasificacion=1,$movimiento = null){

    $validator = [
      'monto' => 'required|numeric|min:0',
      'fecha' => 'required',
      'descripcion' => 'required',
    ];

    if($clasificacion == 1 ){
      $validator['tipo']= 'required|in:TRANSFERENCIA,EFECTIVO';
      $validator['cuenta_id']= 'required_if:tipo,TRANSFERENCIA';
      $validator['comision'] = 'required|numeric|min:0';
      $validator['referencia']= 'required_if:tipo,TRANSFERENCIA';
      $validator['negocio_id'] = 'required_if:tipo,TRANSFERENCIA';
    }
    elseif ($clasificacion == 2) {
      //$validator['negocio_id'] = 'required_if:tipo,TRANSFERENCIA';
      $validator['tipo']= 'required|in:TRANSFERENCIA,EFECTIVO';
      $validator['cuenta_id']= 'required_if:tipo,TRANSFERENCIA';
      $validator['referencia']= 'required_if:tipo,TRANSFERENCIA';
    }
    else{
      $validator['cuenta_id']= 'required';
      $validator['referencia']= 'required';
    }
 

		$message = [
			'required' => 'Campo Requerido.',
			'required_if' => 'Campo Requerido.',
	    'in' => 'El :attribute deberia ser :values.',
	    'numeric' => 'el valor debe ser numerico.' ,
			'min' => 'monto invalido.',
		];

  	$v =  Validator::make($values,$validator,$message);
  	$v->after(
      function ($validator)  use ($movimiento, $clasificacion,$values) {
      	if ($movimiento != null && $movimiento->estado != 'CREADO') {
          $validator->errors()->add('estado',
          	'No Puedes Actualizar este Movimiento, puesto que su estdo es '.$movimiento->estado);
      	}
        $encontrado = null;
        if($clasificacion == 1 || $clasificacion == 2 ) {
            if($values['tipo'] === "TRANSFERENCIA") {
              $query = Movimiento::where('referencia',$values['referencia'])
                ->where('tipo','TRANSFERENCIA')
                ->where('cuenta_id',$values['cuenta_id'])
                ->where('fecha',$values['fecha']);

              if($movimiento != null)
                $query->where('id','!=',$movimiento->id);
              $encontrado = $query->first();
              if ($encontrado != null ) {
                $validator->errors()->add('referencia','Esta referencia esta siendo utilizada');
              }
            }
          }
          else {
            $query  = Movimiento::where('referencia',$values['referencia'])
              ->where('cuenta_id',$values['cuenta_id'])
              ->where('fecha',$values['fecha']);
            
            if($movimiento != null)
              $query->where('id','!=',$movimiento->id);

            $encontrado = $query->first();

            if ($encontrado != null ) {
              $validator->errors()->add('referencia','Esta referencia esta siendo utilizada');
            }
          }

  	});
  	return $v;
  }

  public function totalDevoluciones() {
   return  $this->devoluciones()->sum('monto');
  }
}
