<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEpisodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('episodes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 500)->nullable();
			$table->integer('number')->unsigned()->nullable();
			$table->dateTime('release_date');
			$table->decimal('rating', 3, 1);
			$table->integer('season_id')->unsigned()->nullable()->index('episodes_season_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('episodes');
	}

}
