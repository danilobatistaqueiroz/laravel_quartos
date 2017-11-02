<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocatariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locatarios', function(Blueprint $table)
		{
			$table->increments('id');
            $table->primary('id');
			$table->string('user_id');
            $table->foreign('user_id')->references('id')->on('users');
			$table->decimal('price', 5, 2);
			$table->string('description');
			$table->integer('quantity');
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
		Schema::drop('locatarios');
	}

}
