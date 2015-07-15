<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeContactTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contactInfo', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string("name");
			$table->string("email");
			$table->string("address");

			$table->string("facebook")->nullable();
			$table->string("twitter")->nullable();
			$table->string("google")->nullable();
			$table->string("youtube")->nullable();
 			
 			$table->text("mapcode");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contactInfo');
	}

}
