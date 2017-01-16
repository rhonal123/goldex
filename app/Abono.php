<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

use Validator;
use Auth;
use App\Tipo;


// estado ---> CONSUMIDO, ACTIVO
class Abono extends Model
{
  /**
  * @var array
  */
  protected $fillable = [
   'negocio_id','cuenta_id','afecta_banco','referencia','tasa','fecha','tipo_id','monto','cantidad'];

  protected $hidden = ['created_at','updated_at'];

  protected $casts = [
    'id'          => 'integer',
    'tipo_id'     => 'integer',
    'monto'       => 'double',
    'saldo'       => 'double',
    'afecta_banco'=> 'boolean',
    'tasa'        => 'double',
    'cuenta_id'   => 'integer',
    'negocio_id'  => 'integer',
    'cantidad'    => 'double'
  ];


	public function negocio() {
    return $this->belongsTo('App\Negocio');
  }

	public function tipo() {
    return $this->belongsTo('App\Tipo');
  }

	public function cuenta() {
    return $this->belongsTo('App\Cuenta');
  }
  
 	public static function buscar($desde,$hasta,$tipo,$negocio_id)
	{
		$query =  Abono::with('tipo','negocio','cuenta.banco')->orderBy('id','desc');

		if($desde){
	    $query->where('fecha', '>=',$desde);
		}

		if($hasta){
	    $query->where('fecha', '<=',$hasta);
		}

		if($tipo){
	    $query->where('tipo_id', '=',$tipo);
		}
		
		if($negocio_id){
	    $query->where('negocio_id', '=',$negocio_id);
		}
    return $query->paginate(15);
  }

  public static function validador($values){
  	$valorPositivo = 'Ingrese un valor mayor a 0.';

	  $validator = [
			'tipo_id' => 'required',   
      'afecta_banco' =>'required|boolean',
			'negocio_id' =>  'required',      
			'tasa' => 'required|numeric|min:0',
			'fecha' => 	'required',
			'cantidad' => 'required|numeric|min:0',
		];
  	$message = [
  		'tipo_id.required' => "Seleccione el tipo de operacion.",
	    'negocio_id.required' => 'Seleccione un Negocio.',
	    'tasa.required' => 'Ingrese el Monto.',
	    'tasa.min' => $valorPositivo,
 	    'cantidad.required' => 'Ingrese la Cantidad.',
	    'cantidad.min' => $valorPositivo,
			'fecha.required' => 'Ingrese la Fecha.',
			'afecta_banco.required' => 'indique si Afecta o no Banco.',
			'cuenta_id.required' => 'Seleccioen la Cuenta Bancaria Afectada',
			'referencia.required' => 'Ingrese el Numero de Referencia'
		];
  	$v =  Validator::make($values,$validator,$message);
  	$v->sometimes(['cuenta_id','referencia'],'required',function($input){
  		return ($input->afecta_banco);
  	});
  	return $v;
  }


  public function actualizarAbono($values){
    $tipo = Tipo::findOrFail($values['tipo_id']);
    $tipo->actualizarTasa($values['tasa']);
    $this->attributes['saldo'] = $tipo->tasa * $values['cantidad'];
    $this->attributes['monto'] = $this->attributes['saldo'];
    $this->update($values);
    $this->save();
  }

  public static function crearAbono($values){
    ///$abono->user_id = Auth::user()->id;
  	$abono = new Abono($values);
  	$tipo = Tipo::findOrFail($values['tipo_id']);
  	$tipo->actualizarTasa($values['tasa']);
  	$abono->saldo =  $tipo->tasa * $values['cantidad'];
  	$abono->monto = $abono->saldo;
  	$abono->save();
  	return Abono::with('tipo','negocio','cuenta.banco')->findOrFail($abono->id);
  }

  public static function abonoDisponible($id){
    return (Abono::where('id', '=',$id)->whereNull('cierre_id')->where('estado','ACTIVO')->exists());
  }


  public static function abonosDisponible($negocio_id){
    return Abono::with('cuenta.banco','tipo')->
            where("negocio_id",$negocio_id)->
            whereNull('cierre_id')->
            where('estado','ACTIVO')->
            get();
  }


  public function getFechaAttribute()
  {
    return (new Carbon($this->attributes['fecha']))->format("Y/m/d");
  }


}