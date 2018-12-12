<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoSellersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sellers', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->integer('store_type_id');
			$table->bigInteger('user_id')->index('user_id');
			$table->string('business_name', 100);
			$table->string('address_1', 225);
			$table->string('address_2', 225)->nullable();
			$table->integer('country_id')->nullable();
			$table->integer('state_id')->nullable();
			$table->integer('city_id')->nullable();
			$table->integer('pincode_id')->nullable();
			$table->string('contact_number', 10);
			$table->string('email_address', 100);
			$table->boolean('status')->default(1);
			$table->string('image_thumb', 225)->nullable();
			$table->string('image_logo', 225)->nullable();
			$table->boolean('is_deleted')->default(0);
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
		Schema::drop('so_sellers');
	}

}
