<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeEditableTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('editablePages', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string("pageName")->nullable();
			$table->string("pageHeading")->nullable();
 			$table->text("description");
		 });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('editablePages');
	}

}
