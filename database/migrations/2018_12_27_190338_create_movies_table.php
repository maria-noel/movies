<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMoviesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('movies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 500);
			$table->decimal('rating', 3, 1)->unsigned();
			$table->integer('awards')->unsigned()->default(0);
			$table->dateTime('release_date');
			$table->integer('length')->unsigned()->nullable();
			$table->integer('genre_id')->unsigned()->nullable()->index('movies_genre_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('movies');
	}

}
