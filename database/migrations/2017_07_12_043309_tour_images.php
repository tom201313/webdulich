<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TourImages extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        if(!Schema::hasTable('tour_images')){
            Schema::create('tour_images', function(Blueprint $table)
            {
                $table->increments('image_id');
                $table->string('image',50);
                $table->integer('tour_id');
                $table->timestamps();
            });
        }
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::drop('tour_images');
	}

}
