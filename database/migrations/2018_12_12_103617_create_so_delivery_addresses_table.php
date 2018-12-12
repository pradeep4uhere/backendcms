<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoDeliveryAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('delivery_addresses', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_type');
			$table->bigInteger('user_id');
			$table->char('mobile', 10);
			$table->string('full_name', 100);
			$table->string('address_1', 225);
			$table->string('address_2', 225);
			$table->string('landmarks', 225);
			$table->integer('city_id');
			$table->integer('state_id');
			$table->integer('pincode');
			$table->string('country', 100)->default('India');
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
		Schema::drop('so_delivery_addresses');
	}

}
