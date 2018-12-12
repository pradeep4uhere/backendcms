<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoSaleUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sale_users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->bigInteger('user_id');
			$table->string('first_name', 50);
			$table->string('last_name', 100);
			$table->integer('location_id');
			$table->string('referer_code', 8);
			$table->integer('mobile');
			$table->string('email', 100);
			$table->string('address_1', 225);
			$table->string('address_2', 225)->nullable();
			$table->boolean('is_verified')->default(0);
			$table->boolean('status')->default(0);
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
		Schema::drop('so_sale_users');
	}

}
