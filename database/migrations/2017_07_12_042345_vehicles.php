<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vehicles extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if(!Schema::hasTable('vehicles')){
            Schema::create('vehicles', function(Blueprint $table) {
                $table->increments('vehicle_id');
                $table->string('vehicle_name',50);
                $table->string('vehicle_image',100);
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
	  Schema::drop('vehicles');
	}

}
