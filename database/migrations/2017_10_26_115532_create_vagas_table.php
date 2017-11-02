<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVagasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vagas', function(Blueprint $table)
		{
			$table->increments('id')->primary();
			$table->string('quarto_id');
            $table->foreign('quarto_id')->references('id')->on('quartos');
			$table->integer('largura');
            $table->integer('comprimento');
			$table->string('disponivel');
			$table->string('ativo');

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
		Schema::drop('vagas');
	}

}
