<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuartosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quartos', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('locador_id')->references('id')->on('locadores');
            $table->string('endereco');
            $table->integer('lat');
            $table->integer('long');
            $table->string('cep');
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
		Schema::drop('quartos');
	}

}
