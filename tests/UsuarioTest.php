<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


use App\User;
use App\Permiso;


class UsuarioTest extends TestCase
{
    /**
     * @return void
     */

    
    public function testAgregarPermiso()
    {
    	$usuario = User::findOrFail(1);
    	$usuario->agregarPermiso("A01");
    	$this->assertTrue($usuario->hasPermiso("A01"));

    	$usuario->quitarPermiso("A01");
    	$usuario = User::findOrFail(1);
    	$this->assertTrue(!$usuario->hasPermiso("A01"));  ///!$usuario->hasPermiso("A01"));
    }

	  public function testAgregarPermisoError()
    {
	   	$value = [
	      "codigo"  =>  null,
	    ];
	    $valid = Permiso::validador($value);
	    $this->assertTrue($valid->fails());
	    $this->assertSame(['Introduzca un Codigo Valido !'],$valid->errors()->get('codigo'));


	   	$value = [
	      "codigo"  =>  'NOOO ESTOY REGISTRADOOOOOOOOOOOOO',
	    ];
	    $valid = Permiso::validador($value);
	    $this->assertTrue($valid->fails());
	    $this->assertSame(['Introduzca un Codigo Valido !'],$valid->errors()->get('codigo'));

    }

}
