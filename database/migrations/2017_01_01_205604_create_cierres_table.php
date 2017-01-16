<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Abono;

class CreateCierresTable extends Migration {
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('cierres', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('negocio_id')->unsigned();
      $table->double('abono',35,2)->default(0);
      $table->double('prestamo',35,2)->default(0);
      $table->double('saldo',35,2)->default(0);
      $table->string('estado',10)->default('ACTIVO'); //CERRADO
      $table->date('fecha');
      $table->timestamps();
      $table->foreign('negocio_id')->references('id')->on('negocios');
    });

    Schema::table('abonos', function ($table) {
      $table->integer('cierre_id')->unsigned()->nullable();;
      $table->foreign('cierre_id')->references('id')->on('cierres');
    });

    Schema::table('movimientos', function ($table) {
      $table->integer('cierre_id')->unsigned()->nullable();;
      $table->foreign('cierre_id')->references('id')->on('cierres');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down() {
    Schema::dropIfExists('movimientos');
    Schema::dropIfExists('prestamos');
    Schema::dropIfExists('abonos');
    Schema::dropIfExists('cierres');
  }
}
