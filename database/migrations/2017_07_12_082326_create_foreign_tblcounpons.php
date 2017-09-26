<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignTblcounpons extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::table('tour_coupons',function (Blueprint $table){
          $table->foreign('customer_id')->references('customer_id')->on('customers');
          $table->foreign('tour_id')->references('tour_id')->on('tours');
          $table->foreign('history_id')->references('history_id')->on('history');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('tour_coupons',function (Blueprint $table){
            $table->dropForeign('tour_coupons_customer_id_foreign');
            $table->dropForeign('tour_counpons_tour_id_foreign');
            $table->dropForeign('tour_counpons_history_id_foreign');
        });

	}

}
