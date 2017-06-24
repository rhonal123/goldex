<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banco;

use App\Http\Requests;

class BancosController extends Controller
{
 
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
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
      $validator = Banco::validador($request->all());
      if ($validator->fails()) {
        return redirect('bancos/create')
          ->withErrors($validator)
          ->withInput();
      }
      else {
        $banco =Banco::create($request->all());
        return redirect()->route('bancos.show',['id' => $banco->id ])->with('message', 'Item created successfully.');
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
        $banco = Banco::findOrFail($id);
        $values = $request->all(); 
        $validator = Banco::validador($values,$banco);

        if ($validator->fails()) {
          return redirect('bancos/edit',['id' => $banco->id ])
            ->withErrors($validator)
            ->withInput();
        }
        else {
          return redirect()->route('bancos.show',['id' => $banco->id ])->with('message', 'Item update successfully.');
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
        $banco = Banco::findOrFail($id);
        $banco->delete();

        return redirect()->route('bancos.index')->with('message', 'Item deleted successfully.');
    }
}
