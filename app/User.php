<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Permiso;
use Validator;
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','administrador'
    ];
 

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','created_at','updated_at'
    ];


    public function permisos()
    {
        return $this->hasMany('App\Permiso');
    }


    public function agregarPermiso($permiso) {
      if(!$this->hasPermiso($permiso)){
        $this->permisos()->create([
          'codigo' => $permiso 
        ]);
      };
    }

    public function quitarPermiso($permiso){
      $this->permisos()->where("codigo",$permiso)->delete();
    }

    public function hasPermiso($permiso){
      ///sleep(1);
      return $this->permisos()->where('codigo',$permiso)->count() != 0;
    }

    public function puede($permiso)
    {
      if($this->administrador){
        return true;
      }
      else{
        return $this->hasPermiso($permiso);
      }
    }


    public static function buscar($name) {
        if($name){
          return User::where('name', 'ilike',"%".$name."%")->orderBy('id','desc')->paginate(15);
        }
        return User::orderBy('id','desc')->paginate(15);
    }

    public static function validador($values,$user= null){

      if($user == null){
        $validator = [
            'name' =>  'required|max:250',      
            'email' => 'required|email|max:120|unique:users',
            'password' => 'required|confirmed'
        ];
      }
      else{
        $validator = [
            'name' =>  'required|max:250',      
            'email' => 'required|email|max:120|unique:users,email,'.$user->id,
        ];
      }
        $message = [
            'name.required' => 'Ingrese un nombre',
            'email.required' => 'Ingrese un email.',
            'name.max' => 'el max numero de caracteres es 250',
            'email.max' => 'el max numero de caracteres es 120',
            'email.unique' => 'este email ya se encuentra registrado',
            'email.email' => 'Ingrese un formato valido',
            'password.required' => 'Ingrese el password',
            'password.confirmed' => 'El password no coincide',
        ];
    return Validator::make($values,$validator,$message);
   }



    public static function validadorPassword($values){

      $validator = ['password' => 'required|confirmed'];
      $message = [
        'password.required' => 'Ingrese el password',
        'password.confirmed' => 'El password no coincide',
      ];
    return Validator::make($values,$validator,$message);
   }


}
