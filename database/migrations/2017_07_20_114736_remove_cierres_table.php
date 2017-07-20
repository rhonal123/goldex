<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveCierresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('abonos', function ($table) {
          $table->dropForeign(['cierre_id']);
          $table->dropColumn('cierre_id');
        });

        Schema::table('movimientos', function ($table) {
          $table->dropForeign(['cierre_id']);
          $table->dropColumn('cierre_id');
        });

        Schema::dropIfExists('cierres');
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
