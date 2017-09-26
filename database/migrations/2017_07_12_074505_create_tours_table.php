<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tours', function(Blueprint $table)
		{
            $table->increments('tour_id');
            $table->string('tour_name', 50);
            $table->float('base_prices');
            $table->float('sale_prices');
            $table->integer('discount_code_id');
            $table->integer('locked');
            $table->string('content', 50);
            $table->string('begin_time', 50);
            $table->string('duration', 30);
            $table->string('vehicle', 100);
            $table->integer('max_customer_number');
            $table->integer('start_place');
            $table->string('journey', 255);
            $table->string('schedule', 255);
            $table->string('note');
            $table->string('overview');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tours');
	}

}
