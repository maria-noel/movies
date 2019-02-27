<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddsDefaultFieldsToImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropColumn('category');
        });
        
        Schema::table('images', function (Blueprint $table) {
            $table->boolean('main')->default('0')->change();
            $table->integer('order')->nullable()->change();

            //drop enum table and recreate it, it's no longer supported
            $table->enum('category', array('actor', 'movie'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
            //
        });
    }
}
