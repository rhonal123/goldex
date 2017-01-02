<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


use App\Abono;
use Auth;
use App\User;


class AbonoModelTest extends TestCase
{
  /**
   * @return void
   **/
  public function testCrearAbonoOro() {
 		$user = User::findOrFail(1);
		$this->be($user);

    $value = [	
		  'negocio_id' => 2,
		  'afecta_banco' => false,
   		'fecha' => '24/12/2016',
   		'tipo_id' =>  2, 
   		'tasa' => 250,
   		'cantidad' => 2800, // gramos
    ];
    $valid = Abono::validador($value);
    $this->validarformulario($valid);
    $abono = Abono::createToUser($value);
    $this->assertNotEmpty($abono->id);


    $value = [	
		  'negocio_id' => null,
		  'afecta_banco' => null,
   		'fecha' => null,
   		'tipo_id' =>  null, // moneda local
   		'tasa' => null,
   		'cantidad' => null,
    ];
    $valid = Abono::validador($value);
    $this->validarformularioError($valid);

    $this->assertSame(['Seleccione el tipo de operacion.'],$valid->errors()->get('tipo_id'));
    $this->assertSame(['Seleccione un Negocio.'],$valid->errors()->get('negocio_id'));
    $this->assertSame(['Ingrese la Fecha.'],$valid->errors()->get('fecha'));
    $this->assertSame(['Ingrese la Cantidad.'],$valid->errors()->get('cantidad'));
    $this->assertSame(['indique si Afecta o no Banco.'],$valid->errors()->get('afecta_banco'));


    $value = [	
		  'negocio_id' => 1,
		  'afecta_banco' => false,
   		'fecha' => '24/08/1990',
   		'tipo_id' =>  2, 
   		'cantidad' => -250,
    ];
    $valid = Abono::validador($value);
    $this->validarformularioError($valid);
    $this->assertSame(['Ingrese un valor mayor a 0.'],$valid->errors()->get('cantidad'));
    $this->assertSame(['Ingrese el Monto.'],$valid->errors()->get('tasa'));
  }



  public function testCrearAbonoPlataEror() {
  	$value = [	
		  'negocio_id' => 4, /// 22 Plata o oror  
		  'afecta_banco' => false,
   		'fecha' => '24/12/2016',
   		'tipo_id' =>  01, // moneda local
   		'cantidad' => 2800,
   		'tasa' => 2700,
    ];
    $valid = Abono::validador($value);
    $this->validarformulario($valid);
  }

  public function testCrearAbonoExtranjera() {
  	$value = [	
		  'negocio_id' => 2, /// 22 divisa extanjera 
		  'afecta_banco' => false,
   		'fecha' => '24/12/2016',
   		'tipo_id' =>  01, // moneda local
   		'cantidad' => 2800,
   		'tasa' => 4500,
    ];
    $valid = Abono::validador($value);
    $this->validarformulario($valid);
  }


  public function testCrearAbonoNacionalEfectivo() {
    $value = [	
		  'negocio_id' => 1,
		  'afecta_banco' => false,
   		'fecha' => '24/12/2016',
   		'tipo_id' =>  01, // moneda local
   		'cantidad' => 2800,
   		'tasa' => 1200,
    ];
    $valid = Abono::validador($value);
    $this->validarformulario($valid);
  }


  public function testCrearAbonoNacionalCuenta() {
    $value = [	
		  'negocio_id' => 1,
		  'afecta_banco' => true,
   		'fecha' => '24/12/2016',
   		'tipo_id' =>  01, // moneda local
   		'cantidad' => 2800,
   		'cuenta_id'=> 01,
   		'referencia' =>'2248AKDOEM',
   		'tasa' => 350,
    ];
    $valid = Abono::validador($value);
    $this->validarformulario($valid);

    $value = [	
		  'negocio_id' => 1,
		  'afecta_banco' => true,
   		'fecha' => '24/12/2016',
   		'tipo_id' =>  01, // moneda local
   		'cantidad' => 2800,
   		'cuenta_id'=> null,
   		'referencia' => null,
   		'tasa' => 250,
    ];
    $valid = Abono::validador($value);
    $this->validarformularioError($valid);
    $this->assertSame(['Seleccioen la Cuenta Bancaria Afectada'],$valid->errors()->get('cuenta_id'));
    $this->assertSame(['Ingrese el Numero de Referencia'],$valid->errors()->get('referencia'));

    $value = [  
      'negocio_id' => "2",
      'afecta_banco' => true,
      'fecha' => '24/12/2016',
      'tipo_id' =>  3, // moneda local
      'cantidad' => null,
      'cuenta_id'=> null,
      'referencia' => "",
      'tasa' => null,
    ];

    $valid = Abono::validador($value);
    $this->validarformularioError($valid);
    $this->assertSame(['Seleccioen la Cuenta Bancaria Afectada'],$valid->errors()->get('cuenta_id'));
    $this->assertSame(['Ingrese el Numero de Referencia'],$valid->errors()->get('referencia'));
    $this->assertSame(['Ingrese el Monto.'],$valid->errors()->get('tasa'));
    $this->assertSame(['Ingrese la Cantidad.'],$valid->errors()->get('cantidad'));



  }
 



}
