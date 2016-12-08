<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {

            $table->increments('id');
            $table->double('monto', 35, 2)->nullable();  
            $table->date('fecha')->nullable();
            $table->string('descripcion',300);
            $table->string('tipo',25); /// transferencia, efectivo, deposito .... otras operaciones 
            $table->string('clasificacion',25); /// consumo interno, prestamo, gasto varios preguntar :-D 
            $table->double('puro', 35, 2)->nullable();  
            $table->string('cuenta_destino',100);

            $table->integer('banco_destino_id')->unsigned();
            $table->integer('negocio_id')->unsigned();
            $table->integer('cuenta_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('banco_destino_id')->references('id')->on('bancos');
            $table->foreign('negocio_id')->references('id')->on('negocios');
            $table->foreign('cuenta_id')->references('id')->on('cuentas');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('estado',5)->default("abierto"); /// abierto cerrado 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('movimientos');
    }
}
