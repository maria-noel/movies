<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEpisodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('episodes', function(Blueprint $table)
		{
			$table->foreign('season_id')->references('id')->on('seasons')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('episodes', function(Blueprint $table)
		{
			$table->dropForeign('episodes_season_id_foreign');
		});
	}

}
