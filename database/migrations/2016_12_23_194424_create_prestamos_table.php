<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('negocio_id')->unsigned();
            $table->integer('cuenta_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned();
            $table->date('fecha')->nullable();
            $table->double('comision', 35, 2)->nullable();  
            $table->double('precio_material', 35, 2);  
            $table->double('monto', 35, 2);  
            $table->string('referencia',100)->nullable(); 
            $table->string('descripcion',300)->nullable();
            $table->string('tipo',25); /// transferencia, efectivo, cheque
            
            $table->foreign('negocio_id')->references('id')->on('negocios');
            $table->foreign('cuenta_id')->references('id')->on('cuentas');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('prestamos');
    }
}
