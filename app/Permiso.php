<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


use Validator;


class Permiso extends Model
{
 
  static public $PERMISOS = array(

    'A01' => 'BANCO: PermisosMostrar Detalle ',
    'A02' => 'BANCO: Eliminar',
    'A03' => 'BANCO: Editar',
    'A04' => 'BANCO: Crear',
    'A05' => 'BANCO: Listar',

    'B01' => 'CUENTA: Mostrar Detalle ',
    'B02' => 'CUENTA: Eliminar',
    'B03' => 'CUENTA: Editar',
    'B04' => 'CUENTA: Crear',
    'B05' => 'CUENTA: Listar',

    'C01' => 'NEGOCIO: Mostrar Detalle ',
    'C02' => 'NEGOCIO: Eliminar',
    'C03' => 'NEGOCIO: Editar',
    'C04' => 'NEGOCIO: Crear',
    'C05' => 'NEGOCIO: Listar',

    'E01' => 'USUARIO: Mostrar Detalle ',
    'E02' => 'USUARIO: Eliminar',
    'E03' => 'USUARIO: Editar',
    'E04' => 'USUARIO: Crear',
    'E05' => 'USUARIO: Listar',
    'E06' => 'USUARIO: Cambiar Contraseña',
    'E07' => 'USUARIO: Permisos',

    'F01' => 'ABONO: Mostrar Detalle ',
    'F02' => 'ABONO: Eliminar',
    'F03' => 'ABONO: Editar',
    'F04' => 'ABONO: Crear',
    'F05' => 'ABONO: Listar',
    'F07' => 'ABONO: reporte',

    'I01' => 'MOVIMIENTOS: Mostrar Detalle ',
    'I02' => 'MOVIMIENTOS: Eliminar',
    'I03' => 'MOVIMIENTOS: Editar',
    'I04' => 'MOVIMIENTOS: Crear',
    'I05' => 'MOVIMIENTOS: Listar',
    'I07' => 'MOVIMIENTOS: reporte',

    'J01' => 'GASTOS: Mostrar Detalle ',
    'J02' => 'GASTOS: Eliminar',
    'J03' => 'GASTOS: Editar',
    'J04' => 'GASTOS: Crear',
    'J05' => 'GASTOS: Listar',
    'J07' => 'GASTOS: reporte'


  );

  protected $fillable = ['codigo'];
  protected $hidden = [
    'user_id','created_at','updated_at'
  ];

	public function user() {
    return $this->belongsTo('App\User');
  }

  public static function validador($values){
    $val = ["codigo"=> 'required|in:' . implode(',',array_pluck(config('permisos'), 'codigo'))];
    $message = [
        'codigo.required' => 'Introduzca un Codigo Valido !',
        'codigo.in' => 'Introduzca un Codigo Valido !'
    ];
  	return Validator::make($values,$val,$message);
  }

}
