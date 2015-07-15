<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Members', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username');
			$table->string('firstName');
			$table->string('lastName');
			$table->string('phone');
			$table->string('street');
			$table->string('suburb');
			$table->integer('postcode');
			$table->string('gender');
			$table->string('infoShared');
			 
			$table->string('businessName');
			$table->string('businessPhone');
			$table->string('businessLocation');
			$table->string('Department');
			$table->string('designation');

			$table->string('email')->unique();
			$table->string('password', 60);
			$table->rememberToken();
			$table->timestamps();
			$table->timestamp("LastLogin");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
