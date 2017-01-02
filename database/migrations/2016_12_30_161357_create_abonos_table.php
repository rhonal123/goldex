<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('tipo_id')->unsigned();
            $table->double('monto',35,2);
            $table->double('saldo',35,2)->default(0);
            $table->boolean('afecta_banco')->default(false);
            $table->double('tasa',35,2)->default(0); //tasa por la cual realizaron la operacion 
            $table->integer('cuenta_id')->unsigned()->nullable();
            $table->string('referencia')->nullable();;
            $table->date('fecha');
            $table->integer('negocio_id')->unsigned();
            $table->double('cantidad',35,2)->default('0');
            $table->string('estado')->default('activo'); // consumido, activo 
            $table->timestamps();

            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->foreign('negocio_id')->references('id')->on('negocios');
            $table->foreign('cuenta_id')->references('id')->on('cuentas');
            $table->foreign('user_id')->references('id')->on('users');
        });
    } 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abonos');
    }
}
