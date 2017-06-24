<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNegociosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('negocios', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string descripcion('rif')->text direccion()->text encargado()->string telefono()->string();
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
		Schema::drop('negocios');
	}

}
