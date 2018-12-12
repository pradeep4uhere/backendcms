<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('first_name')->nullable();
			$table->string('last_name', 225);
			$table->string('email');
			$table->string('password')->nullable();
			$table->string('remember_token', 100)->nullable();
			$table->bigInteger('mobile')->nullable();
			$table->string('address_1')->nullable();
			$table->string('address_2')->nullable();
			$table->string('address_3')->nullable();
			$table->string('pincode', 10)->nullable();
			$table->boolean('status')->default(0);
			$table->string('user_type')->default('1');
			$table->string('provider', 100)->nullable();
			$table->string('provider_id', 225)->nullable();
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
		Schema::drop('so_users');
	}

}
