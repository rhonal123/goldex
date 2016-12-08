<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


use App\Banco;


class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
  public function testBasicExample() {
    $this->json('POST', '/sistema/movimientos', [
       'movimiento' => [
        'banco_destino_id' => '7',
        'clasificacion' => 'clasificacion1',
        'cuenta_destino: ' => '3434',
        'cuenta_id: ' => '7',
        'descripcion: ' => 'dsadasd',
        'fecha: ' => '2016/12/13',
        'monto:' => 343434,
        'negocio_id: ' => '7',
        'puro:' => 78522,
        'tipo: ' => 'efectivo' ]
      ]);
    
/*       ->seeJsonEquals([
         'created' => true ]);


        /*
        Banco::buscar("a");
        $this->assertTrue(true);
       $this->visit('/')
             ->see('Laravel 5');*/
  }
}
