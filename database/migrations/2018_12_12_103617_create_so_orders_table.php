<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('orderID', 100)->nullable();
			$table->string('sessionId', 225)->unique('sessionId');
			$table->string('cookies_id', 225)->nullable();
			$table->bigInteger('user_id')->nullable();
			$table->string('seller_id', 100)->nullable();
			$table->integer('shipping_id')->nullable();
			$table->integer('pickup_id')->nullable();
			$table->float('totalAmount', 10);
			$table->string('payment_status')->default('Pending');
			$table->string('order_status')->default('Open');
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
		Schema::drop('so_orders');
	}

}
