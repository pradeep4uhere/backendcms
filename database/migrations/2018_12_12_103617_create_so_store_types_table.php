<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoStoreTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('store_types', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 100);
			$table->text('descriptions', 65535);
			$table->boolean('status')->default(1);
			$table->string('image', 225);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('so_store_types');
	}

}
