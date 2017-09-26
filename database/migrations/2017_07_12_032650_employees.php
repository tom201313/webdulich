<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employees extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if(!Schema::hasTable('employees')){
            Schema::create('employees', function(Blueprint $table)
            {
                $table->increments('employee_id');
                $table->string('employee_name');
                $table->string('password',100);
                $table->string('level');
                $table->date('dob');
                $table->tinyInteger('gender');
                $table->string('phone_number',11);
                $table->string('email',100);
                $table->string('address',100);
                $table->string('avatar',100);
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
		Schema::drop('employees');
	}

}
