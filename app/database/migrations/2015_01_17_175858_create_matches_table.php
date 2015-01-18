<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('matches', function($table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('place', 255);
			$table->string('date', 128);
			$table->string('riflenumber',255);
			$table->string('rangename',255);
			$table->timestamps();

			$table->foreign('user_id')->references('id')->on('users');


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('matches');
	}

}
