<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Http\Requests;

use App\Tipo;



class ServiciosController extends Controller
{
	public function tipos(Request $request){
		$serach = $request->input('serach');
		$tipos = Tipo::buscar($serach);
		return $tipos->toArray();
	}

}
