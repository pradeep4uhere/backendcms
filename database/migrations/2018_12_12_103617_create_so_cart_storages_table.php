<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoCartStoragesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cart_storages', function(Blueprint $table)
		{
			$table->integer('cart_id', true);
			$table->string('id', 225);
			$table->bigInteger('user_id')->nullable();
			$table->text('cart_data');
			$table->bigInteger('seller_id');
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
		Schema::drop('so_cart_storages');
	}

}
