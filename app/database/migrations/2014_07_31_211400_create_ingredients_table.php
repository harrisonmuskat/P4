<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ingredients', function($table)
		{
			$table->increments('id');
			$table->string('name', 255);
			$table->string('srvName1', 255);
			$table->float('srvSize1');
			$table->string('srvName2', 255);
			$table->float('srvSize2');
			$table->integer('calories');
			$table->float('carbohydrates');
			$table->float('fats');
			$table->float('proteins');	
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ingredients');
	}

}
