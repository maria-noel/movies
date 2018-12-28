<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToActorMovieTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('actor_movie', function(Blueprint $table)
		{
			$table->foreign('actor_id')->references('id')->on('actors')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('movie_id')->references('id')->on('movies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('actor_movie', function(Blueprint $table)
		{
			$table->dropForeign('actor_movie_actor_id_foreign');
			$table->dropForeign('actor_movie_movie_id_foreign');
		});
	}

}
