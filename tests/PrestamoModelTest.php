<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Banco;
use App\Prestamo;

class PrestamoModelTest extends TestCase
{
  /**
  * A basic test example.
  *
  * @return void
  */
  public function testCrearPrestamoEfectivo() {
    $value = [
      'negocio_id' => 01, 
      'cuenta_id' =>  null,
      'user_id' =>  1 , 
      'fecha' => '24/12/2016',
      'comision' => 1,   // en caso de ser efectivo 
      'precio_material' => 225,
      'referencia'  => null, 
      'descripcion'  => 'Prestamo xxxx por xxxx ',
      'tipo'  => 'efectivo',
      'monto' => 4500
    ];
    $valid = Prestamo::validador($value);
    $this->validarformulario($valid);
    $prestamo = Prestamo::create($value);
    $this->assertNotEmpty($prestamo->id);
  }
  
  public function testCrearPrestamoEfectivoConErrores() {

    $value = [
      "negocio_id"  =>  null,
      "cuenta_id"  => null,
      "monto"  => 0,
      "comision"  => null,
      "precio_material"  => null,
      "referencia"  => null,
      "descripcion"  => null,
      "fecha"  => null,
      "tipo"  => "efectivo"
    ];
    $valid = Prestamo::validador($value);
    $this->assertTrue($valid->fails());
    $this->assertSame(['Seleccione un Negocio.'],$valid->errors()->get('negocio_id'));
    $this->assertSame(['Ingrese la comision aplicada al efectivo'],$valid->errors()->get('comision'));
    $this->assertSame(['Ingrese el valor del material'],$valid->errors()->get('precio_material'));
  }


  public function testCrearPrestamoTransferencia() {
    $value = [
      'negocio_id' => 01, 
      'cuenta_id' =>  01,
      'user_id' => 01 , 
      'fecha' => '24/12/2016',
      'comision' => null,   // en caso de ser efectivo 
      'precio_material' => 750,
      'referencia'  => '7894585', 
      'descripcion'  => 'Prestamo transferencia por xxxx ',
      'tipo'  => 'transferencia',
      'monto' => 4500
    ];
    $valid = Prestamo::validador($value);
    $this->validarformulario($valid);
    $prestamo = Prestamo::create($value);
    $this->assertNotEmpty($prestamo->id);
  }

  public function testCrearPrestamoTransferenciaConErrores() {
    $value = [
      'negocio_id' => null, 
      'cuenta_id' =>  null,
      'user_id' => null , 
      'fecha' => null,
      'comision' => null,   // en caso de ser efectivo 
      'precio_material' => null,
      'referencia'  => null, 
      'descripcion'  => null,
      'tipo'  => 'transferencia',
      'monto' => 4500
    ];
    $valid = Prestamo::validador($value);
    $this->assertTrue($valid->fails());
    $this->assertSame(['Seleccione un Negocio.'],$valid->errors()->get('negocio_id'));
    $this->assertSame(['Seleccione la Cuenta'],$valid->errors()->get('cuenta_id'));
    $this->assertSame(['Ingrese el valor del material'],$valid->errors()->get('precio_material'));
    $this->assertSame(['Ingrese la Fecha '],$valid->errors()->get('fecha'));
    $this->assertSame(['Ingrese el numero de referencia'],$valid->errors()->get('referencia'));

  }

 public function testBuscarPrestamos() {

    $this->assertNotEmpty(Prestamo::buscar(null,null,null,null,null)->toArray());

    $listado = Prestamo::buscar("Yo no estoy registrado",null,null,null,null)->toArray();
    $this->assertEmpty($listado['data'],"listado con contenido"+json_encode($listado['data']));

    $listado = Prestamo::buscar(null,'24/12/2016',null,null,null)->toArray();
    $this->assertNotEmpty($listado['data'],"listado con contenido 24/12/2016"+json_encode($listado['data']));

    $listado = Prestamo::buscar(null,'24/12/2016','24/12/2016',null,null)->toArray();
    $this->assertNotEmpty($listado['data'],"listado con contenido 24/12/2016"+json_encode($listado['data']));

    $listado = Prestamo::buscar(null,null,null,"efectivo",null)->toArray();
    $this->assertNotEmpty($listado['data'],"listado con contenido 24/12/2016"+json_encode($listado['data']));

    $listado = Prestamo::buscar(null,null,null,null,"01")->toArray();
    $this->assertNotEmpty($listado['data'],"listado con contenido 24/12/2016"+json_encode($listado['data']));

    $listado = Prestamo::buscar("Yo no estoy",'24/12/2016','24/12/2016',"efectivo","01")->toArray();
    $this->assertEmpty($listado['data'],"listado con contenido 24/12/2016"+json_encode($listado['data']));

  }




}
