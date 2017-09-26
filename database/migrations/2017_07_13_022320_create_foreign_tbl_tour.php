<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignTblTour extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::table('tour_images', function (Blueprint $table) {
            $table->foreign('tour_id')->references('tour_id')->on('tours');

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
        Schema::table('tour_images', function (Blueprint $table) {
            $table->dropForeign('tour_images_tour_id_foreign');

        });
	}

}
