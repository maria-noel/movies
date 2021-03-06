<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeasonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('seasons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 500)->nullable();
			$table->integer('number')->unsigned()->nullable();
			$table->dateTime('release_date');
			$table->dateTime('end_date');
			$table->integer('serie_id')->unsigned()->nullable()->index('seasons_serie_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('seasons');
	}

}
