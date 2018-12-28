<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToActorEpisodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('actor_episode', function(Blueprint $table)
		{
			$table->foreign('actor_id')->references('id')->on('actors')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('episode_id')->references('id')->on('episodes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('actor_episode', function(Blueprint $table)
		{
			$table->dropForeign('actor_episode_actor_id_foreign');
			$table->dropForeign('actor_episode_episode_id_foreign');
		});
	}

}
