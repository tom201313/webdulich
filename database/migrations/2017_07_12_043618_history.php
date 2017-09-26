<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class History extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        if(!Schema::hasTable('history')){
            Schema::create('history', function(Blueprint $table)
            {
                $table->increments('history_id');

                $table->integer('employee_id');
                $table->string('action',50);
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
        Schema::drop('history');
	}

}
