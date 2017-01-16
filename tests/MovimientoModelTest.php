<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Movimiento;

class MovimientoModelTest extends TestCase
{
  /**
   * A basic test example.
   *
   * @return void
  */
  public function testCrearMovimeinto() {
    $value = [
			'monto' => 2400,
			'comision' => 0,
			'fecha' =>  '26/08/1990',
			'descripcion' => 'esta es una descripcion',
			'tipo' =>'TRANSFERENCIA',
			'negocio_id' =>1,
			'cuenta_id'  =>1,
			'referencia' => 'ABCR3234'
    ];
    $valid = Movimiento::validador($value);
    $this->validarformulario($valid);

    $value = [
			'monto' => 1400,
			'comision' => 0,
			'fecha' =>  '26/08/1990',
			'descripcion' => 'esta es una descripcion',
			'tipo' =>'EFECTIVO',
			'negocio_id' =>1,
			'cuenta_id'  =>null,
			'referencia' => null
    ];
    $valid = Movimiento::validador($value);
    $this->validarformulario($valid);

    $movimiento = new Movimiento();
    $movimiento->estado = "CREADO";
    $value = [
			'monto' => 1400,
			'comision' => 0,
			'fecha' =>  '26/08/1990',
			'descripcion' => 'esta es una descripcion',
			'tipo' =>'EFECTIVO',
			'negocio_id' =>1,
			'cuenta_id'  =>null,
			'referencia' => null
    ];
    $valid = Movimiento::validador($value,$movimiento);
    $this->validarformulario($valid);

    $value = [
			'monto' => null,
			'comision' => null,
			'fecha' =>  null,
			'descripcion' => null,
			'tipo' =>'TRANSFERENCIA',
			'negocio_id' => null,
			'cuenta_id'  => null,
			'referencia' => null
    ];
    $valid = Movimiento::validador($value);
    $this->assertTrue($valid->fails());
    $this->assertSame(['Campo Requerido.'],$valid->errors()->get('negocio_id'));
    $this->assertSame(['Campo Requerido.'],$valid->errors()->get('monto'));
    $this->assertSame(['Campo Requerido.'],$valid->errors()->get('comision'));
    $this->assertSame(['Campo Requerido.'],$valid->errors()->get('fecha'));
    $this->assertSame(['Campo Requerido.'],$valid->errors()->get('descripcion'));
    $this->assertSame(['Campo Requerido.'],$valid->errors()->get('cuenta_id'));
    $this->assertSame(['Campo Requerido.'],$valid->errors()->get('referencia'));
  }


    public function testProbarMovimiento(){
    	$desde = null;
    	$hasta = null;
    	$tipo = null;
    	$negocio_id = null;
    	$referencia = null;
    	$descripcion = null;
    	$cuenta_id = null;
    	$paginacion = Movimiento::buscar($desde,$hasta,$tipo,$negocio_id,$referencia,$descripcion,$cuenta_id);
    	$efectivos =  Movimiento::movimientosEfectivo($desde,$hasta,$negocio_id);
    	$transferencias =  Movimiento::movimientosTrasnferencia($desde,$hasta,$negocio_id,$cuenta_id);
    	$total = count($efectivos) + count($transferencias); 
    	$this->assertSame($paginacion->total(),$total);

    	/*********************** negocio 27 **********************************************/ 
    	$desde = null;
    	$hasta = null;
    	$tipo = null;
    	$negocio_id = 27;
    	$referencia = null;
    	$descripcion = null;
    	$cuenta_id = null;
    	$paginacion = Movimiento::buscar($desde,$hasta,$tipo,$negocio_id,$referencia,$descripcion,$cuenta_id);
    	$efectivos =  Movimiento::movimientosEfectivo($desde,$hasta,$negocio_id);
    	$transferencias =  Movimiento::movimientosTrasnferencia($desde,$hasta,$negocio_id,$cuenta_id);
    	$total = count($efectivos) + count($transferencias); 
    	$this->assertSame($paginacion->total(),$total);

    	/*********************** negocio 27 **********************************************/ 
    	$desde = null;
    	$hasta = null;
    	$tipo = null;
    	$negocio_id = 27;
    	$referencia = null;
    	$descripcion = null;
    	$cuenta_id = null;
    	$paginacion = Movimiento::buscar($desde,$hasta,$tipo,$negocio_id,$referencia,$descripcion,$cuenta_id);
    	$efectivos =  Movimiento::movimientosEfectivo($desde,$hasta,$negocio_id);
    	$transferencias =  Movimiento::movimientosTrasnferencia($desde,$hasta,$negocio_id,$cuenta_id);
    	$total = count($efectivos) + count($transferencias); 
    	$this->assertSame($paginacion->total(),$total);
 


    }
}