<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServings2Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servings2', function($table) {

			//Auto-incrementing primary ID field
			$table->increments('id');

			//Generating columns to track changes
			$table->timestamps();

			//Creating fields in 'Servings2' table
			$table->integer('serving_id2');
			$table->string('srv2_type');
			$table->integer('srv2_size');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servings2');
	}

}
