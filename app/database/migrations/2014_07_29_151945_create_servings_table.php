<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servings', function($table) {

			//Auto-incrementing primary ID field
			$table->increments('id');

			//Generating columns to track changes
			$table->timestamps();

			//Creating fields in 'Servings1' table
			$table->integer('serving_id');
			$table->string('srv1_type');
			$table->integer('srv1_size');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servings');
	}

}
