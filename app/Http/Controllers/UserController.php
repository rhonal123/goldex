<?php 

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;
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
class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$this->authorize('E05');
		$name = $request->input('search');
		$users = User::buscar($name);
		return view('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->authorize('E04');
		return view('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->authorize('E04');
  	$values = $request->all(); 
		$validator = User::validador($values);
		if ($validator->fails()) {
 			return redirect('users/create')
          ->withErrors($validator)
          ->withInput();
		}
		else {
			$values['password'] = Hash::make($values['password']);
			$user =User::create($values);
			return redirect()->route('users.show',['id' => $user->id ])->with('success', 'Usuario correctamente creado.');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->authorize('E01');
		$user = User::findOrFail($id);
		$permisos = Permiso::$PERMISOS;

		return view('users.show', compact('user','permisos'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$this->authorize('E03');
		$user = User::findOrFail($id);
		return view('users.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$this->authorize('E03');
		$user = User::findOrFail($id); 
  	$values = $request->all(); 
		$validator = User::validador($values,$user);
		if ($validator->fails()) {
 			return redirect('users/create')
          ->withErrors($validator)
          ->withInput();
		}
		else {
			$user->update($values);
			return redirect()->route('users.show',['id' => $user->id ])->with('success', 'Usuario correctamente creado.');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->authorize('B02');
		$user = User::findOrFail($id);
		try {
			$user->permisos()->delete();
			$user->delete();
		}catch (QueryException $e){
			return redirect()->route('users.show',['id' => $user->id ])->with('danger', 'Este Usuario esta siendo utilizado.');
		}
		return redirect()->route('users.index')->with('success', 'Usuario Elminado.');
	}


	public function permisos(Request $request,$id,$permiso_id){
		$this->authorize('E07');
		$tipo = $request->input('tipo');
		$user = User::findOrFail($id); 
		if($tipo == 'ACTIVAR'){
			$user->agregarPermiso($permiso_id);
		} 
		else{
			$user->quitarPermiso($permiso_id);
		}
		return response()->json(['ok' => 'OK']);

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function password_edit($id)
	{
		$this->authorize('E06');
		$user = User::findOrFail($id);
		return view('users.password', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function password(Request $request, $id)
	{
		$this->authorize('E06');
		$user = User::findOrFail($id); 
  	$values = $request->all(); 
		$validator = User::validadorPassword($values,$user);
		if ($validator->fails()) {
 			return redirect('users/'.$user->id.'/password')
          ->withErrors($validator)
          ->withInput();
		}
		else {
			$values['password'] = Hash::make($values['password']);
			$user->update($values);
			return redirect()->route('users.show',['id' => $user->id ])
			         ->with('success', 'Contraseña correctamente creada.');
		}
	}

}
