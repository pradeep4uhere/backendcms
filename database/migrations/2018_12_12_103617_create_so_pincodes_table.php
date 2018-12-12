<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoPincodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pincodes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('locality', 225)->nullable();
			$table->string('political', 225);
			$table->string('administrative_area_level_2', 225);
			$table->string('administrative_area_level_1', 225);
			$table->string('country', 225);
			$table->string('formatted_address', 225);
			$table->char('country_code', 2)->nullable();
			$table->integer('postal_code');
			$table->string('place_name', 180)->nullable();
			$table->string('state', 100);
			$table->string('admin_code1', 20);
			$table->string('county_province', 180);
			$table->string('county_province_code', 20)->nullable();
			$table->string('community', 100)->nullable();
			$table->string('community_code', 20)->nullable();
			$table->string('latitude', 100);
			$table->string('longitude', 100);
			$table->integer('accuracy')->nullable();
			$table->boolean('status')->default(1);
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
		Schema::drop('so_pincodes');
	}

}
