<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoCartsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carts', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('session_id', 225)->unique('session_id');
			$table->string('cookies_id', 225)->nullable();
			$table->bigInteger('user_id')->nullable();
			$table->string('ip_address', 50);
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
		Schema::drop('so_carts');
	}

}
