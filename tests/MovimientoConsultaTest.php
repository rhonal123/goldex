
<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\MovimientoView;
use DB;


class MovimientoConsultaTest extends TestCase
{
  /**
   * A basic test example.
   *
   * @return void
  */
  public function testMovimientos() {
    $movimientos =MovimientoView::afectabanco(null,null,null,null,null,null);
    $this->assertTrue(count($movimientos));
  }


}