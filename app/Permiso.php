<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


use Validator;


class Permiso extends Model
{
    //

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
