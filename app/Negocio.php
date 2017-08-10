<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

use App\Movimiento;
use App\Abono;

class Negocio extends Model
{
    //
  protected $fillable = ['nombre','rif','descripcion','direccion','encargado','telefono'];
  protected $guarded = ['id'];
  protected $hidden = ['created_at','updated_at'];

  public static $val = [
  	"nombre"=> 'required|max:100',
  	"rif"=> 'required|max:100',
		"descripcion"=> 'max:300',
		"direccion"=> 'max:300',
		"encargado"=> 'max:150',
		"telefono"=> 'max:50',];

  public static $message = [
    	'nombre.required' => 'Introduzca una nombre valido !',
      'nombre.max' => 'El valor maximo son 50 caracteres !',
    	'rif.max' => 'El valor maximo son 100 caracteres !',
    	'rif.required' => 'Introduzca una rif valido !',
      'descripcion.max' => 'El valor maximo son 300 caracteres !',
    	'direccion.max' => 'El valor maximo son 300 caracteres !',
    	'encargado.max' => 'El valor maximo son 150 caracteres !',
    	'telefono.max' => 'El valor maximo son 50 caracteres !',
	];


 	public static function buscar($nombre)
	{

  	if($nombre) {
	    $negocios = Negocio::where('nombre', 'ilike',"%".$nombre."%")->orderBy('id','desc')->paginate(15);
		}
		else{
	    $negocios = Negocio::orderBy('id','desc')->paginate(15);
		}
   
   
    return $negocios;
  }

  public static function validador($values){
  	return Validator::make($values,self::$val,self::$message);
  }

  public static function movimientos($id,$estado="CREADO"){
    return Movimiento::with('cuenta.banco')->where("negocio_id",$id)->get();
  }


  public function movimientos(){
    return $this->hasMany('App\Movimiento');
  }


  public function transferencias(){
    return $this->hasMany('App\Movimiento')->where('clasificacion',1)->where('estado','CREADO');
  }

  public function abonos(){
    return $this->hasMany('App\Movimiento')->where('clasificacion',2)->where('estado','CREADO');
  }


  public function transferencias_saldo() {
    return $this->transferencias()->sum("saldo");
  }


  public function abonos_saldo() {
    return $this->abonos()->sum("saldo");
  }



 }
