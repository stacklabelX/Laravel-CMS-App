<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('members', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('firstName');
			$table->string('lastName');
			$table->string('phone');
			$table->string('address'); 
			$table->integer('postcode'); 	 
			$table->string('businessName');
			$table->string('businessPhone');
			$table->string('businessLocation');
			$table->string('Department');
			$table->string('profilePic');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->tinyInteger('infoShared');			 
			$table->tinyInteger('active');	
			$table->rememberToken(); 
			$table->timestamp("lastLogin");
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
		Schema::drop('members');
	}

}
