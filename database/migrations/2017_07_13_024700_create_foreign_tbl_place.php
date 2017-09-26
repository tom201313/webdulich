<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignTblPlace extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::table('tours', function (Blueprint $table) {
            $table->foreign('start_place')->references('place_id')->on('places');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::table('tours', function (Blueprint $table) {
            $table->dropForeign('tours_start_place_foreign');

        });
	}

}
