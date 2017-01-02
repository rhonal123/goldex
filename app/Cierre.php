<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;

use DB;

class Cierre extends Model
{
    //

	public function negocio() {
    return $this->belongsTo('App\Negocio');
  }

  public function prestamos()
  {
     return $this->hasMany('App\Prestamo');
  }

  public function abonos()
  {
    return $this->hasMany('App\Abono');
  }

 	public static function buscar($negocio_id,$estado) {

    $query = DB::table('cierres');
  	if($estado) {
	    $query->where('estado', 'ilike',"%".$estado."%");
		}

		if($negocio_id){
	   	$query->where('negocio_id', '=',$negocio_id);
		}
    return $query->paginate(15);
  }

  public static function createCierre($values){

  	$negocio_id  = $values['negocio_id'];
  	$estado = $values['estado'];
    $negocio = Negocio::findOrFail($negocio_id);
    $totalPrestamo = Prestamo::nocerrados_total_saldo($negocio_id);
  	$totalAbonos = Abono::nocerrados_total_saldo($negocio_id);
    $saldo = $totalAbonos - $totalPrestamo; 

    if($saldo == 0 || $estado == 'cerrado') {
      $estado = 'cerrado';
      $saldo = 0;
    }
    else{
      $estado = 'activo';
    }
    $cierre = null;

		try {
			DB::beginTransaction();
	    $cierre = Cierre::create([
	      'negocio_id' =>$negocio_id,
	      'saldo' => $saldo,
	      'estado' => $estado,
	      'abono' => $totalPrestamo,
	      'prestamo' => $totalAbonos
	    ]);

	    Prestamo::where('negocio_id', '=',$negocio_id)
	        ->whereNull('cierre_id')
	        ->update(['cierre_id' => $cierre->id]);

	    Abono::where('negocio_id', '=',$negocio_id)
	      ->whereNull('cierre_id')
	      ->update(['cierre_id' => $cierre->id]);
			DB::commit();
   	} 
		catch (QueryException $e) {
			DB::rollBack();
			return null;
		}

		return $cierre;
	}
}