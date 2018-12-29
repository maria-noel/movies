<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToActorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('actors', function(Blueprint $table)
		{
			$table->foreign('favorite_movie_id')->references('id')->on('movies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('actors', function(Blueprint $table)
		{
			$table->dropForeign('actors_favorite_movie_id_foreign');
		});
	}

}
