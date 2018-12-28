<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActorEpisodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actor_episode', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('actor_id')->unsigned()->index('actor_episode_actor_id_foreign');
			$table->integer('episode_id')->unsigned()->index('actor_episode_episode_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('actor_episode');
	}

}
