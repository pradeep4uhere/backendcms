<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoOrderDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_details', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('order_track', 50);
			$table->bigInteger('order_id');
			$table->bigInteger('seller_id');
			$table->string('seller_name', 225)->nullable();
			$table->integer('brand_id')->nullable();
			$table->dateTime('order_date');
			$table->string('product_name', 225);
			$table->string('brand_name', 225);
			$table->bigInteger('user_product_id');
			$table->string('default_images', 225);
			$table->string('default_thumbnail', 225);
			$table->integer('quantity');
			$table->float('unit_price', 10);
			$table->float('shipping_amount', 6)->nullable();
			$table->float('gst_amount', 10)->nullable();
			$table->float('total_amount', 10);
			$table->string('order_status')->default('Order Recived');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('so_order_details');
	}

}
