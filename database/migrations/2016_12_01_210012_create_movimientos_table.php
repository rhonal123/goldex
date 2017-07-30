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
	public function up() {

		Schema::create('movimientos', function (Blueprint $table) {
			$table->increments('id');
			$table->double('monto', 35, 2)->default(0);  
			$table->double('saldo', 35, 2)->default(0);  
	    $table->double('precio_puro', 35, 2)->default(0); 
			$table->double('comision', 35, 2);  
			$table->date('fecha')->nullable();
			$table->string('descripcion',300);
			$table->string('tipo',15); /// TRANSFERENCIA -> 1,EFECTIVO -> 2, CHEQUE -> 3 ...
			$table->integer('negocio_id')->unsigned()->nullable();
 			$table->string('referencia',120)->nullable(); 
			$table->integer('cuenta_id')->unsigned()->nullable();
			
			$table->foreign('negocio_id')->references('id')->on('negocios');
			$table->foreign('cuenta_id')->references('id')->on('cuentas');

			/*
				CREADO   Creada --> se puede modificar 
				ASOCIADO Asociada --> no se puede tocar 
				ANULADO  Anulada --> no se puede tocar y no importaaa 
			*/
			$table->string('estado',10)->default("CREADO");
			$table->timestamps();
		});

	}

		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
	public function down() {
    DB::statement( 'DROP VIEW movimiento_views' );
		Schema::dropIfExists('movimientos');
	}
}
