<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Cierre;
use App\Abono;
use App\Prestamo;
use App\Movimiento;
use App\User;
class CierreModelTest extends TestCase
{


 

  /**
   * A basic test example.
   *
   * @return void 
  */
  public function testAgregarQuitarAbonoCierre(){

    $user = User::findOrFail(1);
    $this->be($user);

    $cierre = Cierre::createCierre([
      'negocio_id' => 1,
      'fecha' => '08/01/2017',
      'movimientos' => [
        ['id' => 1],
        ['id' => 2],
        ['id' => 3],
        ['id' => 4],
        ['id' => 5],
        ['id' => 6],
        ['id' => 7],
      ],
      'abonos' => [
        ['id' => 1],
        ['id' => 2],
        ['id' => 3],
        ['id' => 4],
        ['id' => 5],
        ['id' => 6],
        ['id' => 7],
      ],
      'operacion' => 'guardarcerrar' // 'guardarcerrar'
    ]);

    $this->assertNotEmpty($cierre->id);
    $movimientos = Movimiento::whereIn('id',[1,2,3,4,5,6,7])->get();
    $abonos = Abono::whereIn('id',[1,2,3,4,5,6,7])->get();
    $totalMov = 0.0;
    $totalAbono = 0.0;
    foreach ($movimientos as $movimiento) {
      $totalMov += $movimiento->saldo;
      $this->assertSame($cierre->id,$movimiento->cierre_id);
    }

    foreach ($abonos as $abono) {
      $totalAbono += $abono->saldo;
      $this->assertSame($cierre->id,$abono->cierre_id);
    }

    $this->assertSame($cierre->abono,$totalAbono);
    $this->assertSame($cierre->prestamo,$totalMov);
    $this->assertSame($cierre->saldo,$totalAbono - $totalMov);

    $this->assertSame($cierre->estado,'CERRADO');


    try
    {
      $cierre->actualizarCierre([
        'movimientos' => [
        'fecha' => '08/01/2017',
          ['id' => 1],
          ['id' => 2],
          ['id' => 3],
          ['id' => 4],
        ],
        'abonos' => [
          ['id' => 1],
          ['id' => 2],
          ['id' => 3],
        ],
        'operacion' => 'guardarcerrar' // 'guardarcerrar'
      ]);
      $this->assertTrue(false);
    }
    catch (Exception $e) {
      $this->assertTrue(true);
    }



    $cierre = Cierre::createCierre([
      'negocio_id' => 1,
      'fecha' => '08/01/2017',
      'movimientos' => [
        ['id' => 1],
        ['id' => 2],
        ['id' => 3],
        ['id' => 4],
        ['id' => 5],
        ['id' => 6],
        ['id' => 7],
      ],
      'abonos' => [
        ['id' => 1],
        ['id' => 2],
        ['id' => 3],
        ['id' => 4],
        ['id' => 5],
        ['id' => 6],
        ['id' => 7],
      ],
      'operacion' => 'guardar' // 'guardarcerrar'
    ]);

    $this->assertNotEmpty($cierre->id);
    $movimientos = Movimiento::whereIn('id',[1,2,3,4,5,6,7])->get();
    $abonos = Abono::whereIn('id',[1,2,3,4,5,6,7])->get();
    $totalMov = 0.0;
    $totalAbono = 0.0;
    foreach ($movimientos as $movimiento) {
      $totalMov += $movimiento->saldo;
      $this->assertSame($cierre->id,$movimiento->cierre_id);
    }

    foreach ($abonos as $abono) {
      $totalAbono += $abono->saldo;
      $this->assertSame($cierre->id,$abono->cierre_id);
    }

    $this->assertSame($cierre->abono,$totalAbono);
    $this->assertSame($cierre->prestamo,$totalMov);
    $this->assertSame($cierre->saldo,$totalAbono - $totalMov);
    $this->assertSame($cierre->estado,'ACTIVO');

    $cierre = Cierre::findOrFail($cierre->id);
    $cierre->actualizarCierre([
      'fecha' => '08/01/2017',
      'movimientos' => [
        ['id' => 1],
        ['id' => 2],
        ['id' => 3],
        ['id' => 4],
      ],
      'abonos' => [
        ['id' => 1],
        ['id' => 2],
        ['id' => 3],
        ['id' => 4],
      ],
      'operacion' => 'guardar' // 'guardarcerrar'
    ]);

    $movimientos = Movimiento::whereIn('id',[1,2,3,4])->get();
    $abonos = Abono::whereIn('id',[1,2,3,4])->get();
    $totalMov = 0.0;
    $totalAbono = 0.0;
    foreach ($movimientos as $movimiento) {
      $totalMov += $movimiento->saldo;
      $this->assertSame($cierre->id,$movimiento->cierre_id);
    }
    foreach ($abonos as $abono) {
      $totalAbono += $abono->saldo;
      $this->assertSame($cierre->id,$abono->cierre_id);
    }
    $this->assertSame($cierre->abono,$totalAbono);
    $this->assertSame($cierre->prestamo,$totalMov);
    $this->assertSame($cierre->saldo,$totalAbono - $totalMov);


    $movimientos = Movimiento::whereIn('id',[5,6,7])->get();
    $abonos = Abono::whereIn('id',[5,6,7])->get();

    foreach ($movimientos as $movimiento) {
      $this->assertSame(null,$movimiento->cierre_id);
    }
    foreach ($abonos as $abono) {
      $this->assertSame(null,$abono->cierre_id);
    }
  }


