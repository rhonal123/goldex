<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Tipo;

class TipoModelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
 public function testCrearPrestamoEfectivo() {

    $value = [
    	'tipo'=> ' Nueva Modena de Cambio',
			'simbolo'=> 'SIMBOLO',
			'tasa'=> 7500,
			'divisa'=> true,
    ];
    $valid = Tipo::validador($value);
    $this->validarformulario($valid);
    $prestamo = Tipo::create($value);
    $this->assertNotEmpty($prestamo->id);

    $value = [
    	'tipo'=> ' Nueva Modena de Cambio2',
			'simbolo'=> 'SIMBOLO2',
			'tasa'=> 7500,
			'divisa'=> false,
    ];
    $valid = Tipo::validador($value);
    $this->validarformulario($valid);
    $prestamo = Tipo::create($value);
    $this->assertNotEmpty($prestamo->id);


    $value = [
    	'tipo'=> null,
			'simbolo'=> null,
			'tasa'=> null,
			'divisa'=> null,
    ];
    $valid = Tipo::validador($value);
    $this->validarformularioError($valid);

    $this->assertSame(['Introduzca una nombre valido !'],$valid->errors()->get('tipo'));
    $this->assertSame(['Introduzca una nombre valido !'],$valid->errors()->get('simbolo'));
    $this->assertSame(['Ingrese la tasa'],$valid->errors()->get('tasa'));
    $this->assertSame(['seleccione si es o no divisa'],$valid->errors()->get('divisa'));

  }
  
}
