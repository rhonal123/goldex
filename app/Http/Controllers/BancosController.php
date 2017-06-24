<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banco;
use Illuminate\Database\QueryException;

use App\Http\Requests;

/*
 * 'codigo' => 'A01' , 'accion' => 'BancoController@show'
 * 'codigo' => 'A02' , 'accion' => 'BancoController@delete'
 * 'codigo' => 'A03' , 'accion' => 'BancoController@update'
 * 'codigo' => 'A04' , 'accion' => 'BancoController@create'
 * 'codigo' => 'A05' , 'accion' => 'BancoController@index'
*/
class BancosController extends Controller
{
 
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      $this->authorize('A05');
      $bancos = Banco::orderBy('id', 'desc')->paginate(10);
      return view('bancos.index', compact('bancos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    { 
      $this->authorize('A04');
      return view('bancos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
      $this->authorize('A04');
      $validator = Banco::validador($request->all());
      if ($validator->fails()) {
        return redirect('bancos/create')
          ->withErrors($validator)
          ->withInput();
      }
      else {
        $banco =Banco::create($request->all());
        return redirect()->route('bancos.show',['id' => $banco->id ])->with('success', 'Banco correctamente creado.');
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
      $this->authorize('A01');
      $banco = Banco::findOrFail($id);
      return view('bancos.show', compact('banco'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
      $this->authorize('A03');
      $banco = Banco::findOrFail($id);
      return view('bancos.edit', compact('banco'));
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
        $this->authorize('A03');
        $banco = Banco::findOrFail($id);
        $values = $request->all(); 
        $validator = Banco::validador($values,$banco);

        if ($validator->fails()) {
          return redirect()->route('bancos.edit',['id' => $banco->id ])
            ->withErrors($validator)
            ->withInput();
        }
        else {
          return redirect()->route('bancos.show',['id' => $banco->id ])->with('success', 'Banco correctamente actualizado');
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
        $this->authorize('A02');
        $banco = Banco::findOrFail($id);
        try {
            $banco->delete();
        }catch (QueryException $e){
            return redirect()->route('bancos.show',['id' => $banco->id ])->with('danger', 'Este Banco esta siendo utilizado.');
        }
        return redirect()->route('bancos.index')->with('success', 'Banco Elminado.');
    }

}
