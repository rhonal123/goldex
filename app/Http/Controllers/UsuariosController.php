<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Database\QueryException;
use App\User;
use App\Permiso;

use Hash;

/*
  'codigo' => 'E01' , 'accion' => 'UsuariosController@show'
  'codigo' => 'E02' , 'accion' => 'UsuariosController@delete'
  'codigo' => 'E03' , 'accion' => 'UsuariosController@update'
  'codigo' => 'E04' , 'accion' => 'UsuariosController@create'
  'codigo' => 'E05' , 'accion' => 'UsuariosController@index'
  'codigo' => 'E06' , 'accion' => 'UsuariosController@password'
*/
class UsuariosController extends Controller
{
	public function show($id){
		$this->authorize('E01');
		return User::findOrFail($id);
	}

	public function delete($id){
		$this->authorize('E02');
		$user = User::findOrFail($id);
		try {
			$user->delete();
		}catch (QueryException $e){
			return response()->json(["cuentas"=> "No puede Eliminar este Usuario posee dependencias."],423);
		}
		return $user;
	}

	public function update(Request $request,$id){
		$this->authorize('E03');

		$user = User::findOrFail($id); 
  	$values = $request->all()['user']; 
		$validator = User::validador($values,$user);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$user->update($values);
			return $user; 
		}
	}

	public function create(Request $request){
		$this->authorize('E04');
  	$values = $request->all()['user']; 
		$validator = User::validador($values);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$values['password'] = Hash::make($values['password']);
			$user =User::create($values);
			return $user;
		}
	}

	public function index(Request $request){
		$this->authorize('E05');
		$name = $request->input('search');
		$users = User::buscar($name);
		return $users;
	}

	public function password(Request $request,$id){
		$this->authorize('E06');
		$user = User::findOrFail($id); 
  	$values = $request->all()['user']; 
		$validator = User::validadorPassword($values);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$values['password'] = Hash::make($values['password']);
			$user->update($values);
			return $user; 
		}
	}


	public function permisos(Request $request,$id){
		$this->authorize('E07');
		$permisos = Permiso::where('user_id',$id)->get(); 
		return $permisos; 
	}


	public function agregarPermiso(Request $request,$id){
		$this->authorize('E07');
		$user = User::findOrFail($id); 
  	$values = $request->all()['permiso']; 
		$validator = Permiso::validador($values);
		if ($validator->fails()) {
			return response()->json($validator->errors(),500);
		}
		else {
			$codigo = $values['codigo'];
			$user->agregarPermiso($codigo);
			return $user->permisos; 
		}
	}

	public function quitarPermiso(Request $request,$id,$permiso){
		$this->authorize('E07');
		$user = User::findOrFail($id); 
		$user->quitarPermiso($permiso);
		return $user->permisos; 
	}

}
