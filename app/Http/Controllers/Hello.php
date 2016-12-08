<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Hello extends Controller
{
    //

	public function index(){

		return "hello Workd from controller";

	}

	public function show($name)
	{
    return view('Hello/hello',array('name' => $name));
	}


}
