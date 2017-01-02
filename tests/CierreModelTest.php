<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


use App\Cierre;

class CierreModelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void 
     */
    public function testCrearCierre()
    {
    	

    	$cierre = Cierre::createCierre([
   			'negocio_id' => 1,
   			'estado' => 'activo'
			]);

      $this->assertNotEmpty($cierre->id);
			$this->assertNotEmpty($cierre->abonos()->get());
      $this->assertNotEmpty($cierre->prestamos()->get());

    }
}