  public function testAbonoCierre(){

    $value = [
      'negocio_id' => 1,
      'fecha' => '08/01/2017',
      'movimientos' => [
        ['id' => 101],
        ['id' => 102],
        ['id' => 103],
        ['id' => 104],
        ['id' => 105],
        ['id' => 106],
        ['id' => 107],
      ],
      'abonos' => [
        ['id' => 100001],
        ['id' => 100002],
        ['id' => 100003],
        ['id' => 100004],
        ['id' => 100005],
        ['id' => 100006],
        ['id' => 100007],
      ],
      'operacion' => 'guardarcerrar' // 'guardarcerrar'
    ];
    $valid = Cierre::validador($value);
    $this->validarformulario($valid);

    $valid = Cierre::validador([
      'fecha' =>  null,
      'negocio_id' => null,
      'movimientos' => null ,
      'abonos' => null 
    ]);
    $this->validarformularioError($valid);
    $this->assertSame(['Seleccione un Negocio.'],$valid->errors()->get('negocio_id'));
    $this->assertSame(['Ingrese los movimientos requeridos'],$valid->errors()->get('movimientos'));
    $this->assertSame(['Ingrese los abonos requeridos'],$valid->errors()->get('abonos'));

    $valid = Cierre::validador([
      'negocio_id' => 2,
      'movimientos' => [],
      'abonos' => []
    ]);
    $this->validarformularioError($valid);
    $this->assertSame(['Ingrese los movimientos requeridos'],$valid->errors()->get('movimientos'));
    $this->assertSame(['Ingrese los abonos requeridos'],$valid->errors()->get('abonos'));

    $valid = Cierre::validador([
      'negocio_id' => 12,
      'fecha' => '08/01/2017',
      'movimientos' => [
        ['id'=>1200000],
        ['id'=>null],
        ['id' => 100],
      ],
      'abonos' =>   [
        ['id'=>1200000],
        ['id'=>null],
        ['id' => 100],
      ],
    ]);
    $this->validarformularioError($valid);
  }


  public function testEditarCierre(){
    
    $cierre = Cierre::findOrFail(2);

    $value = [
      'negocio_id' => 12,
      'fecha' => '08/01/2017',
      'movimientos' => [
        ['id' => 147],
        ['id' => 367],
        ['id' => 768],
        ['id' => 156],
        ['id' => 183],
        ['id' => 690],
        ['id' => 861],
      ],
      'abonos' => [
        ['id' => 18],
      ],
      'operacion' => 'guardar' // 'guardarcerrar'
    ];

    $valid = Cierre::validador($value,$cierre);
    $this->validarformulario($valid);

  }

 

}