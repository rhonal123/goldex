<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Log;

use DB;
use Validator;

class Banco extends Model
{
	///  public $nombre; 
  protected $fillable = ['nombre'];
  protected $guarded = ['id'];
  protected $hidden = ['created_at','updated_at'];

 	public static function buscar($nombre)
	{
    $query = DB::table('bancos');

  	if($nombre) {
			/*Log::info(Banco::where('nombre','like',$nombre)->toSql());*/
	    $query->where('nombre', 'ilike',"%".$nombre."%");
		}
    return $query->paginate(15);
  }

  public static function validador($values,$banco){
    if($banco){
       $val = ["nombre"=> 'required|max:50|unique:bancos,nombre,'.$banco->id];
    }
    else {
      $val = ["nombre"=> 'required|max:50|unique:bancos'];
    }

    $message = [
        'nombre.required' => 'Introduzca una nombre valido !',
        'nombre.max' => 'El valor maximo son 50 caracteres !',
        'nombre.unique' => 'Este nombre ah sido utilizado!',
    ];
  	return Validator::make($values,$val,$message);
  }


  public function cuentas() {
    return $this->hasMany('App\Cuenta');
  }

  public function Movimientos() {
    return $this->hasMany('App\Movimiento','banco_destino_id');
  }

} 

