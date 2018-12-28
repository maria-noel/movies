<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActorMovieTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actor_movie', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('actor_id')->unsigned()->index('actor_movie_actor_id_foreign');
			$table->integer('movie_id')->unsigned()->index('actor_movie_movie_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('actor_movie');
	}

}
