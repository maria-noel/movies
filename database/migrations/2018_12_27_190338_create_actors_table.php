<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('first_name', 100);
			$table->string('last_name', 100);
			$table->decimal('rating', 3, 1)->nullable();
			$table->integer('favorite_movie_id')->unsigned()->nullable()->index('actors_favorite_movie_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('actors');
	}

}
