<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
 
class MovimientoView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::statement( '
        CREATE OR REPLACE VIEW movimiento_views AS 
        SELECT m.id as id, 
               m.fecha as fecha,
               m.referencia as referencia,
               m.comision as comision,
               m.monto as monto,
               m.saldo as saldo,
               m.descripcion as descripcion,
               m.cuenta_id as cuenta_id,
               m.negocio_id as negocio_id,
               m.clasificacion as clasificacion,
               m.tipo as tipo,
               c.numero as cuenta,
               n.nombre as negocio 
               FROM movimientos m
         left join cuentas c on m.cuenta_id = c.id
         left join negocios n on m.negocio_id = n.id;
        ' );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
