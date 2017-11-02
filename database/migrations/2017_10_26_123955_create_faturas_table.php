<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaturasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('faturas', function(Blueprint $table)
		{
			$table->increments('id')->primary();
			$table->string('name');
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
		Schema::drop('faturas');
	}

}
