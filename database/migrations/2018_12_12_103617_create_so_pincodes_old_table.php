<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoPincodesOldTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pincodes_old', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('postal_code');
			$table->string('locality', 225);
			$table->string('political', 225);
			$table->string('administrative_area_level_2', 225);
			$table->string('administrative_area_level_1', 225);
			$table->string('country', 225);
			$table->integer('status');
			$table->string('lat', 100);
			$table->string('lng');
			$table->string('formatted_address', 225);
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
		Schema::drop('so_pincodes_old');
	}

}
