<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleTransferencia extends Model
{
    protected $table = 'detalle_movimiento';
    protected $fillable = [ 'transferencia_id','abono_id','destino_id'];


  public function transferencia()
  {
  	return $this->belongsTo('App\Movimiento','transferencia_id');
  }


  public function abono()
  {
  	return $this->belongsTo('App\Movimiento','abono_id');
  }

  public function destino()
  {
    return $this->belongsTo('App\Movimiento','destino_id');
  }

}
