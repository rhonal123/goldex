<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
 
class AddClasificacionMovimientosTable extends Migration
{
    /**  
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movimientos', function ($table) {
          $table->smallInteger('clasificacion')->default(1);
        });
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
