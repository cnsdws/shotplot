<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFireStringsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('firestrings', function($table)
		{
			$table->increments('id');
			$table->integer('match_id')->unsigned();
			$table->string('fire_string_number', 128);
			$table->string('distance', 128);
			$table->string('target',128);
			$table->string('relay',128);
			$table->string('lightdirection',128);
			$table->string('winddirection',128);
			$table->string('windspeed',128);
			$table->string('elevation',128);
			$table->string('windage',128);
			$table->string('shot1value',128);
			$table->string('shot2value',128);
			$table->string('shot3value',128);
			$table->string('shot4value',128);
			$table->string('shot5value',128);
			$table->string('shot6value',128);
			$table->string('shot7value',128);
			$table->string('shot8value',128);
			$table->string('shot9value',128);
			$table->string('shot10value',128);
			$table->string('shot1x',128);
			$table->string('shot1y',128);
			$table->string('shot2x',128);
			$table->string('shot2y',128);
			$table->string('shot3x',128);
			$table->string('shot3y',128);
			$table->string('shot4x',128);
			$table->string('shot4y',128);
			$table->string('shot5x',128);
			$table->string('shot5y',128);
			$table->string('shot6x',128);
			$table->string('shot6y',128);
			$table->string('shot7x',128);
			$table->string('shot7y',128);
			$table->string('shot8x',128);
			$table->string('shot8y',128);
			$table->string('shot9x',128);
			$table->string('shot9y',128);
			$table->string('shot10x',128);
			$table->string('shot10y',128);
			$table->timestamps();

			$table->foreign('match_id')->references('id')->on('matches');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('firestrings');
	}

}
