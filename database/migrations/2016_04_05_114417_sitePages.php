<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SitePages extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
			Schema::create('SitePages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string("pageName")->nullable();
			$table->string("pageHeading")->nullable();
 			$table->tinyInteger('layoutType')->nullable();
 			$table->text("description");
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
		//
		Schema::drop('SitePages');

	}

}
