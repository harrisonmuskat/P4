<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNutrientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nutrients', function($table) {

			//Auto-incrementing primary ID field
			$table->increments('id');

			//Generating columns to track changes
			$table->timestamps();

			//Creating fields in 'nutrients' table
			$table->integer('food_id');
			$table->integer('calories');
			$table->integer('carbohydrates');
			$table->integer('protein');
			$table->integer('fat');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nutrients');
	}

}
