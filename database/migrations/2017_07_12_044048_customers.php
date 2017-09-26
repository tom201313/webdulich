<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Customers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        if(!Schema::hasTable('customers')){
            Schema::create('customers', function(Blueprint $table)
            {
                $table->increments('customer_id');
                $table->string('customer_name',50);
                $table->date('dob');
                $table->tinyInteger('gender');
                $table->string('phone_number',11);
                $table->string('username');
                $table->string('password');
                $table->string('email',100);
                $table->string('addres',100);
                $table->string('passport',15);
                $table->string('code_resetpassword');
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
        Schema::drop('customes');
	}

}
