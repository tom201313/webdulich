<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TourCoupons extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        if(!Schema::hasTable('tour_coupons')){
            Schema::create('tour_coupons', function(Blueprint $table)
            {
                $table->increments('tour_coupon_id');
                $table->integer('customer_id');
                $table->integer('tour_id');
                $table->integer('service_id');
                $table->string('childern_number');
                $table->string('adult_number');
                $table->float('price');
                $table->integer('history_id');
                $table->dateTime('created_tour_date');
                $table->string('status',200);

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
        Schema::drop('tour_coupons');
	}

}
